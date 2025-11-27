@extends('template.layout')

@section('title', 'Home')

@section('content')
    <form action="{{ route('peminjam.logout') }}" class="btn btn-error cursor-pointer">
        @csrf
        <button type="submit">Logout</button>
    </form>
    <h1>Hai, Ini FOrmulir Pendaftaran</h1>
@endsection
