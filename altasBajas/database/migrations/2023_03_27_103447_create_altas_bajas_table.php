<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAltasBajasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('altas_bajas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_tipo_categoria_fk');
            $table->bigInteger('cantidad');
            $table->string('descripcion');
            $table->timestamps();

            $table->foreign('id_tipo_categoria_fk')->references('id')->on('tipos_categorias_cat')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('altas_bajas');
    }
}
