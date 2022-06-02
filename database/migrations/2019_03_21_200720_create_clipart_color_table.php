<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClipartColorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clipart_colors', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('clipart_id')->unsigned()->index();
            $table->foreign('clipart_id')->references('id')->on('cliparts')->onDelete('cascade');
            $table->integer('color_id')->unsigned()->index();
            $table->foreign('color_id')->references('id')->on('colors')->onDelete('cascade');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clipart_colors');
    }
}
