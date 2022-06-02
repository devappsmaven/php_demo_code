<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThemesColorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('themes_colors', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('theme_id')->unsigned()->index();
            $table->foreign('theme_id')->references('id')->on('themes')->onDelete('cascade');
            $table->integer('color_id')->unsigned()->index();
            $table->foreign('color_id')->references('id')->on('colors')->onDelete('cascade');
            $table->boolean('active')->default(false);
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
        Schema::dropIfExists('themes_colors');
    }
}
