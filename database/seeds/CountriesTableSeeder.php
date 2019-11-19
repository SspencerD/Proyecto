<?php

use App\Country;
use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Country::create(['id'=>'1','name'=>'Chile',]);
        Country::create(['id'=>'2','name'=>'Argentina',]);
        Country::create(['id'=>'3','name'=>'Brasil',]);
        Country::create(['id'=>'4','name'=>'Ecuador',]);
        Country::create(['id'=>'5','name'=>'Perú',]);
        Country::create(['id'=>'6','name'=>'Colombia',]);
        Country::create(['id'=>'7','name'=>'Uruguay',]);
        Country::create(['id'=>'8','name'=>'Bolivia',]);
        Country::create(['id'=>'9','name'=>'Venezuela',]);
        Country::create(['id'=>'10','name'=>'Paraguay',]);
        Country::create(['id'=>'11','name'=>'Guayana',]);
        Country::create(['id'=>'12','name'=>'Surinam',]);
        Country::create(['id'=>'13','name'=>'Portugal',]);
        Country::create(['id'=>'14','name'=>'España',]);
        Country::create(['id'=>'15','name'=>'Estados Unidos',]);
    }
}
