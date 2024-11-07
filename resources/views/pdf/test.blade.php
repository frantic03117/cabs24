<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>details</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">

    <style>
        /** Define the margins of your page **/
        @page {
            margin: 120px 25px;
        }

        header {
            position: fixed;
            top: -74px;
            left: 0px;
            right: 0px;
            border: 1px solid gray;
            border-bottom: 0;
            padding: 0 20px;
        }

        header table {
            border-bottom: 0;
        }

        footer {
            position: fixed;
            bottom: -113px;
            left: 0px;
            right: 0px;

        }

        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 300;
            src: url("{{ public_path('fonts/OpenSans-VariableFont_wdth,wght.ttf') }}") format('truetype');
        }

        p,
        h1,
        h2,
        h3,
        h4,
        h5,
        span,
        figure,
        img {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: "Open Sans", sans-serif !important;
        }

        .page-break {
            page-break-after: always;
        }

        img {
            width: 100%;
        }

        table {
            width: 100%;

        }

        .table {
            border-color: gray;
            border-collapse: collapse;
            margin-bottom: 1rem;
        }

        table tr td,
        table tr th {
            padding: 0 3px;

        }

        .tableborder tr td {
            border: 2px solid #ccc;
        }

        table tr th {
            text-align: left;
        }

        .imagetable tr td {
            padding-bottom: 5px;
        }

        table tr td label {
            font-weight: 400;
            color: #000;
            font-size: 12px;
            display: inline-block;

            margin: 0;


            /*border-top:1px solid #393838;*/

        }

        table.detailstable tr td label {
            margin-left: 15px;
            padding-left: 15px;
            position: relative;
            top: -5px;
        }

        table.detailstable tr td small {
            width: calc(100% - 30px);
            display: inline-block;
            font-size: 12px;
            line-height: 0.8;
            margin: 0;
            padding: 0;
            font-weight: 600;
            color: #032858;
        }


        table.detailstable tr td p {
            font-size: 12px;
            padding-bottom: 4px;
            text-wrap: wrap;
            margin: 0;
            padding: 0;
            font-weight: 600;
            color: #032858;
        }

        #extraInfoTable tr td p {
            color: #032858;
            font-weight: 600;
        }

        #extraInfoTable tr td label {
            color: #000;
        }

        #extraInfoTable {
            border: 2px solid #ccc;
            border-radius: 5px;
            margin-bottom: 1rem;
        }

        #extraInfoTable table {
            margin: 0;
            padding: 0;
        }

        #extraInfoTable table tr td {
            border: 2px solid #ccc;
            border-right: none;

        }

        #extraInfoTable table tr:nth-child(1) td {
            border-top: none;

        }

        #extraInfoTable table tr:last-child td {
            border-bottom: none;

        }

        #extraInfoTable table tr td:nth-child(1) {
            border-left: none;

        }

        #extraInfoTable table tr:nth-child(1) td:nth-child(1) {
            border-top: none;
            border-left: none;
        }

        #ratingTableInfo {
            border: 2px solid #ccc;
            border-radius: 5px;
            overflow: hidden;
            margin-bottom: 1rem;
        }

        p {
            margin: 0 !important;
            font-size: 13px;
        }

        h5 {
            margin: 0 !important;
        }

        .standardrating span {
            font-size: 14px;
        }

        .imgbox {
            padding: 5px;
            border: 2px solid #ccc;
            border-radius: 5px;
            overflow: hidden;
            position: relative;
            height: 240px;
        }

        .imgbox .mainimg {
            width: 100%;
            height: 100%
        }



        .imgbox h4 {

            font-weight: 400;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin: 0;
            padding: 0;
            font-size: 10px;
            color: #000;
        }


        .notes p {
            color: grey;
        }

        .notes {
            padding: 10px;
        }

        .notes p span {
            color: black;
            font-weight: bold;
        }

        .iconimg {
            display: inline-block;
            width: 15px;
            position: relative;
            top: 5px;
            left: 0;
            margin-right: 10px;
        }

        .border-bottom-0 {
            border-bottom: 0;
        }

        .ratingtable tr td {
            padding: 3px;
        }

        .pagenum:before {
            content: counter(page);
        }

        .pagenumber {
            position: fixed;
            bottom: -10px;
            /* Adjust based on the header height */
            left: 10px;
            text-align: center;
        }

        .overallraing {
            width: 28px;
            height: 28px;
            text-align: center;
            line-height: 17px;
            font-size: 12px;
            display: inline-block;
            border-radius: 5px;
            position: relative;
            top: 5px;
        }

        .content {
            box-sizing: border-box;
        }

        .page-break {
            page-break-after: always;
        }

        .carlogo {
            position: relative;
            top: 6px;
        }

        #remarkTable {
            border: 2px solid #ccc;
            border-radius: 5px;
            overflow: hidden;
            margin-bottom: 1rem;
        }

        #remarkTable table {
            margin-bottom: 0;
        }

        #remarkTable table tr td:nth-child(1) {
            border-right: 2px solid #ccc;
        }

        #remarkTable textarea {
            border: none;
            width: 100%;
            min-height: 70px;
        }

        .watermark {
            background: transparent;
            position: relative;
            top: -24%;
            left: 5px;
            width: calc(100% - 10px);
            z-index: 999;
        }

        .watermark .datetime {
            font-size: 20px;
            width: calc(100% - 110px);
            display: inline-block;
        }

        .watermark .datetime p {
            margin: 0;
            padding: 0;
            font-size: 12px;
            line-height: 1;
            margin-top: 10px;
            position: relative;
            top: 10px;
            color: #fff;
        }

        .watermark .imagelogo {
            width: 100px;
            display: inline-block;
        }
    </style>
