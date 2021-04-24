<?php

namespace Database\Seeders;

use App\Models\Citas;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Citas::create([
            'fecha' => Carbon::now(),
            'Observaciones' => "Sigue sin comer",
            'user_id' => 1,
            'cliente_id' => 1,
            'mascota_id' => 1
        ]);
    }
}
