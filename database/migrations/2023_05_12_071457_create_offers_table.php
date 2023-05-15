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
        Schema::create('offers', function (Blueprint $table) {

            $table->id();
            $table->string('top_title')->nullable();
            $table->string('title')->nullable();
            $table->string('sub_title')->nullable();
            $table->string('bottom_title')->nullable();
            $table->string('slider_images')->nullable();
            $table->mediumText('seo_description');
            $table->string('meta_title');
            $table->text('meta_description')->nullable();
            $table->tinyInteger('status')->default('0');
            $table->string('created_by');
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
        Schema::dropIfExists('offers');
    }
};
