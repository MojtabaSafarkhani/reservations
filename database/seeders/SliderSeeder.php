<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Slider;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $images = Storage::allFiles('public/images/sliders');
        $slug = City::query()->where('city_id', '!=', null)->inRandomOrder()->limit(3)->pluck('slug');

        for ($i = 0; $i <= 2; $i++) {

            $randomFile = $images[rand(0, count($images) - 1)];

            Slider::query()->create([
                'image' => $randomFile,
                'link' => $slug[$i]
            ]);

        }

    }
}
