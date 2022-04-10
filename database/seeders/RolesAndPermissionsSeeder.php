<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'read']);
        Permission::create(['name' => 'write']);
        Permission::create(['name' => 'delete']);

        // create roles and assign created permissions
        $superAdmin = Role::create(['name' => 'Super Admin'])
            ->givePermissionTo(Permission::all());

        $hrAdmin = Role::create(['name' => 'HR Admin'])
            ->givePermissionTo(Permission::all());

        $admin = Role::create(['name' => 'Admin'])
            ->givePermissionTo(['read']);

        $member = Role::create(['name' => 'Employee'])
            ->givePermissionTo(['read']);
    }
}
