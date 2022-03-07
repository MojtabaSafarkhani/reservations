<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::query()->create(
            [
                'name' => 'ادمین',
                'email' => 'mojtabasfr01@gmail.com',
                'password' => Hash::make('123456789'),
                'role_id' => Role::findByTitle('admin'),
            ]
        );
    }
}
