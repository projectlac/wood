<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Newscategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    
        Schema::create('new_cat', function (Blueprint $table) {
            $table->increments('newcat_id');
            $table->string('newcat_name');
            $table->string('newcat_img');
            $table->string('newcat_url');
            $table->string('newcat_des');
            $table->tinyInteger('hide')->default(1);
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
        Schema::dropIfExists('new_cat');
    }
}
