<?php

namespace App\Rules;

use App\Models\City;
use App\Models\Hotel;
use Illuminate\Contracts\Validation\Rule;

class CheckCityIdForCreateHotel implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param string $attribute
     * @param mixed $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return City::query()->where('id', $value)->where('city_id', '!=', null)->exists();
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'شهر انتخاب شده نادرست است!';
    }
}
