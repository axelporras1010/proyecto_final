<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleHasPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Admin
        $admin_permissions = Permission::all();
        Role::findOrFail(1)->permissions()->sync($admin_permissions->pluck('id'));

        //Profesor
        $profesor_permissions = $admin_permissions->filter(function($permission) {
            return substr($permission->name, 0, 5) != 'user_' && 
                substr($permission->name, 0, 5) !='role_'  && 
                substr($permission->name, 0, 11) !='permission_';
        });
        Role::findorFail(2)->permissions()->sync($profesor_permissions);

        //Estudiante
        $estudiante_permissions = $admin_permissions->filter(function ($permission) {
            return $permission->name == 'post_index' ||
                $permission->name == 'post_show';
        });
        Role::findOrFail(3)->permissions()->sync($estudiante_permissions->pluck('id'));
    }
}
