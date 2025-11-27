@extends('template.layout')

@section('title', 'Daftar Buku')

@section('content')
    <div class="m-10">
        <form action="{{ route('admin.logout') }}" class="btn btn-error cursor-pointer">
            @csrf
            <button type="submit">Logout</button>
        </form>
        <div class="flex flex-col items-center">
            <h1 class="m-5 text-2xl font-bold">Daftar Buku</h1>
            <a href="{{ route('view.admin.tambah_buku') }}" class="btn btn-success m-5">Tambah Buku</a>
            <div class="overflow-x-auto rounded-box border border-base-content/5 bg-base-100">
                <table class="table">
                    <!-- head -->
                    <thead>
                    <tr>
                        <th>No.</th>
                        <th>Judul Buku</th>
                        <th>Nama Pengarang</th>
                        <th>Nama Penerbit</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($bukus as $buku)
                        <!-- Row Data -->
                        <tr>
                            <th>{{ $buku->id_buku }}</th>
                            <td>{{ $buku->judul_buku}}</td>
                            <td>{{ $buku->nama_pengarang }}</td>
                            <td>{{ $buku->nama_penerbit }}</td>
                            <td>
                                <a href="{{ route('view.admin.edit_buku', $buku->id_buku) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('admin.delete_buku', $buku->id_buku) }}" method="post" class="btn btn-error cursor-pointer">
                                    @csrf
                                    <button type="submit">Hapus</button>
                                </form>
                            </tderror>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection