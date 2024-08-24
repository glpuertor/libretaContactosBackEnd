<?php

namespace Database\Factories;

use App\Models\Contacto;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\telefono>
 */
class TelefonoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'telefono' => $this->faker->randomNumber(9, true),
            'tipo' => $this->faker->word(1, true),
            'contacto_id' => Contacto::factory(),
        ];
    }
}
