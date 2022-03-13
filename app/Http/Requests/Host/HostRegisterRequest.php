<?php

namespace App\Http\Requests\Host;

use Illuminate\Foundation\Http\FormRequest;

class HostRegisterRequest extends FormRequest
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
            'phone' => ['required', 'max:25', 'min:11'],
            'national_code' => ['required', 'max:10', 'min:10','unique:hosts'],
            'national_card_photo' => ['required', 'max:1024', 'image'],
            'address' => ['required'],
        ];
    }
}
