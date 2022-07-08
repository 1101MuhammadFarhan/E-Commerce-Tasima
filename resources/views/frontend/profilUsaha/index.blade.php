@extends('layouts.front')
@section('content')

<div class="container">

    <div class="card">
        <div class="card-header">
        <h1>Profil Usaha</h1>
        <hr>
        </div>

        <div class="card-body">
            @foreach($ProfilUsaha as $item)
            <td>
                <img src="{{ asset('assets/uploads/ProfilUsaha/'.$item->foto_profil) }}" class='rounded mx-auto d-block' alt="foto...">
            </td>
            <hr>
            <h5 class="font-weight-bold text-center">{{ $item->nama_usaha }}</h5>
            <hr>
            <h5>Nama Pemilik    : {{ $item->pemilik_usaha }}</h5>
            <hr>
            <h5>Nomor Telepon   : {{ $item->noTelepon }}</h5>
            <hr>
            <h5>Email           : {{ $item->email }}</h5>
            <hr>
            <h5>Alamat          : {{ $item->alamat }}</h5>
            @endforeach
        </div>
    </div>
</div>
@endsection
