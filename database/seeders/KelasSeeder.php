<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kelas')->insert([
            [
                'nama_kelas' => 'XII PPLG 1',
                'kompetensi_keahlian' => 'PPLG',
                'created_at' => Carbon::now(),
            ],
            [
                'nama_kelas' => 'XII PPLG 2',
                'kompetensi_keahlian' => 'PPLG',
                'created_at' => Carbon::now(),
            ],
            [
                'nama_kelas' => 'XII PPLG 3',
                'kompetensi_keahlian' => 'PPLG',
                'created_at' => Carbon::now(),
            ],
            [
                'nama_kelas' => 'XII PPLG 4',
                'kompetensi_keahlian' => 'PPLG',
                'created_at' => Carbon::now(),
            ],
        ]);
    }
}
