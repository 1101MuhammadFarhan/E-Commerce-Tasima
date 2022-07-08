@extends('layouts.admin')

@section('title')
    Orders
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-header">
                            <h1>Daftar pemesanan</h1>
                        </div>
                        <hr>
                        <h6 class="mx-3">Filter Status Pemesanan :</h6>
                        <a href="{{ 'orders'}}" class="mx-3 btn btn-outline-primary">Belum dikonfirmasi</a>
                        <a href="{{ 'orders-produksi'}}" class="mx-3 btn btn-outline-primary">Sedang diproduksi</a>
                        <a href="{{ 'orders-pengiriman'}}" class="mx-3 btn btn-primary">Sedang dikirim</a>
                        <a href="{{ 'orders-sampai'}}" class="mx-3 btn btn-outline-primary">Sampai ke pembeli</a>
                        <div class="card-body">
                            <table class="table table-bordered ">
                                <thead>
                                    <tr>
                                        <th>Tanggal Pemesanan</th>
                                        <th>Id pesanan</th>
                                        <th>Nama Pemesan</th>
                                        <th>Total Harga</th>
                                        <th>Status Pemesanan
                                        </th>
                                    </tr>
                                    <tbody>
                                        @foreach($orders as $item)
                                            <tr>
                                                <td>{{ date('d-m-Y', strtotime($item->created_at))}}</td>
                                                <td>{{ $item->tracking_no}}</td>
                                                <td>{{ $item->nama_pemesan}}</td>
                                                <td>Rp. {{ $item->total_harga }}</td>
                                                <td>{{ $item->status}}</td>
                                                <td>
                                                    <a href="{{ url('admin/view-orders/'.$item->id) }}" class="btn btn-primary">view</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
