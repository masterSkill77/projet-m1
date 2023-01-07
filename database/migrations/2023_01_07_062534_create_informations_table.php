<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('informations', function (Blueprint $table) {
            $table->id();
            $table->string('info_libelle');
            $table->text('info_description');
            $table->string('info_arrete_min')->nullable();
            $table->unsignedBigInteger('info_type');
            $table->foreign('info_type')->on('information_types')->references('id');
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
        Schema::dropIfExists('informations');
    }
}
