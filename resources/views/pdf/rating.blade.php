<table border="0" style="border:1px solid #999999;">

    <tr>
        <th style="text-align: left;background:#ddd;width:50%;">
            <span>
                Summary
            </span>
        </th>
        <th style="text-align: right;background:#ddd;width:50%;">
            <span>
                Overall Score : 4/10
            </span>
        </th>
    </tr>
    <tr>
        <td style="width: 50%">
            <table border="0" style="border-collapse:collapse">
                <tr>
                    <td style="width:50%;">
                        Exterior Detail
                    </td>
                    <td style="width:50%;text-align:right;">
                        <span
                            style="display:inline-block;padding:5px;font-size:12px;background:<?= $xrating->color ?>;color:#fff;border-radius:4px;">{{ $xrating->rating }}/10</span>
                    </td>
                </tr>
            </table>
            @php
                $percent = ($xrating->rating * 100) / 10;
            @endphp
            <div style="width:100%;background:#000;height:5px;">
                <div style="width:<?= $percent ?>%;background:<?= $xrating->color ?>;height:100%;"></div>
            </div>
        </td>
        <td style="width: 50%">
            <table border="0" style="border-collapse: collapse">
                <tr>
                    <td style="width:50%;">
                        Interior Detail
                    </td>
                    <td style="width:50%;text-align:right;">
                        <span
                            style="display:inline-block;padding:5px;font-size:12px;background:<?= $irating->color ?>;color:#fff;border-radius:4px;">{{ $irating->rating }}/10</span>
                    </td>
                </tr>
            </table>
            @php
                $percent = ($irating->rating * 100) / 10;
            @endphp
            <div style="width:100%;background:#000;height:5px;">
                <div style="width:<?= $percent ?>%;background:<?= $irating->color ?>;height:100%;"></div>
            </div>
        </td>
    </tr>
    <tr>
        <td style="width: 50%">
            <table border="0" style="border-collapse: collapse">
                <tr>
                    <td style="width:50%;">
                        Tyre Detail
                    </td>
                    <td style="width:50%;text-align:right;">
                        <span
                            style="display:inline-block;padding:5px;font-size:12px;background:<?= $tyrerating->color ?>;color:#fff;border-radius:4px;">{{ $tyrerating->rating }}/10</span>
                    </td>
                </tr>
            </table>
            @php
                $percent = ($tyrerating->rating * 100) / 10;
            @endphp
            <div style="width:100%;background:#000;height:5px;">
                <div style="width:<?= $percent ?>%;background:<?= $tyrerating->color ?>;height:100%;"></div>
            </div>
        </td>
        <td style="width: 50%">
            <table border="0" style="border-collapse: collapse">
                <tr>
                    <td style="width:50%;">
                        Engine Detail
                    </td>
                    <td style="width:50%;text-align:right;">
                        <span
                            style="display:inline-block;padding:5px;font-size:12px;background:<?= $erating->color ?>;color:#fff;border-radius:4px;">{{ $erating->rating }}/10</span>
                    </td>
                </tr>
            </table>
            @php
                $percent = ($erating->rating * 100) / 10;
            @endphp
            <div style="width:100%;background:#000;height:5px;">
                <div style="width:<?= $percent ?>%;background:<?= $erating->color ?>;height:100%;"></div>
            </div>
        </td>
    </tr>


</table>
