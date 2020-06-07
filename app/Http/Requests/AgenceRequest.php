<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AgenceRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
<<<<<<< HEAD
            'libelle' => 'required|max:255,'.$this->id,
            'libelle_ar' => 'required|max:255',
=======
            'libelle' => 'required|max:255|unique:agences,libelle,'.$this->id,
>>>>>>> b0f80c4ff80cac1c41e00ad7245c5bdbf70bd5a5
            'adresse' => 'required|max:255',
            'ref_commune_id' => 'required',
        ];
    }
}