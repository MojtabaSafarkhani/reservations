<?php

namespace App\Http\Requests\Profile;

use App\Actions\Fortify\PasswordValidationRules;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateRequest extends FormRequest
{
    use PasswordValidationRules;

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
            'name' => ['required', 'max:70'],
            'email' => ['required', 'email', Rule::unique('users')->ignore($this->user)],
            'oldPassword' => ['nullable'],
            'password' => ['nullable', 'confirmed', 'min:9'],
        ];
    }
}
