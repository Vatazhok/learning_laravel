<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('category_id')->unsigned();
            $table->string('title');
            $table->text('content');
            $table->string('cover');
            $table->string('slug')->unique();
            $table->date('date');
            $table->time('time');
            $table->string('venue');
            $table->decimal('price');
            $table->string('settlement');
            $table->boolean('is_published')->default(false);

            $table->timestamp('published_at')->nullable();
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('categories');
            $table->index('is_published');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
