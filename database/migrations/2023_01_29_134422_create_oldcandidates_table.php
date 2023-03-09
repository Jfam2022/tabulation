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
        Schema::create('oldcandidates', function (Blueprint $table) {
            $table->id();
            $table->string('oldcandino');
            $table->string('oldnamecan');
            $table->string('olddeptc');
            $table->string('oldeventc');
            $table->string('oldtagsc');
            $table->string('oldnotesc');
            $table->string('oldcurrentc');
            $table->string('oldoptiona');
            $table->string('oldoptionb');
            $table->string('oldoptionc');
            $table->integer('oldagec')->default(0);
            
            $table->integer('oldvpointsc')->default(0);
            $table->integer('oldvscores')->default(0);
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
        Schema::dropIfExists('oldcandidates');
    }
};
