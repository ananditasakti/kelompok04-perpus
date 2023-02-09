<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\PetugasModel;

class PetugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_petugas')->insert([
            'namapetugas' => 'Budi',
            'notlp' => '088877665512',
            'created_at' => new \DateTime,
            'updated_at' => new \DateTime,
        ]);
    }
}
