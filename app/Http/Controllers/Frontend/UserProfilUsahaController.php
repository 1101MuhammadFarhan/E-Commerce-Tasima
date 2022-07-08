<?php

namespace App\Http\Controllers\Frontend;

use App\Models\ProfilUsaha;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
class UserProfilUsahaController extends Controller
{
    public function index()
    {
        $ProfilUsaha = ProfilUsaha::all();
        return view('frontend.profilUsaha.index', compact('ProfilUsaha'));
    }
}
