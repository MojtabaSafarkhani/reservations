<?php

namespace App\Http\Requests\Client\Order;

use Illuminate\Foundation\Http\FormRequest;

class CreateOrderRequest extends FormRequest
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
            'check_in' => ['required', 'before:check_out', 'persian_num','shamsi_date_between:1400,1410'],
            'check_out' => ['required', 'after:check_in','persian_num','shamsi_date_between:1400,1410'],
            'total_person' => ['required', 'gte:1', 'lte:7'],
        ];
    }
}
