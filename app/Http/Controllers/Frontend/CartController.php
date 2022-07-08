<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Produk;
use illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function addProduct(Request $request)
    {
        $id_produk = $request->input('id_produk');
        $jumlah_produk = $request->input('jumlah_produk');

        if(Auth::check())
        {
            $prod_check = Produk::where('id_produk',$id_produk)->first();

            if($prod_check)
            {
                if(Cart::where('id_produk',$id_produk)->where('user_id',Auth::id())->exists())
                {
                    return response()->json(['status' => $prod_check->name."Produk sudah ditambahkan ke keranjang"]);
                }
                else
                {
                    $cartItem = new Cart();
                    $cartItem->id_produk = $id_produk;
                    $cartItem->user_id = Auth::id();
                    $cartItem->jumlah_produk = $jumlah_produk;
                    $cartItem->save();
                    return response()->json(['status' => $prod_check->name."Produk berhasil ditambahkan ke kerangjang!"]);
                }
            }
        }
        else
        {
            return response()->json(['status'=> "login to continue"]);
        }
    }
    public function viewcart()
    {
        $cartitems = Cart::where('user_id', Auth::id())->get();
        return view('frontend.produk.cart', compact('cartitems'));
    }

    public function updatecart(Request $request)
    {
        $id_produk = $request->input('id_produk');
        $jumlah_prod = $request->input('jumlah_produk');

        if(Auth::check())
        {
            if(Cart::where('id_produk', $id_produk)->where('user_id',Auth::id())->exists());
            {
                $cart = Cart::where('id_produk', $id_produk)->where('user_id',Auth::id())->first();
                $cart->jumlah_produk = $jumlah_prod;
                $cart->update();
                return response()->json(['status'=> "Kuantitas berhasil diupdate!"]);
            }
        }
    }
    public function deleteProduk(Request $request)
    {
        if(Auth::check())
        {
            $id_produk = $request->input('id_produk');
            if(Cart::where('id_produk', $id_produk)->where('user_id',Auth::id())->exists());
            {
                $cartItem = Cart::where('id_produk', $id_produk)->where('user_id',Auth::id())->first();
                $cartItem->delete();
                return response()->json(['status'=> "Produk berhasil di hapus!"]);

            }
        }
        else
        {
            return response()->json(['status'=> "login to continue"]);
        }
    }
}
