<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlacklistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blacklists', function (Blueprint $table) {
            $table->increments('id');            
            $table->integer('users_id')->unsigned();
            $table->foreign('users_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');
            $table->enum('tipo',['fisica', 'juridica']);
            $table->string('cnpjcpf', 100);
            $table->integer('rg');
            $table->string('razaosocial', 155);
            $table->string('endereco', 155);
            $table->string('complemento', 155);
            $table->string('bairro', 155);
            $table->string('cidade', 155);
            $table->integer('cep');
            $table->string('uf', 50);
            $table->string('email');
            $table->string('fone', 50);
            $table->string('celular', 50);
            $table->string('natoperacao', 155);
            $table->date('dtocorrencia');
            $table->integer('numcontrato');
            $table->double('price', 10, 2);
            $table->text('obs')->nullable();
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
        Schema::dropIfExists('blacklist');
    }
}
