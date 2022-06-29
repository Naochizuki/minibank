<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Nasabah;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RekeningSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = Nasabah::get();

        $faker = Faker::create('id_ID');

        foreach ($users as $user) {
            DB::table('rekening')->insert([
                'id_nasabah' => $user->id,
                'no_rekening' => $faker->unique()->numberBetween(11111111,99999999),
                'saldo' => $faker->numberBetween(1111,999999999999),
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => Carbon::now('Asia/Jakarta'),
                'updated_at' => Carbon::now('Asia/Jakarta'),
            ]);
        }
    }
}
