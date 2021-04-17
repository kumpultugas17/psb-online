<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'nama' => 'Administrator',
            'nis' => '10040818',
            'tempat_lahir' => 'Kuala Kapuas',
            'tanggal_lahir' => '1992-10-17',
            'nem' => '-',
            'no_ijazah' => '-',
            'nama_ortu' => 'Jokowi',
            'pekerjaan_ortu' => 'Presiden',
            'telp' => '085249099652',
            'alamat' => 'Jl. Belitung Laut No. 8',
            'user_id' => 1,
        ]);
    }
}
