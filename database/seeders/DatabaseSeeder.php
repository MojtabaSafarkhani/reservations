<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([

            PermissionSeeder::class,
            RoleSeeder::class,
            AdminSeeder::class,
            UserSeeder::class,
            HostSeeder::class,
            CategorySeeder::class,
            CitySeeder::class,
            HotelSeeder::class,
            CommentSeeder::class,
            FeatureSeeder::class,
            FeatureHotelSeeder::class,
            LikeSeeder::class,
            SliderSeeder::class,
            GallerySeeder::class,


        ]);
    }
}
