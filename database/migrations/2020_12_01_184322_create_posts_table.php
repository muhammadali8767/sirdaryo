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

            $table->string('title_uz');
            $table->string('title_ru')->nullable();
            $table->string('title_en')->nullable();

            $table->text('short_uz');
            $table->text('short_ru')->nullable();
            $table->text('short_en')->nullable();

            $table->text('text_uz');
            $table->text('text_ru')->nullable();
            $table->text('text_en')->nullable();

            $table->string('slug');
            $table->integer('seen')->default(0);
            $table->string('img')->nullable();

            $table->foreignId('user_id')->nullable()->constrained();
            $table->foreignId('category_id')->nullable()->constrained();

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
        Schema::dropIfExists('posts');
    }
}
