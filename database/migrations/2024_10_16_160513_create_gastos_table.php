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
        Schema::create('gastos', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion'); // Descripción del gasto
            $table->decimal('monto', 8, 2);
            $table->date('fecha');
            $table->string('categoria'); // Categoría del gasto
            $table->text('notas')->nullable(); // Notas adicionales sobre el gasto
            $table->boolean('recurrente')->default(false); // Indica si el gasto es recurrente
            $table->string('metodo_pago')->nullable();
            $table->string('frecuencia')->nullable(); // Frecuencia del gasto (Mensual, Anual, Ocasional)
            $table->string('estado')->default('Pendiente'); // Estado del gasto (Pendiente, Pagado, Cancelado)
            $table->string('moneda', 3)->default('USD'); // Moneda en la que se realiza el gasto (por ejemplo, USD)
            $table->string('proveedor')->nullable(); // Proveedor del servicio o producto relacionado con el gasto
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gastos');
    }
};
