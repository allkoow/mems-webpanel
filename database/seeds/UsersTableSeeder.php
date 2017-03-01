<?php

use Illuminate\Database\Seeder;
use memsWebpanel\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Albert';
        $user->surname = 'Kowalczyk';
        $user->email = 'allkoow@gmail.com';
        $user->password = bcrypt('albert');
        $user->role_id = 1;
        $user->save();
    }
}
