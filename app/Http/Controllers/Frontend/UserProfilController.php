<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserProfilController extends Controller
{
    public function index()
    {
        return view('frontend.userprofil.index');
    }
    public function edit()
    {
        return view('frontend.userprofil.edit');
    }

    public function update(Request $request)
    {
        $attr = $request->validate([

            'name'=>['string', 'min:3','max:191','required'],
            'email'=>['email', 'string', 'min:3','max:191','required'],
            'no_telepon'=>['numeric', 'min:3','required'],
            'alamat'=>['string', 'min:3','max:191','required'],

        ]);

        auth()->user()->update($attr);

        return redirect('/user-ProfilUser')->with('message',"Edit Profil Berhasil");

    }
}
