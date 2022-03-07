<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //role
        Permission::query()->insert(
            [
                [
                    'title' => 'create_role'
                ],
                [
                    'title' => 'update_role'
                ],

                [
                    'title' => 'delete_role'
                ],
                [
                    'title' => 'read_role'
                ],

            ]

        );
        //category
        Permission::query()->insert(
            [
                [
                    'title' => 'create_category'
                ],
                [
                    'title' => 'update_category'
                ],

                [
                    'title' => 'delete_category'
                ],
                [
                    'title' => 'read_category'
                ],

            ]

        );
        //city
        Permission::query()->insert(
            [
                [
                    'title' => 'create_city'
                ],
                [
                    'title' => 'update_city'
                ],

                [
                    'title' => 'delete_city'
                ],
                [
                    'title' => 'read_city'
                ],

            ]

        );
        //hotel
        Permission::query()->insert(
            [
                [
                    'title' => 'create_hotel'
                ],
                [
                    'title' => 'update_hotel'
                ],

                [
                    'title' => 'delete_hotel'
                ],
                [
                    'title' => 'read_hotel'
                ],

            ]

        );
        //feature
        Permission::query()->insert(
            [
                [
                    'title' => 'create_feature'
                ],
                [
                    'title' => 'update_feature'
                ],

                [
                    'title' => 'delete_feature'
                ],
                [
                    'title' => 'read_feature'
                ],

            ]

        );
        //order
        Permission::query()->insert(
            [
                [
                    'title' => 'create_order'
                ],
                [
                    'title' => 'update_order'
                ],

                [
                    'title' => 'delete_order'
                ],
                [
                    'title' => 'read_order'
                ],

            ]

        );
        //dashboard
        Permission::query()->insert(
            [
                [
                    'title' => 'read_dashboard'
                ],


            ]

        );
        //gallery
        Permission::query()->insert(
            [
                [
                    'title' => 'create_gallery'
                ],
                [
                    'title' => 'update_gallery'
                ],

                [
                    'title' => 'delete_gallery'
                ],
                [
                    'title' => 'read_gallery'
                ],

            ]

        );
        //about
        Permission::query()->insert(
            [
                [
                    'title' => 'create_about'
                ],
                [
                    'title' => 'update_about'
                ],

                [
                    'title' => 'delete_about'
                ],
                [
                    'title' => 'read_about'
                ],

            ]

        );
    }
}
