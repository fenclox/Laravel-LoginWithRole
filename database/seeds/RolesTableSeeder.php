<?php

use Illuminate\Database\Seeder;
//menambahkan model Role
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();

        Role::create(['name' => 'manager']);
        Role::create(['name' => 'supervisor']);
        Role::create(['name' => 'staff']);
    }
}
