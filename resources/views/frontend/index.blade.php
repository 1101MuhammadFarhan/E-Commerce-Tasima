@extends('layouts.front')

@section('title')
    TaSiMa
@endsection

@section('content')
<h1>Selamat datang di website TaSiMa {{(Auth::user()->name) }}!</h1>
@endsection
