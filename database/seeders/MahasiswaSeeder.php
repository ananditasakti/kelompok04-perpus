<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\MahasiswaModel;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_mahasiswa')->insert([
            'nim' => '10059',
            'nama' => 'Anandyta',
            'prodi' => 'Teknik Informatika',
            'nohp' => '081312345679',
            'created_at' => new \DateTime,
            'updated_at' => new \DateTime,
        ]);
    }
}
