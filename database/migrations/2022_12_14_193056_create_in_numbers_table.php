<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInNumbersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('in_numbers', function (Blueprint $table) {
            $table->id();
            $table->string('title_uz');
            $table->string('title_ru')->nullable();
            $table->string('title_en')->nullable();
            $table->string('sub_title_uz');
            $table->string('sub_title_ru')->nullable();
            $table->string('sub_title_en')->nullable();
            $table->string('value_uz');
            $table->string('value_ru')->nullable();
            $table->string('value_en')->nullable();
            $table->string('image');
            $table->boolean('is_active')->default(1);
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
        Schema::dropIfExists('in_nummbers');
    }
}
