<?php

namespace Database\Seeders;

use App\Models\Hotel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $images = Storage::allFiles('public/images/galleries');

        foreach (Hotel::all() as $hotel) {

            for ($i = 1; $i <= random_int(2, 5); $i++) {

                $randomFile = $images[rand(0, count($images) - 1)];

                $hotel->galleries()->create([
                    'image'=>$randomFile
                ]);

            }

        }

    }
}
