<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePromoCodeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promo_codes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('description');
            $table->string('type');
            $table->decimal('amount', 10, 2);
            $table->string('slug')->nullable($value = true);
            $table->boolean('freeshipping')->nullable($value = true);
            $table->timestamp('expirationdate')->nullable($value = true);
            $table->decimal('minimumspend', 10, 2)->nullable($value = true);
            $table->decimal('maximumspend', 10, 2)->nullable($value = true);
            $table->boolean('individualuseonly')->nullable($value = true);
            $table->boolean('excludesaleitems')->nullable($value = true);
            $table->integer('limitpercoupon')->nullable($value = true);
            $table->integer('limitperuser')->nullable($value = true);
            $table->string('status');
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
        Schema::dropIfExists('promo_codes');
    }
}
