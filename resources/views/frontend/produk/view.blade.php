@extends('layouts.front')
@section('content')
    <div class="container">
        <div class="card product_data">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ asset('assets/uploads/produk/' . $produk->foto_produk) }}" class="w-100"
                            alt="">
                    </div>
                    <div class="col-md-8">
                        <h2 class="mbb-0">
                            {{ $produk->nama_produk }}
                        </h2>

                        <hr>
                        <h6 class="me-5"> Harga Rp. {{ $produk->harga_produk }}</h6>
                        <h6 class="me-5 font-weight-bold"> Stok : {{ $produk->stok_produk }}</h6>
                        @if ($produk->stok_produk > 0)
                            <a class="badge bg-success">Stok Tersedia</a>
                        @else
                            <a class="badge bg-success">Stok Habis</a>
                        @endif
                        <div class="row mt-2">
                            <div class="col-md-3">
                                <input type="hidden" value="{{ $produk->id_produk }}" class="id_produk">
                                <label for="Quantity">Jumlah</label>
                                <div class="input-group text-center mb-3" style="width:130px">
                                    <button class="input-group-text decrement-btn">-</button>
                                    <input type="text" name="quantity" class="form-control qty-input text-center" value="1">
                                    <button class="input-group-text increment-btn">+</button>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <a class="font-weight-bold">
                                    <button type="button" class="btn btn-primary btn-lg addToCartBtn btn-block"> Tambah <i class="nc-icon nc-cart-simple"></i></button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div>
                    <hr>
                    <h2 class="text-center">Proses Produksi</h2>
                    <hr>
                    </div>

                    <label class="col-md-5 rounded mx-auto d-block">
                        {{ $produk->proses_produksi }}
                    </label>

                    <div class="col-md-5 rounded mx-auto d-block">
                        <img src="{{ asset('assets/uploads/ProsesProduksi/' . $produk->foto_proses_produksi) }}" class="w-100 mb-5"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
