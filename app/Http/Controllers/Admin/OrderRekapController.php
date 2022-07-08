<?php

namespace App\Http\Controllers\Admin;

use DB;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class OrderRekapController extends Controller
{
    public function index()
    {
        $orders = Order::where('status','Belum Dikonfirmasi')->OrderBy('created_at','desc')->get();
        return view('admin.orders.index', compact('orders'));
    }

    public function view($id)
    {
        $orders = Order::where('id', $id)->first();
        return view('admin.orders.view', compact('orders'));
    }
    public function updateorder(Request $request, $id)
    {
        $orders = Order::find($id);
        $orders->status = $request->input('order_status');
        $orders->update();
        return redirect('orders')->with('message','Status pemesanan berhasil diupdate');

    }

    public function rekap()
    {
        $total_harga_bulanan = Order::where('status','Sampai ke Pembeli')->select(DB::raw("CAST(SUM(total_harga) as int) as total_harga_bulanan"))->OrderBy('created_at','asc')->GroupBy(DB::raw("Month(created_at)"))->pluck('total_harga_bulanan');

        $bulan = Order::select(DB::raw("MONTHNAME(created_at) as bulan"))->OrderBy('created_at','asc')->GroupBy(DB::raw("MONTHNAME(created_at)"))->pluck('bulan');

        $orders = Order::where('status','Sampai ke Pembeli')->get();
        return view('admin.rekap.index', compact('orders','total_harga_bulanan','bulan'));

    }

    public function produksi()
    {
        $orders = Order::where('status','Proses Produksi')->OrderBy('created_at','desc')->get();
        return view('admin.orders.produksi', compact('orders'));
    }

    public function pengiriman()
    {
        $orders = Order::where('status','Proses Pengiriman')->OrderBy('created_at','desc')->get();
        return view('admin.orders.pengiriman', compact('orders'));
    }
    public function sampai()
    {
        $orders = Order::where('status','Sampai ke Pembeli')->OrderBy('created_at','desc')->get();
        return view('admin.orders.sampai', compact('orders'));
    }


}
