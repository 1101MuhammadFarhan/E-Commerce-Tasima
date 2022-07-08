@extends('layouts.front')

@section('title')
    Checkout
@endsection

@section('content')
    <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="card">
                        <div class="card-body">
                            <h6>Detail Pengguna</h6>
                            <hr>
                            <div class="row">
                                <div class="cold-md-6">
                                    <label for="nama">Nama </label>
                                    <div class="border p-2">{{$orders->nama_pemesan}} </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="cold-md-6">
                                    <label for="nama">Email </label>
                                    <div class="border p-2">{{$orders->email}} </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="cold-md-6">
                                    <label for="nama">No. Telp </label>
                                    <div class="border p-2">{{$orders->no_telepon}} </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="cold-md-6">
                                    <label for="nama">Alamat </label>
                                    <div class="border p-2">{{$orders->alamat}} </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-body">
                            <h6>
                                Detail Pemesanan
                            </h6>
                            <hr>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Jumlah</th>
                                        <th>Harga</th>
                                        <th>Gambar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders->orderitems as $item)
                                        <tr>
                                            <td>{{ $item->products->nama_produk}} </td>
                                            <td class="text-center">{{ $item->qty}} </td>
                                            <td>{{ $item->products->harga_produk}} </td>
                                            <td>
                                                <img src="{{ asset('assets/uploads/produk/'.$item->products->foto_produk) }} " width="50px" alt="">
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <h6>Total Harga : Rp. {{$orders->total_harga}}</h6>
                            <label>status : </label>
                            <span class="badge bg-secondary">{{ $orders->status}}  </span>
                            <a href="{{ url('my-orders') }}" type="submit" class="btn btn-primary float-end"> Kembali </a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
