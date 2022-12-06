<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeadOfSecretariatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('head_of_secretariats', function (Blueprint $table) {
            $table->id();

            $table->text('fullname_uz');
            $table->text('fullname_ru');
            $table->text('fullname_en');

            $table->text('okrug_uz');
            $table->text('okrug_ru');
            $table->text('okrug_en');

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
        Schema::dropIfExists('head_of_secretariats');
    }
}
