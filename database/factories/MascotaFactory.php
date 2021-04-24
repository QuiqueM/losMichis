<?php

namespace Database\Factories;

use App\Models\Cliente;
use App\Models\Mascota;
use Illuminate\Database\Eloquent\Factories\Factory;

class MascotaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Mascota::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->firstName(),
            'tipo' => $this->faker->randomElement(['perro', 'gato', 'ave', 'roedor']),
            'edad' => $this->faker->randomDigit(),
            'peso' => $this->faker->randomFloat(2, 10, 50),
            'sexo' => $this->faker->randomElement(['macho', 'hembra']),
            'cliente_id' => Cliente::all()->random()->id,
        ];
    }
}
