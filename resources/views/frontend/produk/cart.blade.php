@extends('layouts.front')
@section('content')


<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
            <h1 >Keranjang</h1>
            <hr>
            @if ($cartitems->count() > 0)
            <div class="card-body">
                @php $total = 0; @endphp
                @foreach ($cartitems as $item)
                    <div class="row product_data">
                        <div class="col-md-2 my-auto">
                            <img src="{{ asset('assets/uploads/produk/'.$item->products->foto_produk)}}" w="100px" alt="image">
                        </div>
                        <div class="col-md-2 my-auto">
                            <h5>{{$item->products->nama_produk }}</h5>
                        </div>
                        <div class="col-md-2 my-auto">
                            <h5>Rp {{$item->products->harga_produk }}</h5>
                        </div>
                        <div class="col-md-3 my-auto">
                            <input type="hidden" class="id_produk" value="{{$item->id_produk}} ">
                            <label class="font-weight-bold" for="Quantity">Jumlah</label>
                            <div class="input-group text-center" style="width:130px">
                                <button class="input-group-text changeQuantity decrement-btn">-</button>
                                <input type="text" name="quantity" class="form-control qty-input text-center" value="{{$item->jumlah_produk}} ">
                                <button class="input-group-text changeQuantity increment-btn">+</button>
                            </div>
                        </div>
                        <div class="col-md-2 my-auto">
                            <h3 class="btn btn-danger delete-cart-item"><i class="nc-icon nc-basket"></i> Remove </h3>
                        </div>
                    </div>
                    <hr>
                    @php $total += $item->products->harga_produk * $item->jumlah_produk; @endphp
                @endforeach
                <h5 class="my-2">Total Harga : {{ $total }} </h5>
            </div>
        <div class="col-md-2">
            <a href="{{ url('checkout')}} " class="btn btn-primary justify-content-end"><i class="nc-icon nc-basket"></i> Checkout </a>
        </div>
        @else
        <div class="card-body" >
            <h2 class="my-3 mx-2">Keranjang <i class="nc-icon nc-basket"></i> anda kosong! </h2>
            <a href="{{ url('user-produk') }}" class="btn btn-primary mx-2">Lihat Produk</a>
        </div>
        @endif
        </div>
    </div>
    </div>
</div>

@endsection
