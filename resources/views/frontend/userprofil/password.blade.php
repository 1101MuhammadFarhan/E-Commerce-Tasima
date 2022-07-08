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
                        <h1>Edit Password Pengguna</h1>
                        <hr>
                        <form action="{{ route('password.edit') }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div>
                                    <label for="current_password">Password Lama</label>
                                    <div>
                                    <input class="border p-2 col-md-12" type="text" name="current_password" id="current_password" >
                                        @error('current_password')
                                            <div class="text-red-500 mt-2 text-sm">{{$message}}</div>
                                        @enderror
                                </div>
                                </div>
                            </div>
                            <div class="row">
                                <div>
                                    <label for="new_password">Password Baru</label>
                                    <div>
                                    <input class="border p-2 col-md-12"  type="text" name="new_password" id="new_password" >
                                        @error('new_password')
                                        <div class="text-red-500 mt-2 text-sm">{{$message}}</div>
                                        @enderror
                                </div>
                                </div>
                            </div>

                        <div class="row">
                            <div>
                                <label for="password_confirmation">Konfrimasi Password</label>
                                <div>
                                <input class="border p-2 col-md-12"  type="text" name="password_confirmation" id="password_confirmation" >
                                @error('password_confirmation')
                                    <div class="text-red-500 mt-2 text-sm">{{$message}}</div>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <button  class="btn btn-primary">Simpan</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
