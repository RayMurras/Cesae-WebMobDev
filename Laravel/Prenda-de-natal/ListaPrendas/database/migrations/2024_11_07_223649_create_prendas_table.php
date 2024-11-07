<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrendasTable extends Migration
{
    public function up(): void
    {
        Schema::create('prendas', function (Blueprint $table) {
            $table->id();
            $table->string('nome_prenda');
            $table->decimal('valor_previsto', 8, 2);
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->decimal('valor_gasto', 8, 2)->nullable();
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('prendas');
    }
};
