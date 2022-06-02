<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDesignSizeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('design_size', function (Blueprint $table) 
        {
            $table->increments('id');
            $table->integer('quantity')->nullable($value = true);
            $table->decimal('price', 10, 2)->nullable($value = true);
            $table->decimal('ammount', 10, 2)->nullable($value = true);
            $table->integer('design_id')->unsigned()->index();
            $table->foreign('design_id')->references('id')->on('designs')->onDelete('cascade');
            $table->integer('size_id')->unsigned()->index();
            $table->foreign('size_id')->references('id')->on('sizes')->onDelete('cascade');
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
        Schema::dropIfExists('design_size');
    }
}
