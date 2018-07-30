<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>{{ $invoice->name }}</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <style>
            h1,h2,h3,h4,p,span,div { font-family: DejaVu Sans; }
        </style>
    </head>
    <body>
        <div style="clear:both; position:relative;">
            <div style="position:absolute; left:0pt; width:250pt;">
                <img class="img-rounded" height="{{ $invoice->logo_height }}" src="{{ $invoice->logo }}">
            </div>
            <div style="margin-left:300pt;">

                @foreach ($invoice->items as $item)
                  <b> Tanggal Masuk : {{ $item->get('tgl_masuk')->format('d-m-y') }}</b><br>
                  <b> Tanggal Keluar: {{ $item->get('tgl_keluar')->format('d-m-y')}}</b>
                          @endforeach
                <br />
            </div>
        </div>
        <br />
        <h2>{{ $invoice->name }} {{ $invoice->number ? '' . $invoice->number : '' }}</h2>
        <div style="clear:both; position:relative;">
            <div style="position:absolute; left:0pt; width:250pt;">
                <h4>Dari</h4>
                <div class="panel panel-default">
                    <div class="panel-body">
                        {{ $invoice->business_details->get('name') }}<br />
                        {{ $invoice->business_details->get('alamat') }}<br/>
                        {{ $invoice->business_details->get('phone') }}<br/>
                        {{ $invoice->business_details->get('location') }}<br />
                        {{ $invoice->business_details->get('zip') }} {{ $invoice->business_details->get('city') }}
                    </div>
                </div>
            </div>
            <div style="margin-left: 300pt;">
                <h4>Data Pelanggan:</h4>
                <div class="panel panel-default">
                    <div class="panel-body">
                        {{-- {!! $invoice->customer_details->count() == 0 ? '<i>No customer details</i><br />' : '' !!} --}}
                       Nama Pelanggan :   {{ $invoice->customer_details->get('name') }}<br>
                        @foreach ($invoice->items as $item)
                        Alamat  : {{ $item->get('alamat') }}  <br>
                        No Telp : {{ $item->get('telp') }}
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <br><h4>Items:</h4>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Jenis Cucian</th>
                    <th>Harga</th>
                    <th>Berat</th>
                    <th>Total Bayar</th>
                    <th>Dibayar</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($invoice->items as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->get('jenis_cucian') }}</td>
                        <td>{{ $item->get('harga') }}</td>
                        <td>{{ $item->get('berat') }} kg</td>
                        <td>{{ $item->get('t_bayar') }}</td>
                        <td>{{ $item->get('bayar') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div style="clear:both; position:relative;">
            @if($invoice->notes)
                <div style="position:absolute; left:0pt; width:250pt;">
                    <h4>Catatan:</h4>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            {{ $invoice->notes }}
                        </div>
                    </div>
                </div>
            @endif
            <div style="margin-left: 300pt;">
                <h4>Sisa Bayar: {{ $item->get('sisa') }}</h4>
                <h4>Status:     {{ $item->get('status') }}</h4>
                <table class="table table-bordered">
                    <tbody>
                        {{-- <tr>
                            <td><b>Subtotal</b></td>
                            <td>{{ $invoice->subTotalPriceFormatted() }} {{ $invoice->formatCurrency()->symbol }}</td>
                        </tr>
                        <tr>
                            <td>
                                <b>
                                    Taxes {{ $invoice->tax_type == 'percentage' ? '(' . $invoice->tax . '%)' : '' }}
                                </b>
                            </td>
                            <td>{{ $invoice->taxPriceFormatted() }} {{ $invoice->formatCurrency()->symbol }}</td>
                        </tr>
                        <tr>
                            <td><b>TOTAL</b></td>
                            <td><b>{{ $invoice->totalPriceFormatted() }} {{ $invoice->formatCurrency()->symbol }}</b></td>
                        </tr> --}}
                    </tbody>
                </table>
            </div>
        </div>
        @if ($invoice->footnote)
            <br /><br />
            <div class="well">
                {{ $invoice->footnote }}
            </div>
        @endif
    </body>
</html>
