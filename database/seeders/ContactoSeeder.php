<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contacto;

class ContactoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        //\App\Models\Contacto::factory(5000)->create();

        Contacto::factory()
            ->count(2000)
            ->hasDireccion(2)
            ->hasEmail(2)
            ->hasTelefono(4)
            ->create();
        Contacto::factory()
            ->count(3000)
            ->hasDireccion(1)
            ->hasEmail(3)
            ->hasTelefono(2)
            ->create();
    }
}
