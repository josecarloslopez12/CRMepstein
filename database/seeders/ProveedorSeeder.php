<?php

namespace Database\Seeders;

use App\Models\Proveedor;
use Illuminate\Database\Seeder;

class ProveedorSeeder extends Seeder
{
    public function run(): void
    {
        Proveedor::create([
            'nombre_empresa' => 'Kuroda-Synth Corp',
            'contacto_nombre' => 'Mr. Tanaka',
            'email' => 'tanaka@kuroda-synth.corp',
        ]);

        Proveedor::create([
            'nombre_empresa' => 'Arasaka Technologies',
            'contacto_nombre' => 'Yoube Nakamura',
            'email' => 'nakamura@arasaka.corp',
        ]);

        Proveedor::create([
            'nombre_empresa' => 'Militech Black Market',
            'contacto_nombre' => 'Captain Dex',
            'email' => 'dex@militech-black.corp',
        ]);

        Proveedor::create([
            'nombre_empresa' => 'Zetatech Industries',
            'contacto_nombre' => 'Dr. Halsey',
            'email' => 'halsey@zetatech.corp',
        ]);

        Proveedor::create([
            'nombre_empresa' => 'Kiroshi Optics',
            'contacto_nombre' => 'Yuki Shoda',
            'email' => 'shoda@kiroshi.corp',
        ]);
    }
}
