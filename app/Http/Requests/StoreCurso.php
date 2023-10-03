<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCurso extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name'          => 'required|min:3|max:10',
            'slug'          => 'required|unique:cursos',
            'description'   => 'required',
            'categoria'     => 'required'
           
        ];
    }
// la funcion tiene que ser asi messages porq asi esta definida y es asi como hara cambiar el mensaje  que quiere que diga
    public function messages() :array
    {
        return [
            'description.required' => 'La descripcion es obligatoria'
        ];
    }
// sirve para cambiar los atributos definidos de el lang por otro nombre
    public function attributes() :array
    {
        return [
            'name' => 'nombre del curso'
        ];
    }
}
