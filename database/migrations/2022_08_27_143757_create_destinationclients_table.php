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
        Schema::create('destinationclients', function (Blueprint $table) {
            $table->id();
            $table->integer('nombreplace');
            $table->unsignedBigInteger('voyages_id');
            $table->foreign('voyages_id')
            ->references('id')
            ->on('voyages')
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
        Schema::dropIfExists('destinationclients');
    }
};
