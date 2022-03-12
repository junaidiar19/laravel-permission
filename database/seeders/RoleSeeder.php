<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $attr = ['super admin', 'admin kursus', 'admin finance', 'user', 'manager'];

        foreach ($attr as $value) {
            Role::create([
                'name' => $value,
            ]);
        }
    }
}
