<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(ClienteSeeder::class);
        $this->call(MascotaSeeder::class);
        $this->call(CitasSeeder::class);
    }
}
