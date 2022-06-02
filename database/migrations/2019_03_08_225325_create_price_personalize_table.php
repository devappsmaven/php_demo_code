<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePricePersonalizeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('price_personalize_tables', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('RANGEFROM');
            $table->integer('RANGETO');
            $table->decimal('NAME')->nullable($value = true)->default(0);
            $table->decimal('NUMBER')->nullable($value = true)->default(0);
            $table->decimal('BOTH')->nullable($value = true)->default(0);
            $table->decimal('STROKECOLOR')->nullable($value = true)->default(0);
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
        Schema::dropIfExists('price_personalize_tables');
    }
}