</head>

<body>
    <!-- Define header and footer blocks before your content -->
    <header>
        <table border="0" class="table">
            <tr>
                <td style="width:150px;">
                    <img class="carlogo" src="{{ url('public/images/logo.png') }}" alt=""
                        style="width:100px;margin-top:5px;">
                </td>
                <td style="text-align: right;padding-top:7px;">
                    <h4 style="font-size:14px;margin: 0;padding: 0;">Vehicle Inspection Report</h4>
                    <p style="font-size:14px;margin: 0;padding: 0;">
                        Certificate No.: {{ $details['custom_inspection_id'] }}
                    </p>
                </td>
            </tr>
        </table>
    </header>

    <footer>
        <table border="1" class="table">
            <tr>
                <td style="width:25%">
                    <p style="font-size: 12px;">
                        Head Office
                    </p>
                </td>
                <td style="width:75%">
                    <h5>Car Expert</h5>
                    <p>
                        126, 1st Floor,D Mall Rohini,
                        Sector-10,Delhi- 110085,
                        Near Rohini West Metro Station
                    </p>
                    <p>
                        <strong> Customer Care No. </strong> 1800-208-9595 | <strong> Website </strong> :
                        www.carexpertindia.com
                    </p>
                    <p>

                </td>
            </tr>
        </table>
        <p>Date of Inspection {{ date('d-M-Y', strtotime($details['doi'])) }}</p>
        <!--<p>-->
        <!--    <span class="pagenum"></span>-->
        <!--</p>-->

    </footer>

    <!-- Wrap the content of your PDF inside a main tag -->
    <main>
        <div style="padding: 0;margin:0;border:1px solid gray;overflow:hidden;min-height:100%;">


            @php

                $ratingarr = [
                    '0' => [
                        'color' => '#a40000',
                        'text' => '#fff',
                    ],
                    '1' => [
                        'color' => '#f52504',
                        'text' => '#fff',
                    ],
                    '2' => [
                        'color' => '#f57504',
                        'text' => '#000',
                    ],
                    '3' => [
                        'color' => '#f59604',
                        'text' => '#fff',
                    ],
                    '4' => [
                        'color' => '#f5c904',
                        'text' => '#000',
                    ],
                    '5' => [
                        'color' => '#c9f504',
                        'text' => '#000',
                    ],
                    '6' => [
                        'color' => '#cefc8b',
                        'text' => '#000',
                    ],
                    '7' => [
                        'color' => '#b1f949',
                        'text' => '#000',
                    ],
                    '8' => [
                        'color' => '#70bc01',
                        'text' => '#fff',
                    ],
                    '9' => [
                        'color' => '#69ab09',
                        'text' => '#fff',
                    ],
                    '10' => [
                        'color' => '#467502',
                        'text' => '#fff',
                    ],
                ];
            @endphp


            <!--<table border="0">-->
            <!--    <tr>-->
            <!--        <td style="width:150px;">-->
            <!--            <img width="150" src="{{ url('public/images/logo.png') }}" alt=""-->
            <!--                style="max-width:100%;">-->
            <!--        </td>-->
            <!--        <td style="text-align: right;">-->
            <!--            <h4 style="font-size:14px;margin: 0;padding: 0;">Vehicle Inspection Report</h4>-->
            <!--            <p style="font-size:14px;margin: 0;padding: 0;">-->
            <!--                Certificate No.: {{ $details['custom_inspection_id'] }}-->
            <!--            </p>-->
            <!--        </td>-->
            <!--    </tr>-->
            <!--</table>-->




            <div class="content" style="padding-left:20px;width:100%;border-top:1px solid gray;">
                <table border="0" class="table">
                    <tr>
                        <td>
                            <h5 style="margin: 0;padding: 0;font-size:15px;">{{ $details['select_variant'] }}</h5>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 50%">
                            <div style="width:100%;position:relative;">
                                <div class="imgbox">
                                    <img class="mainimg"
                                        src="{{ 'https://cabs24.co.in:7456/' . $details['front_photo'] }}"
                                        style="height:100%;object-fit:cover;" alt="Default Image">
                                    <div class="watermark">
                                        <div class="datetime">
                                            <p>{{ $carimages[0]['created_at'] }}</p>
                                            <p>{{ $details['address'] }}</p>
                                        </div>
                                        <div class="imagelogo">
                                            <img class="carlogo" src="{{ url('public/images/logo.png') }}"
                                                alt="" style="width:100px;margin-top:5px;">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </td>

                        <td style="width: 50%;padding-left: 10px;">
                            <table border="0" class="detailstable" style="border-collapse: collapse;width:100%;">
                                <tr>
                                    <td style="width: 50%">
                                        <div><img src="{{ url('public/images/location.png') }}" class="iconimg" />
                                            <small> {{ $details['enter_rto_city'] }} </small>
                                        </div>
                                        <label for="">RTO City</label>
                                    </td>
                                    <td style="width: 50%">
                                        <p><img src="{{ url('public/images/plate.png') }}" class="iconimg" />
                                            {{ $details['registration_number'] }}</p>
                                        <label for="">Registration No</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 50%">
                                        <p> <img src="{{ url('public/images/calendar.png') }}" class="iconimg" />
                                            {{ $details['manufacture_year'] }}
                                        </p>
                                        <label for="">Manufacturing Year</label>
                                    </td>
                                    <td style="width: 50%">
                                        <p>
                                            <img src="{{ url('public/images/calendar.png') }}" class="iconimg" />
                                            {{ $details['date_of_registration'] }}
                                        </p>
                                        <label for="">Registration Date</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 50%">
                                        <p>
                                            <img src="{{ url('public/images/man.png') }}" class="iconimg" />
                                            {{ $details['enter_no_of_owners'] }}
                                        </p>
                                        <label for="">No of Owners</label>
                                    </td>
                                    <td style="width: 50%">
                                        <p>
                                            <img src="{{ url('public/images/odometer.png') }}" class="iconimg" />
                                            {{ $details['enter_odometer'] }}
                                        </p>
                                        <label for="">Odometer Reading </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 50%">
                                        <p>
                                            <img src="{{ url('public/images/fuel.png') }}" class="iconimg" />

                                            {{ $details['select_fuel_type'] }}
                                        </p>
                                        <label for="">Fuel Type</label>
                                    </td>
                                    <td style="width: 50%">
                                        <p>
                                            <img src="{{ url('public/images/fuel.png') }}" class="iconimg" />
                                            {{ $details['transmission_status'] }}
                                        </p>
                                        <label for="">Transmission</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 50%">
                                        <p>
                                            <img src="{{ url('public/images/color.png') }}" class="iconimg" />
                                            {{ $details['enter_vehicle_color'] }}
                                        </p>
                                        <label for="">Color</label>
                                    </td>
                                    <td style="width: 50%">
                                        <div style="text-wrap:wrap;">
                                            <img src="{{ url('public/images/car.png') }}" class="iconimg" />
                                            <small> {{ $details['select_body_type'] }} </small>
                                        </div>
                                        <label for="">Body Type</label>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                <div style="padding-right: 40px;">

                    <div id="extraInfoTable">

                        <table border="0" class="table">
                            <tbody>
                                <tr>
                                    <td>
                                        <p>{{ $details['engine_number_last_5'] }}</p>
                                        <label for="">Engine Number (last Five)</label>
                                    </td>
                                    <td>
                                        <p>{{ $details['chassis_number_last_5'] }}</p>
                                        <label for="">Chassis Number (Last Five)</label>
                                    </td>
                                    <td>
                                        <p>{{ $details['enter_owner_name'] }}</p>
                                        <label for="">Customer Name</label>
                                    </td>
                                    <td>
                                        <p>{{ $details['original_rc_available'] }}</p>
                                        <label for="">Original RC</label>
                                    </td>
                                </tr>
                                <tr>

                                    <td>
                                        <p>{{ $details['accidental_status'] }}</p>
                                        <label for="">Accidental Status</label>
                                    </td>
                                    <td>
                                        <p>
                                            {{ trim($details['accident_type']) }}
                                        </p>
                                        <label for="">Accidental Type</label>
                                    </td>
                                    <td>
                                        <p>{{ $details['select_brand'] }}</p>
                                        <label for="">Brand Name</label>
                                    </td>
                                    <td>
                                        <p>{{ $details['select_variant'] }}</p>
                                        <label for="">Variant</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>{{ $details['fitness_valid_till'] }}</p>
                                        <label for="">Fitness Expire Date</label>
                                    </td>
                                    <td>
                                        <p>{{ $details['tax_valid_till'] }}</p>
                                        <label for="">Tax Expire Date</label>
                                    </td>
                                    <td>
                                        <p>{{ $details['insurance_valid_till'] }}</p>
                                        <label for="">Insurance Expire Date</label>
                                    </td>
                                    <td>
                                        <p>{{ $details['permit_valid_till'] }}</p>
                                        <label for="">Permit Expire Date</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>{{ $details['puc_date'] }}</p>
                                        <label for="">PUCC Date</label>
                                    </td>
                                    <td>
                                        <p>{{ $details['hypothecation_status'] }}</p>
                                        <label for="">Hypothecation Status</label>
                                    </td>
                                    <td>
                                        <p>{{ $details['enter_financier'] }}</p>
                                        <label for="">Financier Name</label>
                                    </td>
                                    <td>
                                        <p>{{ $details['blacklist_status'] }}</p>
                                        <label for="">Blacklist Status</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <p>
                                            {{ $details['enter_blacklist_details'] }}
                                        </p>
                                        <label for="">Blacklist Details</label>
                                    </td>
                                    <td>
                                        <p>{{ $details['second_key_available'] }}</p>
                                        <label for="">Second Key</label>
                                    </td>

                                    <td>
                                        <p>
                                            {{ trim($details['refurbishing_cost']) }}
                                        </p>
                                        <label for="">Estimated Refurbished Cost</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="1">
                                        <p>{{ $details['executive_name'] }}</p>
                                        <label for="">Executive Name</label>
                                    </td>
                                    <td colspan="3">
                                        <p>{{ $details['address'] }}</p>
                                        <label for="">Location</label>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>


                    <div id="ratingTableInfo" style="margin-top:4px;">

                        @php
                            $totalrating = 0;
                            $counter = 0;
                            $items = array_values($rats);
                        @endphp
                        @for ($i = 0; $i < count($items); $i++)
                            @php
                                $ratg = ceil($items[$i]['form_value']);
                                $totalrating = $totalrating + $ratg;
                            @endphp
                        @endfor
                        <table border="0" class="table ratingtable">
                            <tr style="background:##f1f1f1;border-bottom:2px solid #8e8e8e;">
                                <td>
                                    <h5 style="font-size:14px;">Summary</h5>
                                </td>
                                <td>
                                    <div style="text-align:right;font-size:14px;">
                                        @php
                                            $int = ceil(($totalrating * 10) / 40);
                                            $obg = $ratingarr[$int];
                                            $b_g = $obg['color'];
                                        @endphp
                                        Overall Score : <span class="overallraing" style="background:<?= $b_g ?>">
                                            {{ ($totalrating * 10) / 40 }} </span>
                                    </div>
                                </td>
                            </tr>


                            @for ($i = 0; $i < count($items); $i += 2)
                                <tr>

                                    <td>
                                        @php
                                            $ratg = ceil($items[$i]['form_value']);
                                            $totalrating += $ratg;
                                        @endphp
                                        @include('pdf.ratingbox', [
                                            'title' => $items[$i]['key']['name'],
                                            'color' => $ratingarr[$ratg],
                                            'rating' => $ratg,
                                        ])



                                    </td>


                                    @if (isset($items[$i + 1]))
                                        <td>
                                            @php
                                                $ratg = ceil($items[$i + 1]['form_value']);
                                                $totalrating += $ratg;
                                            @endphp

                                            @include('pdf.ratingbox', [
                                                'title' => $items[$i + 1]['key']['name'],
                                                'color' => $ratingarr[$ratg],
                                                'rating' => $items[$i + 1]['form_value'],
                                            ])
                                        </td>
                                    @else
                                        <td></td>
                                    @endif
                                </tr>
                            @endfor
                        </table>
                        <table border="0" class="standardrating">
                            <tr>
                                <td style="width:25%">
                                    <span
                                        style="padding:4px 10px;background:#02a207;margin-right:5px;display:inline-block;"></span>
                                    <span>Excellent</span>
                                </td>
                                <td style="width:25%">
                                    <span
                                        style="padding:4px 10px;background:#b1fd02;margin-right:5px;display:inline-block;"></span>
                                    <span>Good</span>
                                </td>
                                <td style="width:25%">
                                    <span
                                        style="padding:4px 10px;background:#fd8b02;margin-right:5px;display:inline-block;"></span>
                                    <span>Average</span>
                                </td>
                                <td style="width:25%">
                                    <span
                                        style="padding:4px 10px;background:#fd0202;margin-right:5px;display:inline-block;"></span>
                                    <span>Poor</span>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div id="remarkTable">


                        <table border="0" class="table remarkTable">
                            <tbody>
                                <tr>
                                    <td style="width:25%;vertical-align:top;font-size:12px;">
                                        Remarks
                                    </td>
                                    <td style="width:75%">
                                        <p style="font-size:12px;text-transform:lowercase;">
                                            {{ $details['remark'] }}
                                        </p>

                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <table border="0" style="table-layout:fixed;"
                        class="table tablebordered imagetable border-bottom-0">
                        <tbody>
                            @foreach ($carimages as $index => $cimage)
                                @if ($cimage['image'])
                                    @if ($index % 2 == 0)
                                        <tr>
                                    @endif
                                    <td>

                                        <div class="imgbox">
                                            <img class="mainimg" style="width:100%;height:240px;object-fit:cover;"
                                                src="{{ 'https://cabs24.co.in:7456/' . $cimage['image'] }}"
                                                alt="{{ $cimage['name'] }}">
                                            <div class="watermark">
                                                <div class="datetime">
                                                    <p>{{ $cimage['created_at'] }}</p>
                                                    <p>{{ $details['address'] }}</p>
                                                </div>
                                                <div class="imagelogo">
                                                    <img class="carlogo" src="{{ url('public/images/logo.png') }}"
                                                        alt="" style="width:100px;margin-top:5px;">
                                                </div>
                                            </div>
                                            <h4 style="margin: 0;padding: 0;">{{ $cimage['name'] }}</h4>
                                        </div>

                                    </td>
                                    @if ($index % 2 == 1)
                                        </tr>
                                    @endif
                                @endif
                            @endforeach

                            @if (count($carimages) % 2 != 0)
                                </tr>
                            @endif
                        </tbody>
                    </table>

                </div>
            </div>


            <!--<table border="0" class="table tableborder">-->
            <!--    <tr>-->
            <!--        <td style="width:25%">-->
            <!--            Head Office-->
            <!--        </td>-->
            <!--        <td style="width:75%">-->
            <!--            <h5>Car Expert</h5>-->
            <!--            <p>-->
            <!--                126, 1st Floor,D Mall Rohini,-->
            <!--                Sector-10,Delhi- 110085,-->
            <!--                Near Rohini West Metro Station-->
            <!--            </p>-->
            <!--            <p>-->
            <!--                <strong> Customer Care No. </strong> 1800-208-9595 | <strong> Website </strong> :-->
            <!--                www.cabs24.co.in/-->
            <!--            </p>-->
            <!--            <p>-->
            <!--            <p>Date of Inspection {{ date('d-M-Y', strtotime($details['doi'])) }}</p>-->
            <!--            </p>-->
            <!--        </td>-->
            <!--    </tr>-->
            <!--</table>-->







        </div>
    </main>
</body>

</html>
