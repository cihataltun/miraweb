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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->timestamps();
            // $table->tinyInteger('status')->default('0');
            // $table->unsignedBigInteger('parent_id')->nullable();
            // $table->mediumText('description');
            // $table->string('image')->nullable();
            // $table->string('meta_title')->nullable();
            // $table->text('meta_description')->nullable();
            // $table->text('meta_keyword')->nullable();
            // $table->string('created_by');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
};
