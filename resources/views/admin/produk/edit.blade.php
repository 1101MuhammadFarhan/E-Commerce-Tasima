@extends('layouts.admin')

@section('content')


<div class="card">
    <div class="card-header">
        <h4>Edit Produk</h4>
    </div>
    <div class="card-body">
        <form action="{{ url('update-produk/'.$produk->id_produk) }} " method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-12 mb-3">
                    <label for="">Nama</label>
                    <input type="text" value="{{ $produk->nama_produk}}" class="form-control" name="nama_produk">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Harga</label>
                    <input type="text" value="{{ $produk->harga_produk}}" class="form-control" name="harga_produk">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Stok</label>
                    <input type="text" value="{{ $produk->stok_produk}}" class="form-control" name="stok_produk">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Foto</label>
                    <input type="file" class="form-control" name="foto_produk">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Proses Produksi</label>
                    <input type="text" value="{{ $produk->proses_produksi}}" class="form-control" name="proses_produksi">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Foto Proses produksi</label>
                    <input type="file" class="form-control" name="foto_proses_produksi">
                </div>
                <div class="col-md-12 mb-3">
                    <a href ="{{ url('produk') }}" class="btn btn-danger">Kembali</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>
@if($errors->any())
@foreach($errors->all() as $errors)
    <div class="alert alert-danger" role="alert">
        {{$errors}}
    </div>
@endforeach
@endif
@endsection
