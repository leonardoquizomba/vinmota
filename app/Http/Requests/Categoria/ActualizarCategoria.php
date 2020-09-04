<?php

namespace App\Http\Requests\Categoria;

use App\Models\Categoria;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ActualizarCategoria extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(Request $request)
    {
        return [
            'nome' => [
                'bail', 'required', 'max:191', Rule::unique(Categoria::class, 'nome')->ignore($request->route('categoria'))
            ],
            'descricao' => ['max:191']
        ];
    }
}
