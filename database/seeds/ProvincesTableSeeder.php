<?php

use App\Province;
use Illuminate\Database\Seeder;

class ProvincesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    Province::create(['id'=>'1','name'=> 'Arica','city_id' =>'1',]);
    Province::create(['id'=>'2','name'=>'Camarones','city_id'=>'1',]); 
    Province::create(['id'=>'3','name'=>'General Lagos','city_id'=>'2',]); 
    Province::create(['id'=>'4','name'=>'Putre','city_id'=> '2',]); 
    Province::create(['id'=>'5','name'=>'Alto Hospicio','city_id'=>'3',]); 
    Province::create(['id'=>'6','name'=>'Iquique','city_id'=> '3',]); 
    Province::create(['id'=>'7','name'=>'Camiña','city_id'=>'4',]); 
    Province::create(['id'=>'8','name'=>'Colchane','city_id'=>'4',]); 
    Province::create(['id'=>'9','name'=>'Huara','city_id'=>'4',]); 
    Province::create(['id'=>'10','name'=>'Pica','city_id'=>'4',]); 
    Province::create(['id'=>'11','name'=>'Pozo Almonte','city_id'=>'4',]); 
    Province::create(['id'=>'12','name'=>'Antofagasta','city_id'=>'5',]); 
    Province::create(['id'=>'13','name'=> 'Mejillones','city_id'=>'5',]); 
    Province::create(['id'=>'14','name'=>'Sierra Gorda','city_id'=>'5',]); 
    Province::create(['id'=>'15','name'=>'Taltal','city_id'=>'5',]); 
    Province::create(['id'=>'16','name'=>'Calama','city_id'=> '6',]); 
    Province::create(['id'=>'17','name'=>'Ollague','city_id'=>'6',]);
    Province::create(['id'=>'18','name'=>'San Pedro de Atacama','city_id'=>'6',]); 
    Province::create(['id'=>'19','name'=>'María Elena','city_id'=>'7',]); 
    Province::create(['id'=>'20','name'=>'Tocopilla','city_id'=>'7',]); 
    Province::create(['id'=>'21','name'=>'Chañaral','city_id'=>'8',]); 
    Province::create(['id'=>'22','name'=>'Diego de Almagro','city_id'=>'8',]); 
    Province::create(['id'=>'23','name'=>'Caldera','city_id'=>'9',]); 
    Province::create(['id'=>'24','name'=>'Copiapó','city_id'=>'9',]); 
    Province::create(['id'=>'25','name'=>'Tierra Amarilla','city_id'=>'9',]); 
    Province::create(['id'=>'26','name'=>'Alto del Carmen','city_id'=>'10',]); 
    Province::create(['id'=>'27','name'=>'Freirina','city_id'=>'10',]); 
    Province::create(['id'=>'28','name'=>'Huasco','city_id'=>'10',]); 
    Province::create(['id'=>'29','name'=>'Vallenar','city_id'=>'10',]); 
    Province::create(['id'=>'30','name'=>'Canela','city_id'=>'11',]); 
    Province::create(['id'=>'31','name'=>'Illapel','city_id'=>'11',]); 
    Province::create(['id'=>'32','name'=>'Los Vilos','city_id'=>'11',]); 
    Province::create(['id'=>'33','name'=>'Salamanca','city_id'=>'11',]);
    Province::create(['id'=>'34','name'=>'Andacollo','city_id'=>'12',]);
    Province::create(['id'=>'35','name'=>'Coquimbo','city_id'=>'12',]);
    Province::create(['id'=>'36','name'=>'La Higuera','city_id'=>'12',]);
    Province::create(['id'=>'37','name'=>'La Serena','city_id'=>'12',]);
    Province::create(['id'=>'38','name'=>'Paihuaco','city_id'=>'12',]);
    Province::create(['id'=>'39','name'=>'Vicuña','city_id'=>'12',]);
    Province::create(['id'=>'40','name'=> 'Combarbalá','city_id'=>'13',]);
    Province::create(['id'=>'41','name'=>'Monte Patria','city_id'=>'13',]);
    Province::create(['id'=>'42','name'=>'Ovalle','city_id'=>'13',]);
    Province::create(['id'=>'43','name'=>'Punitaqui','city_id'=>'13',]);
    Province::create(['id'=>'44','name'=>'Río Hurtado','city_id'=>'13',]);
    Province::create(['id'=>'45','name'=>'Isla de Pascua','city_id'=>'14',]);
    Province::create(['id'=>'46','name'=>'Calle Larga','city_id'=>'15',]);
    Province::create(['id'=>'47','name'=>'Los Andes','city_id'=>'15',]);
    Province::create(['id'=>'48','name'=>'Rinconada','city_id'=>'15',]);
    Province::create(['id'=>'49','name'=>'San Esteban','city_id'=>'15',]);
    Province::create(['id'=>'50','name'=>'La Ligua','city_id'=>'16',]);
    Province::create(['id'=>'51','name'=>'Papudo','city_id'=>'16',]);
    Province::create(['id'=>'52','name'=> 'Petorca','city_id'=>'16',]);
    Province::create(['id'=>'53','name'=>'Zapallar','city_id'=>'16',]);
    Province::create(['id'=>'54','name'=>'Hijuelas','city_id'=>'17',]);
    Province::create(['id'=>'55','name'=>'La Calera','city_id'=>'17',]);
    Province::create(['id'=>'56','name'=>'La Cruz','city_id'=>'17',]);
    Province::create(['id'=>'57','name'=>'Limache','city_id'=>'17',]);
    Province::create(['id'=>'58','name'=>'Nogales','city_id'=>'17',]);
    Province::create(['id'=>'59','name'=>'Olmué','city_id'=>'17',]);
    Province::create(['id'=>'60','name'=>'Quillota','city_id'=>'17',]);
    Province::create(['id'=>'61','name'=>'Algarrobo','city_id'=>'18',]);
    Province::create(['id'=>'62','name'=>'Cartagena','city_id'=>'18',]);
    Province::create(['id'=>'63','name'=>'El Quisco','city_id'=>'18',]);
    Province::create(['id'=>'64','name'=>'El Tabo','city_id'=>'18',]);
    Province::create(['id'=>'65','name'=>'San Antonio','city_id'=>'18',]);
    Province::create(['id'=>'66','name'=>'Santo Domingo','city_id'=>'18',]);
    Province::create(['id'=>'67','name'=>'Catemu','city_id'=>'19',]);
    Province::create(['id'=>'68','name'=>'Llaillay','city_id'=>'19',]);
    Province::create(['id'=>'69','name'=>'Panquehue','city_id'=>'19',]);
    Province::create(['id'=>'70','name'=>'Putaendo','city_id'=>'19',]);
    Province::create(['id'=>'71','name'=>'San Felipe','city_id'=>'19',]);
    Province::create(['id'=>'72','name'=>'Santa María','city_id'=>'19',]);
    Province::create(['id'=>'73','name'=>'Casablanca','city_id'=>'20',]);
    Province::create(['id'=>'74','name'=>'Concón','city_id'=>'20',]);
    Province::create(['id'=>'75','name'=>'Juan Fernández','city_id'=>'20',]);
    Province::create(['id'=>'76','name'=>'Puchuncaví','city_id'=>'20',]);
    Province::create(['id'=>'77','name'=>'Quilpué','city_id'=>'20',]);
    Province::create(['id'=>'78','name'=> 'Quintero','city_id'=>'20',]);
    Province::create(['id'=>'79','name'=>'Valparaíso','city_id'=>'20',]);
    Province::create(['id'=>'80','name'=>'Villa Alemana','city_id'=>'20',]);
    Province::create(['id'=>'81','name'=>'Viña del Mar','city_id'=>'20',]);
    Province::create(['id'=>'82','name'=>'Colina','city_id'=>'21',]);
    Province::create(['id'=>'83','name'=>'Lampa','city_id'=>'21',]);
    Province::create(['id'=>'84','name'=> 'Tiltil','city_id'=>'21',]);
    Province::create(['id'=>'85','name'=>'Pirque','city_id'=>'22',]);
    Province::create(['id'=>'86','name'=>'Puente Alto','city_id'=>'22',]);
    Province::create(['id'=>'87','name'=>'San José de Maipo','city_id'=>'22',]);
    Province::create(['id'=>'88','name'=>'Buin','city_id'=>'23',]);
    Province::create(['id'=>'89','name'=> 'Calera de Tango','city_id'=>'23',]);
    Province::create(['id'=>'90','name'=> 'Paine','city_id'=>'23',]);
    Province::create(['id'=>'91','name'=> 'San Bernardo','city_id'=>'23',]);
    Province::create(['id'=>'92','name'=>'Alhué','city_id'=>'24',]);
    Province::create(['id'=>'93','name'=>'Curacaví','city_id'=>'24',]);
    Province::create(['id'=>'94','name'=> 'María Pinto','city_id'=>'24',]);
    Province::create(['id'=>'95','name'=>'Melipilla','city_id'=>'24',]);
    Province::create(['id'=>'96','name'=>'San Pedro','city_id'=>'24',]);
    Province::create(['id'=>'97','name'=>'Cerrillos','city_id'=>'25',]);
    Province::create(['id'=>'98','name'=>'Cerro Navia','city_id'=>'25',]);
    Province::create(['id'=>'99','name'=>'Conchalí','city_id'=>'25',]);
    Province::create(['id'=>'100','name'=>'El Bosque','city_id'=>'25',]);
    Province::create(['id'=>'101','name'=>'Estación Central','city_id'=>'25',]);
    Province::create(['id'=>'102','name'=>'Huechuraba','city_id'=>'25',]);
    Province::create(['id'=>'103','name'=>'Independencia','city_id'=>'25',]);
    Province::create(['id'=>'104','name'=>'La Cisterna','city_id'=>'25',]);
    Province::create(['id'=>'105','name'=>'La Granja','city_id'=>'25',]);
    Province::create(['id'=>'106','name'=>'La Florida','city_id'=>'25',]);
    Province::create(['id'=>'107','name'=>'La Pintana','city_id'=>'25',]);
    Province::create(['id'=>'108','name'=>'La Reina','city_id'=>'25',]);
    Province::create(['id'=>'109','name'=>'Las Condes','city_id'=>'25',]);
    Province::create(['id'=>'110','name'=>'Lo Barnechea','city_id'=>'25',]);
    Province::create(['id'=>'111','name'=>'Lo Espejo','city_id'=>'25',]);
    Province::create(['id'=>'112','name'=> 'Lo Prado','city_id'=>'25',]);
    Province::create(['id'=>'113','name'=> 'Macul','city_id'=>'25',]);
    Province::create(['id'=>'114','name'=> 'Maipú','city_id'=>'25',]);
    Province::create(['id'=>'115','name'=>'Ñuñoa','city_id'=>'25',]);
    Province::create(['id'=>'116','name'=>'Pedro Aguirre Cerda','city_id'=>'25',]);
    Province::create(['id'=>'117','name'=>'Peñalolén','city_id'=>'25',]);
    Province::create(['id'=>'118','name'=>'Providencia','city_id'=>'25',]);
    Province::create(['id'=>'119','name'=>'Pudahuel','city_id'=>'25',]);
    Province::create(['id'=>'120','name'=>'Quilicura','city_id'=>'25',]);
    Province::create(['id'=>'121','name'=>'Quinta Normal','city_id'=>'25',]);
    Province::create(['id'=>'122','name'=>'Recoleta','city_id'=>'25',]);
    Province::create(['id'=>'123','name'=>'Renca','city_id'=>'25',]);
    Province::create(['id'=>'124','name'=>'San Miguel','city_id'=>'25',]);
    Province::create(['id'=>'125','name'=>'San Joaquín','city_id'=>'25',]);
    Province::create(['id'=>'126','name'=>'San Ramón','city_id'=>'25',]);
    Province::create(['id'=>'127','name'=>'Santiago','city_id'=>'25',]);
    Province::create(['id'=>'128','name'=>'Vitacura','city_id'=>'25',]);
    Province::create(['id'=>'129','name'=>'El Monte','city_id'=>'26',]);
    Province::create(['id'=>'130','name'=>'Isla de Maipo','city_id'=>'26',]);
    Province::create(['id'=>'131','name'=>'Padre Hurtado','city_id'=>'26',]);
    Province::create(['id'=>'132','name'=>'Peñaflor','city_id'=>'26',]);
    Province::create(['id'=>'133','name'=>'Talagante','city_id'=>'26',]);
    Province::create(['id'=>'134','name'=> 'Codegua','city_id'=>'27',]);
    Province::create(['id'=>'135','name'=>'Coínco','city_id'=>'27',]);
    Province::create(['id'=>'136','name'=>'Coltauco','city_id'=>'27',]);
    Province::create(['id'=>'137','name'=>'Doñihue','city_id'=>'27',]);
    Province::create(['id'=>'138','name'=>'Graneros','city_id'=>'27',]);
    Province::create(['id'=>'139','name'=>'Las Cabras','city_id'=>'27',]);
    Province::create(['id'=>'140','name'=>'Machalí','city_id'=>'27',]);
    Province::create(['id'=>'141','name'=>'Malloa','city_id'=>'27',]);
    Province::create(['id'=>'142','name'=>'Mostazal','city_id'=>'27',]);
    Province::create(['id'=>'143','name'=>'Olivar','city_id'=>'27',]);
    Province::create(['id'=>'144','name'=>'Peumo','city_id'=>'27',]);
    Province::create(['id'=>'145','name'=>'Pichidegua','city_id'=>'27',]);
    Province::create(['id'=>'146','name'=>'Quinta de Tilcoco','city_id'=>'27',]);
    Province::create(['id'=>'147','name'=>'Rancagua','city_id'=>'27',]);
    Province::create(['id'=>'148','name'=>'Rengo','city_id'=>'27',]);
    Province::create(['id'=>'149','name'=>'Requínoa','city_id'=>'27',]);
    Province::create(['id'=>'150','name'=> 'San Vicente de Tagua Tagua','city_id'=>'27',]);
    Province::create(['id'=>'151','name'=>'La Estrella','city_id'=>'28',]);
    Province::create(['id'=>'152','name'=>'Litueche','city_id'=>'28',]);
    Province::create(['id'=>'153','name'=>'Marchihue','city_id'=>'28',]);
    Province::create(['id'=>'154','name'=>'Navidad','city_id'=>'28',]);
    Province::create(['id'=>'155','name'=>'Peredones','city_id'=>'28',]);
    Province::create(['id'=>'156','name'=>'Pichilemu','city_id'=>'28',]);
    Province::create(['id'=>'157','name'=>'Chépica','city_id'=>'29',]);
    Province::create(['id'=>'158','name'=>'Chimbarongo','city_id'=>'29',]);
    Province::create(['id'=>'159','name'=>'Lolol','city_id'=>'29',]);
    Province::create(['id'=>'160','name'=>'Nancagua','city_id'=>'29',]);
    Province::create(['id'=>'161','name'=>'Palmilla','city_id'=>'29',]);
    Province::create(['id'=>'162','name'=>'Peralillo','city_id'=>'29',]);
    Province::create(['id'=>'163','name'=>'Placilla','city_id'=>'29',]);
    Province::create(['id'=>'164','name'=>'Pumanque','city_id'=>'29',]);
    Province::create(['id'=>'165','name'=>'San Fernando','city_id'=>'29',]);
    Province::create(['id'=>'166','name'=>'Santa Cruz','city_id'=>'29',]);
    Province::create(['id'=>'167','name'=>'Cauquenes','city_id'=>'30',]);
    Province::create(['id'=>'168','name'=>'Chanco','city_id'=>'30',]);
    Province::create(['id'=>'169','name'=>'Pelluhue','city_id'=>'30',]);
    Province::create(['id'=>'170','name'=>'Curicó','city_id'=>'31',]);
    Province::create(['id'=>'171','name'=>'Hualañé','city_id'=>'31',]);
    Province::create(['id'=>'172','name'=>'Licantén','city_id'=>'31',]);
    Province::create(['id'=>'173','name'=>'Molina','city_id'=>'31',]);
    Province::create(['id'=>'174','name'=>'Rauco','city_id'=>'31',]);
    Province::create(['id'=>'175','name'=>'Romeral','city_id'=>'31',]);
    Province::create(['id'=>'176','name'=>'Sagrada Familia','city_id'=>'31',]);
    Province::create(['id'=>'177','name'=>'Teno','city_id'=>'31',]);
    Province::create(['id'=>'178','name'=>'Vichuquén','city_id'=>'31',]);
    Province::create(['id'=>'179','name'=>'Colbún','city_id'=>'32',]);
    Province::create(['id'=>'180','name'=>'Linares','city_id'=>'32',]);
    Province::create(['id'=>'181','name'=>'Longaví','city_id'=>'32',]);
    Province::create(['id'=>'182','name'=>'Parral','city_id'=>'32',]);
    Province::create(['id'=>'183','name'=>'Retiro','city_id'=>'32',]);
    Province::create(['id'=>'184','name'=>'San Javier','city_id'=>'32',]);
    Province::create(['id'=>'185','name'=>'Villa Alegre','city_id'=>'32',]);
    Province::create(['id'=>'186','name'=>'Yerbas Buenas','city_id'=>'32',]);
    Province::create(['id'=>'187','name'=>'Constitución','city_id'=>'33',]);
    Province::create(['id'=>'188','name'=>'Curepto','city_id'=>'33',]);
    Province::create(['id'=>'189','name'=>'Empedrado','city_id'=>'33',]);
    Province::create(['id'=>'190','name'=>'Maule','city_id'=>'33',]);
    Province::create(['id'=>'191','name'=>'Pelarco','city_id'=> '33',]);
    Province::create(['id'=>'192','name'=>'Pencahue','city_id'=> '33',]);
    Province::create(['id'=>'193','name'=>'Río Claro','city_id'=> '33',]);
    Province::create(['id'=>'194','name'=>'San Clemente','city_id'=> '33',]);
    Province::create(['id'=>'195','name'=>'San Rafael','city_id'=>'33',]);
    Province::create(['id'=>'196','name'=>'Talca','city_id'=>'33',]);
    Province::create(['id'=>'197','name'=>'Arauco','city_id'=>'34',]);
    Province::create(['id'=>'198','name'=>'Cañete','city_id'=>'34',]);
    Province::create(['id'=>'199','name'=>'Contulmo','city_id'=>'34',]);
    Province::create(['id'=>'200','name'=>'Curanilahue','city_id'=>'34',]);
    Province::create(['id'=>'201','name'=>'Lebu','city_id'=>'34',]);
    Province::create(['id'=>'202','name'=>'Los Álamos','city_id'=>'34',]);
    Province::create(['id'=>'203','name'=>'Tirúa','city_id'=>'34',]);
    Province::create(['id'=>'204','name'=>'Alto Biobío','city_id'=>'35',]);
    Province::create(['id'=>'205','name'=>'Antuco','city_id'=>'35',]);
    Province::create(['id'=>'206','name'=> 'Cabrero','city_id'=>'35',]);
    Province::create(['id'=>'207','name'=>'Laja','city_id'=>'35',]);
    Province::create(['id'=>'208','name'=>'Los Ángeles','city_id'=>'35',]);
    Province::create(['id'=>'209','name'=>'Mulchén','city_id'=>'35',]);
    Province::create(['id'=>'210','name'=>'Nacimiento','city_id'=>'35',]);
    Province::create(['id'=>'211','name'=>'Negrete','city_id'=>'35',]);
    Province::create(['id'=>'212','name'=>'Quilaco','city_id'=>'35',]);
    Province::create(['id'=>'213','name'=>'Quilleco','city_id'=>'35',]);
    Province::create(['id'=>'214','name'=>'San Rosendo','city_id'=>'35',]);
    Province::create(['id'=>'215','name'=>'Santa Bárbara','city_id'=>'35',]);
    Province::create(['id'=>'216','name'=>'Tucapel','city_id'=>'35',]);
    Province::create(['id'=>'217','name'=>'Yumbel','city_id'=>'35',]);
    Province::create(['id'=>'218','name'=>'Chiguayante','city_id'=>'36',]);
    Province::create(['id'=>'219','name'=>'Concepción','city_id'=>'36',]);
    Province::create(['id'=>'220','name'=>'Coronel','city_id'=>'36',]);
    Province::create(['id'=>'221','name'=>'Florida','city_id'=>'36',]);
    Province::create(['id'=>'222','name'=>'Hualpén','city_id'=>'36',]);
    Province::create(['id'=>'223','name'=>'Hualqui','city_id'=>'36',]);
    Province::create(['id'=>'224','name'=>'Lota','city_id'=>'36',]);
    Province::create(['id'=>'225','name'=>'Penco','city_id'=>'36',]);
    Province::create(['id'=>'226','name'=>'San Pedro de La Paz','city_id'=>'36',]);
    Province::create(['id'=>'227','name'=>'Santa Juana','city_id'=>'36',]);
    Province::create(['id'=>'228','name'=>'Talcahuano','city_id'=>'36',]);
    Province::create(['id'=>'229','name'=>'Tomé','city_id'=>'36',]);
    Province::create(['id'=>'230','name'=>'Bulnes','city_id'=>'37',]);
    Province::create(['id'=>'231','name'=>'Chillán','city_id'=>'37',]);
    Province::create(['id'=>'232','name'=>'Chillán Viejo','city_id'=>'37',]);
    Province::create(['id'=>'233','name'=>'Cobquecura','city_id'=>'37',]);
    Province::create(['id'=>'234','name'=>'Coelemu','city_id'=>'37',]);
    Province::create(['id'=>'235','name'=>'Coihueco','city_id'=>'37',]);
    Province::create(['id'=>'236','name'=>'El Carmen','city_id'=>'37',]);
    Province::create(['id'=>'237','name'=>'Ninhue','city_id'=>'37',]);
    Province::create(['id'=>'238','name'=>'Ñiquen','city_id'=>'37',]);
    Province::create(['id'=>'239','name'=>'Pemuco','city_id'=>'37',]);
    Province::create(['id'=>'240','name'=>'Pinto','city_id'=>'37',]);
    Province::create(['id'=>'241','name'=>'Portezuelo','city_id'=>'37',]);
    Province::create(['id'=>'242','name'=>'Quillón','city_id'=>'37',]);
    Province::create(['id'=>'243','name'=>'Quirihue','city_id'=>'37',]);
    Province::create(['id'=>'244','name'=>'Ránquil','city_id'=>'37',]);
    Province::create(['id'=>'245','name'=>'San Carlos','city_id'=>'37',]);
    Province::create(['id'=>'246','name'=>'San Fabián','city_id'=>'37',]);
    Province::create(['id'=>'247','name'=>'San Ignacio','city_id'=>'37',]);
    Province::create(['id'=>'248','name'=>'San Nicolás','city_id'=>'37',]);
    Province::create(['id'=>'249','name'=>'Treguaco','city_id'=>'37',]);
    Province::create(['id'=>'250','name'=>'Yungay','city_id'=>'37',]);
    Province::create(['id'=>'251','name'=>'Carahue','city_id'=>'38',]);
    Province::create(['id'=>'252','name'=>'Cholchol','city_id'=>'38',]);
    Province::create(['id'=>'253','name'=>'Cunco','city_id'=>'38',]);
    Province::create(['id'=>'254','name'=>'Curarrehue','city_id'=>'38',]);
    Province::create(['id'=>'255','name'=>'Freire','city_id'=>'38',]);
    Province::create(['id'=>'256','name'=>'Galvarino','city_id'=>'38',]);
    Province::create(['id'=>'257','name'=>'Gorbea','city_id'=>'38',]);
    Province::create(['id'=>'258','name'=>'Lautaro','city_id'=>'38',]);
    Province::create(['id'=>'259','name'=>'Loncoche','city_id'=>'38',]);
    Province::create(['id'=>'260','name'=>'Melipeuco','city_id'=>'38',]);
    Province::create(['id'=>'261','name'=>'Nueva Imperial','city_id'=>'38',]);
    Province::create(['id'=>'263','name'=>'Padre Las Casas','city_id'=>'38',]);
    Province::create(['id'=>'264','name'=>'Perquenco','city_id'=>'38',]);
    Province::create(['id'=>'265','name'=>'Pitrufquén','city_id'=>'38',]);
    Province::create(['id'=>'266','name'=>'Pucón','city_id'=>'38',]);
    Province::create(['id'=>'267','name'=>'Saavedra','city_id'=>'38',]);
    Province::create(['id'=>'268','name'=>'Temuco','city_id'=>'38',]);
    Province::create(['id'=>'269','name'=>'Teodoro Schmidt','city_id'=>'38',]);
    Province::create(['id'=>'270','name'=>'Toltén','city_id'=>'38',]);
    Province::create(['id'=>'271','name'=>'Vilcún','city_id'=>'38',]);
    Province::create(['id'=>'272','name'=>'Villarrica','city_id'=>'38',]);
    Province::create(['id'=>'273','name'=>'Angol','city_id'=>'39',]);
    Province::create(['id'=>'274','name'=>'Collipulli','city_id'=>'39',]);
    Province::create(['id'=>'275','name'=>'Curacautín','city_id'=>'39',]);
    Province::create(['id'=>'276','name'=>'Ercilla','city_id'=>'39',]);
    Province::create(['id'=>'277','name'=>'Lonquimay','city_id'=>'39',]);
    Province::create(['id'=>'278','name'=>'Los Sauces','city_id'=>'39',]);
    Province::create(['id'=>'279','name'=>'Lumaco','city_id'=>'39',]);
    Province::create(['id'=>'280','name'=>'Purén','city_id'=>'39',]);
    Province::create(['id'=>'281','name'=>'Renaico','city_id'=>'39',]);
    Province::create(['id'=>'282','name'=>'Traiguén','city_id'=>'39',]);
    Province::create(['id'=>'283','name'=>'Victoria','city_id'=>'39',]);
    Province::create(['id'=>'284','name'=>'Corral','city_id'=>'40',]);
    Province::create(['id'=>'285','name'=>'Lanco','city_id'=>'40',]);
    Province::create(['id'=>'286','name'=>'Los Lagos','city_id'=>'40',]);
    Province::create(['id'=>'287','name'=>'Máfil','city_id'=>'40',]);
    Province::create(['id'=>'288','name'=>'Mariquina','city_id'=>'40',]);
    Province::create(['id'=>'289','name'=>'Paillaco','city_id'=>'40',]);
    Province::create(['id'=>'290','name'=>'Panguipulli','city_id'=>'40',]);
    Province::create(['id'=>'291','name'=>'Valdivia','city_id'=>'40',]);
    Province::create(['id'=>'292','name'=>'Futrono','city_id'=>'41',]);
    Province::create(['id'=>'293','name'=>'La Unión','city_id'=>'41',]);
    Province::create(['id'=>'294','name'=>'Lago Ranco','city_id'=>'41',]);
    Province::create(['id'=>'295','name'=>'Río Bueno','city_id'=>'41',]);
    Province::create(['id'=>'296','name'=>'Ancud','city_id'=>'42',]);
    Province::create(['id'=>'297','name'=>'Castro','city_id'=>'42',]);
    Province::create(['id'=>'298','name'=>'Chonchi','city_id'=>'42',]);
    Province::create(['id'=>'299','name'=>'Curaco de Vélez','city_id'=>'42',]);
    Province::create(['id'=>'300','name'=>'Dalcahue','city_id'=>'42',]);
    Province::create(['id'=>'301','name'=>'Puqueldón','city_id'=>'42',]);
    Province::create(['id'=>'302','name'=>'Queilén','city_id'=>'42',]);
    Province::create(['id'=>'303','name'=>'Quemchi','city_id'=>'42',]);
    Province::create(['id'=>'304','name'=>'Quellón','city_id'=>'42',]);
    Province::create(['id'=>'305','name'=>'Quinchao','city_id'=>'42',]);
    Province::create(['id'=>'306','name'=>'Calbuco','city_id'=>'43',]);
    Province::create(['id'=>'307','name'=>'Cochamó','city_id'=>'43',]);
    Province::create(['id'=>'308','name'=>'Fresia','city_id'=>'43',]);
    Province::create(['id'=>'309','name'=>'Frutillar','city_id'=>'43',]);
    Province::create(['id'=>'310','name'=>'Llanquihue','city_id'=>'43',]);
    Province::create(['id'=>'311','name'=>'Los Muermos','city_id'=>'43',]);
    Province::create(['id'=>'312','name'=>'Maullín','city_id'=>'43',]);
    Province::create(['id'=>'313','name'=>'Puerto Montt','city_id'=>'43',]);
    Province::create(['id'=>'314','name'=>'Puerto Varas','city_id'=>'43',]);
    Province::create(['id'=>'315','name'=>'Osorno','city_id'=>'44',]);
    Province::create(['id'=>'316','name'=>'Puero Octay','city_id'=>'44',]);
    Province::create(['id'=>'317','name'=>'Purranque','city_id'=>'44',]);
    Province::create(['id'=>'318','name'=>'Puyehue','city_id'=>'44',]);
    Province::create(['id'=>'319','name'=>'Río Negro','city_id'=>'44',]);
    Province::create(['id'=>'320','name'=>'San Juan de la Costa','city_id'=>'44',]);
    Province::create(['id'=>'321','name'=>'San Pablo','city_id'=>'44',]);
    Province::create(['id'=>'322','name'=>'Chaitén','city_id'=>'45',]);
    Province::create(['id'=>'323','name'=>'Futaleufú','city_id'=>'45',]);
    Province::create(['id'=>'324','name'=>'Hualaihué','city_id'=>'45',]);
    Province::create(['id'=>'325','name'=>'Palena','city_id'=>'45',]);
    Province::create(['id'=>'326','name'=>'Aisén','city_id'=>'46',]);
    Province::create(['id'=>'327','name'=>'Cisnes','city_id'=>'46',]);
    Province::create(['id'=>'328','name'=>'Guaitecas','city_id'=>'46',]);
    Province::create(['id'=>'329','name'=>'Cochrane','city_id'=>'47',]);
    Province::create(['id'=>'330','name'=>'O\'higgins','city_id'=>'47',]);
    Province::create(['id'=>'331','name'=>'Tortel','city_id'=>'47',]);
    Province::create(['id'=>'332','name'=>'Coihaique','city_id'=>'48',]);
    Province::create(['id'=>'333','name'=>'Lago Verde','city_id'=>'48',]);
    Province::create(['id'=>'334','name'=>'Chile Chico','city_id'=>'49',]);
    Province::create(['id'=>'335','name'=>'Río Ibáñez','city_id'=>'49',]);
    Province::create(['id'=>'336','name'=>'Antártica','city_id'=>'50',]);
    Province::create(['id'=>'338','name'=>'Cabo de Hornos','city_id'=>'50',]);
    Province::create(['id'=>'339','name'=>'Laguna Blanca','city_id'=>'51',]);
    Province::create(['id'=>'340','name'=>'Punta Arenas','city_id'=>'51',]);
    Province::create(['id'=>'341','name'=>'Río Verde','city_id'=>'51',]);
    Province::create(['id'=>'342','name'=>'San Gregorio','city_id'=>'51',]);
    Province::create(['id'=>'343','name'=>'Porvenir','city_id'=>'52',]);
    Province::create(['id'=>'344','name'=>'Primavera','city_id'=>'52',]);
    Province::create(['id'=>'346','name'=>'Timaukel','city_id'=>'52',]);
    Province::create(['id'=>'347','name'=>'Natales','city_id'=>'53',]);
    Province::create(['id'=>'348','name'=>'Torres del Paine','city_id'=>'53',]); 
     }
}