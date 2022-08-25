<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaticPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('static_pages', function (Blueprint $table) {
            $table->id();

            $table->string('title_uz');
            $table->string('title_ru')->nullable();
            $table->string('title_en')->nullable();

            $table->text('sub_title_uz')->nullable();
            $table->text('sub_title_ru')->nullable();
            $table->text('sub_title_en')->nullable();

            $table->text('text_uz');
            $table->text('text_ru')->nullable();
            $table->text('text_en')->nullable();

            $table->string('slug');
            $table->integer('seen')->default(0);
            $table->string('image')->nullable();
            $table->tinyInteger('type');

            $table->foreignId('user_id')->nullable()->constrained();
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
        Schema::dropIfExists('static_pages');
    }
}
