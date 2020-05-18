<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_employee = new Role();
        $role_employee->name = 'Employee';
        $role_employee->description = 'A Employee User';
        $role_employee->save();

        $role_employee = new Role();
        $role_employee->name = 'saler';
        $role_employee->description = 'A Saler User';
        $role_employee->save();

        $role_employee = new Role();
        $role_employee->name = 'admin';
        $role_employee->description = 'A Admin User';
        $role_employee->save();
    }
}
