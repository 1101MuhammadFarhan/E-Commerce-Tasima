@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="card-header">
        <h4>Edit Profil Usaha</h4>
    </div>
    <div class="card-body">
        <form action="{{ url('update-profil-usaha/'.$ProfilUsaha->idProfil_usaha) }} " method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-12 mb-3">
                    <label for="">Nama Usaha</label>
                    <input type="text" value="{{ $ProfilUsaha->nama_usaha}}" class="form-control" name="nama_usaha">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Pemilik Usaha</label>
                    <input type="text" value="{{ $ProfilUsaha->pemilik_usaha}}" class="form-control" name="pemilik_usaha">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Nomor Telepon</label>
                    <input type="text" value="{{ $ProfilUsaha->noTelepon}}" class="form-control" name="noTelepon">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Email</label>
                    <input type="text" value="{{ $ProfilUsaha->email}}" class="form-control" name="email">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Alamat</label>
                    <input type="text" value="{{ $ProfilUsaha->alamat}}" class="form-control" name="alamat">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Foto Usaha</label>
                    <input type="file" class="form-control" name="foto_profil">
                </div>
                <div class="col-md-12 mb-3">
                    <a href ="{{ url('profil-usaha') }}" class="btn btn-danger">Kembali</a>
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
