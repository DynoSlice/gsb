<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('missions', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('TypeMission');
            $table->date('DebutMission');
            $table->date('FinMission');
            $table->decimal('nombrerepas',16,2);
            $table->decimal('totalrepas',16,2);
            $table->decimal('nombrekilometre',16,2);
            $table->decimal('totalkilometre',16,2);
            $table->decimal('nombrenuits',16,2);
            $table->decimal('totalnuits',16,2);
            $table->decimal('totalpressing',16,2);
            $table->decimal('totalfrais',16,2);
            $table->enum('etatdossier', ['encour','Refusée', 'Accepter', 'Manquedepiece'])->default('encour');
            $table->timestamps();
            $table->integer('hebergements_id')->unsigned();
            $table->foreign('hebergements_id')->references('id')->on('hebergements')->ondelete('cascade');
            $table->integer('pressings_id')->unsigned();
            $table->foreign('pressings_id')->references('id')->on('pressings')->ondelete('cascade');
            $table->integer('user_id')->nullable()->unsigned();
            $table->foreign('user_id')->references('user_id')->on('visiteurs')->ondelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('missions');
    }
}
