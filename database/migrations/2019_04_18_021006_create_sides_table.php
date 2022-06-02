<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sides', function (Blueprint $table) 
        {
            $table->increments('id');
            $table->string('name');
            $table->string('status');
            $table->string('slug');
            $table->integer('order')->nullable($value = true);
            /*$table->string('backgroundimage')->nullable($value = true);
            $table->boolean('empty')->default(true);
            $table->string('slug')->nullable($value = true);
            $table->string('filename')->nullable($value = true);
            $table->text('image')->nullable($value = true);
            $table->text('json')->nullable($value = true);
            $table->text('svg')->nullable($value = true);
            //$table->integer('design_id')->unsigned();*/
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            //$table->foreign('design_id')->references('id')->on('designs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sides');
    }
}
