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
            $table->integer('lieu_id')->unsigned();
            $table->integer('campus_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('etat_id')->unsigned();
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
