<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePriceShirtChartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('price_shirts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('RANGEFROM');
            $table->integer('RANGETO');
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
            $table->decimal('_ONE_SIZEWHITE')->nullable($value = true)->default(0);
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
        Schema::dropIfExists('price_shirts');
    }
}
