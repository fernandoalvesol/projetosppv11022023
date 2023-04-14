<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProvedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provedores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('razaosocial', 155);
            $table->string('nomefantasia', 155);
            $table->enum('tipo',['fisica','juridica']);
            $table->string('cnpj', 50);
            $table->integer('inestadual');
            $table->integer('inmunicipal');
            $table->string('email', 155);
            $table->string('site', 155);            
            $table->integer('atoanatel');
            $table->string('fone', 50);
            $table->string('contato', 155);
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
        Schema::dropIfExists('provedores');
    }
}
