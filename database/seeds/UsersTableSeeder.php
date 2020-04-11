<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(['name' => 'alpha',
        'prenom' => 'kaba',
        'adresse' => '1 impasse des salins',
        'ville' => 'Nimes',
        'cp' => '30',
        'email' => 'alpha@domaine.fr',
        'roles' => 'Gestion',
        'password' => bcrypt('admin'),
        ]);

        User::create(['name' => 'ayoub',
        'prenom' => 'najmi',
        'adresse' => 'le bled',
        'ville' => 'psg',
        'cp' => '30',
        'email' => 'ayoub@domaine.fr',
        'roles' => 'vm',
        'password' => bcrypt('user'),
        ]);

        User::create(['name' => 'barre',
        'prenom' => 'romuald',
        'adresse' => 'carrefour',
        'ville' => 'cci',
        'cp' => '30',
        'email' => 'romuald@domaine.fr',
        'roles' => 'vm',
        'password' => bcrypt('admin'),
        ]);
    }
}
