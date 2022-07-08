<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class UpdatePasswordController extends Controller
{
    public function edit()
    {
        return view('frontend.userprofil.password');
    }
    public function update(Request $request)
    {
        $request->validate([
            'current_password'=> ['required'],
            'password'=>  ['required', 'min:8', 'confirmed'],

        ]);

        if(Hash::check($request->current_password, auth()->user()->password)) {
            auth()->user()->update(['password'=> Hash::make($request->password)]);
            return back()->with('message', 'Password telah diperbarui');
        }
        throw ValidationException::withMessages([
            'current_password'=> 'Password lama salah'
        ]);
    }
}
