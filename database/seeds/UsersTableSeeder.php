<?php

use Illuminate\Database\Seeder;
use App\User;

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

        $user->name = 'housingsupport';
        $user->email = 'hsi@housingsupport.org';
        $user->password = bcrypt('hsilogin');
        $user->save();
    }
}