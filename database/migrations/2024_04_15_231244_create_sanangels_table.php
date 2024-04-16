<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSanangelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sanangels', function (Blueprint $table) {
            $table->id();
            $table->string('departamento',30);
            $table->string('area',30);
            $table->string('userresp',30);
            $table->string('tipoequipo',30);
            $table->char('marcatipo');
            $table->char('procesador');
            $table->integer('ram');
            $table->char('almacenamiento');
            $table->char('comentarios',254);
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
        Schema::dropIfExists('sanangels');
    }
}
