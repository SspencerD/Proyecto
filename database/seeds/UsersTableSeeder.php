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
            'lastname'=>'Soto',
            'raesonsocial'=>'Industria Corchera S.A',
            'password'=> bcrypt('123123'),
<<<<<<< HEAD
            'roles'=>'assurement',
=======
            'roles'=>'admin',
>>>>>>> fbbf775543462cb6dd1e3b41b30825a8ee22643c
        ]);
            User::create([
            'name'=> 'Santiago',
            'email'=> 'sspencer@corchera.cl',
            'lastname'=>'Spencer',
            'raesonsocial'=>'Industria Corchera S.A',
            'password'=> bcrypt('123123'),
            'roles'=>'admin',
        ]);
        User::create([
            'name'=> 'Daniel',
            'email'=> 'santiago.spencer.d@gmail.com',
            'password'=> bcrypt('123123'),
            'roles'=>'supply',
        ]);
        User::create([
            'name'=> 'Patricio',
            'lastname'=>'Barra',
            'raesonsocial'=>'Viña Concha y Toro S.A',
            'email'=> 'pbarra.@gmail.com',
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
        User::create([
            'name'=> 'David',
            'lastname'=>'Rodriguez',
            'raesonsocial'=>'Industria Corchera S.A',
            'email'=> 'drodriguez@corchera.cl',
            'password'=> bcrypt('123123'),
            'roles'=>'client',
<<<<<<< HEAD
=======
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
>>>>>>> fbbf775543462cb6dd1e3b41b30825a8ee22643c
        ]);
    }
}
