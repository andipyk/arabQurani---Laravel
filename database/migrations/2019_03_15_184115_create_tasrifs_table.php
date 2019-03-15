<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasrifsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasrifs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('arti')->nullable();
            $table->string('madi')->nullable();
            $table->string('mudhori')->nullable();
            $table->string('masdar')->nullable();
            $table->string('sifat')->nullable();
            $table->string('amr')->nullable();
            $table->string('bab')->nullable();
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
        Schema::dropIfExists('tasrifs');
    }
}
