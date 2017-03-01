<?php

use Illuminate\Database\Seeder;
use memsWebpanel\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->name = 'administrator';
        $role->save();

        $role = new Role();
        $role->name = 'moderator';
        $role->save();

        $role = new Role();
        $role->name = 'user';
        $role->save();
    }
}
