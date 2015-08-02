<table style="border:none">
    <tr>
        <td style="text-align: left">
            GoTarot.com.hk<BR>
            Bright Tech Technology Limited<BR>
            Suite 2512, Langham Place<BR>
            8 Argyle Street, Mong Kok<BR>
            Hong Kong<BR>
            Telephone: 5614-5631
        </td>
        <td style="text-align: right">
            <h1>GoTarot.com.hk</h1>
        </td>
    </tr>
    <tr>
        <td>
            <table style="border:none">
                <tr>
                    <td style="text-align: left">
                        Username:<BR>
                        Email:<BR>
                        Phone:
                    </td>
                    <td style="text-align: left">
                        {{\Auth::user()->name or ''}}<BR>
                        {{\Auth::user()->email or ''}}<BR>
                        {{\Auth::user()->phone or ''}}
                    </td>
                </tr>
            </table>
        </td>
        <td>
            <table style="border:none">
                <tr>
                    <td style="text-align: left">
                        Invoice ID:<BR>
                        Issue Date:<BR>
                        <strong>Amount Due:</strong>
                    </td>
                    <td style="text-align: left">
                        {{$id}}<BR>
                        {{$date}}<BR>
                        {{$currency}} {{$amount}}<BR>
                        <BR>
                        <a href="{{url('/billing')}}">Click: Pay now!</a>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>

<table style="border:none">
    <thead>
        <tr style="background-color: lightgrey">
            <td style="text-align: center">
                Service by
            </td>
            <td style="text-align: center">
                Description
            </td>
            <td style="text-align: center">
                Service Start
            </td>
            <td style="text-align: center">
                Service End
            </td>
            <td style="text-align: center">
                Rate / min
            </td>
            <td style="text-align: center">
                Line total
            </td>
        </tr>
    </thead>
    <tbody>
        <tr style="background-color: lightgrey">
            <td style="text-align: center">
                {{$supplier}}
            </td>
            <td style="text-align: center">
                {{$theme}} Service
            </td>
            <td style="text-align: center">
                {{$start}}
            </td>
            <td style="text-align: center">
                {{$end}}
            </td>
            <td style="text-align: center">
                {{$rate}}
            </td>
            <td style="text-align: center">
                <strong>{{$amount}}</strong>
            </td>
        </tr>
        <tr>
            <td style="text-align: right">
                <strong>Amount due {{$currency}} {{$amount}}</strong>
            </td>
        </tr>
        <tr>
            <td style="text-align: center">
                <a href="{{url('/billing')}}">Click: Pay now!</a>
            </td>
        </tr>
        <tr>
            <td>
                <h4>Terms</h4>
                We reserve the right to charge 10% administration fee for late payments. Please refer to terms and conditions for further details on late payments.<BR>
                <BR>
                <h4>Pay via bank transer (HSBC)</h4>
                Account: HSBC Hong Kong, Account: 848-431979-838, Holder: Bright Tech Technology Ltd<BR>
                Please send the transfer slip (or a photo thereof) to support@{{$theme}}.com.hk<BR>
            </td>
        </tr>
    </tbody>
</table>