@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-body">
        <div class="card-header">
            <h1>Daftar Produk</h1>
        </div>
        <hr>
        <div class="card-body">
            @if(session('message'))
            <div class="alert alert-success">{{session('message')}}</div>
            @endif
            <table class="table table-bordered ">
                <thead>
                    <tr>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Foto</th>
                    </tr>
                    <tbody>
                        @foreach($produk as $item)
                            <tr>
                                <td>{{ $item->nama_produk }}</td>
                                <td>Rp. {{ $item->harga_produk }}</td>
                                <td>{{ $item->stok_produk }} pcs</td>
                                <td>
                                    <img src="{{ asset('assets/uploads/produk/'.$item->foto_produk) }}" class='w-25' alt="foto...">
                                </td>
                                <td>
                                    <a href="{{ url('edit-prod/'.$item->id_produk) }}" class="btn btn-primary mx-auto">Edit</a>
                                    <a href="/delete-produk/{{$item->id_produk}} " class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </thead>
            </table>
        </div>
        <a href ="{{ url('add-produk') }}" class="btn btn-primary">Tambah Produk</a>
    </div>
</div>

@endsection
