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
            $table->increments('id');
            $table->integer('category_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('last_user_id')->unsigned();
            $table->string('title');
            $table->string('subtitle');
            $table->text('content');
            $table->string('page_image')->nullable();
            $table->string('description')->nullable();
            $table->boolean('is_original')->default(false);
            $table->boolean('is_draft')->default(false);
            $table->integer('view_count')->unsigned()->default(0)->index();
            $table->timestamps();
            $table->softDeletes();
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
