<table style="border:none; width:100%;">
    <tr>
        <td style="text-align: left; width:50%;">
            GoTarot.com.hk<BR>
            Bright Tech Technology Limited<BR>
            Suite 2512, Langham Place<BR>
            8 Argyle Street, Mong Kok<BR>
            Hong Kong<BR>
            Telephone: 5614-5631
        </td>
        <td style="text-align: left; width:50%; text-decoration: none;">
            <h2>GoTarot.com.hk</h2>
        </td>
    </tr>
</table>
<BR><BR>
<table style="border:none; width:100%;">
    <tr>
        <td style="width:50%;">
            <table style="border:none;">
                <tr>
                    <td style="text-align: left">
                        Username:
                    </td>
                    <td style="text-align: left">
                        {{\Auth::user()->name}}
                    </td>
                </tr>
                <tr>
                    <td style="text-align: left">
                        Email:<BR>
                    </td>
                    <td style="text-align: left">
                        {{\Auth::user()->email}}
                    </td>
                </tr>
                <tr>
                    <td style="text-align: left">
                        Phone:
                    </td>
                    <td style="text-align: left">
                        {{\Auth::user()->phone}}
                    </td>
                </tr>
            </table>
        </td>
        <td style="width:50%;">
            <table style="border:none">
                <tr>
                    <td style="text-align: left">
                        Invoice ID:
                    </td>
                    <td style="text-align: left">
                        56342{{$id}}
                    </td>
                </tr>
                <tr>
                    <td style="text-align: left">
                        Issue Date:
                    </td>
                    <td style="text-align: left">
                        {{$date}}
                    </td>
                </tr>
                <tr>
                    <td style="text-align: left">
                        <strong>Amount Due:</strong>
                    </td>
                    <td style="text-align: left">
                        <strong>{{$currency}} {{$amount}}</strong>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<BR><BR>
<table style="border:none; width: 80%;">
    <thead>
        <tr style="background-color: lightgrey">
            <td style="text-align: center">
                <strong>Service by</strong>
            </td>
            <td style="text-align: center">
                <strong>Description</strong>
            </td>
            <td style="text-align: center">
                <strong>Service Start</strong>
            </td>
            <td style="text-align: center">
                <strong>Service End</strong>
            </td>
            <td style="text-align: center">
                <strong>Rate / min</strong>
            </td>
            <td style="text-align: center">
                <strong>Line total</strong>
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
                {{$amount}}
            </td>
        </tr>
    </tbody>
</table>
<BR><BR>
<table style="border:none">
    <tr>
        <td style="text-align: right">
            <h2><strong>Amount due {{$currency}} {{$amount}}</strong></h2>
            <h1><a href="{{url('/billing')}}">Click: Pay now!</a></h1>
        </td>
    </tr>
</table>
<table style="border:none; width: 80%;">
    <tr>
        <td>
            <h4>Terms</h4>
            We reserve the right to charge 10% administration fee for late payments. Please refer to terms and conditions for further details on late payments.<BR>
            <BR>
            <h4>Pay via bank transer (HSBC)</h4>
            Account: HSBC Hong Kong, Account: 848-431979-838, Holder: Bright Tech Technology Ltd<BR>
            Please answer to this email and attach your transfer slip photo / scan.
        </td>
    </tr>
</table>