<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contacto>
 */
class ContactoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $nombre = $this->faker->name();
        $apellido = $this->faker->lastName();
        $paginaWeb = $this->faker->domainName();
        $empresa = $paginaWeb;
        return [

            'nombre' =>  $nombre,
            'apellido' =>  $apellido,
            'notas' =>     $this->faker->sentence(10),
            'cumple' =>  $this->faker->dateTime(),
            'paginaWeb' =>  $paginaWeb,
            'empresa' =>  $empresa,

        ];
    }
}
