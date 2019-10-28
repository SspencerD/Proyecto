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
        User::create([

            'name'=> 'Javier',
            'email'=> 'cyancube.spencer@gmail.com',
            'password'=> bcrypt('123123'),
            'admin'=> false,
            'name'=> 'Santiago',
            'email'=> 'sspencer@corchera.cl',
            'password'=> bcrypt('123123'),
            'admin'=> true,
        ]);
    }
}
