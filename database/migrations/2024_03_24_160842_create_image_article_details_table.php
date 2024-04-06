<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('image_article_details', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('article_description_id')->unsigned();
            $table->string('image')->nullable();
            $table->string('description_en')->nullable();
            $table->foreign('article_description_id')->references('id')->on('article_descriptions')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('image_article_details');
    }
};
