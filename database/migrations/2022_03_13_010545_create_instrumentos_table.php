<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instrumentos', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->id();
            $table->bigInteger('tipo')->unsigned();
            $table->string('nombre',50);
            $table->string('modelo',50);
            $table->string('descripcion',50);
            $table->double('cantidad',50);
            $table->double('precio',50);
            $table->string('imagen',255);
        
         $table->timestamps();


$table->foreign('tipo')->references('codTipo')->on('tipos')
->onDelete("cascade");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('instrumentos');
    }
};
