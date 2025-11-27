@extends('template.layout')

@section('title', 'Login Peminjam')

@section('content')
    <div class="h-screen flex justify-center items-center">
        <form action="{{ route('peminjam.login') }}" method="post">
            @csrf
            <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4">
                <legend class="fieldset-legend">Login Peminjam</legend>
                
                <label class="label">Username</label>
                <input type="text" name="user_peminjam" class="input" placeholder="Username" />

                <label class="label">Password</label>
                <input type="password" name="pass_peminjam" class="input" placeholder="Password" />
                
                <button type="submit" class="btn btn-neutral mt-4">Login</button>
            </fieldset>

        </form>
    </div>
@endsection