<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSportschoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sportschools', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('place');
            $table->text('description');
            $table->integer('price');
            $table->boolean('showers');
            $table->string('imagepath');
            $table->string('url');
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
        Schema::dropIfExists('sportschool');
    }
}
