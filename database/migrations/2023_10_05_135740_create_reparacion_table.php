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
        Schema::create('reparacion', function (Blueprint $table) {
            $table->id();
            $table->text('descripcion');
            $table->string('est_equipo');
            $table->integer('cantidad');
            $table->decimal('costo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reparacion');
    }
};
