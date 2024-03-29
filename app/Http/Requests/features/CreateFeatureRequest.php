<?php

namespace App\Http\Requests\features;

use Illuminate\Foundation\Http\FormRequest;

class CreateFeatureRequest extends FormRequest
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
            'image' => ['required', 'image'],
            'title' => ['required', 'max:45', 'unique:features,title'],
        ];
    }
}
