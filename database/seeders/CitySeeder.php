<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::query()->insert([

            'name' => 'تهران',
            'slug' => 'tehran',

        ]);
        City::query()->insert([

            'name'=>'همدان',
            'slug'=>'hamedan',

        ]);
        City::query()->insert([

            'name'=>'مازندران',
            'slug'=>'mazandaran',

        ]);
        City::query()->insert([

            'name'=>'رامسر',
            'slug'=>'ramsar',
            'city_id'=>3,

        ]);
        City::query()->insert([

            'name'=>'نوشهر',
            'slug'=>'noshahr',
            'city_id'=>3,

        ]);
        City::query()->insert([

            'name'=>'گيلان',
            'slug'=>'gilan',

        ]);
        City::query()->insert([

            'name'=>'رشت',
            'slug'=>'rasht',
            'city_id'=>6

        ]);
        City::query()->insert([

            'name'=>'ماسال',
            'slug'=>'masal',
            'city_id'=>6,

        ]);
        City::query()->insert([

            'name'=>'اصفهان',
            'slug'=>'esfahan',

        ]);
        City::query()->insert([

            'name'=>'تهران',
            'slug'=>'city-tehran',
            'city_id'=>1,

        ]);
        City::query()->insert([

            'name'=>'همدان',
            'slug'=>'city-hamedan',
            'city_id'=>2,

        ]);
        City::query()->insert([

            'name'=>'اصفهان',
            'slug'=>'city-esfahan',
            'city_id'=>9,

        ]);
        City::query()->insert([

            'name'=>'ساري',
            'slug'=>'sari',
            'city_id'=>3,

        ]);
        City::query()->insert([

            'name'=>'لرستان',
            'slug'=>'lorestan',

        ]);
        City::query()->insert([

            'name'=>'خرم آباد',
            'slug'=>'khoramabad',
            'city_id'=>14,

        ]);

    }
}
