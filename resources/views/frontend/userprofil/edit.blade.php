@extends('layouts.front')

@section('title')
    Profil
@endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h1>Edit Detail Pengguna</h1>
                        <hr>
                        <form action="{{ route('profile.update') }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div>
                                    <label for="name">Nama </label>
                                    <div>
                                    <input class="border p-2 col-md-12" value="{{ old('name', Auth::user()->name) }}" type="text" name="name" id="name" >
                                </div>
                                </div>
                            </div>
                            <div class="row">
                                <div>
                                    <label for="email">Email </label>
                                    <div>
                                    <input class="border p-2 col-md-12" value="{{ old('email', Auth::user()->email) }}"  type="text" name="email" id="email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div>
                                    <label for="no_telepon">No. Telp </label>
                                    <div>
                                    <input class="border p-2 col-md-12" value="{{ old('no_telepon', Auth::user()->no_telepon) }}"  type="text" name="no_telepon" id="no_telepon">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div>
                                    <label for="alamat">Alamat </label>
                                    <div>
                                    <input  class="border p-2 col-md-12" value="{{ old('alamat', Auth::user()->alamat) }}" type="text" name="alamat" id="alamat">
                                    </div>
                                </div>
                            </div>

                        <a  class="btn btn-danger"  href="{{ url('user-ProfilUser') }}">Kembali</a>
                        <button  class="btn btn-primary">Simpan</button>
                    </form>
                    </div>
                </div>
            </div>
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
