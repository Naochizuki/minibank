<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class KonfigurasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $code = array('Nama', 'Alamat');
        $code_value = array('MyBank', 'Surakarta');
        for ($i = 0; $i < 2; $i++) {
            DB::table('konfigurasi')->insert([
                'code' => $code[$i],
                'code_value' => $code_value[$i],
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => Carbon::now('Asia/Jakarta'),
                'updated_at' => Carbon::now('Asia/Jakarta'),
            ]);
        }
    }
}
