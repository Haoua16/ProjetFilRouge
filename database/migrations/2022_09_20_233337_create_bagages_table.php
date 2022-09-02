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
        Schema::create('bagages', function (Blueprint $table) {
            $table->id();
            $table->string('nature');
            $table->string('nombrebagage');
            $table->string('montantpaye');
            $table->unsignedBigInteger('buses_id');
            $table->foreign('buses_id')
            ->references('id')
            ->on('buses')
            ->onDelete('cascade');
            $table->unsignedBigInteger('passagers_id');
            $table->foreign('passagers_id')
            ->references('id')
            ->on('passagers')
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
        Schema::dropIfExists('bagages');
    }
};
