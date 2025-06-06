<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('logo')->nullable();
            $table->text('description')->nullable();
            $table->text('location')->nullable();
            $table->json('phone')->nullable();
            $table->string('email')->nullable();
            // $table->string('banner_image');
            // $table->string('about_image');
            $table->string('about_desc_first');
            $table->string('about_desc_second');
            // $table->string('reservation_image');
            $table->json('social_links')->nullable();
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
        Schema::dropIfExists('settings');
    }
}
