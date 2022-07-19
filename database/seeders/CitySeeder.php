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

            'name'=>'رشت',
            'slug'=>'Rasht',

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

    }
}
