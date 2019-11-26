<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategorySportschoolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_sportschool', function (Blueprint $table) {
            $table->integer('sportschool_id')->unsigned()->nullable();
            $table->foreign('sportschool_id')->references('sportschools_id')->on('sportschools');
            $table->integer('category_id')->unsigned()->nullable();
            $table->foreign('category_id')->references('category_id')->on('categories');
            /**/
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
        Schema::dropIfExists('category_sportschool');
    }
}
