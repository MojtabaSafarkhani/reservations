<?php

namespace App\Http\Requests\Client\Hotel;

use App\Rules\CheckCityIdForCreateHotel;
use Illuminate\Foundation\Http\FormRequest;

class UpdateHotelRequest extends FormRequest
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
            'city_id' => ['required', 'exists:cities,id', 'numeric',new CheckCityIdForCreateHotel()],
            'cost' => ['required', 'lte:99999999', 'gte:10000'],
            'description' => ['required', 'max:500', 'min:10'],
            'address' => ['required', 'max:500', 'min:10'],
            'capacity' => ['required','array',],
            'capacity.*'=>['lte:7','gte:0'],
            'license' => ['nullable', 'max:1024', 'mimes:pdf,png,jpeg,jpg,gif']
        ];
    }
}
