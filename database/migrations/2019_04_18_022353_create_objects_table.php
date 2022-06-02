<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('objects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type')->nullable($value = true);
            $table->string('value')->default(true);
            $table->string('slug')->nullable($value = true);
            $table->integer('side_id')->unsigned();
            $table->timestamp('created_at')->useCurrent();
            $table->foreign('side_id')->references('id')->on('sides')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('objects');
    }
}
