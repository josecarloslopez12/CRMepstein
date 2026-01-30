<?php

namespace Database\Seeders;

use App\Models\Empleado;
use Illuminate\Database\Seeder;

class EmpleadoSeeder extends Seeder
{
    public function run(): void
    {
        Empleado::create([
            'nombre' => 'Misty Oldenheim',
            'puesto' => 'Vendedora Premium',
            'salario' => 3500.00
        ]);

        Empleado::create([
            'nombre' => 'Viktor Vector',
            'puesto' => 'Especialista en Implantes',
            'salario' => 4200.00
        ]);

        Empleado::create([
            'nombre' => 'Fingers',
            'puesto' => 'Técnico de Cirugía Cibernética',
            'salario' => 3800.00
        ]);

        Empleado::create([
            'nombre' => 'Vik Vektor (Senior)',
            'puesto' => 'Jefe de Operaciones Técnicas',
            'salario' => 5500.00
        ]);

        Empleado::create([
            'nombre' => 'Dino Dinovich',
            'puesto' => 'Ejecutivo de Cuentas',
            'salario' => 4100.00
        ]);

        Empleado::create([
            'nombre' => 'Jackie Welles',
            'puesto' => 'Agente de Ventas de Armas',
            'salario' => 3900.00
        ]);

        Empleado::create([
            'nombre' => 'Royce (Maelstrom)',
            'puesto' => 'Gerente de Distribución',
            'salario' => 4600.00
        ]);

        Empleado::create([
            'nombre' => 'Regina Jones',
            'puesto' => 'Coordinadora de Logística',
            'salario' => 3600.00
        ]);

        Empleado::create([
            'nombre' => 'The Owl',
            'puesto' => 'Analista de Datos',
            'salario' => 4300.00
        ]);

        Empleado::create([
            'nombre' => 'Placide (Voodoo Boys)',
            'puesto' => 'Especialista en Software',
            'salario' => 4800.00
        ]);
    }
}
