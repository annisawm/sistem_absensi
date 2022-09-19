<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
<<<<<<< HEAD
use Illuminate\Support\Facades\Redirect;
=======
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
>>>>>>> e29206c70c2c5a8ead2c729c6691dd99fa7b2bb5

class AuthController extends Controller
{
    public function index()
    {
<<<<<<< HEAD
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
=======
        return view('auth.login');
    }

    public function registration()
    {
        return view('auth.registration');
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('guest')
                ->withSuccess('You have Successfully loggedin');
        }
        return redirect("login")->withSuccess('Oppes! You have entered invalid credentials');
    }
    public function postRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
        $data = $request->all();
        $check = $this->create($data);
        return redirect("guest")->withSuccess('Great! You have Successfully loggedin');
    }

    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }

    public function logout()
    {
        Session::flush();
>>>>>>> e29206c70c2c5a8ead2c729c6691dd99fa7b2bb5
        Auth::logout();
        return Redirect('login');
    }
}
