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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->string('avatar')->default('default.jpg');
            $table->string('role')->default(0);
            $table->string('password');
            $table->string('password1');
            $table->string('email');
            $table->integer('vote')->default(0);
            $table->string('status')->default('Enrolled');
            $table->string('status1')->default('RECORDS');
            $table->string('status2')->default('RECORDS');
            $table->integer('num1')->default(0);
            $table->integer('num2')->default(0);



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
        Schema::dropIfExists('students');
    }
};
