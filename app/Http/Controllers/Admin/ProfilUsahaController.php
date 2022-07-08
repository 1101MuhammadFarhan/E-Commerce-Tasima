<?php

namespace App\Http\Controllers\Admin;

use App\Models\ProfilUsaha;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
class ProfilUsahaController extends Controller
{
    public function index()
    {
        $ProfilUsaha = ProfilUsaha::all();
        return view('admin.ProfilUsaha.index', compact('ProfilUsaha'));
    }
    public function edit($idProfil_Usaha)
    {
        $ProfilUsaha = ProfilUsaha::find($idProfil_Usaha);
        return view('admin.ProfilUsaha.edit', compact('ProfilUsaha'));
    }

    public function update(Request $request, $idProfil_usaha)
    {
        $request->validate([

            'nama_usaha'=>['string', 'min:3','max:191','required'],
            'pemilik_usaha'=>[ 'string', 'min:3','max:191','required'],
            'noTelepon'=>['numeric', 'min:3','required'],
            'email'=>['string', 'min:3','max:191','required'],
            'alamat'=>['string', 'min:3','max:191','required'],
        ]);

        $ProfilUsaha = $request->all();

        $ProfilUsaha = ProfilUsaha::find($idProfil_usaha);
        if($request->hasFile('foto_profil'))
        {
            $path = 'assets/uploads/ProfilUsaha'.$ProfilUsaha->foto_profil;
            if(File::exists($path))
            {
                File::delete($path);
            }
            $file = $request->file('foto_profil');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/ProfilUsaha',$filename);
            $ProfilUsaha->foto_profil = $filename;
        }
        $ProfilUsaha->nama_usaha = $request->input('nama_usaha');
        $ProfilUsaha->pemilik_usaha = $request->input('pemilik_usaha');
        $ProfilUsaha->noTelepon = $request->input('noTelepon');
        $ProfilUsaha->email = $request->input('email');
        $ProfilUsaha->alamat = $request->input('alamat');
        $ProfilUsaha->update();
        return redirect('profil-usaha')->with('message',"Edit Profil Usaha Berhasil");
    }
    public function delete($idProfil_usaha)
    {
        $ProfilUsaha = ProfilUsaha::find($idProfil_usaha);
        $ProfilUsaha->delete();
        return redirect('ProfilUsaha')->with('message',"Profil Usaha telah dihapus");
    }
}
