<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSenatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('senators', function (Blueprint $table) {
            $table->id();
            $table->text('fullname_uz');
            $table->text('fullname_ru');
            $table->text('fullname_en');

            $table->text('job_and_position_uz');
            $table->text('job_and_position_ru');
            $table->text('job_and_position_en');

            $table->text('party');

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
        Schema::dropIfExists('senators');
    }
}
