<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'permission_index',
            'permission_create',
            'permission_show',
            'permission_edit',
            'permission_destroy',

            'role_index',
            'role_create',
            'role_show',
            'role_edit',
            'role_destroy',

            'user_index',
            'user_create',
            'user_show',
            'user_edit',
            'user_destroy',

            'post_index',
            'post_create',
            'post_show',
            'post_edit',
            'post_destroy',

            'horario_index',
            'horario_create',
            'horario_show',
            'horario_edit',
            'horario_destroy',
        ];

        foreach ($permissions as $permission){
            Permission::create([
                'name' => $permission
            ]);
        }
    }
}
