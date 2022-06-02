<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePriceShirtTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('price_shirt_tables', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('RANGEFROM');
            $table->integer('RANGETO');
            $table->decimal('_1COLOR')->nullable($value = true)->default(0);
            $table->decimal('_2COLOR')->nullable($value = true)->default(0);
            $table->decimal('_3COLOR')->nullable($value = true)->default(0);
            $table->decimal('_4COLOR')->nullable($value = true)->default(0);
            $table->decimal('_5COLOR')->nullable($value = true)->default(0);
            $table->decimal('_6COLOR')->nullable($value = true)->default(0);
            $table->decimal('_7COLOR')->nullable($value = true)->default(0);
            $table->decimal('_8COLOR')->nullable($value = true)->default(0);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });

        Schema::create('price_shirt_table_tmps', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('RANGEFROM');
            $table->integer('RANGETO');
            $table->decimal('_1COLOR')->nullable($value = true)->default(0);
            $table->decimal('_2COLOR')->nullable($value = true)->default(0);
            $table->decimal('_3COLOR')->nullable($value = true)->default(0);
            $table->decimal('_4COLOR')->nullable($value = true)->default(0);
            $table->decimal('_5COLOR')->nullable($value = true)->default(0);
            $table->decimal('_6COLOR')->nullable($value = true)->default(0);
            $table->decimal('_7COLOR')->nullable($value = true)->default(0);
            $table->decimal('_8COLOR')->nullable($value = true)->default(0);
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
        Schema::dropIfExists('price_shirt_tables');
        Schema::dropIfExists('price_shirt_table_tmps');
    }
}
