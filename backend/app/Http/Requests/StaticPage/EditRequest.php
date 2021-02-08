<?php

namespace App\Http\Requests\StaticPage;

use Illuminate\Foundation\Http\FormRequest;

class EditRequest extends FormRequest
{
    /**
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
            'title'=>'required|max:100',
            'slug'=>'required|max:150',
            'details'=>'required|max:2000',
            'active'=>'max:1',
            'image'=>'image'
        ];
    }
}