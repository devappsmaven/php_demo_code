<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('stylenumber');
            $table->string('fabric');
            $table->string('visibility');
            $table->string('name');
            $table->string('slug')->nullable($value = true);
            $table->decimal('price', 10, 2);
            $table->integer('min_quantity')->nullable($value = true);
            $table->string('status');
            $table->string('image');
            $table->longText('description')->nullable($value = true);
            $table->string('brand');
            $table->string('sizechartimage')->nullable($value = true);
            $table->longText('sizechartdescription')->nullable($value = true);
            $table->integer('view_count')->default(0);
            /*$table->boolean('frontenable')->default(true);
            $table->string('frontimage')->nullable($value = true);
            $table->string('rightimage')->nullable($value = true);
            $table->boolean('rightenable')->default(false);
            $table->string('backimage')->nullable($value = true);
            $table->boolean('backenable')->default(false);
            $table->string('leftimage')->nullable($value = true);
            $table->boolean('leftenable')->default(false);*/

            /*$table->boolean('frontguidelineshorizontal')->default(true);
            $table->boolean('frontguidelinesvertical')->default(true);
            $table->boolean('frontguidelinesyouth')->default(false);
            $table->boolean('frontguidelinesadult')->default(false);
            $table->boolean('frontguidelinesleftchest')->default(false);
            $table->integer('frontwidth')->nullable($value = true)->default(1);
            $table->integer('frontheight')->nullable($value = true)->default(1);
            $table->integer('frontleft')->nullable($value = true)->default(1);
            $table->integer('fronttop')->nullable($value = true)->default(1);
            $table->boolean('rightguidelineshorizontal')->default(true);
            $table->boolean('rightguidelinesvertical')->default(true);
            $table->boolean('rightguidelinesyouth')->default(false);
            $table->boolean('rightguidelinesadult')->default(false);
            $table->boolean('rightguidelinesleftchest')->default(false);
            $table->integer('rightwidth')->nullable($value = true)->default(1);
            $table->integer('rightheight')->nullable($value = true)->default(1);
            $table->integer('rightleft')->nullable($value = true)->default(1);
            $table->integer('righttop')->nullable($value = true)->default(1);
            $table->boolean('backguidelineshorizontal')->default(true);
            $table->boolean('backguidelinesvertical')->default(true);
            $table->boolean('backguidelinesyouth')->default(false);
            $table->boolean('backguidelinesadult')->default(false);
            $table->boolean('backguidelinesleftchest')->default(false);
            $table->integer('backwidth')->nullable($value = true)->default(1);
            $table->integer('backheight')->nullable($value = true)->default(1);
            $table->integer('backleft')->nullable($value = true)->default(1);
            $table->integer('backtop')->nullable($value = true)->default(1);
            $table->boolean('leftguidelineshorizontal')->default(true);
            $table->boolean('leftguidelinesvertical')->default(true);
            $table->boolean('leftguidelinesyouth')->default(false);
            $table->boolean('leftguidelinesadult')->default(false);
            $table->boolean('leftguidelinesleftchest')->default(false);
            $table->integer('leftwidth')->nullable($value = true)->default(1);
            $table->integer('leftheight')->nullable($value = true)->default(1);
            $table->integer('leftleft')->nullable($value = true)->default(1);
            $table->integer('lefttop')->nullable($value = true)->default(1);
            $table->decimal('_INFANT')->nullable($value = true)->default(0);
            $table->decimal('_INFANTWHITE')->nullable($value = true)->default(0);
            $table->decimal('_TODDLER')->nullable($value = true)->default(0);
            $table->decimal('_TODDLERWHITE')->nullable($value = true)->default(0);
            $table->decimal('_YOUTH')->nullable($value = true)->default(0);
            $table->decimal('_YOUTHWHITE')->nullable($value = true)->default(0);
            $table->decimal('_ADULT')->nullable($value = true)->default(0);
            $table->decimal('_ADULTWHITE')->nullable($value = true)->default(0);
            $table->decimal('_2xl')->nullable($value = true)->default(0);
            $table->decimal('_2xlWHITE')->nullable($value = true)->default(0);
            $table->decimal('_3xl')->nullable($value = true)->default(0);
            $table->decimal('_3xlWHITE')->nullable($value = true)->default(0);
            $table->decimal('_4xl')->nullable($value = true)->default(0);
            $table->decimal('_4xlWHITE')->nullable($value = true)->default(0);
            $table->decimal('_5xl')->nullable($value = true)->default(0);
            $table->decimal('_5xlWHITE')->nullable($value = true)->default(0);
            $table->decimal('_ONE_SIZE')->nullable($value = true)->default(0);
            $table->decimal('_ONE_SIZEWHITE')->nullable($value = true)->default(0);*/
            $table->boolean('default')->default(false);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            /*$table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
