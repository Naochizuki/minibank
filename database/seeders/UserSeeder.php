<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        $encrypted = bcrypt('password');

        for ($i = 0; $i < 100; $i++) {
            DB::table('users')->insert([
                'foto' => 'foto/8W7MYIFUkRk6wxv7O38YMk1RiYRFF93yw21xQlvv.png',
                'nama' => $faker->name($faker->randomElement(['Laki-laki', 'Perempuan'])),
                'email' => $faker->unique()->safeEmail(),
                'role' => $faker->randomElement(['admin', 'teller', 'cs', 'nasabah']),
                'password' => $encrypted,
                'created_at' => Carbon::now('Asia/Jakarta'),
                'updated_at' => Carbon::now('Asia/Jakarta'),
            ]);
        }
    }
}
