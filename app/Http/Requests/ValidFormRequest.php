<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'libelle'=>'required|text',
            'marque'=>'required',
            'prix'=>'required|float',
            'stock'=>'required|between:1,4|entier',
            'image'=>'required|mimes:png,jpe,avg',
        ];
    }
}
