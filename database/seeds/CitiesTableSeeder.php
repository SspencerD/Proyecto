<?php

use Illuminate\Database\Seeder;
use App\City;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() //Ciudades, provincias como quieran decirle
    {
        City::create([

            'id' => '1',
            'name' => 'Arica',
            'region_id'=>'1',
            ]);
            City::create([
            'id' =>'2',
            'name' => 'Parinacota',
            'region_id'=>'1',
            ]);
            City::create([
            'id' =>'3',
            'name' => 'Iquique',
            'region_id'=>'2',
            ]);
            City::create([
            'id' =>'4',
            'name' => 'El Tamarugal',
            'region_id'=>'2',
            ]);
            City::create([
            'id' =>'5',
            'name' => 'Antofagasta',
            'region_id'=>'3',
            ]);
            City::create([
            'id' =>'6',
            'name' => 'El Loa',
            'region_id'=>'3',
            ]);
            City::create([
            'id' =>'7',
            'name' => 'Tocopilla',
            'region_id'=>'3',
            ]);
            City::create([
            'id' =>'8',
            'name' => 'Chañaral',
            'region_id'=>'4',
            ]);
            City::create([
            'id' =>'9',
            'name' => 'Copiapo',
            'region_id'=>'4',
            ]);
            City::create([
            'id' =>'10',
            'name' => 'Huasco',
            'region_id'=>'4',
            ]);
            City::create([
            'id' =>'11',
            'name' => 'Choapa',
            'region_id'=>'5',
            ]);
            City::create([
            'id' =>'12',
            'name' => 'Elqui',
            'region_id'=>'5',
            ]);
            City::create([
            'id' =>'13',
            'name' => 'Limarí',
            'region_id'=>'5',
            ]);
            City::create([
            'id' =>'14',
            'name' => 'Isla de Pascua',
            'region_id'=>'6',
            ]);
            City::create([
            'id' =>'15',
            'name' => 'Los Andes',
            'region_id'=>'6',
            ]);
            City::create([
            'id' =>'16',
            'name' => 'Petorca',
            'region_id'=>'6',
            ]);
            City::create([
            'id' =>'17',
            'name' => 'Quillota',
            'region_id'=>'6',
            ]);
            City::create([
            'id' =>'18',
            'name' => 'San Antonio',
            'region_id'=>'6'
            ]);
            City::create([
            'id' =>'19',
            'name' => 'San Felipe de Aconcagua',
            'region_id'=>'6',
            ]);
            City::create([
            'id' =>'20',
            'name' => 'Valparaiso',
            'region_id'=>'6',
            ]);
            City::create([
            'id' =>'21',
            'name' => 'Chacabuco',
            'region_id'=>'7',
            ]);
            City::create([
            'id' =>'22',
            'name' => 'Cordillera',
            'region_id'=>'7',
            ]);
            City::create([
            'id' =>'23',
            'name' => 'Maipo',
            'region_id'=>'7',
            ]);
            City::create([
            'id' =>'24',
            'name' => 'Melipilla',
            'region_id'=>'7',
            ]);
            City::create([
            'id' =>'25',
            'name' => 'Santiago',
            'region_id'=>'7',
            ]);
            City::create([
            'id' =>'26',
            'name' => 'Talagante',
            'region_id'=>'7',
            ]);
            City::create([
            'id' =>'27',
            'name' => 'Cachapoal',
            'region_id'=>'8',
            ]);
            City::create([
            'id' =>'28',
            'name' => 'Cardenal Caro',
            'region_id'=>'8',
            ]);
            City::create([
            'id' =>'29',
            'name' => 'Colchagua',
            'region_id'=>'8',
            ]);
            City::create([
            'id' =>'30',
            'name' => 'Cauquenes',
            'region_id'=>'8',
            ]);
            City::create([
            'id' =>'31',
            'name' => 'Curico',
            'region_id'=>'9',
            ]);
            City::create([
            'id' =>'32',
            'name' => 'Linares',
            'region_id'=>'9',
            ]);
            City::create([
            'id' =>'33',
            'name' => 'Talca',
            'region_id'=>'9',
            ]);
            City::create([
            'id' =>'34',
            'name' => 'Arauco',
            'region_id'=>'10',
            ]);
            City::create([
            'id' =>'35',
            'name' => 'Bio Bío',
            'region_id'=>'10',
            ]);
            City::create([
            'id' =>'36',
            'name' => 'Concepción',
            'region_id'=>'10',
            ]);
            City::create([
            'id' =>'37',
            'name' => 'Ñuble',
            'region_id'=>'10',
            ]);
            City::create([
            'id' =>'38',
            'name' => 'Cautín',
            'region_id'=>'11',
            ]);
            City::create([
            'id' =>'39',
            'name' => 'Malleco',
            'region_id'=>'11',
            ]);
            City::create([
            'id' =>'40',
            'name' => 'Valdivia',
            'region_id'=>'12',
            ]);
            City::create([
            'id' =>'41',
            'name' => 'Renco',
            'region_id'=>'12',
            ]);
            City::create([
            'id' =>'42',
            'name' => 'Chiloé',
            'region_id'=>'13',
            ]);
            City::create([
            'id' =>'43',
            'name' => 'LLanquihue',
            'region_id'=>'13',
            ]);
            City::create([
            'id' =>'44',
            'name' => 'Osorno',
            'region_id'=>'13',
            ]);
            City::create([
            'id' =>'45',
            'name' => 'Palena',
            'region_id'=>'13',
            ]);
            City::create([
            'id' =>'46',
            'name' => 'Aisén',
            'region_id'=>'14',
            ]);
            City::create([
            'id' =>'47',
            'name' => 'Capitán Prat',
            'region_id'=>'14',
            ]);
            City::create([
            'id' =>'48',
            'name' => 'Coihaique',
            'region_id'=>'14',
            ]);
            City::create([
            'id' =>'49',
            'name' => 'General Carrera',
            'region_id'=>'14',
            ]);
            City::create([
            'id' =>'50',
            'name' => 'Antartica Chilena',
            'region_id'=>'15',
            ]);
            City::create([
            'id' =>'51',
            'name' => 'Magallanes',
            'region_id'=>'15',
            ]);
            City::create([
            'id' =>'52',
            'name' => 'Tierra del Fuego',
            'region_id'=>'15',
            ]);
            City::create([
            'id' =>'53',
            'name' => 'Última Esperanza',
            'region_id'=>'15'
            ]);
       
    }
}
