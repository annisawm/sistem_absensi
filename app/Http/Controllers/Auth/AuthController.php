<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{
    public function index()
    {
        if ($user = Auth::user()) {
            if ($user->level == 'super_admin') {
                return redirect()->intended('super_admin');
            } elseif ($user->level == 'admin') {
                return redirect()->intended('admin');
            } elseif ($user->level == 'operator') {
                return redirect()->intended('operator');
            } elseif ($user->level == 'pejabat_pj') {
                return redirect()->intended('pejabat_pj');
            } elseif ($user->level == 'pejabat') {
                return redirect()->intended('pejabat');
            }
            return view('login');
        }
    }

    public function proses_login(Request $request)
    {
        request()->validate(
            [
                'username' => 'required',
                'password' => 'required',
            ]
        );

        $kredensil = $request->only('username', 'password');

        if (Auth::attempt($kredensil)) {
            $user = Auth::user();
            if ($user->level == 'super_admin') {
                return redirect()->intended('super_admin');
            } elseif ($user->level == 'admin') {
                return redirect()->intended('admin');
            } elseif ($user->level == 'operator') {
                return redirect()->intended('operator');
            } elseif ($user->level == 'pejabat_pj') {
                return redirect()->intended('pejabat_pj');
            } elseif ($user->level == 'pejabat') {
                return redirect()->intended('pejabat');
            }
            return redirect()->intended('/');
        }

        return redirect('login')
            ->withInput()
            ->withErrors(['login_gagal' => 'Kredensial ini tidak cocok dengan data mana pun']);
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        Auth::logout();
        return Redirect('login');
    }
}
