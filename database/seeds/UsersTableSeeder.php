<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Str;

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
            'roles'=>'admin',
        ]);
            User::create([
            'name'=> 'Santiago',
            'email'=> 'sspencer@corchera.cl',
            'password'=> bcrypt('123123'),
            'roles'=>'client',
        ]);
        User::create([
            'name'=> 'Daniel',
            'email'=> 'santiago.spencer.d@gmail.com',
            'password'=> bcrypt('123123'),
            'roles'=>'supply',
        ]);
        User::create([
            'name'=> Str::random(10),
            'email'=> Str::random(10).'@gmail.com',
            'password'=> bcrypt('123123'),
            'roles'=>'partner',
        ]);
        User::create([
            'name'=> Str::random(10),
            'email'=> Str::random(10).'@gmail.com',
            'password'=> bcrypt('123123'),
            'roles'=>'saleman',
        ]);
        User::create([
            'name'=> Str::random(10),
            'email'=> Str::random(10).'@gmail.com',
            'password'=> bcrypt('123123'),
            'roles'=>'provider',
        ]);
    }
}
