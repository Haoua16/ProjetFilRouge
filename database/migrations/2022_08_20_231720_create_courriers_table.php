<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courriers', function (Blueprint $table) {
            $table->id();
            $table->string('nomdestinateur');
            $table->string('prenomdestinateur');
            $table->string('numerodestinateur');
            $table->string('nomdestinataire');
            $table->string('prenomdestinataire');
            $table->string('numerodestinataire');
            $table->string('nature');
            $table->string('valeur');
            $table->string('montantpaye');
            $table->unsignedBigInteger('buses_id');
            $table->foreign('buses_id')
            ->references('id')
            ->on('buses')
            ->onDelete('cascade');
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
        Schema::dropIfExists('courriers');
    }
};
