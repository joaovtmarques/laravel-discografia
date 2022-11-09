<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAlbumRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules() {
        return [
          'name'=>'required|unique:albums',
          'year'=>'required|digits:4|integer|min:1901|max:'.(date('Y')+1)
        ];
    }

    public function messages() {
      return [
        'name.required' => 'O campo nome não pode estar vazio.',
        'name.unique' => 'Já existe um álbum com este nome.',
        'year.required' => 'O campo ano não pode estar vazio.',
        'year.max' => 'O ano não pode ser maior que 2023.',
      ];
    }
}
