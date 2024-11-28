<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\UserPermissionTableSeeder;
use Database\Seeders\GuestPermissionTableSeeder;
use Database\Seeders\ExternalsTableSeeder;
use Database\Seeders\CreateAdminUserSeeder;
use Database\Seeders\AddPermissionTableSeeder;
use Database\Seeders\AddDashboardPermissionTableSeeder; // Make sure this is imported

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Call each seeder
        $this->call(UserPermissionTableSeeder::class);
        $this->call(GuestPermissionTableSeeder::class);
        //$this->call(ExternalsTableSeeder::class);
        //$this->call(CreateAdminUserSeeder::class);
        $this->call(AddPermissionTableSeeder::class);
        $this->call(AddDashboardPermissionTableSeeder::class); // Corrected this line
    }
}
