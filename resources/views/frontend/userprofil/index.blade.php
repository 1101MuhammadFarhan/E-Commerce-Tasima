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
                        <h1>Detail Pengguna</h1>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="nama">Nama </label>
                                <div class="border p-2">{{Auth::user()->name}} </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="nama">Email </label>
                                <div class="border p-2">{{Auth::user()->email}} </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="nama">No. Telp </label>
                                <div class="border p-2">{{Auth::user()->no_telepon}} </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="nama">Alamat </label>
                                <div class="border p-2">{{Auth::user()->alamat}} </div>
                            </div>
                        </div>
                        <a href="{{ url('user-editProfilUser') }}" class="btn btn-primary">Edit Profil</a>

                    @if(session('message'))
                        <div class="alert alert-success">{{session('message')}}</div>
                    @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
