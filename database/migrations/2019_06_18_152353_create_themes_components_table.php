<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThemesComponentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('themes_components', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('active')->default(0);
            $table->string('image')->nullable(true);
            $table->integer('theme_id')->unsigned()->index();
            $table->foreign('theme_id')->references('id')->on('themes')->onDelete('cascade');
            $table->integer('component_id')->unsigned()->index();
            $table->foreign('component_id')->references('id')->on('components')->onDelete('cascade');
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
        Schema::dropIfExists('themes_components');
    }
}
