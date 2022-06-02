<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrintAreasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('print_areas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('slug')->nullable($value = true);
            $table->string('status');
            $table->string('side')->nullable($value = true);
            $table->boolean('guidelineshorizontal')->default(true);
            $table->boolean('guidelinesvertical')->default(true);
            $table->boolean('guidelinesyouth')->default(false);
            $table->boolean('guidelinesadult')->default(false);
            $table->boolean('guidelinesleftchest')->default(false);
            $table->integer('width')->nullable($value = true)->default(1);
            $table->integer('height')->nullable($value = true)->default(1);
            $table->integer('left')->nullable($value = true)->default(1);
            $table->integer('top')->nullable($value = true)->default(1);
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
        Schema::dropIfExists('print_areas');
    }
}
