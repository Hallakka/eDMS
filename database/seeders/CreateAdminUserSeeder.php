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
            'name' => 'ICTU Admin', 
            'email' => 'ictuadmin@gmail.com',
            'password' => bcrypt('12345678')
        ]);
    
        $role = Role::create(['name' => 'Admin']);
     
        $permissions = Permission::pluck('id','id')->all();
   
        $role->syncPermissions($permissions);
     
        $user->assignRole([$role->id]);
    }
}
// <?php

// namespace Database\Seeders;

// use Illuminate\Database\Seeder;
// use App\Models\User;
// use Illuminate\Support\Facades\Hash;

// class CreateAdminUserSeeder extends Seeder
// {
//     /**
//      * Run the database seeds.
//      *
//      * @return void
//      */
//     public function run()
//     {
//         // Check if there are any users, if not create an admin
//         if (User::count() === 0) {
//             // Create an admin user with hashed password
//             User::create([
//                 'name' => 'Super User',
//                 'email' => 'ictuadmin@arta.gov.ph', // Ensure this email is unique
//                 'password' => Hash::make('N@t10nbuild3r'), // Hashing the password
//                 'approved' => 'active', // Optionally, set this to 'approved' if needed
//                 'role' => 'SuperAdmin', // Set role to 'admin'
//                 'role_id' => '2', // Assign a role_id if needed (for example, link to a roles table)
//                 'department_id' => '2', // Example department id
//                 'office_id' => '2', // Example office id
//                 'div_unit_id' => '6', // Example division/unit id
//             ]);
//         }
//     }
// }
