@extends('layouts.front')
@section('content')

<div class="card">
    <div class="card-body">
        <div class="card-header">
            <h1>Daftar pemesanan</h1>
        </div>
        <hr>
        <div class="card-body">
            <table class="table table-bordered ">
                <thead>
                    <tr>
                        <th>Tanggal Pemesanan</th>
                        <th>Id pesanan</th>
                        <th>Nama Pemesan</th>
                        <th>Total Harga</th>
                        <th>Status</th>
                    </tr>
                    <tbody>
                        @foreach($orders as $item)
                            <tr>
                                <td>{{ date('d-m-Y', strtotime($item->created_at))}}</td>
                                <td>{{ $item->tracking_no}}</td>
                                <td>{{ $item->nama_pemesan}}</td>
                                <td>{{ $item->total_harga }}</td>
                                <td>{{ $item->status}}</td>
                                <td>
                                    <a href="{{ url('view-order/'.$item->id) }}" class="btn btn-primary">view</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </thead>
            </table>
        </div>
    </div>
</div>

@endsection
