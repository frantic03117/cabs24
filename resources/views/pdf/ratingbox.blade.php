<table border="0" style="border-collapse: collapse">
     @php
                $percent = ($rating * 100) / 10;
                $bg = $color['color'];
            
                $text = $color['text'];
            @endphp
                <tr>
                    <td style="width:50%;font-size:12px;">
                        {{$title}}
                    </td>
                    <td style="width:50%;text-align:right;">
                        <span
                            style="display:inline-block;padding:5px;font-size:12px;background:<?=$bg?>;color:<?=$text?>;border-radius:4px;">{{$rating }}/10</span>
                    </td>
                </tr>
            </table>
           
            <div style="width:100%;background:#000;height:5px;border-radius:3rem;overflow:hidden;">
                <div style="width:<?= $percent ?>%;background:<?=$bg?>;height:100%;"></div>
            </div>