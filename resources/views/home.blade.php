@extends('layouts.front')

@section('title')
    TaSiMa
@endsection

@section('content')
<div class=col-md-3>
    @foreach($produk as $item)
    <div class="card" >
        <img src="{{ asset('assets/uploads/produk/'.$item->foto_produk) }}" class='card-img-top' alt="foto...">
        <div class="card-body">
            <h5 class="card-title">{{ $item->nama_produk }}</h5>
            <hr>
            <p class="card-text">
                <strong>Harga</strong> : Rp. {{ $item->harga_produk }}</p>
            <p class="card-text">
                <strong>Stok</strong>  : {{ $item->stok_produk }} pcs</p>
            <a class="font-weight-bold">
            <button type="button" class="btn btn-primary btn-lg btn-block"> Tambah <i class="nc-icon nc-cart-simple"></i></button>
            </a>
        </div>
    </div>
    @endforeach
</div>
@endsection
