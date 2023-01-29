<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChildcategoryUpdateRequest extends FormRequest
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
    public function rules()
    {
        $id = $this->route('childcategory');
       
        return [
            'name'=>'required|unique:childcategories,name,'.$id,
            'subcategory_id'=>'required'
        ];
    }
}
