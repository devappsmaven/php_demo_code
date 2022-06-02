<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSidesPrintAreasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sides_print_areas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('print_area_id')->unsigned()->index();
            $table->foreign('print_area_id')->references('id')->on('print_areas')->onDelete('cascade');
            $table->integer('side_id')->unsigned()->index();
            $table->foreign('side_id')->references('id')->on('sides')->onDelete('cascade');
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
        Schema::dropIfExists('sides_print_areas');
    }
}
