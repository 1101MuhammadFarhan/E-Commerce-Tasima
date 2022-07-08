<?php

namespace App\Http\Controllers\Admin;

use App\Models\Produk;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
class ProductController extends Controller
{
    public function index()
    {
        $produk = Produk::all();
        return view('admin.produk.index', compact('produk'));
    }
    public function add()
    {
        return view ('admin.produk.add');
    }
    public function insert(Request $request)
    {
        $request->validate([

            'foto_produk'=>['required'],
            'foto_proses_produksi'=>[ 'required'],
            'nama_produk'=>['string', 'min:3','max:191','required'],
            'harga_produk'=>['numeric', 'min:3','required'],
            'stok_produk'=>['numeric','min:1','required'],
            'proses_produksi'=>['string', 'min:3','max:5000','required'],
        ]);

        $produk = $request->all();

        $produk = new Produk();

        if($request->hasFile('foto_produk'))
        {
            $file = $request->file('foto_produk');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/produk',$filename);
            $produk->foto_produk = $filename;
        }

        if($request->hasFile('foto_proses_produksi'))
        {
            $file = $request->file('foto_proses_produksi');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/ProsesProduksi',$filename);
            $produk->foto_proses_produksi = $filename;
        }
        $produk->nama_produk = $request->input('nama_produk');
        $produk->harga_produk = $request->input('harga_produk');
        $produk->stok_produk = $request->input('stok_produk');
        $produk->proses_produksi = $request->input('proses_produksi');
        $produk->save();

        return redirect('/produk')->with('message','Produk berhasil ditambahkan!');
    }
    public function edit($id_produk)
    {
        $produk = Produk::find($id_produk);
        return view('admin.produk.edit', compact('produk'));
    }

    public function update(Request $request, $id_produk)
    {
        $request->validate([

            'nama_produk'=>['string', 'min:3','max:191','required'],
            'harga_produk'=>['numeric', 'min:3','required'],
            'stok_produk'=>['numeric','min:0','required'],
            'proses_produksi'=>['string', 'min:3','max:5000','required'],
        ]);

        $produk = $request->all();
        $produk = Produk::find($id_produk);

        if($request->hasFile('foto_produk'))
        {
            $path = 'assets/uploads/produk'.$produk->foto_produk;
            if(File::exists($path))
            {
                File::delete($path);
            }
            $file = $request->file('foto_produk');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/produk',$filename);
            $produk->foto_produk = $filename;
        }

        if($request->hasFile('foto_proses_produksi'))
        {
            $path = 'assets/uploads/ProsesProduksi'.$produk->foto_proses_produksi;
            if(File::exists($path))
            {
                File::delete($path);
            }
            $file = $request->file('foto_proses_produksi');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/ProsesProduksi',$filename);
            $produk->foto_proses_produksi = $filename;
        }
        $produk->nama_produk = $request->input('nama_produk');
        $produk->harga_produk = $request->input('harga_produk');
        $produk->stok_produk = $request->input('stok_produk');
        $produk->proses_produksi = $request->input('proses_produksi');
        $produk->update();
        return redirect('produk')->with('message',"Edit Produk Berhasil");
    }
    public function delete($id_produk)
    {
        $produk = Produk::find($id_produk);
        $produk->delete();
        return redirect('produk')->with('message',"Produk berhasil dihapus");
    }
}
