<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFontsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fonts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('fontcategory_id')->unsigned();
            $table->string('displayname');
            $table->string('name')->nullable($value = true);
            $table->integer('size');
            $table->string('slug')->nullable($value = true);
            $table->string('file');
            $table->string('status');
            $table->string('description')->nullable($value = true);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();

            $table->foreign('fontcategory_id')->references('id')->on('font_categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fonts');
    }
}
