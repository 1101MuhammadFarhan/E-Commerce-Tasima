@extends('layouts.admin')

@section('content')
<a href ="{{ url('profil-usaha') }}" class="btn btn-primary">Kembali</a>
<div class="card">
    <div class="card-header">
        <h4>Tambah Profil Usaha</h4>
    </div>
    <div class="card-body">
        <form action="{{ url('insert-profil-usaha') }} " method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-12 mb-3">
                    <label for="">Nama Usaha</label>
                    <input type="text" class="form-control" name="nama_usaha">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Pemilik Usaha</label>
                    <input type="text" class="form-control" name="pemilik_usaha">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Nomor Telepon</label>
                    <input type="text" class="form-control" name="noTelepon">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Email</label>
                    <input type="text" class="form-control" name="email">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Alamat</label>
                    <input type="text" class="form-control" name="alamat">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Foto Usaha</label>
                    <input type="file" class="form-control" name="foto_profil">
                </div>
                <div class="col-md-12 mb-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
