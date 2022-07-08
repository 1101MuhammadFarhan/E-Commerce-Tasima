<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Produk;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
class UserProductController extends Controller
{
    public function index()
    {
        $produk = Produk::all();
        return view('frontend.produk.index', compact('produk'));
    }
    public function viewproduk($id_produk)
    {
        if(produk::where('id_produk',$id_produk)->exists())
        {
            $produk = produk::where('id_produk',$id_produk)->first();
            return view('frontend.produk.view', compact('produk'));
        }
    }
}
