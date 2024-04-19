<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLivretesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('livretes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('taxista_id')->constrained('taxistas');
            $table->string('matricula1',20);
            $table->string('modelo1',20);
            $table->string('marca1',15);
            $table->string('ndemotor1',120);
            $table->string('cor1',10);
            $table->string('medidaspneus',25);
            $table->string('pesobruto',1);
            $table->string('dentreixos',10);
            $table->string('servico',100);
            $table->string('cilindrada',100);
            $table->string('ndequadro1',100);
            $table->string('lotacao',100);
            $table->string('tara',100);
            $table->string('tipodecaixa',100);
            $table->string('combustivel',100);
            $table->string('ndecilindros',100);
            $table->date('dataregistro');
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
        Schema::dropIfExists('livretes');
    }
}
