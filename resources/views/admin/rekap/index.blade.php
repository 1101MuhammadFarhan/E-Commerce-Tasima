@extends('layouts.admin')

@section('title')
    Rekap
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-header">
                            <h1>Rekap Penjualan</h1>
                        </div>
                        <hr>
                        <div class="card-body">
                            <div id="grafik"></div>
                        </div>
                        <div class="card-body">
                            <div id="grafik_harian"></div>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered ">
                                <thead>
                                    <tr>
                                        <th>Tanggal Pemesanan</th>
                                        <th>Id pesanan</th>
                                        <th>Nama Pemesan</th>
                                        <th>Total Harga</th>
                                    </tr>
                                    <tbody>
                                        @foreach($orders as $item)
                                            <tr>
                                                <td>{{ date('d-m-Y', strtotime($item->created_at))}}</td>
                                                <td>{{ $item->tracking_no}}</td>
                                                <td>{{ $item->nama_pemesan}}</td>
                                                <td>Rp. {{ $item->total_harga}}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th></th><th></th>
                                            <th>
                                                <b><i>Total Penjualan </i></b>
                                            </th><th>Rp. {{$item->total_pembayaran()}}</th>
                                        </tr>
                                    </tfoot>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script type="text/javascript">
        var pendapatan = <?php echo json_encode($total_harga_bulanan)?>;
        var bulan = <?php echo json_encode($bulan)?>;
        Highcharts.chart('grafik', {
            title : {
                text: 'Grafik Penjualan Bulanan'
            },
            xAxis : {
                categories : bulan
            },
            yAxis : {
                title: {
                    text : 'Nominal Penjualan Bulanan'
                }
            },
            plotOption : {
                series : {
                    allowPointSelect: true
                }
            },
            series: [
            {
                name: 'Nominal Penjualan',
                data: pendapatan
            }
            ]
        });
    </script>
@endsection
