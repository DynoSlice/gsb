<?php

use Illuminate\Database\Seeder;
use App\Pressing;

class PressingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pressing::create([
        'NomPressing' => 'Pressing du gros',
        'AdressePressing' => '1 rue  du porc',
        'CpPressing' => '30',
        'VillePressing' => 'nimes',
        ]);

        Pressing::create([
        'NomPressing' => 'Pressing du ap',
        'AdressePressing' => '1 avenu  du porc',
        'CpPressing' => '30',
        'VillePressing' => 'nimes',
        ]);
    }
}
