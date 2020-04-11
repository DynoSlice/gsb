<?php

use Illuminate\Database\Seeder;
use App\Hebergement;

class HebergementTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Hebergement::create([
        'NomHebergement' => 'Ibis',
        'AdresseHebergement' => '1 impasse  du gard',
        'CpHebergement' => '30',
        'VilleHebergement' => 'lyon',
        ]);

        Hebergement::create([
        'NomHebergement' => 'Ibis budget',
        'AdresseHebergement' => '1 rue  du poulet',
        'CpHebergement' => '30',
        'VilleHebergement' => 'nimes',
        ]);
    }
}
