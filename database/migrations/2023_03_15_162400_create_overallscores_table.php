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
        Schema::create('overallscores', function (Blueprint $table) {
            $table->id();
            $table->string('namejudge');
            $table->string('namecandidates');
            $table->DECIMAL('percentscores')->default(0);
            $table->integer('overscores')->default(0);
            $table->integer('overscores1')->default(0);
            $table->integer('overscores2')->default(0);
            $table->integer('overscores3')->default(0);
            $table->string('overalltags')->default('NO RECORDS');
            $table->string('overalltags1')->default('NO RECORDS');
            $table->string('overalltags2')->default('NO RECORDS');
            $table->string('overalltags3')->default('NO RECORDS');
            $table->string('overalltags4')->default('NO RECORDS');
            $table->string('overalltags5')->default('NO RECORDS');
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
        Schema::dropIfExists('overallscores');
    }
};
