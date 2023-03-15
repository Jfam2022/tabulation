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
        Schema::create('creterias', function (Blueprint $table) {
            $table->id();
            $table->string('creteria');
            $table->DECIMAL('percent')->default(0);
            $table->DECIMAL('scores')->default(0);
            $table->string('cricandidates');
            $table->string('judgename');
            $table->string('critag');
            $table->string('cricurent');
            $table->string('crievent');
            $table->string('crinotes');
            $table->string('crinotes1');
            $table->string('crinotes2');
            $table->string('crioldoptiona');
            $table->string('crioldoptionb');
            $table->string('crioldoptionc');
            $table->DECIMAL('numberoption')->default(0);
            $table->DECIMAL('numberoption1')->default(0);
            $table->integer('numberoption2')->default(0);
            $table->integer('numberoption3')->default(0);
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
        Schema::dropIfExists('creterias');
    }
};