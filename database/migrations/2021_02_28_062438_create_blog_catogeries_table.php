<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogCatogeriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_catogeries', function (Blueprint $table) {
            
            $table->id();
            $table->string('catogery_name');
            $table->string('short_description');
            $table->string('seo_title');
            $table->string('seo_description');
            $table->string('seo_keyword');
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
        Schema::dropIfExists('blog_catogeries');
    }
}
