<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    public function run(): void
    {
        // Implantes Cibernéticos
        Producto::create([
            'nombre' => 'Kiroshi Optics V3',
            'precio' => 2500.00,
            'stock' => 15,
        ]);

        Producto::create([
            'nombre' => 'Sandevistan Mk IV',
            'precio' => 8500.00,
            'stock' => 8,
        ]);

        Producto::create([
            'nombre' => 'Mantis Blade System',
            'precio' => 4200.00,
            'stock' => 12,
        ]);

        Producto::create([
            'nombre' => 'Gorila Arms MkV',
            'precio' => 6800.00,
            'stock' => 10,
        ]);

        // Armas Militares
        Producto::create([
            'nombre' => 'Apparition Handgun',
            'precio' => 3200.00,
            'stock' => 20,
        ]);

        Producto::create([
            'nombre' => 'Iconic Rifle TX-84',
            'precio' => 5600.00,
            'stock' => 7,
        ]);

        Producto::create([
            'nombre' => 'Ping Operative Launcher',
            'precio' => 7200.00,
            'stock' => 5,
        ]);

        // Software Hacker
        Producto::create([
            'nombre' => 'QuickHacking Suite Pro',
            'precio' => 1800.00,
            'stock' => 25,
        ]);

        Producto::create([
            'nombre' => 'Breach Protocol v7.2',
            'precio' => 1200.00,
            'stock' => 18,
        ]);

        Producto::create([
            'nombre' => 'Daemon Malware Pack',
            'precio' => 2900.00,
            'stock' => 10,
        ]);

        // Modificaciones Corporales
        Producto::create([
            'nombre' => 'Nervous System Boost',
            'precio' => 3400.00,
            'stock' => 14,
        ]);

        Producto::create([
            'nombre' => 'Cardiovascular Overdrive',
            'precio' => 4100.00,
            'stock' => 9,
        ]);

        // Equipo de Combate
        Producto::create([
            'nombre' => 'Tactical Suit Urban Edge',
            'precio' => 2800.00,
            'stock' => 22,
        ]);

        Producto::create([
            'nombre' => 'Combat Helmet Mk II',
            'precio' => 1950.00,
            'stock' => 16,
        ]);

        // Herramientas de Infiltración
        Producto::create([
            'nombre' => 'Stealth Jump Boots',
            'precio' => 3600.00,
            'stock' => 11,
        ]);

        Producto::create([
            'nombre' => 'Smart Lockpick Set',
            'precio' => 950.00,
            'stock' => 30,
        ]);
    }
}
