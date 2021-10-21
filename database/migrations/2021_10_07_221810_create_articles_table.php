<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->text('title');
            $table->text('body');
            $table->string('main_image');
            $table->text('image_title')->nullable();
            $table->string('sub_image_1')->nullable();
            $table->string('sub_image_2')->nullable();
            $table->string('sub_image_3')->nullable();
            $table->string('sub_image_4')->nullable();
            $table->string('link_url')->nullable();
            $table->string('link_text')->nullable();
            $table->string('category');
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
        Schema::dropIfExists('articles');
    }
}
