@extends('template.layout')

@section('title', 'Edit Buku')

@section('content')
    <div class="h-screen flex flex-col justify-center items-center">
        <h1 class="font-bold text-2xl m-5">Edit Buku</h1>
        <form action="{{ route('admin.edit_buku', $buku->id_buku) }}" method="post" class="border p-5 rounded-md">
            @csrf
            <fieldset class="fieldset">
                <legend class="fieldset-legend">Judul Buku</legend>
                <input type="text" name="judul_buku" class="input" value="{{ $buku->judul_buku }}" placeholder="Judul Buku" />
            </fieldset>
            <fieldset class="fieldset">
                <legend class="fieldset-legend">Tanggal Terbit</legend>
                <input type="date" name="tgl_terbit" value="{{ $buku->tgl_terbit }}" class="input" />
            </fieldset>
    
            <fieldset class="fieldset">
                <legend class="fieldset-legend">Nama Pengarang</legend>
                <input type="text" name="nama_pengarang" class="input" value="{{ $buku->nama_pengarang }}" placeholder="Nama Pengarang" />
            </fieldset>
    
            <fieldset class="fieldset">
                <legend class="fieldset-legend">Nama Penerbit</legend>
                <input type="text" name="nama_penerbit" class="input" value="{{ $buku->nama_penerbit }}" placeholder="Nama Penerbit" />
            </fieldset>
    
            <div class="flex m-5 gap-5">
                <button type="submit" class="btn btn-success">Edit Buku</button>
                <a href="{{ route('view.admin.daftar_buku') }}" class="btn btn-error">Back</a>
            </div>
        </form>
    </div>
@endsection