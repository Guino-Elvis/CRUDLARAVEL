<?php

namespace Database\Factories;

use App\Models\Ubicacion;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Elemento>
 */
class ElementoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $numserie = $this->faker->word(20);
        $cantidad = $this->faker->word(20);
        $baja = $this->faker->word(20);
        $fechabaja = $this->faker->word(20);
        $motivobaja = $this->faker->word(20);
        $codigobarra = $this->faker->word(20);
        return [
            'numserie' => $numserie,
            'cantidad' => $cantidad,
            'baja' => $baja,
            'fechabaja' => $fechabaja,
            'motivobaja' => $motivobaja,
            'codigobarra' => $codigobarra,
            'ubicacions_id'=>Ubicacion::all()->random()->id,
        ];
    }
}
