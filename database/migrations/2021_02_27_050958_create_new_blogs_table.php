<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_blogs', function (Blueprint $table) {
            $table->id();
            $table->string('article_title');
            $table->string('article_slug');
            $table->string('seo_title');
            $table->string('articel_category');
            $table->string('imagealt_tag');
            $table->string('image');
            $table->string('path');
            $table->longText('article_content');
            $table->string('shortde_scription');
            $table->string('seo_description');
            $table->string('tags');
            $table->string('seo_keyword');
            $table->string('article');
            $table->string('approve');
            $table->string('updated_by');
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
        Schema::dropIfExists('new_blogs');
    }
}
