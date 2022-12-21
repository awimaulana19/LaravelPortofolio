<?php

namespace App\Http\Controllers;

use App\Models\Portofolio;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login.index');
    }

    public function register(){
        return view('register.index');
    }

    public function authenticate(Request $request)
    {
        $hasil = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required',
        ]);
 
        if (Auth::attempt($hasil)) {
            $request->session()->regenerate();
 
            return redirect()->intended('dashboard');
        }
 
        return back()->with('errorLogin', 'Username Atau Password Salah');
    }

    public function logout(Request $request)
    {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/');
    }

    public function store(Request $request){
        $hasil = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:3|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:6'
        ]);

        $hasil['password'] = bcrypt($hasil ['password']);

        User::create($hasil);

        $buatId = User::Where('username', $hasil['username'])->first();

        Portofolio::create(['user_id' => $buatId['id']]);

        return redirect('/')->with('success', 'Akun Berhasil Dibuat, Silahkan Login');
    }
}
