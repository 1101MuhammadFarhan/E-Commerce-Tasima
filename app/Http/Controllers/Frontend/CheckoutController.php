<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Cart;
use App\Models\User;
use App\Models\Order;
use App\Models\OrderItems;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index()
    {
        $cartitems = Cart::where('user_id', Auth::id())->get();
        return view('frontend.checkout', compact('cartitems'));
    }

    public function placeorder(Request $request)
    {

        $request->validate([

            'nama_pemesan'=>['string', 'min:3','max:191','required'],
            'email'=>[ 'string', 'min:3','max:191','required'],
            'no_telepon'=>['numeric', 'min:3','required'],
            'alamat'=>['string', 'min:3','max:191','required'],
            'bukti_pembayaran'=>['required'],
        ]);

        $order = $request->all();

        $order = new Order();
        $order->user_id = Auth::id();
        $order->nama_pemesan = $request->input('nama_pemesan');
        $order->email = $request->input('email');
        $order->no_telepon = $request->input('no_telepon');
        $order->alamat = $request->input('alamat');

        $total = 0;
        $cartitems_total = Cart::where('user_id', Auth::id())->get();
        foreach($cartitems_total as $prod)
        {
            $total += $prod->products->harga_produk * $prod->jumlah_produk;
        }

        $order->total_harga = $total;

        if($request->hasFile('bukti_pembayaran'))
        {
            $file = $request->file('bukti_pembayaran');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/BuktiPembayaran',$filename);
            $order->bukti_pembayaran = $filename;
        }

        $order->tracking_no = 'tasima'.rand(1111,9999);
        $order->save();

        $cartitems = Cart::where('user_id', Auth::id())->get();
        foreach($cartitems as $item)
        {
            OrderItems::create([
                'order_id'=> $order->id,
                'id_produk'=> $item->id_produk,
                'qty'=> $item->jumlah_produk,
                'total_harga'=>$item->products->harga_produk,
            ]);
        }


        if(Auth::user()->alamat == NULL)
        {
            $user = User::where('id', Auth::id())->first();
            $user->name = $request->input('nama_pemesan');
            $user->no_telepon = $request->input('no_telepon');
            $user->alamat = $request->input('alamat');
            $user->update();
        }

        $cartitems = Cart::where('user_id', Auth::id())->get();
        Cart::destroy($cartitems);

        return redirect('/my-orders')->with('status',"Order placed successfully");
    }

}
