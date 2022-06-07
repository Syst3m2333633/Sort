<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersSortie extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_sortie', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedInteger('sortie_id');
            $table->foreign('sortie_id')->references('id')->on('sorties');
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
        Schema::dropIfExists('users_sortie');
        Schema::table('users_sortie', function (Blueprint $table) {
            $table->dropForeign('users_sortie_user_id_foreign');
            $table->dropForeign('users_sortie_sortie_id_foreign');
        });
    }
}
