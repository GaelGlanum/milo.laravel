<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('championships', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',50);
            $table->integer('user_id')->unsigned();
            $table->unsignedInteger('image_id')
                ->nullable();
            $table->timestamps();
        });
        Schema::table('championships', function (Blueprint $table) {
            $table->foreign('image_id')->references('id')->on('images');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('championships');
        Schema::enableForeignKeyConstraints();
    }
};
