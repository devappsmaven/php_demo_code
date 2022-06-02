<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAdditionalFieldsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('name');
            $table->string('firstname');
            $table->string('lastname');
            $table->dateTime('birthday')->nullable($value = true);
            $table->string('username')->unique();
            $table->string('phone')->nullable($value = true);
            $table->boolean('newsletter')->default(false);
            $table->boolean('special_offers')->default(false);
            $table->string('billing_street')->nullable($value = true);
            $table->string('billing_city')->nullable($value = true);
            $table->string('billing_state')->nullable($value = true);
            $table->string('billing_zip')->nullable($value = true);
            $table->string('shipping_street')->nullable($value = true);
            $table->string('shipping_city')->nullable($value = true);
            $table->string('shipping_state')->nullable($value = true);
            $table->string('shipping_zip')->nullable($value = true);
            $table->string('company')->nullable($value = true);
            $table->string('cardcompany')->nullable($value = true);
            $table->string('image')->default('profile.png');
            $table->integer('lockout_time')->default(30);
            $table->string('type')->default('Customer');
            $table->boolean('verified')->default(false);
            $table->boolean('has_store')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('name');
            $table->dropColumn('firstname');
            $table->dropColumn('lastname');
            $table->dropColumn('birthday');
            $table->dropColumn('username');
            $table->dropColumn('phone');
            $table->dropColumn('newsletter');
            $table->dropColumn('special_offers');
            $table->dropColumn('billing_street');
            $table->dropColumn('billing_city');
            $table->dropColumn('billing_state');
            $table->dropColumn('billing_zip');
            $table->dropColumn('shipping_street');
            $table->dropColumn('shipping_city');
            $table->dropColumn('shipping_state');
            $table->dropColumn('shipping_zip');
            $table->dropColumn('company');
            $table->dropColumn('cardcompany');
            $table->dropColumn('image');
        });
    }
}
