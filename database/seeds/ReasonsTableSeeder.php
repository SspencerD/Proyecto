<?php

use App\Reason;
use Illuminate\Database\Seeder;

class ReasonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Reason::create([
            'name' => 'Indices de TCA',
            'cause_id' => '1',

        ]);
        Reason::create([
            'name' => 'Inocuidad',
            'cause_id' => '1',

        ]);
        Reason::create([
            'name' => 'Humectación',
            'cause_id' => '1',

        ]);
        Reason::create([
            'name' => 'Mezcla',
            'cause_id' => '2',

        ]);
        Reason::create([
            'name' => 'Ovalación',
            'cause_id' => '2',

        ]);
        Reason::create([
            'name' => 'Fraude',
            'cause_id' => '2',

        ]);
        Reason::create([
            'name' => 'Marcaje',
            'cause_id' => '3',

        ]);
        Reason::create([
            'name' => 'Tratamiento',
            'cause_id' => '3',

        ]);
        Reason::create([
            'name' => 'Despacho',
            'cause_id' => '3',

        ]);
    }

}
