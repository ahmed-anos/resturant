<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMainImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('main_images', function (Blueprint $table) {
            $table->id();
            $table->string('banner_image')->default('banner-bg.jpg');
            $table->string('about_image')->default('welcome-bg.png');
            $table->string('menu_image')->default('food-bg.png');
            $table->string('reservation_image')->default('deshes1.png');
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
        Schema::dropIfExists('main_images');
    }
}
