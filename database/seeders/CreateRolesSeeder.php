<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Role;
use App\Models\User;

use Illuminate\Database\Seeder;

class CreateRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     

        $role1 = new Role();
        $role1->name = 'superadmin';
        $role1->faname = 'مدیر کل';
        $role1->description = "mahallo user";
        $role1->save();


        $role2 = new Role();
        $role2->name = 'role_admin';
        $role2->faname = 'مدیر';
        $role2->description = "mahallow desc";
        $role2->save();


        $role3 = new Role();
        $role3->name = 'custome-admin';
        $role3->faname = 'ادمین سفارشی';
        $role3->description = "mahallow desc";
        $role3->save();

        $role4 = new Role();
        $role4->name = 'buyers-admin';
        $role4->faname = 'خریدار';
        $role4->description = "mahallow desc";
        $role4->save();
    }
}
