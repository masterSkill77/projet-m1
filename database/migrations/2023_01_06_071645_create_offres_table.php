<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offres', function (Blueprint $table) {
            $table->id();
            $table->string('offre_title');
            $table->string('offre_description');
            $table->integer('offre_number_need');
            $table->integer('offre_type');
            $table->string('offre_niveau');
            $table->unsignedBigInteger('partenaire_id');
            $table->foreign('partenaire_id')->on('partenaires')->references('id');
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
        Schema::dropIfExists('offres');
    }
}
