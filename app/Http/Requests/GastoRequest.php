<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GastoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'descripcion' => ['required', 'string', 'max:255'],
            'monto' => ['required', 'numeric', 'min:0', 'max:999999.99'], // Monto debe ser numérico y mayor o igual a 0
            'fecha' => ['required', 'date'], // 
            'categoria' => ['required', 'string', 'max:100'],
            'notas' => ['nullable', 'string', 'max:500'],
            'recurrente' => ['required', 'boolean'],
            'metodo_pago' => ['nullable', 'string', 'max:50'],
            'frecuencia' => ['nullable', 'string', 'max:50'], // Se recomienda que sea 'Mensual', 'Anual', 'Ocasional'
            'estado' => ['required', 'string', 'max:50'],  // Se recomienda que sea 'Pendiente', 'Pagado', 'Cancelado'
            'moneda' => ['required', 'string', 'size:3'], // Debe ser exactamente 3 caracteres (ej. "USD")
            'proveedor' => ['nullable', 'string', 'max:100'], // Proveedor del gasto opcional
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            // Mensajes para descripcion
            'descripcion.required' => 'La descripción es obligatoria.',
            'descripcion.string' => 'La descripción debe ser un texto.',
            'descripcion.max' => 'La descripción no puede exceder los 255 caracteres.',

            // Mensajes para monto
            'monto.required' => 'El monto es obligatorio.',
            'monto.numeric' => 'El monto debe ser un número.',
            'monto.min' => 'El monto debe ser al menos 0.',
            'monto.max' => "El monto no puede exceder 999999.99.",

            // Mensajes para fecha
            'fecha.required' => 'La fecha es obligatoria.',
            'fecha.date' => 'La fecha debe ser una fecha válida.',

            // Mensajes para categoria
            'categoria.required' => 'La categoría es obligatoria.',
            'categoria.string' => 'La categoría debe ser un texto.',
            'categoria.max' => "La categoría no puede exceder los 100 caracteres.",

            // Mensajes para notas
            "notas.string" => "Las notas deben ser un texto.",
            "notas.max" => "Las notas no pueden exceder los 500 caracteres.",

            // Mensajes para recurrente
            "recurrente.required" => "El campo recurrente es obligatorio.",
            "recurrente.boolean" => "El campo recurrente debe ser verdadero o falso.",

            // Mensajes para metodo_pago
            "metodo_pago.string" => "El método de pago debe ser un texto.",
            "metodo_pago.max" => "El método de pago no puede exceder los 50 caracteres.",

            // Mensajes para frecuencia
            "frecuencia.string" => "La frecuencia debe ser un texto.",
            "frecuencia.max" => "La frecuencia no puede exceder los 50 caracteres.",

            // Mensajes para estado
            "estado.required" => "El estado es obligatorio.",
            "estado.string" => "El estado debe ser un texto.",
            "estado.max" => "El estado no puede exceder los 50 caracteres.",

            // Mensajes para moneda
            "moneda.required" => "La moneda es obligatoria.",
            "moneda.string" => "La moneda debe ser un texto.",
            "moneda.size" => "La moneda debe tener exactamente 3 caracteres.",

            // Mensajes para proveedor
            "proveedor.string" => "El proveedor debe ser un texto.",
            "proveedor.max" => "El proveedor no puede exceder los 100 caracteres.",
        ];
    }
}
