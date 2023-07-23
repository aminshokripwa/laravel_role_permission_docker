<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
        	'name' => 'Amin',
            'surname' => 'Shokri', 
        	'email' => 'amin@shokri.com',
        	'password' => bcrypt('123456')
        ]);
        
        $role = Role::create(['name' => 'Admin']);
        $roleJournalists = Role::create(['name' => 'Journalists']);
        $roleParticipants = Role::create(['name' => 'Participants']);
        $roleJudges = Role::create(['name' => 'Judges']);
   
        $permissions = Permission::pluck('id','id')->all();
  
        $role->syncPermissions($permissions);
   
        $user->assignRole([$role->id]);
    }
}
