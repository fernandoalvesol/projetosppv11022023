<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndicadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indicadores', function (Blueprint $table) {
            $table->increments('id');            
            $table->integer('blacklists_id')->unsigned();
            $table->foreign('blacklists_id')
                  ->references('id')
                  ->on('blacklists')
                  ->onDelete('cascade');
            $table->text('description');
            $table->boolean('visivel');
            $table->date('dtindicadores');
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
        Schema::dropIfExists('indicadores');
    }
}
