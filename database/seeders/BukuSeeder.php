<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bukus = [
            [
                "judul_buku" => "Diary Fauzan",
                "tgl_terbit" => Carbon::parse('2020-01-01'),
                "nama_pengarang" => "Fauzan",
                "nama_penerbit" => "PT Fauzan Jaya",
            ],
            [
                "judul_buku" => "Diary David",
                "tgl_terbit" => Carbon::parse('2020-02-02'),
                "nama_pengarang" => "David",
                "nama_penerbit" => "PT David Jaya",
            ],
            [
                "judul_buku" => "Diary Yoel",
                "tgl_terbit" => Carbon::parse('2020-03-03'),
                "nama_pengarang" => "Yoel",
                "nama_penerbit" => "PT Yoel Jaya",
            ],
            [
                "judul_buku" => "Diary Afta",
                "tgl_terbit" => Carbon::parse('2020-04-04'),
                "nama_pengarang" => "Afta",
                "nama_penerbit" => "PT Afta Jaya",
            ],
            [
                "judul_buku" => "Diary Daffa",
                "tgl_terbit" => Carbon::parse('2020-05-05'),
                "nama_pengarang" => "Daffa",
                "nama_penerbit" => "PT Daffa Jaya",
            ],
            [
                "judul_buku" => "Diary Aji",
                "tgl_terbit" => Carbon::parse('2020-06-06'),
                "nama_pengarang" => "Aji",
                "nama_penerbit" => "PT Aji Jaya",
            ],
            [
                "judul_buku" => "Diary Bowo",
                "tgl_terbit" => Carbon::parse('2020-07-07'),
                "nama_pengarang" => "Bowo",
                "nama_penerbit" => "PT Bowo Jaya",
            ],
            [
                "judul_buku" => "Diary Riki",
                "tgl_terbit" => Carbon::parse('2020-08-08'),
                "nama_pengarang" => "Riki",
                "nama_penerbit" => "PT Riki Jaya",
            ],
            [
                "judul_buku" => "Diary Raka",
                "tgl_terbit" => Carbon::parse('2020-09-09'),
                "nama_pengarang" => "Raka",
                "nama_penerbit" => "PT Raka Jaya",
            ],
            [
                "judul_buku" => "Diary Firman",
                "tgl_terbit" => Carbon::parse('2020-10-10'),
                "nama_pengarang" => "Firman",
                "nama_penerbit" => "PT Firman Jaya",
            ],
        ];

        foreach(array_chunk($bukus, 10) as $buku) {
            DB::table('bukus')->insert($buku);
        }
    }
}
