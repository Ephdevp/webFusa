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
        Schema::create('tb_mensajes', function (Blueprint $table) {
            $table->id();
            $table->string('remitente');
            $table->text('mensaje');
            $table->string('email')->nullable();
            $table->bigInteger('telefono');
            $table->boolean("check")->default(false);
            $table->boolean("leido")->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_mensajes');
    }
};
