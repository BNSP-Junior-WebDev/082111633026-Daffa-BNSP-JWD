@extends('template.layout')

@section('title', 'Tambah Buku')

@section('content')
    <div class="h-screen flex flex-col justify-center items-center">
        <h1 class="font-bold text-2xl m-5">Tambah Buku Baru</h1>
        <form action="{{ route('admin.tambah_buku') }}" method="post" class="border p-5 rounded-md">
            @csrf
            <fieldset class="fieldset">
                <legend class="fieldset-legend">Judul Buku</legend>
                <input type="text" name="judul_buku" class="input" placeholder="Judul Buku" />
            </fieldset>
            <fieldset class="fieldset">
                <legend class="fieldset-legend">Tanggal Terbit</legend>
                <input type="date" name="tgl_terbit" class="input" />
            </fieldset>
    
            <fieldset class="fieldset">
                <legend class="fieldset-legend">Nama Pengarang</legend>
                <input type="text" name="nama_pengarang" class="input" placeholder="Nama Pengarang" />
            </fieldset>
    
            <fieldset class="fieldset">
                <legend class="fieldset-legend">Nama Penerbit</legend>
                <input type="text" name="nama_penerbit" class="input" placeholder="Nama Penerbit" />
            </fieldset>
    
            <div class="flex m-5 gap-5">
                <button type="submit" class="btn btn-success">Tambah Buku</button>
                <a href="{{ route('view.admin.daftar_buku') }}" class="btn btn-error">Back</a>
            </div>
        </form>
    </div>
@endsection