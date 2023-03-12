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
        Schema::create('tabulations', function (Blueprint $table) {
            $table->id();
            $table->string('candino');
            $table->string('namecan');
            $table->string('deptc');
            $table->string('eventc');
            $table->string('gender');
            $table->string('image')->default('default.jpg');
            $table->string('currentc')->default('NO RECORDS');
            $table->string('optiona')->default('NO RECORDS');
            $table->string('optionb')->default('NO RECORDS');
            $table->string('optionc')->default('NO RECORDS');
            $table->integer('agec')->default(0);
            $table->integer('vpointsc')->default(0);
            $table->DECIMAL('vscores')->default(0);
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
        Schema::dropIfExists('tabulations');
    }
};
