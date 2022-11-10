<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class StoreTrackRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules() {
      return [
        'name'=>[
          'required',
          Rule::unique('tracks', 'name')
            ->where(function($query){
              return $query->where("album_id", $this->album_id);
            })
        ],
        'number'=>'required|integer|min:0',
        'minutes'=>'required|integer|min:0',
        'seconds'=>'required|integer|min:0',
        'album_id'=>'required|integer',
      ];
    }

    public function messages() {
      return [
        'name.required' => 'O campo nome não pode estar vazio.',
        'name.unique' => 'Já existe uma faixa com este nome neste álbum.',
        'number.required' => 'O campo número da faixa não pode estar vazio.',
        'minutes.required' => 'O campo minutos da faixa não pode estar vazio.',
        'seconds.required' => 'O campo segundos da faixa não pode estar vazio.',
        'album_id.required' => 'Um álbum deve ser selecionado.',
      ];
    }
}
