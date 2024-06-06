<?php
// database/migrations/xxxx_xx_xx_create_hastas_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHastasTable extends Migration
{
    public function up()
    {
        Schema::create('hastas', function (Blueprint $table) {
            $table->id();
            $table->string('tc_no')->unique();
            $table->string('ad_soyad');
            $table->string('email')->unique();
            $table->string('telefon')->nullable();
            $table->text('adres');
            $table->string('sifre');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('hastas');
    }
}

