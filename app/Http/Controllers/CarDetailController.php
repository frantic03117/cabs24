<?php

namespace App\Http\Controllers;

use App\Models\CarBody;
use App\Models\CarCondition;
use App\Models\CarDetail;
use App\Models\CarImage;
use App\Models\CarModel;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;
use QuickChart;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Spatie\ImageOptimizer\OptimizerChainFactory;
use Illuminate\Support\Facades\Http;


class CarDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'success' => "1",
            'errors' => [],
            'message' => 'Car Details working'
        ]);
    }
    public function models()
    {
        $items = CarModel::all();
        return response()->json([
            'data' => $items,
            'success' => "1"
        ]);
    }
    public function colors()
    {
        $items = DB::table('car_colors')->get();
        return response()->json([
            'data' => $items,
            'success' => "1"
        ]);
    }
    public function fules()
    {
        $items = DB::table('car_fules')->get();
        return response()->json([
            'data' => $items,
            'success' => "1"
        ]);
    }
    public function bodytypes()
    {
        $items = CarBody::all();
        return response()->json([
            'data' => $items,
            'success' => "1"
        ]);
    }
    public function generate_pdf($id)
    {
       
        $items = Http::withOptions([
            'verify' => false,
        ])->get('https://cabs24.co.in:7456/api/v1/form/inspections/details/'.$id);
        $data = $items->json();
        // return response()->json($data);
        // die;
        $oimages = Http::withOptions([
            'verify' => false,
        ])->get('https://cabs24.co.in:7456/api/v1/form/inspections/other-images/?id='.$id);
        $other_imgs  = $oimages->json();
        // echo json_encode($other_imgs);
        // die;
        $dets = [];
        $details = [];
        $carimages = [];
        foreach ($data['data']['inspections'] as $k => $val) {

            if ($val['key']['type'] == "image" && $val['key']['field'] != "rc_image" ) {
                $irr = [
                    'image' => $val['string_value'],
                    'name' => $val['key']['name'],
                   'created_at' => Carbon::parse($val['createdAt'])
                           ->addHours(5)
                           ->addMinutes(30)
                           ->format('M-d, Y h:i A')
                ];
                array_push($carimages, $irr);
            }
        }
        foreach($other_imgs['data'] as $k => $val ){
        
             $irr = [
                    'image' => $val['image'],
                    'name' => 'Other Image',
                    'created_at' => Carbon::parse($val['createdAt'])
                           ->addHours(5)
                           ->addMinutes(30)
                           ->format('M-d, Y h:i A')
                ];
              array_push($carimages, $irr);
        }

        $collection = collect($data['data']['inspections']);
        // return response()->json($carimages);
        // die;
        foreach ($collection as $col) {
            $key = $col['key']['field'];
            $item = $collection->firstWhere('key.field', $key);
            $details[$key] = $item['string_value'];
        }
        $rats = $collection->where('key.type', 'rating')->toArray();
        
      

       
    
        // return response()->json($rats);
        // die;



        $details['inspection_id'] = $data['data']['inspection_id'];
        $details['custom_inspection_id'] = $data['data']['custom_inspection_id'];
        $details['executive_name'] = $data['data']['user']['name'];
        $details['address'] = $data['data']['location']['address'];
        $details['registration_number'] = $data['data']['registration_number'];
        $details['doi'] = $data['data']['createdAt'];
        $res = compact('details', 'carimages', 'rats');
    //   return response()->json($res);
    //     die;
        // return view('pdf.car-details', $res);
        // die;
        $context = stream_context_create([
            'ssl' => [
                'verify_peer' => false,
                'verify_peer_name' => false,
            ]
        ]);

       $pdf = PDF::setOptions([
        'isRemoteEnabled' => true,
        'isHtml5ParserEnabled' => true,
        'tempDir' => storage_path('app')
    ])
    ->loadView('pdf.test', $res)
    ->setPaper('a4');

    // Apply context before rendering
    $pdf->getDomPDF()->setHttpContext($context);
    $domPdf = $pdf->getDomPDF();
    $domPdf->set_option('isPhpEnabled', true);
    $domPdf->render(); // Render PDF first

    $canvas = $domPdf->get_canvas();
    $canvas->page_text(
        $canvas->get_width() - 80, // Centered horizontally
        $canvas->get_height() - 30, // 30 pixels from the bottom
        "Page {PAGE_NUM} of {PAGE_COUNT}",
        null, // Font (null for default)
        10, // Font size
        [0, 0, 0], // Color
        1 // Center alignment
    );

    return $pdf->stream($details['registration_number'] . '.pdf');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function upload_images(Request $request)
    {

        foreach ($request->files as $label => $file) {
            if ($file) {
                $extension = $file->getClientOriginalExtension();
                $imageName = $label . '_' . time() . '.' . $extension;
                $file->move(public_path('images'), $imageName);

                $formattedLabel = ucwords(str_replace('_', ' ', $label));
                $formattedLabel = str_replace(' ', '', $formattedLabel);
                $idata = [
                    'car_id' => '1000',
                    'image_name' => $formattedLabel,
                    'image' => $imageName,
                ];

                CarImage::insert($idata);
            }
        }
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    private function cleanDateString($dateString)
    {
        // Remove the timezone abbreviation part from the string
        $cleanedDateString = preg_replace('/\s*\(.*\)$/', '', $dateString);
        return $cleanedDateString;
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'executive_name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'name' => 'required|string|max:255',

            'registration_no' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'manufacturing_year' => 'required|integer',
            'body_type' => 'required|string|max:255',
            'registration_on' => 'required|date',
            'transmission' => 'required|string|max:255',
            'no_of_owners' => 'required|integer',
            'hypothecation' => 'nullable|string|max:255',
            'fitness_to' => 'required|date',
            'second_key' => 'nullable|string|max:255',
            'original_rc' => 'nullable|string|max:255',
            'engine_no' => 'required|string|max:255',
            'chesis_no' => 'required|string|max:255',

            'rto_city' => 'required|string|max:255',
            'vehicle_color' => 'required|string|max:255',
            'odometer' => 'required|string|max:255',
            'fuel' => 'required|string|max:255',
            'accident' => 'nullable|string|max:255',
            'refurbishing_cost' => 'nullable|numeric',
            'expected_price' => 'required|numeric',

            'files.*' => 'nullable|file|image|mimes:jpeg,png,jpg,gif|max:2048',
            'engine' => 'required|integer|between:1,10',
            'tyre' => 'required|integer|between:1,10',
            'interior' => 'required|integer|between:1,10',
            'exterior' => 'required|integer|between:1,10',
            'overall' => 'required|integer|between:1,10',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'success' => 0,
                'errors' => $validator->errors(),
                'message' => $validator->errors()->first()
            ], 200);
        }
        $data = [
            'executive_name' => $request->executive_name,
            'address' => $request->address,
            'name' => $request->name,
            'email' => $request->email,
            'registration_no' => (string)$request->registration_no,
            'model' => (string)$request->model,
            'manufacturing_year' => $request->manufacturing_year,
            'body_type' => (string)$request->body_type,
            'registration_on' => Carbon::parse($this->cleanDateString($request->registration_on)),
            'transmission' => (string)$request->transmission,
            'no_of_owners' =>  (int)$request->no_of_owners,
            'hypothecation' => $request->hypothecation,
            'fitness_to' => Carbon::parse($this->cleanDateString($request->fitness_to)),
            'second_key' => $request->second_key,
            'original_rc' => $request->original_rc,
            'engine_no' => $request->engine_no,
            'chesis_no' => $request->chesis_no,
            'tax_valid_to' => Carbon::parse($this->cleanDateString($request->tax_valid_to)),
            'permit_valid_to' => Carbon::parse($this->cleanDateString($request->permit_valid_to)),
            'insurance_valid_to' =>  Carbon::parse($this->cleanDateString($request->insurance_valid_to)),
            'rto_city' => $request->rto_city,
            'vehicle_color' => $request->vehicle_color,
            'odometer' => (string)$request->odometer,
            'fuel' => $request->fuel,
            'accident' => $request->accident,
            'refurbishing_cost' => $request->refurbishing_cost,
            'expected_price' => $request->expected_price,
            'remark' => (string)$request->remark,
            'created_at' => date('Y-m-d H:i:s')
        ];
        $cid = CarDetail::insertGetId($data);
        $optimizerChain = OptimizerChainFactory::create();
        foreach ($request->files as $label => $file) {
            if ($file) {
                $extension = $file->getClientOriginalExtension();
                $imageName = $label . '_' . time() . '.' . $extension;
                $file->move(public_path('images'), $imageName);
                $filePath = public_path('images') . '/' . $imageName;
                $formattedLabel = ucwords(str_replace('_', ' ', $label));
                $optimizerChain->optimize($filePath);
                $idata = [
                    'car_id' => $cid,
                    'image_name' => $formattedLabel,
                    'image' => $imageName,
                ];

                CarImage::insert($idata);
            }
        }
        $carr = ['engine', 'tyre', 'interior', 'exterior', 'overall'];
        foreach ($carr as $r) {
            $val = $request->$r;
            $rdata = [
                'car_id' => $cid,
                'condition_type' => $r,
                'rating' => $val
            ];
            CarCondition::insert($rdata);
        }

        //return $pdf->download('car-details.pdf');
        return response()->json([
            'data' => $cid,
            'success' => 1,
            'errors' => [],
            'message' => 'Form Submitted successfully'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(CarDetail $carDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CarDetail $carDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CarDetail $carDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CarDetail $carDetail)
    {
        //
    }
}