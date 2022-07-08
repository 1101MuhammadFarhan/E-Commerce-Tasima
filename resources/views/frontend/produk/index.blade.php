@extends('layouts.front')
@section('content')

<div class=col-md-3>
<div class="container">
    @foreach($produk as $item)
    <div class="card" >
        <a href="{{ url('user-produk/'.$item->id_produk) }}">
            <img src="{{ asset('assets/uploads/produk/'.$item->foto_produk) }}" class='card-img-top' alt="foto...">
            <div class="card-body">
                <h5 class="card-title">{{ $item->nama_produk }}</h5>
                <hr>
                <p class="card-text">
                    <strong>Harga</strong> : Rp. {{ $item->harga_produk }}</p>
                <p class="card-text">
                    <strong>Stok</strong>  : {{ $item->stok_produk }} pcs</p>
                <a class="font-weight-bold">
                    <a href="{{ url('user-produk/'.$item->id_produk) }}" type="button" class="btn btn-primary  btn-block"> Lihat </a>
                </a>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>


@endsection
