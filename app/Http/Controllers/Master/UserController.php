<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('user.lupa-password');
    }

    public function changePassword(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'old_password' => 'required|min:8',
            'new_password' => 'required|min:8|same:conf_password',
            'conf_password' => 'required|min:8'
        ], [
            'required' => ':attribute harus diisi.',
            'min' => ':attribute minimal harus 8 karakter.',
            'same' => 'Password dan konfirmasi password harus sama.',
        ], [
            'email' => 'Email',
            'old_password' => 'Password lama',
            'new_password' => 'Password baru',
            'conf_password' => 'Konfirmasi password',
        ]);

        $data = User::where('email', $request->email)->first();

        if($data != null) {
            if(\Hash::check($request->old_password, $data->password)) {
                $data->password = \Hash::make($request->new_password);
                $data->save();

                return back()->withStatus('Berhasil merubah password.');
            }
            else {
                return back()->withError('Password lama tidak sesuai.');
            }
        }
        else {
            return back()->withError('Email tidak ditemukan.');
        }
    }
}
