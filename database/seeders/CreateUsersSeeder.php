<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Role;
use App\Models\User;
use App\Http\Controllers\admin\HelperController;
class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $helper = new HelperController;

        $superadmin = Role::Where('name','superadmin')->first();
        $admin      = Role::Where('name','role_admin')->first();
        $custome    = Role::Where('name','custome-admin')->first();
        $buyers     = Role::Where('name','buyers-admin')->first();

        $user1 = new User();
        $user1->name        = 'kodexadmin';
        $user1->email       = 'kodexadmin@example.com';
        // $user1->password = bcrypt('kodexMahallo@#15adM1n');
        $user1->password    = Hash::make('kodexMahallo@#15adM1n');
        $user1->active      = 1;
        $user1->hash        = $helper->createhash('kodexadmin@example.com',4);
        $user1->save();
        $user1->roles()->attach($admin);

        $user2 = new User();
        $user2->name        = 'kodexadmin2';
        $user2->email       = 'kodexadmin2@example.com';
        $user2->password    = Hash::make('kodexMahallo@#15adM1n');
        $user2->active      = 1;
        $user2->hash        = $helper->createhash('kodexadmin@example.com',4);
        $user2->save();
        $user2->roles()->attach($superadmin);

        $user3 = new User();
        $user3->name        = 'kodexadmin3';
        $user3->email       = 'kodexadmin3@example.com';
        $user3->password    =  Hash::make('kodexMahallo@#15adM1n');
        $user3->active      = 1;
        $user3->hash        = $helper->createhash('kodexadmin@example.com',4);
        $user3->save();
        $user3->roles()->attach($custome);

        $user4 = new User();
        $user4->name        = 'kodexadmin4';
        $user4->email       = 'kodexadmin4@example.com';
        $user4->password    =  Hash::make('kodexMahallo@#15adM1n');
        $user4->active      = 1;
        $user4->hash        = $helper->createhash('kodexadmin@example.com',4);
        $user4->save();
        $user4->roles()->attach($buyers);
    }
}
