<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\City;
use App\Models\Host;
use App\Models\Hotel;
use Database\Factories\ImageFactory;
use Illuminate\Database\Seeder;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Hotel::query()->create([
            'host_id' => Host::query()->inRandomOrder()->value('id'),
            'city_id' => City::query()->inRandomOrder()->value('id'),
            'category_id' => Category::query()->inRandomOrder()->value('id'),
            'name' => 'هتل شماره یک',
            'phone' => '02133256710',
            'description' => 'هتل شماره یک یکی از بهترین هتل های ایران است که در سال 1379 ساخته شده است.',
            'address' => 'ايران ',
            'is_published' => 'ok',
            'cost' => 128000,
            'capacity' => [1, 2, 3],
            'license' => storage_path('images/hosts/UrA9GWlJPIC943FvVFmjazdWYEaC7XbOMVslEMD7.jpg'),


        ]);
        Hotel::query()->create([
            'host_id' => Host::query()->inRandomOrder()->value('id'),
            'city_id' => City::query()->inRandomOrder()->value('id'),
            'category_id' => Category::query()->inRandomOrder()->value('id'),
            'name' => 'هتل شماره دو',
            'phone' => '02133256720',
            'description' => 'هتل شماره دو یکی از بهترین هتل های ایران است که در سال 1389 ساخته شده است.',
            'address' => 'ايران ',
            'is_published' => 'ok',
            'cost' => 228000,
            'capacity' => [3,4,5],
            'license' => storage_path('images/hosts/UrA9GWlJPIC943FvVFmjazdWYEaC7XbOMVslEMD7.jpg'),


        ]);
        Hotel::query()->create([
            'host_id' => Host::query()->inRandomOrder()->value('id'),
            'city_id' => City::query()->inRandomOrder()->value('id'),
            'category_id' => Category::query()->inRandomOrder()->value('id'),
            'name' => 'هتل شماره سه',
            'phone' => '02133256710',
            'description' => 'هتل شماره سه یکی از بهترین هتل های ایران است که در سال 1360 ساخته شده است.',
            'address' => 'ايران ',
            'is_published' => 'ok',
            'cost' => 128000,
            'capacity' => [1, 2, 3,4,5,6,7],
            'license' =>storage_path('images/hosts/UrA9GWlJPIC943FvVFmjazdWYEaC7XbOMVslEMD7.jpg'),


        ]);
        Hotel::query()->create([
            'host_id' => Host::query()->inRandomOrder()->value('id'),
            'city_id' => City::query()->inRandomOrder()->value('id'),
            'category_id' => Category::query()->inRandomOrder()->value('id'),
            'name' => 'هتل شماره چهار',
            'phone' => '02133256710',
            'description' => 'هتل شماره چهار یکی از بهترین هتل های ایران است که در سال 1380 ساخته شده است.',
            'address' => 'ايران ',
            'is_published' => 'ok',
            'cost' => 128000,
            'capacity' => [5,6,7],
            'license' => storage_path('images/hosts/UrA9GWlJPIC943FvVFmjazdWYEaC7XbOMVslEMD7.jpg'),


        ]);
    }
}
