<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\BukuModel;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_buku')->insert([
            'kodebuku' => 'DTI',
            'judul' => 'Dasar-Dasar Teknik Informatika',
            'gambar' => '1.jpg',
            'pengarang' => 'Novega Pratama Adiputra',
            'penerbit' => 'Deepublish',
            'created_at' => new \DateTime,
            'updated_at' => new \DateTime,
        ]);
    }
}
