<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateViewUsersvisiteursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('CREATE VIEW UsersVisiteurs AS 
        SELECT users.name,prenom,adresse,ville,cp,dateembauche,avatar,email,roles,missions.id,TypeMission,DebutMission,FinMission,nombrerepas,totalrepas,
        nombrekilometre,totalkilometre,nombrenuits,totalnuits,totalpressing,totalfrais,etatdossier,
        missions.created_at,missions.updated_at,NomHebergement,
        AdresseHebergement,CpHebergement,VilleHebergement,NomPressing,AdressePressing,CpPressing,VillePressing 
        FROM users,visiteurs,missions 
        INNER JOIN hebergements,pressings 
        WHERE visiteurs.user_id = users.id 
        AND missions.hebergements_id = hebergements.id 
        AND missions.pressings_id = pressings.id 
        AND missions.user_id = visiteurs.user_id');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP VIEW  `UsersVisiteurs`');
    }
}
