<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserAssignSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // assign super admin
        $superAdmin = User::find(1);
        $superAdmin->assignRole('super admin');

        // assign admin kursus
        $adminKursus = User::find(2);
        $adminKursus->assignRole('admin kursus');

        // assign role admin kursus to permission
        $role = Role::find(2); // admin kursus
        $role->givePermissionTo('show course', 'create course', 'edit course', 'delete course');

        // assign admin finance
        $adminFinance = User::find(3);
        $adminFinance->assignRole('admin finance');

        // assign role admin finance to permission
        $role = Role::find(3); // admin finance
        $role->givePermissionTo('show order', 'confirm order');

        // assign user
        $user = User::find(4);
        $user->assignRole('user');

        // assign manager
        $manager = User::find(5);
        $manager->assignRole('manager');
        $manager->givePermissionTo('show course', 'show order');
    }
}
