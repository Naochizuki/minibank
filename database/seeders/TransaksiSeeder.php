<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use App\Models\Rekening;
use Carbon\Carbon;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reks = Rekening::get();

        $faker = Faker::create('id_ID');

        for ($i = 0; $i < 3; $i++) {
            foreach ($reks as $rek) {
                DB::table('transaksi')->insert([
                    'id_rekening' => $rek->id,
                    'tgl_transaksi' => $faker->dateTimeBetween('2021-01-01', Carbon::now('Asia/Jakarta'))->format('Y-m-d'),
                    'jenis_transaksi' => $faker->randomElement(['Pemasukan', 'Pengeluaran']),
                    'nominal' => $faker->numberBetween(1111,1000000),
                    'created_by' => 1,
                    'updated_by' => 1,
                    'created_at' => Carbon::now('Asia/Jakarta'),
                    'updated_at' => Carbon::now('Asia/Jakarta'),
                ]);
            }
        }
    }
}
