<?php

namespace Database\Seeders;

use App\Models\Feature;
use App\Models\Hotel;
use Illuminate\Database\Seeder;

class FeatureHotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hotels = Hotel::all();

        foreach ($hotels as $hotel) {

            $randomInt = random_int(1, 5);

            $featuresIdes = Feature::all()->random($randomInt)->pluck('id');

            $hotel->features()->attach($featuresIdes);

        }


    }
}
