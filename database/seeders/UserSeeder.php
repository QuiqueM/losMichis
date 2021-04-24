<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Enrique Martinez',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
            'telefono' => "4448215974",
            'calle' => "salvador nava",
            'numero' => "789",
            'colonia' => "zona universitaria",
        ]);
        User::factory(9)->create();
    }
}
