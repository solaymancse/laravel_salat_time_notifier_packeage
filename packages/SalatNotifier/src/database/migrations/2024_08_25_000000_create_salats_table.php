<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalatsTable extends Migration
{
    public function up()
    {
        Schema::create('salats', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->time('time');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('salats');
    }
}
