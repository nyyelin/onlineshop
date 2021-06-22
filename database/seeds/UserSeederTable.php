<?php

use Illuminate\Database\Seeder;
use App\User;
class UserSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        // mgmg
        $user->name = "nyinyi";
        $user->email = 'admin@gmail.com';
        $user->password = Hash::make('123456789');
        $user->assingRole('Admin');
        $user->save();

    }
}
