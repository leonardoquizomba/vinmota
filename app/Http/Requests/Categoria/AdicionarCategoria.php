<?php

namespace App\Http\Requests\Categoria;

use App\Models\Categoria;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AdicionarCategoria extends FormRequest
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
    public function rules()
    {
        return [
            'nome' => [
                'bail', 'required', 'max:191', Rule::unique(Categoria::class, 'nome')
            ],
            'descricao' => ['max:191']
        ];
    }

    public function attributes()
    {
        return [
            'nome' => 'Nome',
            'descricao' => 'Descrição'
        ];
    }
}
