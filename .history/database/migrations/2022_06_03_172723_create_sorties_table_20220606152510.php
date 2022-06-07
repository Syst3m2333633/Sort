<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSortiesTable extends Migration
{
/**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sorties', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('dateHeureDebut');
            $table->string('duree');
            $table->string('dateLimiteInscription');
            $table->string('nbInscriptionMax');
            $table->string('infoSortie');
            $table->binary('photo')->nullable();
            $table->string('etat');
            $table->foreign('lieu_id')->references('id')->on('lieus');
            $table->foreign('campus_id')->references('id')->on('campuses');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('Etat_id')->references('id')->on('etats');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sorties');
    }
}
