<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
   
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('nome',30)->unique();
            $table->string('descricao',100)->comment('Descricao do Produto');
            $table->string('marca',30);
            $table->integer('valor');
            $table->timestamps();

        });
 }

   
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}
