<?php

use App\Cause;
use Illuminate\Database\Seeder;

class CausesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cause::create([

            'id' => '1',
            'name' => 'Defectos Critico',
            'description'=>'mal formación del corcho, ovalación del corcho , corcho inservible',
            ]);
            Cause::create([

                'id' => '2',
                'name' => 'Mayores',
                'description'=>'altos niveles de tca, producto inocuó encontrado , pieza metalica detectada,
                 alteración del producto',
                ]);
                Cause::create([

                    'id' => '3',
                    'name' => 'Menores',
                    'description'=>'mal grabado,sellado mal hecho , carga mal estribada ,retraso de producto.',
                    ]);
    }
}
