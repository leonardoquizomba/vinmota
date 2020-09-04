<?php

namespace App\Http\Requests\Cardapio;

use App\Models\Cardapio;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AdicionarCardapio extends FormRequest
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
                'bail', 'required', 'max:191', Rule::unique(Cardapio::class, 'nome')
            ],
            'preco' => [
                'bail', 'required','numeric'
            ],
            'categoria_id' => [
                'bail', 'required'
            ],
            'descricao' => [
                'bail', 'max:255'
            ],
            'arquivos_id' => [
                'bail','nullable'
            ]
        ];
    }

    public function attributes()
    {
        return [
            'nome' => 'Nome',
            'preco' => 'Preço',
            'categoria_id' => 'Categoria',
            'descricao' => 'Descrição',
            'arquivos_id' => 'Imagem',
        ];
    }
}
