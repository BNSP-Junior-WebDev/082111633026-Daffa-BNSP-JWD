<?php

namespace App\Http\Controllers;

use App\Models\Peminjam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function logoutPeminjam(Request $request) {
        Auth::guard('peminjams')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('view.peminjam.login');
    }
    
    public function logoutAdmin(Request $request) {
        Auth::guard('admins')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('view.admin.login');
    }

    public function viewRegisterPeminjam() {
        return view('register');
    }
    
    public function registerPeminjam(Request $request) {
        $data_peminjam = Peminjam::create([
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
        if (Auth::guard('peminjams')->attempt([
            'user_peminjam' => $request->user_peminjam,
            'password' => $request->pass_peminjam
        ])) {
            $request->session()->regenerate();
            return redirect()->route('view.peminjam.formulir_pendaftaran');
        }
        return back()
            ->withInput($request->only('user_peminjam'))
            ->withErrors([
            'user_peminjam' => 'The provided credentials do not match our records.',
        ]);
    }
    
    public function viewLoginAdmin() {
        return view('login_admin');
    }
    
    public function loginAdmin(Request $request) {
        if (Auth::guard('admins')->attempt([
            'user_admin' => $request->user_admin,
            'password' => $request->pass_admin
        ])) {
            $request->session()->regenerate();
            return redirect()->route('view.admin.daftar_buku');
        }
        
        return back()
            ->withInput($request->only('user_admin'))
            ->withErrors([
            'user_admin' => 'The provided credentials do not match our records.',
        ]);
    }
}
