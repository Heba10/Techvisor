<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermission extends Seeder
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
        Permission::create(['name' => 'adminpermission']);
        Permission::create(['name' => 'userpermission']);
        Permission::create(['name' => 'professionalpermission']);
        Permission::create(['name' => 'guestpermission']);

        // create roles and assign created permissions

        // this can be done as separate statements
        $role = Role::create(['name' => 'user']);
        $role->givePermissionTo('userpermission');

        $role = Role::create(['name' => 'guest']);
        $role->givePermissionTo('guestpermission');


        // or may be done by chaining
        $role = Role::create(['name' => 'professional'])
            ->givePermissionTo(['professionalpermission', 'userpermission']);

        $role = Role::create(['name' => 'super-admin']);
        $role->givePermissionTo(Permission::all());

    }
}
