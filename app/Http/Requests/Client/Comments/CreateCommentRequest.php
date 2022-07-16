<?php

namespace App\Http\Requests\Client\Comments;

use Illuminate\Foundation\Http\FormRequest;

class CreateCommentRequest extends FormRequest
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
            'rating' => ['required', 'numeric', 'gte:1', 'lte:7'],
            'comment' => ['required', 'string', 'max:200','min:10'],
        ];
    }
}
