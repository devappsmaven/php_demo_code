<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClipartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliparts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('filename');
            $table->integer('numbercolors');
            $table->string('slug')->nullable($value = true);
            $table->string('type')->nullable($value = true);
            $table->boolean('editable')->nullable($value = true);
            $table->string('colorlist')->nullable($value = true);
            $table->string('status');
            $table->integer('category_id')->unsigned();
            $table->integer('subcategory_id')->unsigned();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            $table->foreign('category_id')->references('id')->on('clipart_categories')->onDelete('cascade');
            $table->foreign('subcategory_id')->references('id')->on('clipart_sub_categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cliparts');
    }
}
