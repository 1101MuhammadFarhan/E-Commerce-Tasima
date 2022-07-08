@extends('layouts.admin')
@section('content')

<div class="container">
    <div class="card">
        <div class="card-body">
            @if(session('message'))
            <div class="alert alert-success">{{session('message')}}</div>
            @endif
    <h2>Profil Usaha</h2>
    @foreach($ProfilUsaha as $item)
    <hr>
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
    <a class="font-weight-bold">
        <a href="{{ url('edit-profil-usaha/'.$item->idProfil_usaha) }}" class="btn btn-primary"> Edit
        </a>
    </a>
    @endforeach
</div>
</div>
</div>
@endsection
