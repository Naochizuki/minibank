<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class NasabahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::where('role', 'nasabah')->get();

        $faker = Faker::create('id_ID');
        $gender = $faker->randomElement(['Laki-laki', 'Perempuan']);

        foreach ($users as $user) {
            DB::table('nasabah')->insert([
                'id_user' => $user->id,
                'nama' => $user->nama,
                'alamat' => $faker->address(),
                'nik' => $faker->unique()->numberBetween(33000000, 33999999),
                'jenis_kelamin' => $gender,
                'nama_ibu' => $faker->name($gender == 'Perempuan'),
                'tgl_lahir' => $faker->dateTimeBetween('1950-01-01', '2010-12-31')->format('Y-m-d'),
                'no_telp' => $faker->phoneNumber(),
                'created_by' => 1,
                'updated_by' => 1
            ]);
        }
    }
}
