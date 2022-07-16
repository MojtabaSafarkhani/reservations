<?php

namespace Database\Seeders;

use App\Models\Host;
use Database\Factories\ImageFactory;
use Faker\Factory;
use Illuminate\Database\Seeder;

class HostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Host::query()->create([
            'user_id' => 2,
            'phone' => '09392063361',
            'address' => 'تهران پيروزي شاه آبادي',
            'national_code' => '0023208996',
            'national_card_photo' =>storage_path('images/hosts/UrA9GWlJPIC943FvVFmjazdWYEaC7XbOMVslEMD7.jpg'),
            'status' => 'ok'
        ]);
        Host::query()->create([
            'user_id' => 3,
            'phone' => '09392063361',
            'address' => 'تهران پيروزي شاه آبادي',
            'national_code' => '0023208997',
            'national_card_photo' =>storage_path('images/hosts/UrA9GWlJPIC943FvVFmjazdWYEaC7XbOMVslEMD7.jpg'),
            'status' => 'ok'
        ]);
        Host::query()->create([
            'user_id' => 4,
            'phone' => '09392063361',
            'address' => 'تهران پيروزي شاه آبادي',
            'national_code' => '0023208998',
            'national_card_photo' =>storage_path('images/hosts/UrA9GWlJPIC943FvVFmjazdWYEaC7XbOMVslEMD7.jpg'),
            'status' => 'ok'
        ]);
    }
}
