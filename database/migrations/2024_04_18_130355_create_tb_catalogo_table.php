<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tb_catalogo', function (Blueprint $table) {
            $table->id();
            $table->string("categoria_prod")->nullable();
            $table->string('nombre_prod');
            $table->string('imagen_url');
            $table->text('descripcion');
            $table->float('precio_cup');
            $table->float('precio_usd');
            $table->string('publicado_por');
            $table->string('editado_por');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_catalogo');
    }
};
