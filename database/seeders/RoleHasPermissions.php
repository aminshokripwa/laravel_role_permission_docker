<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleHasPermissions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $RoleHas = array (
            array(5,4),
            array(6,3),
            array(7,2),
            array(7,4)
          );
   
        foreach ($RoleHas as $permission) {
            DB::table('role_has_permissions')->insert([
                'permission_id' => $permission[0],
                'role_id' => $permission[1],
            ]);
        }
    }
}
