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
                        {{$invoiceId}}<BR>
                        {{$invoiceDate}}<BR>
                        {{$invoiceAmount}}<BR>
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
                # of min
            </td>
            <td style="text-align: center">
                Line total
            </td>
        </tr>
    </thead>
    <tbody>
        <tr style="background-color: lightgrey">
            <td style="text-align: center">
                aaa
            </td>
            <td style="text-align: center">
                aaa
            </td>
            <td style="text-align: center">
                aaa
            </td>
            <td style="text-align: center">
                aaa
            </td>
            <td style="text-align: center">
                aaa
            </td>
            <td style="text-align: center">
                aaa
            </td>
            <td style="text-align: center">
                aaa
            </td>
        </tr>
    </tbody>
</table>