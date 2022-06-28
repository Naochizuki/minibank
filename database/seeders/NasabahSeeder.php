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
        $users = User::where('role', 'nasabah');

        $faker = Faker::create('id_ID');
        $gender = $faker->randomElement(['Laki-laki', 'Perempuan']);

        for ($i = 0; $i < $users->count(); $i++) {
            DB::table('nasabah')->insert([
                'id_user' => $users->id,
                'nama' => $users->nama,
                'alamat' => $faker->address(),
                'nik' => $faker->unique()->numberBetween(3300000000000000, 3399999999999999),
                'jenis_kelamin' => $gender,
                'nama_ibu' => $faker->name($gender == 'Perempuan'),
                'tgl_lahir' => $faker->dateTimeBetween('1950-01-01', '2010-12-31')->format('d/m/Y'),
                'no_telp' => $faker->phoneNumber(),
            ]);
        }
    }
}
