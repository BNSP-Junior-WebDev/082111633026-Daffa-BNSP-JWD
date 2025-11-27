@extends('template.layout')

@section('title', 'Registrasi Peminjam')

@php
    use Carbon\Carbon;
    use Illuminate\Support\Str;
@endphp

@section('content')
    <div class="h-screen flex justify-center items-center">
        <form action="{{ route('peminjam.register') }}" method="post">
            @csrf
            <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4">
                <legend class="fieldset-legend">Registrasi Peminjam</legend>
                
                <label class="label">Nama</label>
                <input type="text" name="nama_peminjam" class="input" placeholder="Nama" />
                
                <label class="label">Username</label>
                <input type="text" name="user_peminjam" class="input" placeholder="Username" />

                <label class="label">Password</label>
                <input type="password" name="pass_peminjam" class="input" placeholder="Password" />
                
                <label class="label">Upload Foto</label>
                <input type="file" name="foto_peminjam" name="foto_peminjam" class="file-input" />
                
                <button type="submit" class="btn btn-neutral mt-4">Register</button>
            </fieldset>

        </form>
    </div>
@endsection