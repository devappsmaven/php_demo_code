<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDesignTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('designs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable($value = true);
            $table->string('filename')->nullable($value = true);
            $table->decimal('selling_price', 10, 2)->nullable($value = true);
            $table->string('comment')->nullable($value = true);
            $table->integer('number_shirts')->nullable($value = true);
            $table->decimal('price_per_shirt', 10, 2)->nullable($value = true);
            $table->decimal('total', 10, 2)->nullable($value = true);
            $table->string('status');
            $table->enum('type', ['Designstudio', 'Template', 'Store Design'])->nullable();
            $table->integer('user_id')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->integer('subcategory_id')->unsigned();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            $table->boolean('editable')->default(false);
            $table->integer('view_count')->default(0);
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('subcategory_id')->references('id')->on('subcategories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('designs');
    }
}
