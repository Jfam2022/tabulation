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
        Schema::create('passvotes', function (Blueprint $table) {
            $table->id();
            $table->string('votecandino');
            $table->string('votenamecan');
            $table->string('votedeptc');
            $table->string('voteeventc');
            $table->string('votecurrentc')->default('NO RECORDS');
            $table->string('voteoptiona')->default('NO RECORDS');
            $table->string('voteoptionb')->default('NO RECORDS');
            $table->string('voteoptionc')->default('NO RECORDS');
            $table->integer('voteagec')->default(0);
            $table->integer('votevpointsc')->default(0);
            $table->integer('votevscores')->default(0);
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
        Schema::dropIfExists('passvotes');
    }
};
