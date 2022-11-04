<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'name' => 'Admin',
                'description' => 'Admin of the system'
            ],
            [
                'name' => 'User',
                'description' => 'Common user'
            ],
            [
                'name' => 'Business',
                'description' => 'Hotel or activity manager'
            ]
       ];

       foreach ($roles as $role) {
           Role::create($role);
       }
    }
}
