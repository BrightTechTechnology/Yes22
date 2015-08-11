@include('theme.gotarot.partials.contentPageWrapperTop')

<div class="container-fluid">
    <h1>Your invoices</h1>
    <table class="table table-hover table-bordered" style="text-align: center">
        <thead style="font-weight:600;">
            <tr>
                <td>
                    Id
                </td>
                <td>
                    Issue date
                </td>
                <td>
                    Amount
                </td>
                <td>
                    Status
                </td>
                <td>
                    See details
                </td>
            </tr>
        </thead>
        <tbody>
            @foreach($invoices as $invoice)
                <tr>
                    <td>
                        {{$invoice->id}}
                    </td>
                    <td>
                        <?php
                            $date = new \DateTime($invoice->end);
                            echo $date->format('Y/m/d');
                        ?>
                    </td>
                    <td>
                        {{$invoice->currency}} {{number_format($invoice->amount/100, 2)}}
                    </td>
                    <td>
                        @if ($invoice->amount == $invoice->paid)
                            Paid
                        @else
                            Not (fully) paid
                        @endif
                    </td>
                    <td>
                        <a href="/service/invoice/show/{{$invoice->id}}" target="_blank" class="btn btn-info">View invoice</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@include('theme.gotarot.partials.contentPageWrapperBottom')