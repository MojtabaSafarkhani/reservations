<?php

namespace Database\Seeders;

use App\Models\Feature;
use Illuminate\Database\Seeder;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Feature::query()->create([

            'title'=>'استخر',
            'image'=>"public/images/icon/swimming-pool.png",

        ]);
        Feature::query()->create([

            'title'=>'رستوران',
            'image'=>"public/images/icon/dish.png",

        ]);
        Feature::query()->create([

            'title'=>'آسانسور ',
            'image'=>"public/images/icon/elevator.png",

        ]);
        Feature::query()->create([

            'title'=>'کولر گازي',
            'image'=>"public/images/icon/air-conditioner.png",

        ]);
        Feature::query()->create([

            'title'=>'حمام',
            'image'=>"public/images/icon/bathtub.png",

        ]);

    }
}
