<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoktorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doktorlar', function (Blueprint $table) {
            $table->id();
            $table->string('ad');
            $table->string('email')->unique();
            $table->string('sifre');
            $table->string('telefon')->nullable();
            $table->string('uzmanlik')->nullable();
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
        Schema::dropIfExists('doktorlar');
    }
}
