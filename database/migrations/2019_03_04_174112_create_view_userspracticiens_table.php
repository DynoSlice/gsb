<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateViewUserspracticiensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('CREATE VIEW UserPraticien 
        AS SELECT users.name, prenom, adresse,ville,cp,dateembauche,email,
        email_verified_at,password,roles 
        FROM users, practiciens 
        WHERE practiciens.user_id = users.id');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP VIEW  `UserPraticien`');
    }
}
