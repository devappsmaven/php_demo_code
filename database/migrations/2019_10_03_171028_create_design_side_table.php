<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDesignSideTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('design_sides', function (Blueprint $table) {
            $table->increments('id');
            $table->string('side')->nullable($value = true);
            $table->text('image')->nullable($value = true);
            $table->text('json')->nullable($value = true);
            $table->text('svg')->nullable($value = true);
            $table->integer('width_div')->nullable($value = true)->default(1);
            $table->integer('height_div')->nullable($value = true)->default(1);
            $table->integer('width_canvas')->nullable($value = true)->default(1);
            $table->integer('height_canvas')->nullable($value = true)->default(1);
            $table->integer('left_canvas')->nullable($value = true)->default(1);
            $table->integer('top_canvas')->nullable($value = true)->default(1);
            $table->string('design_image')->nullable($value = true);
            $table->string('design_product_image')->nullable($value = true);
            $table->integer('design_id')->unsigned();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            $table->foreign('design_id')->references('id')->on('designs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('design_sides');
    }
}
