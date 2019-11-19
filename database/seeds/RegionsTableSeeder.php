<?php

use App\Region;
use Illuminate\Database\Seeder;

class RegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Region::create([
            'id'=>'1',
            'name'=>'Arica y Parinacota',
            'region_ordinal'=>'XV',
            'country_id'=>'1',
            ]);
             Region::create([
            'id'=>'2',
            'name'=>'Tarapacá',
            'region_ordinal'=>'I',
            'country_id'=>'1',
             ]);
             Region::create([
            'id'=>'3',
            'name'=>'Antofagasta',
            'region_ordinal'=>'II', 
            'country_id'=>'1',
            ]);
             Region::create([
            'id'=>'4',
            'name'=>'Atacama',
            'region_ordinal'=>'III',
            'country_id'=>'1',
            ]);
             Region::create([
            'id'=>'5',
            'name'=>'Coquimbo',
            'region_ordinal'=>'IV', 
            'country_id'=>'1',
            ]);
             Region::create([
            'id'=>'6',
            'name'=>'Valparaiso',
            'region_ordinal'=>'V', 
            'country_id'=>'1',
            ]);
             Region::create([
            'id'=>'7',
            'name'=>'Metropolitana de Santiago',
            'region_ordinal'=>'RM', 
            'country_id'=>'1',
            ]);
             Region::create([
            'id'=>'8',
            'name'=>'Libertador General Bernardo O\'Higgins',
            'region_ordinal'=>'VI', 
            'country_id'=>'1',
            ]);
             Region::create([
            'id'=>'9',
            'name'=>'Maule',
            'region_ordinal'=>'VII',
            'country_id'=>'1',
            ]);
             Region::create([
            'id'=>'10',
            'name'=>'Biobió',
            'region_ordinal'=>'VIII',
            'country_id'=>'1',
            ]);
             Region::create([
            'id'=>'11',
            'name'=>'La Araucanía',
            'region_ordinal'=>'IX', 
            'country_id'=>'1',
            ]);
             Region::create([
            'id'=>'12',
            'name'=>'Los Ríos',
            'region_ordinal'=>'XIV',
            'country_id'=>'1',
            ]);
             Region::create([
            'id'=>'13',
            'name'=>'Los Lagos',
            'region_ordinal'=>'X', 
            'country_id'=>'1',
            ]);
             Region::create([
            'id'=>'14',
            'name'=>'Aisén del General Carlos Ibañez del Campo',
            'region_ordinal'=>'XI', 
            'country_id'=>'1',
            ]);
             Region::create([
            'id'=>'15',
            'name'=>'Magallanes y de la Antártica Chilena',
            'region_ordinal'=>'XII',
            'country_id'=>'1',
            ]);

    }
}
