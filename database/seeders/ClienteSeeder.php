<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    public function run(): void
    {
        Cliente::create([
            'nombre' => 'V (Mercenary)',
            'email' => 'v.street@nightcity.net',
            'telefono' => '+1-555-0100',
            'direccion' => 'Japantown, Watson District'
        ]);

        Cliente::create([
            'nombre' => 'Johnny Silverhand',
            'email' => 'johnny.silverhand@construct.net',
            'telefono' => '+1-555-0101',
            'direccion' => 'Subconsciente Digital'
        ]);

        Cliente::create([
            'nombre' => 'Judy Alvarez',
            'email' => 'judy.alvarez@braindance.corp',
            'telefono' => '+1-555-0102',
            'direccion' => 'Diner Afterlife, Heywood'
        ]);

        Cliente::create([
            'nombre' => 'Panam Palmer',
            'email' => 'panam.palmer@nomad.crew',
            'telefono' => '+1-555-0103',
            'direccion' => 'Badlands Nomad Camp'
        ]);

        Cliente::create([
            'nombre' => 'River Ward (Detective)',
            'email' => 'river.ward@ncpd.gov',
            'telefono' => '+1-555-0104',
            'direccion' => 'NCPD Station, Santa Monica'
        ]);

        Cliente::create([
            'nombre' => 'Rogue Amendiares',
            'email' => 'rogue@afterlife.club',
            'telefono' => '+1-555-0105',
            'direccion' => 'Afterlife Club, Little China'
        ]);

        Cliente::create([
            'nombre' => 'Takemura (Arasaka)',
            'email' => 'takemura@arasaka.corp',
            'telefono' => '+81-555-0106',
            'direccion' => 'Arasaka Tower Corporate'
        ]);

        Cliente::create([
            'nombre' => 'Kerry Eurodyne',
            'email' => 'kerry.eurodyne@samurai.band',
            'telefono' => '+1-555-0107',
            'direccion' => 'Penthouse Corpo, City Center'
        ]);

        Cliente::create([
            'nombre' => 'Meredith Stout (Militech)',
            'email' => 'mstout@militech.corp',
            'telefono' => '+1-555-0108',
            'direccion' => 'Militech HQ, Downtown'
        ]);

        Cliente::create([
            'nombre' => 'Evelyn Parker',
            'email' => 'evelyn.parker@braindance.net',
            'telefono' => '+1-555-0109',
            'direccion' => 'Doll House, The Clouds'
        ]);
    }
}
