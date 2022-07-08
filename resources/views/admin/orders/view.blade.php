@extends('layouts.admin')

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
                            <hr>
                            <h6>Bukti Pembayaran</h6>
                            <div class="col-md-5">

                                <img src="{{ asset('assets/uploads/BuktiPembayaran/'.$orders->bukti_pembayaran) }}" class='card-img-top' width="100px" alt="foto...">
                            </div>
                            <br>
                            <label for="">Status pemesanan:</label>
                            <form action="{{ url('update-order/'. $orders->id)}}" method="POST">
                                @csrf
                                @method('PUT')
                                <select class="form-select" name="order_status">
                                <option {{ $orders->status == 'Belum Dikonfirmasi' ? 'selected':''}} value="Belum Dikonfirmasi">Belum Dikonfirmasi</option>
                                <option {{ $orders->status == 'Proses Produksi' ? 'selected':''}} value="Proses Produksi">Proses Produksi</option>
                                <option {{ $orders->status == 'Proses Pengiriman' ? 'selected':''}} value="Proses Pengiriman">Proses Pengiriman</option>
                                <option {{ $orders->status == 'Sampai ke Pembeli' ? 'selected':''}} value="Sampai ke Pembeli">Sampai ke Pembeli</option>
                            </select>
                            <button type="submit" class="btn btn-primary float-end" href="{{ url('orders') }}"> Simpan </button>
                            <a class="btn btn-danger float-end" href="{{ url('orders') }}"> Kembali </a>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
