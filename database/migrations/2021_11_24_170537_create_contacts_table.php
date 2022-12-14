<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id()->startingValue(100101);
            $table->string('familya');
            $table->string('ism');
            $table->string('otasi');
            $table->string('jinsi');
            $table->string('manzil');
            $table->string('telefon');
            $table->string('email');
            $table->string('text');
            $table->string('file')->nullable();
            $table->tinyInteger('type')->default(1);
            $table->tinyInteger('seen')->default(0);
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
        Schema::dropIfExists('contacts');
    }
}
