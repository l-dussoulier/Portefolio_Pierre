<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class StatutTablee extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statut', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('couleur');
        });

        Schema::table('dessins', function (Blueprint $table) {
            $table->unsignedBigInteger('statut');
            $table->integer('statut', 11)->unsigned;

            $table->foreign('statut')->references('id')->on('statut');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    }
}
