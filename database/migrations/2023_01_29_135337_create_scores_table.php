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
        Schema::create('scores', function (Blueprint $table) {
            $table->id();
            $table->string('creteriascores');
            $table->integer('percentscores')->default(0);
            $table->integer('scores')->default(0);
            $table->integer('scores1')->default(0);
            $table->integer('scores2')->default(0);
            $table->string('scoreop1')->default('NO RECORDS');
            $table->string('scoreop2')->default('NO RECORDS');
            $table->string('scoreop3')->default('NO RECORDS');
            $table->string('scoreop4')->default('NO RECORDS');
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
        Schema::dropIfExists('scores');
    }
};
