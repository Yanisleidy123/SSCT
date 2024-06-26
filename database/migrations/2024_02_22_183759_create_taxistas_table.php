<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaxistasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taxistas', function (Blueprint $table) {
            $table->id();
            $table->string('nome',100);
            $table->string('ndebi',14);
            $table->string('genero',8);
            $table->date('data');
            $table->string('numerotelefone',17);
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
        Schema::dropIfExists('taxistas');
    }
}
