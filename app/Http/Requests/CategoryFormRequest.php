<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryFormRequest extends FormRequest
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
     * @return array<string, mixed>
     */

    // Failo priėmimo taisyklės: pavadinimas(forma), failo formatas  
    public function rules()
    {
        return [
            'name'=>'required|min:2|max:40',
            'image'=>'required|mimes:png,jpg,jpeg'
        ];
    }
}