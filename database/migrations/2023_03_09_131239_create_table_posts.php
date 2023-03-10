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
    //php artisan migrate: refresh
     //php artisan migrate
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('body');
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     * php artisan migrate: reset
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
