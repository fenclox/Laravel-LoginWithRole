<?php

use Illuminate\Database\Seeder;
//menambahkan model Role
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        
        $managerRole = Role::where('name', 'manager')->first();
        $supervisorRole = Role::where('name', 'supervisor')->first();
        $staffRole = Role::where('name', 'staff')->first();

        $manager = User::create([
            'name' => 'Manager',
            'email' => 'manager@mail.com',
            'password' => bcrypt('admin123')
        ]);

        $supervisor = User::create([
            'name' => 'Supervisor',
            'email' => 'supervisor@mail.com',
            'password' => bcrypt('admin123')
        ]);

        $staff = User::create([
            'name' => 'Staff',
            'email' => 'staff@mail.com',
            'password' => bcrypt('admin123')
        ]);

        $manager->roles()->attach($managerRole);
        $supervisor->roles()->attach($supervisorRole);
        $staff->roles()->attach($staffRole);
    }
}
