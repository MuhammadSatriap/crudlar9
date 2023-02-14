<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PemainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pemains')->insert([
            'idpemain' => '32123',
            'nama' => 'apasih',
            'nopunggung' => '99',
            'idclub' => '09',
        ]);
    }
}
