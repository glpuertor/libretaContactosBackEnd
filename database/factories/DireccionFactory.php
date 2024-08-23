<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\direccion>
 */
class DireccionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'direccion' =>  $this->faker->sentence(5),
            'cp' =>  $this->faker->randomNumber(5, true),
            'nombreDireccion' =>  $this->faker->words(2, true),
        ];
    }
}
