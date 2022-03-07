<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
         *
         */
        $admin = Role::query()->create(
            [
                'title' => 'admin',
            ]
        );

        $admin->permissions()->attach(Permission::all());

        $host = Role::query()->create(
            [
                'title' => 'host',
            ]
        );

        $hotel_permissions=Permission::query()->where('title', 'like', '%hotel%')->pluck('id');

        $host->permissions()->attach($hotel_permissions);

        Role::query()->create(
            [
                'title' => 'user',
            ]
        );
    }
}
