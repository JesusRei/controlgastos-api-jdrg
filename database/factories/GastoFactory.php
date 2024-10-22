<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Gasto>
 */
class GastoFactory extends Factory
{
    protected $model = \App\Models\Gasto::class;
    /**
     * Define the model's default state.
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'descripcion' => $this->faker->sentence,
            'monto' => $this->faker->randomFloat(2, 10, 1000),
            'fecha' => $this->faker->date,
            'categoria' => $this->faker->word,
            'notas' => $this->faker->paragraph,
            'recurrente' => $this->faker->boolean,
            'metodo_pago' => $this->faker->word,
            'frecuencia' => $this->faker->randomElement(['Mensual', 'Anual', 'Ocasional']),
            'estado' => $this->faker->randomElement(['Pendiente', 'Pagado', 'Cancelado']),
            'moneda' => 'USD',
            'proveedor' => $this->faker->company,
        ];
    }
}
