<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Peminjam;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
 
        $request->session()->regenerateToken();
    
        return redirect()->route('view.peminjam.login');
    }

    public function viewRegisterPeminjam() {
        return view('register');
    }
    
    public function registerPeminjam(Request $request) {
        $data_peminjam = Peminjam::create([
            "id_peminjam" => Str::uuid(),
            "nama_peminjam" => $request->nama_peminjam,
            "user_peminjam" => $request->user_peminjam,
            "pass_peminjam" => Hash::make($request->pass_peminjam),
            "foto_peminjam" => $request->foto_peminjam
        ]);
        if ($request->hasFile('foto_peminjam')) {
            $request->file('foto_peminjam')->move('img/', $request->file('foto_peminjam')->getClientOriginalName());
            $data_peminjam->foto_peminjam = $request->file('foto_peminjam')->getClientOriginalName();
            $data_peminjam->save();
        }
        return redirect()->route('view.peminjam.login');
    }

    public function viewLoginPeminjam() {
        return view('login');
    }
    
    public function loginPeminjam(Request $request) {
        $credentials = $request->validate([
            'user_peminjam' => ['required', 'string'],
            'pass_peminjam' => ['required', 'string'],
        ]);

        $peminjam = Peminjam::where('user_peminjam', $request->user_admin)->first();

        if ($peminjam && Hash::check($request->pass_admin, $peminjam->pass_admin)) {
            session(['admin_id' => $peminjam->id]);
            return redirect()->route('view.admin.daftar_buku');
        }
 
        // if (Auth::attempt($credentials)) {
        //     $request->session()->regenerate();
 
        //     return redirect()->route('/');
        // }
        
        return back()->withErrors([
            'user_peminjam' => 'The provided credentials do not match our records.',
        ])->onlyInput('user_peminjam');
    }
    
    public function viewLoginAdmin() {
        return view('login_admin');
    }
    
    public function loginAdmin(Request $request) {
        $credentials = $request->validate([
            'user_admin' => ['required', 'string'],
            'pass_admin' => ['required', 'string'],
        ]);
    
        $admin = Admin::where('user_admin', $request->user_admin)->first();

        if ($admin && Hash::check($request->pass_admin, $admin->pass_admin)) {
            session(['admin_id' => $admin->id]);
            return redirect()->route('view.admin.daftar_buku');
        }
        
        return back()->withErrors([
            'user_admin' => 'The provided credentials do not match our records.',
        ])->onlyInput('user_admin');
    }
}
