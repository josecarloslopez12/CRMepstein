<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        User::updateOrCreate(
            ['email' => 'epstein@isla.test'],
            [
                'name' => 'epstein',
                'password' => Hash::make('epstein'),
                'role' => 'admin',
            ]
        );

        // usuario normal para pruebas
        User::updateOrCreate(
            ['email' => 'diddy@fiesta.test'],
            [
                'name' => 'diddy',
                'password' => Hash::make('diddy'),
                'role' => 'usuario',
            ]
        );
    }
}
