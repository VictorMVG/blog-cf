<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCourse extends FormRequest
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
            'name' => ['required', 'max:255', 'min:5'],
            'description' => ['required', 'max:255', 'min:5'],
            'category' => ['required', 'max:255', 'min:5']
        ];
    }
    //personaliza los mensajes de error
    public function messages(): array
    {
        return [
            'name.required' => 'El nombre es requerido',
            'name.max' => 'El nombre es demasiado largo',
            'name.min' => 'El nombre es demasiado corto',
            'description.required' => 'La descripción es requerida',
            'description.max' => 'La descripción es demasiado larga',
            'description.min' => 'La descripción es demasiado corta',
            'category.required' => 'La categoría es requerida',
            'category.max' => 'La categoría es demasiado larga',
            'category.min' => 'La categoría es demasiado corta'
        ];
    }
    //personaliza los atributos
    public function attributes() {
        return [
            'description.require' => 'Debe ingresar una descripción para el curso',
        ];
    }
}
