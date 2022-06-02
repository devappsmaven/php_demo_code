<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('url')->nullable($value = true);
            $table->string('file')->nullable($value = true);
            $table->string('slug')->nullable($value = true);
            $table->string('type')->nullable($value = true);
            $table->string('size')->nullable($value = true);
            $table->string('dimensions')->nullable($value = true);
            $table->string('uploaded_to')->nullable($value = true);
            $table->string('caption')->nullable($value = true);
            $table->string('alt')->nullable($value = true);
            $table->string('description')->nullable($value = true);
            $table->integer('user_id')->unsigned();
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
        Schema::dropIfExists('media');
    }
}
