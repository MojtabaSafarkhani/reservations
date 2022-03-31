<?php

namespace App\Http\Requests\Client\Hotel;

use Illuminate\Foundation\Http\FormRequest;

class CreateHotelRequest extends FormRequest
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
            'name' => ['required', 'max:60'],
            'phone' => ['required', 'max:30'],
            'category_id' => ['required', 'exists:categories,id', 'numeric'],
            'city_id' => ['required', 'exists:cities,id', 'numeric'],
            'cost' => ['required','lte:99999999','gte:10000'],
            'description' => ['required', 'max:500', 'min:10'],
            'address' => ['required', 'max:500', 'min:10'],
            'capacity' => ['required','max:20','regex:/^[1-9]+(تا){0,1}/'],
        ];
    }
}
