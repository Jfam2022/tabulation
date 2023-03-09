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
        Schema::create('announcements', function (Blueprint $table) {
            $table->id();
            $table->string('step1');
            $table->string('step2');
            $table->string('step3');
            $table->string('step4');


            $table->string('event1');
            $table->string('name1');
            $table->string('avatar1')->default('default.jpg');

            $table->string('name2');
            $table->string('avatar2')->default('default.jpg');

            $table->string('name3');
            $table->string('avatar3')->default('default.jpg');

            $table->string('name4');
            $table->string('avatar4')->default('default.jpg');

            $table->string('avatarabout')->default('default.jpg');
            
            $table->string('phone');
            $table->string('email');
            $table->string('fb');
            $table->string('anountags1')->default('NO RECORDS');
            $table->string('anountags2')->default('NO RECORDS');
            $table->string('anountags3')->default('NO RECORDS');
            $table->string('anountags4')->default('NO RECORDS');
            $table->string('anountags5')->default('NO RECORDS');
            $table->string('status')->default('NO RECORDS');
            $table->integer('anounnumber1')->default(0);
            $table->integer('anounnumber2')->default(0);
            $table->integer('anounnumber3')->default(0);
           
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
        Schema::dropIfExists('announcements');
    }
};
