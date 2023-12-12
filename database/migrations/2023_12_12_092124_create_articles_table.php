<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->increments('id');
            $table->string('Title');
            $table->string('Description');
            $table->string('Image');
            $table->integer('Category');
            $table->foreign('Category')->references('id')->on('categories');
            $table->integer('tag1');
            $table->foreign('tag1')->references('id')->on('tags');
            $table->integer('tag2');
            $table->foreign('tag2')->references('id')->on('tags');
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
