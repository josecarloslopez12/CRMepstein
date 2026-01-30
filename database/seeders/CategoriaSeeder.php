<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    public function run(): void
    {
        Categoria::create(['nombre' => 'Implantes Cibernéticos']);
        Categoria::create(['nombre' => 'Armas Militares']);
        Categoria::create(['nombre' => 'Software Hacker']);
        Categoria::create(['nombre' => 'Modificaciones Corporales']);
        Categoria::create(['nombre' => 'Equipo de Combate']);
        Categoria::create(['nombre' => 'Herramientas de Infiltración']);
    }
}
