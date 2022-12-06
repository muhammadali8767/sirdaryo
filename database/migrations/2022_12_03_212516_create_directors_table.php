<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDirectorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('directors', function (Blueprint $table) {
            $table->id();
            $table->text('job_title_uz');
            $table->text('job_title_ru');
            $table->text('job_title_en');

            $table->text('fullname_uz');
            $table->text('fullname_ru');
            $table->text('fullname_en');

            $table->text('biography_uz');
            $table->text('biography_ru');
            $table->text('biography_en');

            $table->text('obligation_uz');
            $table->text('obligation_ru');
            $table->text('obligation_en');

            $table->text('activity_uz');
            $table->text('activity_ru');
            $table->text('activity_en');

            $table->text('phone');
            $table->text('reception_times');

            $table->text('fb_link');
            $table->text('tw_link');
            $table->text('ig_link');
            $table->text('in_link');
            $table->text('yt_link');
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
        Schema::dropIfExists('directors');
    }
}
