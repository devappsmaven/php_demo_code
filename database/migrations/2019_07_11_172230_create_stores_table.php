<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('name');
            $table->string('newname')->nullable($value = true);
            $table->string('statusname')->nullable($value = true);
            $table->string('messagename')->nullable($value = true);
            $table->string('banner');
            $table->string('newbanner')->nullable($value = true);
            $table->string('statusbanner')->nullable($value = true);
            $table->string('messagebanner')->nullable($value = true);
            $table->string('slogan');
            $table->string('newslogan')->nullable($value = true);
            $table->string('statuslogan')->nullable($value = true);
            $table->string('messagelogan')->nullable($value = true);
            $table->string('slug');
            $table->string('status');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stores');
    }
}
