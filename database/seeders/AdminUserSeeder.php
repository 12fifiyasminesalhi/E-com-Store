<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        // Créer le rôle "admin" s’il n’existe pas déjà
        $adminRole = Role::firstOrCreate(['name' => 'admin', 'guard_name' => 'web']);

        // Créer ou mettre à jour l'utilisateur FaroukSalhi
        $user = User::updateOrCreate(
            ['email' => 'fafous88@gmail.com'], // Identifiant unique
            [
                'name' => 'FaroukSalhi',
                'password' => bcrypt('Meryouma2019'), // Choisis un mot de passe sécurisé
            ]
        );

        // Lui attribuer le rôle "admin" s’il ne l’a pas déjà
        if (! $user->hasRole('admin')) {
            $user->assignRole($adminRole);
        }
    }
}
