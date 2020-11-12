<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $admin = Role::create([
            'title' => 'admin',
            'slug' => 'admin',
            'permissions' => json_encode([
                'create_user',
                'edit_user' ,
                'delete_user' ,
                'create_post' ,
                'edit_post' ,
                'delete_post' ,
            ])
        ]);

        $teacher = Role::create([
            'title' => 'teacher',
            'slug' => 'teacher',
            'permissions' => json_encode([
                'create_user',
                'create_post' ,
                'edit_post' ,
                'delete_post' ,
            ])
        ]);

        $user = Role::create([
            'title' => 'user',
            'slug' => 'user',
            'permissions' => json_encode([
                'create_user',
                'edit_user' ,
                'view_post' ,
                'view_user' 
            ])
        ]);
    }
}
