<?php

use App\Models\General\Permission;
use App\Models\General\Role;
use Illuminate\Database\Seeder;

class RoleHasPermissionsTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
     */
    public function run()
    {
        foreach ($role_has_permissions = json_decode(File::get(database_path('schema/role_has_permissions.json')), true) as $index => $rhp) {
            $role = Role::whereName($rhp['role'])->first();
            if ($rhp['permission'] === '*') {
                $role->givePermissionTo($permissions = Permission::pluck('name')->toArray());
            }
        }
    }
}
