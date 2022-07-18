<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Footer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('config', function (Blueprint $table) {
            $table->increments('id');
            $table->string('gioithieu', 255);
            $table->string('phone', 255);
            $table->text('diachi');
            $table->string('fb', 255);
            $table->string('yt', 255);
            $table->string('zl', 255);
            $table->string('email', 255);
            $table->string('link1', 255);
            $table->string('link2', 255);
            $table->string('link3', 255);
            $table->string('banner', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('config');
    }
}
