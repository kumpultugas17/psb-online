<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'email' => 'smg.iqbal@gmail.com',
            'password' => bcrypt('admin'),
            'level' => 0
        ]);
    }
}
