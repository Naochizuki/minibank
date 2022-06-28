<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use App\Models\Rekening;

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
                    'tgl_transaksi' => $faker->dateTimeBetween('2021-01-01', '2022-12-31')->format('Y-m-d'),
                    'jenis_transaksi' => $faker->randomElement(['Pemasukan', 'Pengeluaran']),
                    'nominal' => $faker->numberBetween(1111,1000000),
                    'created_by' => 1,
                    'updated_by' => 1
                ]);
            }
        }
    }
}
