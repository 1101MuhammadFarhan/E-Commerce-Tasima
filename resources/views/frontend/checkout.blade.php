@extends('layouts.front')

@section('title')
    Checkout
@endsection

@section('content')
    <div class="container">
        <form action="{{ url('place-order') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-7">
                    <div class="card">
                        <div class="card-body">
                            <h6>Detail Pengguna</h6>
                            <hr>
                            <div class="row">
                                <div class="cold-md-6">
                                    <label for="nama">Nama </label>
                                    <input type="text" name="nama_pemesan" class='form-control' placeholder='Nama'>
                                </div>
                            </div>
                            <div class="row">
                                <div class="cold-md-6">
                                    <label for="nama">Email </label>
                                    <input type="text" name="email" class='form-control' placeholder='Email'>
                                </div>
                            </div>
                            <div class="row">
                                <div class="cold-md-6">
                                    <label for="nama">No. Telp </label>
                                    <input type="text" name="no_telepon" class='form-control' placeholder='No. Telp'>
                                </div>
                            </div>
                            <div class="row">
                                <div class="cold-md-6">
                                    <label for="nama">Alamat </label>
                                    <input type="text" name="alamat" class='form-control' placeholder='Alamat'>
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
                                        <th class='text-center'>Jumlah</th>
                                        <th>Harga</th>
                                        <th>Gambar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $total = 0; @endphp
                                    @foreach ($cartitems as $item)
                                    <tr>
                                        <td>{{$item->products->nama_produk }}</td>
                                        <td class='text-center'>{{$item->jumlah_produk }}</td>
                                        <td>{{$item->products->harga_produk }}</td>
                                        <td>
                                            <img src="{{ asset('assets/uploads/produk/'.$item->products->foto_produk) }} " width="100px" alt="">
                                        </td>
                                    </tr>
                                    @php $total += $item->products->harga_produk * $item->jumlah_produk; @endphp
                                    @endforeach
                                </tbody>
                            </table>
                            <h6 class="my-2">Total Harga : Rp. {{ $total }} </h6>
                            <a>Bayar Rp. {{ $total }} ke rekening BCA 8735089324 dan upload Foto Bukti Pembayaran</a>
                            <div class="my-2 ">
                                <label for="">Foto Bukti Pembayaran</label>
                                <input type="file" class="form-control" name="bukti_pembayaran">
                            </div>
                            <button type="submit" class="btn btn-primary float-end">Checkout </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    @if($errors->any())
    @foreach($errors->all() as $errors)
        <div class="alert alert-danger" role="alert">
            {{$errors}}
        </div>
    @endforeach
    @endif
@endsection
