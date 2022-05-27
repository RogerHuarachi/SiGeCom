<?php

namespace Database\Seeders;
use App\Models\Caedec;

use Illuminate\Database\Seeder;

class CaedecsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        
        $EAS = [
            [
                'category'      => 'A',
                'heading'       => 'Producción',
                'code'          => '1111',
                'description'   => 'Cultivo de cereales',
                'note'          => 'El cultivo de trigo, arroz, maíz, centeno, avena, sorgo, cebada, cañahua, quinua y otros cereales',
            ],
            [    
                'category'      => 'A',
                'heading'       => 'Producción',
                'code'          => '1112',
                'description'   => 'Cultivo de oleaginosas',
                'note'          => 'Los cultivos de plantas oleaginosas (para aceites comestibles o de uso industrial) como soya, girasol, pepitas de algodón, maní, cártamo, coco, jojoba, linaza, motacú, ricino y otras oleaginosas.',
            ],
            [    
                'category'      => 'A',
                'heading'       => 'Producción',
                'code'          => '1113',
                'description'   => 'Cultivos sacarinos',
                'note'          => 'El cultivo de caña de azúcar, remolacha azucarera, estevia y otros cultivos sacarinos.',
            ],
            [    
                'category'      => 'A',
                'heading'       => 'Producción',
                'code'          => '1114',
                'description'   => 'Cultivo de plantas para la obtención de fibras',
                'note'          => 'El cultivo de diversas plantas textiles: algodón, lino textil, cáñamo, cabuya, carahuata y otros cultivos de plantas textiles',
            ],
            [    
                'category'      => 'A',
                'heading'       => 'Producción',
                'code'          => '1115',
                'description'   => 'Cultivo forrajero (para el pastoreo o la henificación, forraje verde o ensilaje)',
                'note'          => 'El cultivo de alfalfa, sorgo; avena, cebada y centeno berza; braquiara, búfalo, colonion, etc.',
            ],
            [    
                'category'      => 'A',
                'heading'       => 'Producción',
                'code'          => '1119',
                'description'   => 'Otros cultivos ncp',
                'note'          => 'El cultivo de tabaco, incluida su recolección, el desnervado y otros procesos cuyo resultado no sea un producto dispuesto para fumar. Las plantaciones de palmitos, castaña, del árbol gomero, achicoria, cañahueca o bambu y otros cultivos no clasificados en  otra parte. Esta subclase no incluye: El cultivo de hortalizas (Véase 01122). El cultivo de plantas para infusiones y bebidas (véase 01136). El cultivo de materias vegetales. La transformación del tabaco en un producto dispuesto para fumar (véase 1600).',
            ],
            [    
                'category'      => 'A',
                'heading'       => 'Producción',
                'code'          => '1121',
                'description'   => 'Cultivo de hortalizas de raíz y tubérculo',
                'note'          => 'El cultivo de zanahoria nabo, rábano, betarraga, papa, camote, yuca, oca, racacha, papaliza, hualuza, izaño (mashua), otras raíces y tubérculos comestibles',
            ],
            [    
                'category'      => 'A',
                'heading'       => 'Producción',
                'code'          => '1122',
                'description'   => 'Cultivo de hortalizas de flor y fruto',
                'note'          => 'El cultivo de alcachofa, coliflor, brócoly, berenjena, espárrago, tomate, pepino, pepinillo, ají, pimentón, zapallo y otras hortalizas de flor y fruto',
            ],
            [    
                'category'      => 'A',
                'heading'       => 'Producción',
                'code'          => '1123',
                'description'   => 'Cultivo de hortalizas de hoja',
                'note'          => 'El cultivo de acelga, apio, espinca, lechuga, perejil, espárrago. repollo, culandro, quirquiña, huacataya, albahaca, berro y otras hortalizas de hoja.',
            ],
            [    
                'category'      => 'A',
                'heading'       => 'Producción',
                'code'          => '1124',
                'description'   => 'Cultivo de hortalizas de bulbo',
                'note'          => 'El cultivo de ajo y cebolla',
            ],
            [    
                'category'      => 'A',
                'heading'       => 'Producción',
                'code'          => '1125',
                'description'   => 'Cultivo de legumbres',
                'note'          => 'El cultivo de frejol (cumanda, poroto, chaucha), arveja, haba, garbanzo, lenteja, tarwy, vainita, etc.',
            ],
            [    
                'category'      => 'A',
                'heading'       => 'Producción',
                'code'          => '1126',
                'description'   => 'Cultivo de flores y plantas ornamentales',
                'note'          => 'El cultivo de rosa, clavel, crisantemo, azucena, cartucho, etc., y plantas ornamentales en viveros.Esta subclase no incluye: La explotación de viveros forestales. ',
            ],
            [    
                'category'      => 'A',
                'heading'       => 'Producción',
                'code'          => '1127',
                'description'   => 'Producción de semillas y otras formas de propagación de cultivos agrícolas',
                'note'          => 'La producción de semillas de cereales, oleaginosas, forrajeras, frutales,hortalizas, legumbres, flores, etc., semillas híbridas y los gajos, bulbos,estacas enraizadas o no, esquejes, cepas, plantines y otras formas de propagación.',
            ],
            [    
                'category'      => 'A',
                'heading'       => 'Producción',
                'code'          => '1129',
                'description'   => 'Otros cultivos de hortalizas, legumbres y especialidades hortícolas y recolecciones ncp',
                'note'          => 'El cultivo y la recolección de hongos y cochinilla.',
            ],
            [    
                'category'      => 'A',
                'heading'       => 'Producción',
                'code'          => '1131',
                'description'   => 'Cultivo de frutas de carozo',
                'note'          => 'El cultivo de ciruela, damasco, (albarillo), durazno, guinda y otras frutas de carozo.',
            ],
            [    
                'category'      => 'A',
                'heading'       => 'Producción',
                'code'          => '1132',
                'description'   => 'Cultivo de frutas cítricas',
                'note'          => 'El cultivo de lima, limón, mandarina, naranja, toronja, etc.',
            ],
            [    
                'category'      => 'A',
                'heading'       => 'Producción',
                'code'          => '1133',
                'description'   => 'Cultivo de frutas de pepita',
                'note'          => 'El cultivo de maracuyá, chirimoya, manzana, pera, membrillo, níspero, pera,peramota, papaya, mango, palta, sandía, tamarindo, tumbo, tuna, uva, etc.',
            ],
            [    
                'category'      => 'A',
                'heading'       => 'Producción',
                'code'          => '1134',
                'description'   => 'Cultivo de frutas secas',
                'note'          => 'El cultivo de la nuez, cocos y otros frutos secos.',
            ],
            [    
                'category'      => 'A',
                'heading'       => 'Producción',
                'code'          => '1135',
                'description'   => 'Cultivos de plantas para bebidas y estimulantes',
                'note'          => 'El cultivo de plantas para preparar bebidas e infusiones tales como el café, cacao, té, coca, lúpulo, hierba mate.',
            ],
            [    
                'category'      => 'A',
                'heading'       => 'Producción',
                'code'          => '1136',
                'description'   => 'Cultivo de especias y de plantas aromáticas y medicinales',
                'note'          => 'El cultivo de menta, anís, manzanilla, cedrón, boldo, toronjil, comino, vainilla,pimienta negra, pimienta dulce, clavo de olor, urucú, laurel, orégano, y otras especias.',
            ],
            [    
                'category'      => 'A',
                'heading'       => 'Producción',
                'code'          => '1139',
                'description'   => 'Otras frutas cultivadas ncp',
                'note'          => 'El cultivo de paltano, banano, piña, mora, guayaba, taruma, caya y otros.',
            ],
            [    
                'category'      => 'A',
                'heading'       => 'Producción',
                'code'          => '1211',
                'description'   => 'Cría de ganado vacuno',
                'note'          => 'Las unidades pecuarias dedicadas principalmente a la cría deganado vacuno.Esta subclase no incluye:El servicio de albergue, cuidado y cría de ganado que se realiza por contrata (véase 01402).',
            ],
            [    
                'category'      => 'A',
                'heading'       => 'Producción',
                'code'          => '1212',
                'description'   => 'Cría de ganado ovino, caprino, y equinos',
                'note'          => 'La cría de ovejas, cabras, caballos.Esta subclase no incluye:La esquila de ovejas por contrata (véase 01402).',
            ],
            [    
                'category'      => 'A',
                'heading'       => 'Producción',
                'code'          => '1213',
                'description'   => 'Cría de ganado camélido',
                'note'          => 'La cría de alpaca, guanaco, llama, vicuña y otros.',
            ],
            [    
                'category'      => 'A',
                'heading'       => 'Producción',
                'code'          => '1214',
                'description'   => 'Producción de leche  cruda',
                'note'          => 'La producción de leche cruda de vaca, cabra, oveja,etc.Esta subclase no incluye:El tratamiento de la leche por la industria láctea (véase 15201).',
            ],
            [    
                'category'      => 'A',
                'heading'       => 'Producción',
                'code'          => '1215',
                'description'   => 'Producción de lana, fibra, pelo de animales (esquila)',
                'note'          => 'La producción de lana de oveja en bruto; fibra de vicuña, alpaca, guanaco, llama, etc., pelo de conejo.Esta subclase no incluye:La esquila de ovejas por contrata o a cambio de una retribución (véase 01402). La lana de matadero (véase 15119).',
            ],
            [    
                'category'      => 'A',
                'heading'       => 'Producción',
                'code'          => '1221',
                'description'   => 'Cría de aves',
                'note'          => 'La cría de aves domésticas como gallinas, gallos, pollitos BB para postura, pavos, patos y codornices. Esta subclase no incluye:La matanza de aves de corral fuera de la unidad (véase 15112).',
            ],
            [    
                'category'      => 'A',
                'heading'       => 'Producción',
                'code'          => '1222',
                'description'   => 'Cría de ganado porcino',
                'note'          => 'La cría de ganado porcino Esta subclase no incluye: El cuidado de ganado por cuenta de terceros (véase 01402). La matanza de ganado porcino fuera de la unidad pecuaria (véase 15114).',
            ],
            [    
                'category'      => 'A',
                'heading'       => 'Producción',
                'code'          => '1223',
                'description'   => 'Producción de huevos',
                'note'          => 'La obtención de huevos de aves de corral. ',
            ],
            [    
                'category'      => 'A',
                'heading'       => 'Producción',
                'code'          => '1224',
                'description'   => 'Apicultura',
                'note'          => 'La producción de miel, jalea real, polen, propoléo, etc.',
            ],
            [    
                'category'      => 'A',
                'heading'       => 'Producción',
                'code'          => '1229',
                'description'   => 'Cría de animales y obtención de productos de origen animal ncp',
                'note'          => 'La cría de conejo, cría de animales de compañia, sericultura: cría de gusanos de seda, cría de reptiles de agua y de ranas en estanques, cría de animales diversos, incluidos los animales utilizados para investigación, cera de insectos excepto la de abeja, etc.',
            ],
            [    
                'category'      => 'A',
                'heading'       => 'Producción',
                'code'          => '1300',
                'description'   => 'Cultivos de productos agrícolas en combinación con la cría de animales (explotación mixta)',
                'note'          => 'La producción agraria combinada con la cría del ganado en unidades de actividad conjunta con un porcentaje de especialización en cada una inferior al 66 % para cada actividad. NOTA: Cuando el porcentaje de especialización (cociente entre el valor añadido de una actividad respecto al total de las dos) sea superior al 66% la unidad se clasificará según su actividad principal.',
            ],
            [    
                'category'      => 'A',
                'heading'       => 'Producción',
                'code'          => '1401',
                'description'   => 'Actividades de servicios agrícolas',
                'note'          => 'Los servicios de labranza, siembra, pulverización y desinfección, etc. La cosecha mecánica de grano, caña de azucar, algodón, forrajes, el enfardado, enrollado, etc. La poda de árboles, transplante, fumigación y desinfección manual, cosecha manual de cítr Los servicios de labranza, siembra, pulverización y desinfección, etc. La cosecha mecánica de grano, caña de azucar, algodón, forrajes, el enfardado, enrollado, etc. La poda de árboles, transplante, fumigación y desinfección manual, cosecha manual de cítricos, algodón, etc. La planificación y diseño paisajista, plantación y mantenimiento de prados, jardínes, parques y cementeios, riego, alquiler de colmenas,etc. Esta subclase no incluye: Las actividades de comercialización(véase 51211).',
            ],
            [    
                'category'      => 'A',
                'heading'       => 'Producción',
                'code'          => '1402',
                'description'   => 'Actividades de servicios ganaderos, excepto las actividades veterinarias',
                'note'          => 'Las actividades ganaderas realizadas por cuenta de terceros, tendientes a mejorar la reproducción, el crecimiento y el rendimiento de los animales; y la obtención de los productos propios de estos. El arreo, pasturaje de ganado, castración de aves, esquila de ovejas, recolección de estiercol, la marcación, vacunación, descarne, etc. Esta subclase no incluye: El cuidado de ganado por cuenta propia (vease 0121). Servicios relacionados con la caza y captura comercial. Servicos de agrónomos y economistas agrarios (véase 7414). Servicios veterinarios (véase 8520).',
            ],
            [    
                'category'      => 'B',
                'heading'       => 'Producción',
                'code'          => '2001',
                'description'   => 'Caza  y captura de animales vivos y repoblación  de animales de caza y servicios conexos',
                'note'          => 'La caza de animales para obtener carne, pieles y cueros, la captura de animales vivos para zoológicos, animales de compañia, para investigación, etc., la producción de peleteria, de pieles de reptiles y aves procedente de la caza mediante métodos ordinarios y trampas. Incluye también la reproducción y repoblación de animales de caza. Esta subclase no incluye: La producción de pieles y cueros procedentes de mataderos (véase 1511) La caza deportiva o recreativa (véase 9241).',
            ],
  
            [    
                'category'      => 'B',
                'heading'       => 'Producción',
                'code'          => '2002',
                'description'   => 'Servicios para la caza',
                'note'          => 'Las actividades de servicios para promover la caza, mediante el colocado de trampas para capturar animales con fines comerciales.',
            ],
  
            [    
                'category'      => 'B',
                'heading'       => 'Producción',
                'code'          => '3001',
                'description'   => 'Extracción de productos forestales de bosques cultivados',
                'note'          => 'La producción de madera en bruto, como durmientes (traviesas), postes, estacas, leña, carbón vegetal, de maderas coníferas (pino, nogal, eucalipto) y de maderas distintas de las coníferas (amargo, bibosi, curupau, ochoo, paquio, quina quina, verdolago, yesquera, mara, palo maría y otras). Esta subclase no incluye: La producción de astillas, de especies coníferas y no coníferas en aserraderos y talleres (vease 2010).',
            ],
  
            [    
                'category'      => 'B',
                'heading'       => 'Producción',
                'code'          => '3002',
                'description'   => 'Extracción de productos forestales de bosques nativos',
                'note'          => 'La producción de madera en bruto, como durmientes (traviesas), postes, estacas, leña, carbón vegetal, de maderas coníferas (pino, nogal, eucalipto) y de maderas distintas de las coníferas (amargo, bibosi, curupau, ochoo, y otras). Esta subclase no incluye:La producción de astillas, de especies coníferas y no coníferas en aserraderos y talleres (vease 2010).',
            ],
  
            [    
                'category'      => 'B',
                'heading'       => 'Producción',
                'code'          => '3003',
                'description'   => 'Recolección de productos forestales silvestres',
                'note'          => 'La recolección de productos como la balata y otras gomas similares al caucho, corcho, laca, resinas, bálasamo, castaña, musgos y otros productos silvestres. Esta subclase no incluye:El cultivo de reclección de hongos (véase 01129).',
            ],
  
            [    
                'category'      => 'B',
                'heading'       => 'Producción',
                'code'          => '3004',
                'description'   => 'Servicios forestales de extracción de madera',
                'note'          => 'La tala de arboles acarreo y transporte en el interior del bosque, servicios realizados por terceros, etc.',
            ],
  
            [    
                'category'      => 'B',
                'heading'       => 'Producción',
                'code'          => '3009',
                'description'   => 'Otros servicios forestales',
                'note'          => 'Repoblacion y conservación de bosques nativos y zonas forestales. Explotación de viveros forestales. Servicios de tratamiento contra las plagas forestales. La protección contra incendios, evaluación de masa forestales, en pie estimación del valor de la madera, etc.',
            ],
  
            [    
                'category'      => 'B',
                'heading'       => 'Producción',
                'code'          => '5001',
                'description'   => 'Pesca lacustre',
                'note'          => 'La pesca de trucha, pejerrey, carache, ispi, mauri, etc. Esta subclase no incluye: La pesca deportiva y de recreo y los servicios afines (véase 9241).',
            ],
  
            [    
                'category'      => 'B',
                'heading'       => 'Producción',
                'code'          => '5002',
                'description'   => 'Pesca fluvial',
                'note'          => 'La pesca de surubí, sábalo, pacú, boga, salmón, peces ornamentales, etc.',
            ],
  
            [    
                'category'      => 'B',
                'heading'       => 'Producción',
                'code'          => '5003',
                'description'   => 'Explotación de criaderos de peces y granjas piscícolas',
                'note'          => 'Las actividades relacionadas con la repoblación, reproducción, y cría de peces en granjas piscícolas.',
            ],
  
            [    
                'category'      => 'B',
                'heading'       => 'Producción',
                'code'          => '5004',
                'description'   => 'Actividades de servicios relacionadas con la pesca',
                'note'          => 'El cultivo de algas comestibles.',
            ],

  
            [    
                'category'      => 'C',
                'heading'       => 'Producción',
                'code'          => '11100',
                'description'   => 'Extracción de petróleo crudo y gas natural',
                'note'          => 'La extracción de crudos de petróleo, producción de gas natural, obtención de condensados, el drenaje y la separación de fracciones de hidrocarburos líquidos, la licuefacción y regasificación de gas natural para su transporte, la desulfuración de gas, la extracción de metano, etano, butano o propano. Esta subclase no incluye: Las actividades de los servicios relacionados con la extracción de petróleo y gas natural (véase 1120). La fabricación de productos refinados del petróleo (véase 2320). La recuperación de los gases licuados de petróleo  procedentes de proceso de refinación (véase 2320). La producción de gases insdustriales (véase 2411). La explotación de gasoductos y oleoductos (véase 6030). Los estudios geologicos para la prospección de yacimientos de petróleo y gas natural (véase 7421).',
            ],
  
            [    
                'category'      => 'C',
                'heading'       => 'Producción',
                'code'          => '11200',
                'description'   => 'Actividades de servicios relacionadas con la extracción de petróleo y gas, excepto las actividades de prospección',
                'note'          => 'Las actividades de los servicios de los yacimientos de petróleo y gas natural prestados por cuenta de tercros: la perforación dirigida, la perforación repetida; el inicio de la perforación; el bombeo de los pozos; el cegamiento y clausura de los pozos, etc. Esta clase no incluye: Los estudios geofísisco y sismológicos (véase 7421).',
            ],
        
  
            [    
                'category'      => 'D',
                'heading'       => 'Producción',
                'code'          => '10100',
                'description'   => 'Extracción y aglomeración de carbón de piedra',
                'note'          => 'La extracción de diversos tipos de carbón de piedra: la antracita, hulla y otros tipos de carbón mineral. La fabricación de briquetas y otros combustible sólidos compuestos principalmente de carbón de piedra. Esta subclase no incluye: La extracción de lignito y de turba, incluida la producción de briquetas y aglomerados de esos minerales (véase 1020 y 1030 respectivamente).',
            ],
  
            [    
                'category'      => 'D',
                'heading'       => 'Producción',
                'code'          => '10200',
                'description'   => 'Extracción y aglomeración de lignito',
                'note'          => 'La extracción de lignito (carbón pardo), de minas subterráneas o a cielo abierto, fabricación de briquetas y otros combustibles sólidos compuestos principalmente de lignito. Esta subclase no incluye: La extracción de carbón de piedra y la extracción de turba, incluida la producción de briquetas o aglomerados de esos materiales (véase 1010 y 1030 respectivamente).',
            ],
  
            [    
                'category'      => 'D',
                'heading'       => 'Producción',
                'code'          => '10300',
                'description'   => 'Extracción y aglomeración de turba',
                'note'          => 'La extracción y aglomeración de turba.',
            ],
  
            [    
                'category'      => 'D',
                'heading'       => 'Producción',
                'code'          => '12000',
                'description'   => 'Extracción de minerales de uranio y torio',
                'note'          => 'La extracción de minerales de uranio y torio. la concentración de estos minerales. La fabricación de concentrado de óxido de uranio. Esta clase no incluye: La extracción de minerales metalíferos de tierras raras (véase 1320). La extracción de metal de uranio a partir de la plecblenda y otros minerales que contiene uranio (véase 2330).',
            ],
  
            [    
                'category'      => 'D',
                'heading'       => 'Producción',
                'code'          => '13100',
                'description'   => 'Extracción de minerales de hierro',
                'note'          => 'La extracción de  minerales cuya explotación se debe fundamentalmente a su contenido en hierro como la hematita, la magnetita, la limonita, la siderosa, y la taconita. Producción de minerales de hierro sintetizados. Esta clase no incluye: La extracción y preparación de pieritas y de pirrotita y la tostación de piritas de hierro (véase 1421)',
            ],
  
            [    
                'category'      => 'D',
                'heading'       => 'Producción',
                'code'          => '13201',
                'description'   => 'Extracción de minerales metálicos no ferrosos, excepto los minerales de uranio y torio',
                'note'          => 'La extracción de minerales valorados principalmente por su contenido de metales no ferrosos incluso de minerales de aluminio (bauxita), cobre, estaño, manganeso, níquel, plomo, wolframio, antimonio, bismuto, zinc, estaño,  manganeso, plomo, molibdeno, titanio, circonio, niobio, tántalo, vanadio,  cromo, cobalto y otros minerales metalíferos no ferrosos. Esta subclase no incluye: La extracción de minerales uranio y torio (véase 1200). La extracción  de minerales no estimados principalmente por su contenido de sustancias químicas, por ejemplo, la pirita (véase 1421). La producción de alumina y matas de niquel y cobre (véase 2720).',
            ],
  
            [    
                'category'      => 'D',
                'heading'       => 'Producción',
                'code'          => '13202',
                'description'   => 'Extracción de metales preciosos',
                'note'          => 'La extracción y preparación de metales preciosos: oro, plata y los metales del grupo del platino.',
            ],
  
            [    
                'category'      => 'D',
                'heading'       => 'Producción',
                'code'          => '14101',
                'description'   => 'Extracción de piedras',
                'note'          => 'La extracción desbastado y troceado por aserrado de piedras para la  construcción, incluye la piedra caliza, dolomita, granitos, areniscas, yeso natural, anhidrita, etc. Esta subclase no incluye: La talla, el labrado y el acabado de piedras fuera de las canteras (véase 2696). La extracción de minerales para la industria química y la fabricación de abonos (véase 1421). La explotación de otros minerales no metalíferos y la extracción de asfalto y betún naturales (véase 1429). La explotación de minas de sal (véase 1422).',
            ],
  
            [    
                'category'      => 'D',
                'heading'       => 'Producción',
                'code'          => '14102',
                'description'   => 'Extracción de arenas',
                'note'          => 'La extracción de arena y grava para construcción, arena silícea, otras arenas naturales, canto rodado, granito triturado, basalto triturado, piedra partida y otros triturados pétreos, etc. Esta subclase no incluye:  La extracción de minerales para la industria química y la fabricación de abonos (véase 1421).',
            ],
  
            [    
                'category'      => 'D',
                'heading'       => 'Producción',
                'code'          => '14103',
                'description'   => 'Extracción de arcilla',
                'note'          => 'Extracción de arcillas, arcillas refractorias, bentonita, caolín, pirofilita, y otras de uso industrial, etc.Esta subclase no incluye: La extracción de minerales para la industria química y la extracción de abonos (véase 1421). La elaboración de arcillas (por ejemplo arcillas dilatadas véase 2699).',
            ],
  
            [    
                'category'      => 'D',
                'heading'       => 'Producción',
                'code'          => '14104',
                'description'   => 'Extracción de piedras ornamentales',
                'note'          => 'La extracción de mármol, pizarra y otros tipos de piedra de talla. Esta subclase no incluye: El acabado de la piedra (véase 2696).',
            ],
  
            [    
                'category'      => 'D',
                'heading'       => 'Producción',
                'code'          => '14211',
                'description'   => 'Extracción de minerales para la fabricación de abonos',
                'note'          => 'La extracción de fosfatos de calcio naturales, silvinita, azufre en bruto sin refinar y otras sales de potasio naturales, incluye tambien la recolección de guano, etc.',
            ],
  
            [    
                'category'      => 'D',
                'heading'       => 'Producción',
                'code'          => '14212',
                'description'   => 'Extracción de minerales para la fabricación de productos químicos',
                'note'          => 'La extracción de sulfatos y de carbonatos de bario naturales, (baritina),  boratos naturales, calcita, celestina, colemanita, fluorita, litio y sales de litio naturales, sulfato de alumnio, sulfato de hierro, sulfato de magnesio, sulfato de sodio, criollita. Extracción de otros minerales estimados principalmente como fuentes de sustancias químicas, por ejemplo tierras  colorantes y fluorita. Esta subclases no incluyen: La explotación de minas de sal (véase 1422). La fabricación de abonos sintéticos y compuestos de nitrógeno (véase 2412).',
            ],
  
            [    
                'category'      => 'D',
                'heading'       => 'Producción',
                'code'          => '14220',
                'description'   => 'Extracción de sal',
                'note'          => 'La extracción de sal en su estado natural. Esta clase no incluye: La elaboración de sal (véase 2429).',
            ],
  
            [    
                'category'      => 'D',
                'heading'       => 'Producción',
                'code'          => '14290',
                'description'   => 'Explotación de otras minas y canteras ncp',
                'note'          => 'La extracción en minas y canteras, de minerales y otros materiales no clasificados en otra parte: materiales abrasivos; piedras preciosas;  asbesto; amianto, cuarzo, diatomita, piedra pómez, ágata, agua marina, matista, cristal roca, topacio, corindón, feldespato, mica, zeolita, perlita, talco, vermiculita, grafito y otros fundentes naturales. Extracción de asfalto y betún naturales etc.',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '15111',
                'description'   => 'Matanza de ganado bovino y procesamiento de su carne',
                'note'          => 'La producción de carne fresca, refrigerada o congelada de ganado bovino, cueros procedentes de mataderos, el tratamiento de despojos de ganado bovino.  Esta subclase no incluye: El envasado de carne por cuenta propia asociado a su comercio al por mayor (véase 51224). El envasado de carne por cuenta de terceros. (véase 7495).',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '15112',
                'description'   => 'Producción y procesamiento de carne de aves de corral',
                'note'          => 'El sacrificio de aves, la preparación de carne de aves La producción de carne fresca, refrigerada o congelada de aves en porciones. Esta subclase no incluye: La extracción de grasas  comestibles de ave (véase 15119). Envasado de  carne de aves de corral por cuenta de terceros (véase 51224).',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '15113',
                'description'   => 'Elaboración de fiambres y embutidos',
                'note'          => 'La fabricación de productos embutidos tales como: salami, chorizos, morcillas, salchichas, mortadela, patés, jamones cocido.',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '15114',
                'description'   => 'Matanza de ganado excepto el bovino y procesamiento de su carne',
                'note'          => 'La matanza y/o faena de ganado, excepto el bovino, ovino, porcino, caprino y otros. Incluye tambien la producción de cueros y pieles sin curtir y otros subproductos.',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '15119',
                'description'   => 'Elaboración de subproductos cárnicos ncp',
                'note'          => 'La producción de aceites, grasas, harinas, cueros salados y otros subproductos del procesamiento de carne elaborados en establecimientos diferentes a los que se sacrifican y/o procesan carne (véase 15111 ó 15114).',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '15120',
                'description'   => 'Elaboración y conservación de pescado y productos de pescado',
                'note'          => 'La pesca y elaboración en los propios buques pesqueros de sus capturas de peces (véase 0500).',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '15131',
                'description'   => 'Preparación de conservas de frutas, hortalizas y legumbres',
                'note'          => 'La producción integrada de conservas, jaleas, dulces y mermeladas.',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '15132',
                'description'   => 'Elaboración de jugos naturales y sus concentrados, de frutas, hortalizas y legumbres',
                'note'          => 'La elaboración de jugos para diliuir o en polvo llamados "sínteticos" o de un contenido en jugos naturales inferior al 50% (véase 15499).',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '15133',
                'description'   => 'Elaboración de pulpas, jaleas, dulces y mermeladas obtenidos por cocción',
                'note'          => 'Elaboración de pulpas, jaleas, dulces y mermeladas obtenidos por cocción Esta subclase no incluye: La producción integrada de conservas, jaleas, dulces y mermeladas (véase 15131).',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '15134',
                'description'   => 'Elaboración y preparación de frutas, hortalizas y legumbres deshidratadas o desecadas',
                'note'          => 'La elaboración de frutas y legumbres deshidratadas o desecadas Esta subclase no incluye: La elaboración de harina y sémola de leguminosas secas (véase 1531).',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '15141',
                'description'   => 'Elaboración de aceites y grasas vegetales sin refinar y subproductos',
                'note'          => 'La producción de aceites vegetales sin refinar: soya, girasol, semillas de algodón, etc. Los línteres de algodón Esta subclase no incluye: La extracción y refinación de manteca de cerdo y otras grasas comestibles de orígen animal (véase 15119) y los aceites esenciales. (véase 2429).',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '15142',
                'description'   => 'Elaboración de aceites y grasas vegetales refinadas y subproductos',
                'note'          => 'La producción de aceites vegetales refinados: soya girasol, semillas de algodón, etc. Esta subclase no incluye: La extracción y refinación de manteca de cerdo y otras grasas comestibles de orígen animal (véase 15119) y los aceites esenciales. (véase 2429).',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '15143',
                'description'   => 'Preparación de tortas y producción de harinas y productos residuales de la producción de aceite',
                'note'          => 'La preparación de tortas y demás residuos sólidos de la extracción de aceite  de soya, girasol, harina de semillas y de frutos oleaginosos. Incluye tambien  la producción de margarina y otros acites de mesa y grasas para cocinar.',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '15201',
                'description'   => 'Elaboración de leches y productos lácteos',
                'note'          => 'La producción de leche líquida fresca, pasteurizada, esterilizada, homogeneizada o tratadas a altas temperaturas, etc. La elaboración de leche en polvo o concentrada, saborizada, azucarada o sin azúcar, leche condensada, leche en polvo, crema de leche, dulce de leche, mantequilla, etc. y la maternización de la leche. Esta subclase no incluye:  La producción de leche cruda (véase 01214)',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '15202',
                'description'   => 'Elaboración de helados',
                'note'          => 'La elaboración de helados con o sin leche y con o sin cacao. Esta subclase no incluye: Las actividades del comercio al por menos de productos lácteos. (véase 52202).',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '15203',
                'description'   => 'Elaboración de quesos',
                'note'          => 'La producción de quesos frescos, de pasta dura o fundido, etc.',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '15311',
                'description'   => 'Preparación y molienda de trigo',
                'note'          => 'Producción de harinas, sémolas y productos residuales del trigo Esta subclase no incluye: La elboración de harina y sémola de patata (véase 1513).',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '15312',
                'description'   => 'Preparación de arroz',
                'note'          => 'La preparación de arroz, descascarillado, semiblanqueado, blanqueado, partido, la elaboración de harina de arroz y productos residuales de arroz.',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '15313',
                'description'   => 'Preparación y molienda de otros cereales',
                'note'          => 'Producción de harinas, sémolas y otros productos de maíz, avena, cebada perlada y otros excepto el trigo.',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '15314',
                'description'   => 'Elaboración de alimentos mediante  el tostado o insuflación de granos de cereales',
                'note'          => 'La fabricación de productos para el desayuno a base de cereales mediante el tostado o la insuflación, etc.',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '15320',
                'description'   => 'Elaboración de alimentos y productos derivados del almidón',
                'note'          => 'La elaboración de almidones y féculas de arroz, papa, maíz, etc., glucosa, Esta clase no incluye: La elaboración de azucar de leche (lactosa véase 1520). Elaboración de caña de azúcar en ingenios azucareros y la producción de sacarosa en  refinerías (véase 1549).',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '15330',
                'description'   => 'Elaboración de alimentos preparados para animales',
                'note'          => 'La fabricación de productos para la alimentación de animales domésticos incluidos los suplementos de alimentación. Elaboración de alimentos preparados para animales de granja incluso mezclas preliminares, alimentos concentrados, forraje, y alimentos suplementarios. Esta clase no incluye: La fabricación de harinas de pescado (véase 1512). El resultado de la producción de subproductos que sirven de alimentos para animales sin necesidad de  tratamiento o eleboración posterior se clasifican junto con las de la industria en que esos subproductos tienen su orígen.',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '15411',
                'description'   => 'Elaboración de pan',
                'note'          => 'Elaboración de pan',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '15412',
                'description'   => 'Elaboración de galletas',
                'note'          => 'Elaboración de galletas',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '15419',
                'description'   => 'Elaboración de otros productos de panadería y pastelería ncp',
                'note'          => 'La fabricación de pasteles, pre-pizzas, las masas fritas, salteñas, buñuelos, la fabricación de masa de hojaldre y similares. Esta subclases no incluyen: La fabricación de harinas mezcladas y preparadas (véase 1531). La fabricación de productos farináceos secos, frescos o cocidos del tipo conocido como pastas (véase 1544).',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '15420',
                'description'   => 'Elaboración de azúcar',
                'note'          => 'La producción y refinado de azúcar y sucedáneos del azúcar obtenidos a partir del jarabe de caña, remolacha. Esta clase no  incluye: La fabricación de glucosa y otros azucares a partir de almidones (véase 1532). Los azúcares químicamente puros y edulcorados sintéticos (véase 2423).',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '15431',
                'description'   => 'Elaboración de cacao y productos de cacao',
                'note'          => 'La elaboración de cacao, manteca, grasa y aceite de cacao.',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '15432',
                'description'   => 'Elaboración de chocolates y productos de chocolate',
                'note'          => 'La elaboración de chocolate y otros productos preparados con chocolate Esta subclase no incluye: El tostado de nueces (véase 1549).',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '15433',
                'description'   => 'Elaboración de productos de confitería',
                'note'          => 'Elaboración de productos de confitería, tales como dulces cocidos, caramelos, pastillas, turrón, confites y chocolate blanco, mazapán, elaboración  de gomas de mascar y otros productos de confitería. Esta subclase no incluye: La producción de sacarosa sólida y sacarosa líquida (véase 1542).',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '15441',
                'description'   => 'Elaboración de pastas alimenticias secas',
                 'note'          => 'La elaboración de pastas alimenticias tales como fideos, espaguetis, macarrones y otros productos de pasta, para preparar lasaña, canelones, ravioles, etc. Esta subclase no incluye: La elaboración de sopas que contienen pasta, en particular de sopas deshidratadas y en polvo (véase 1549).',
                ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '15442',
                'description'   => 'Elaboración de pastas rellenas, cocidas o sin cocer y otros productos similares',
                'note'          => 'La elaboración de productos de pasta conservados en recipientes herméticos o por congelación.',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '15491',
                'description'   => 'Tostado, torrado y molienda de café',
                'note'          => 'El café en grano seleccionado, descascarado, café tostado y molido, café soluble o instantáneo. Esta subclase no incluye: El cultivo de especias (véase 01135).',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '15492',
                'description'   => 'Elaboración de té, hierbas aromáticas y especias',
                'note'          => 'La elaboración de té incluido el empaquetado por cuenta propia en bolsitas, la elaboración de otras infusiones (menta, manzanilla, etc.). La elaboración  de especias, salsas y condimentos.  Esta subclase no incluye: Las plantaciones de té (véase 01135).',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '15499',
                'description'   => 'Elaboración de productos alimenticios ncp',
                'note'          => 'La fabricación de extractos, jarabes y concentrados, levadura, polvos para  la preparación de postres y gelatinas, miel y sus subproductos; vinagres,  sopas y otros productos alimenticios. Esta subclase no incluye: El cultivo de especias (véase 01136). La elaboración de sal fina (véase  2429). Los jugos naturales y sus concentrados, de frutas, hortalizas y  legumbres (véase 15132). Leche para bebes (véase 15201)',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '15511',
                'description'   => 'Destilación de alcohol etílico',
                'note'          => 'La destilación de alcohol etílico sin desnaturalizar con un grado alcohólico volumétrico mayor al 80% vol. La destilación de alcohol etílico desnaturalizado. La producción de alcohol rectificado. Esta subclase no incluye: La elaboración de vinos de uva fresca (véase 1552). La elaboración de  bebidas malteadas (véase 1553), el embotellado y etiquetado de bebidas  alcohólicas destiladas (véase 7495).',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '15512',
                'description'   => 'Destilación, rectificación y mezclas de bebidas espirituosas',
                'note'          => 'La obtención de aguardientes naturales por destilación de vino, frutas y productos vegetales: elaboración de whisky, coñac, ginebra, ron, etc. La obtención de alcohol etílico sin desnaturalizar con un grado alcohólico volumétrico mayor al 80% vol. La obtención de licores, cremas y otras bebidas alcohólicas aromatizadas y/o azucaradas.',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '15521',
                'description'   => 'Elaboración de vinos, bebidas fermentadas pero no destiladas',
                'note'          => 'La elaboración de vinos de mesa, vino espumosos o gasificado. La elaboración de bebidas alcohólicas fermentadas pero no destiladas, como sidra y otras. Esta subclase no incluye: Elaboración de vino a partir de uva de producción propia exclusivamente; sin comprar uva de terceros (véase 01133). La elaboración de bebidas malteadas. (véase 1533). El embotellado y el envasado de vino (véase 74951). El vinagre  vínico (véase 15499).',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '15530',
                'description'   => 'Elaboración de bebidas malteadas y de malta',
                'note'          => 'La elaboración de cerveza corriente, pálida, negra, fuerte. La elaboración de la malta. Esta subclase no incluye: La elaboración de levaduras (véase 15499). El embotellado de bebidas malteadas (véase 74951).',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '15541',
                'description'   => 'Elaboración de bebidas gaseosas',
                'note'          => 'Elaboración de bebidas gaseosas',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '15542',
                'description'   => 'Elaboración de aguas minerales',
                'note'          => 'Producción de aguas minerales',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '15543',
                'description'   => 'Elaboración de hielo y otras bebidas no alcohólicas',
                'note'          => 'La elaboración de bebidas no alcohólicas, conocidas generalmente con el nombre de refrescos o "gaseosas". La elaboración de bebidas aderezadas con extractos artificiales de frutas, jarabes u otras sustancias similares. La producción, es decir, el embotellado en fuentes de aguas minerales o  de manantiales, gasificadas o no. La producción de hielo común. Estas subclases no incluyen: Los jugos naturales y sus concentrados, de frutas, hortalizas y legumbres (véase 15132). El embotellado y etiquetado de bebidas gaseosas. (véase 74951).',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '16000',
                'description'   => 'Elaboración de productos de tabaco',
                'note'          => 'La elaboración de productos de tabaco tales como cigarrillos, cigarros puros, tabaco de pipa. Elaboración de tabaco homogeneizado o reconstituido. Esta clase no incluye: El cultivo y tratamiento preliminar del tabaco (recolección, desnervado, y otros procesos cuyos resultados no sean un productos dispuesto para fumar (véase 01119).',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '17111',
                'description'   => 'Preparación, cardado y peinado de fibras textiles',
                'note'          => 'Las operaciones de preparación efectuada sobre las fibras textiles, tales como: el devanado y lavado de la seda, el desengrase, la carbonización o el teñido de vellón; otras operaciones de preparación, incluido el carcado y  perinado de esas fibras y de las de yute, fique, lino cáñamo y de otras fibras vegetales o animales, así como de todos los tipos de fibras textiles artificiales. Los desperdicios, los subproductos como la grasa de la lana, son característicos de estas actividades. Fabricación de hilados con fibras de algodón, artificiales, sintéticas y recuperadas, independiente de la fibra que predomine en su composición, para tejidos, géneros de punto, etc. Esta subclase no incluye: El enriamiento de plantas que dan fibras textiles (véase 01114). El desmontado del algodón (véase 01401). La fabricación de hilo de coser (véase 17112). El acabado de productos textiles (véase 1712).',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '17112',
                'description'   => 'Fabricación de hilados e hilos para tejido y costura',
                'note'          => 'La hilatura y la fabricación de hilados o hilos constituidos por distintos tipos de materiales textiles(incluso mezclas) destinados a la tejedura o la costura  o para un procesamiento posterior. Las operaciones de preparación  efectuadas sobre las fibras tipo lana para su peinado. La fabricación de hilados tipo de lana peinada, con lana fibras artificiales, sintéticas o recuperadas, independientes de la fibra que predomine en su composición, para tejidos,  géneros de punto, etc. La preparación y el hilado de fibras tipo lana semipeinada (cardada pero no completamente peinada). La fabricación de hilo de coser de cualquier material textil, incluso mezclas. Las operaciones preparatorias y el hilado de otras fibras textiles, como el yute o las demás fibras duras. La fabricación de hilos o hilados  texturizados o no, trenzados, cableados o tratados de otra manera, a partir de las fibras continuas o filamentos, o fibras cortadas, no integrada  al proceso de obtención de las fibras. La fabricación de hilos de ganchillo y de labor de punto (véase 1711-1712). Esta subclase no incluye: La fabricación de hilos sencillos de fibras sintéticas o artificiales incluidas las de alta tenacidad (véase 2430).La fabricación de fibras de vidrio (véase 26109). El hilado de hilos de amianto (véase 269912).',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '17113',
                'description'   => 'Fabricación de tejidos de fibras textiles incluso sus mezclas',
                'note'          => 'La fabricación de tejidos anchos de tejido tipo algodón (proceso algodonero), con algodón o hilos artificiales, sintéticos o recuperados, independientemente de la fibra que predomine en su composición. La fabricación  de tejidos de felpilla o chenilla, los tejidos de rizo para toallas, etc. La fabricación de tejidos anchos tipo lana cardada (proceso lanero), con lana o con  hilos artificiales, sintéticos o recuperados, independientemente de la fibra que predomine en su composición. La fabricación de tejidos anchos tipo  seda, con seda natural o hilos artificiales, sintéticos o recuperados, independientemente de la fibra que predomine en su composición. La fabrica de otros tejidos anchos utilizando fino, cáñamo, yute, fibras duras o hilados especiales. La fabricación de tejidos de polipropileno de embalaje. La  fabricación de tejidos de fibra de vidrio. Esta subclase no incluye: La fabricación de revestimientos textiles de suelos (véase 1722). La  fabricación de telas no tejidas (véase 1729). La fabricación de géneros de punto y de labor de ganchillo (véase 1729). La fabricación de tules, encajes, tejidos estrechos y pasamanería (véase 1729). El tejido de hilo de amianto (véase 2699)',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '17120',
                'description'   => 'Acabado de productos textiles',
                'note'          => 'En este grupo se incluyen los acabados de tejidos por cuenta de terceros,  incluye el blanqueado de textiles. El estampado de materias y artículos textiles que no sean de producción propia. Incluye también el presto, secado, vaporizado encogimiento, sanforizado y mercerizado de materias y artículos  textiles que no sean de producción propia. Esta clase no incluye: El acabado de textiles producidos en la misma unidad (véase 1711). La impregnación, el baño el recubrimiento y la estratificación de tejidos de  materia plástica (véase 1729). La fabricación de tejidos y artículos de punto y ganchillo (véase 1730). ',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '17210',
                'description'   => 'Fabricación de artículos confeccionados de materiales textiles, excepto prendas de vestir',
                'note'          => 'La fabricación de artículos confeccionados con cualquier material textil, incluidos los géneros de punto y la labor de ganchillo: fabricación de frazadas y mantas de viaje, ropas de cama, mesa, baño y cocina la fabricación de acolchados, edredones, almohadones, almohadas sacos de dormir, etc. La fabricación de artículos de moblaje: la fabricación de cortinas, visillos, estores, cubrecamas, cubiertas de mobiliario o máquinas, tapices a mano, de aguja, o algunas imitaciones de estos fabricados en máquinas, etc. La fabricación de lonas tiendas de campaña y otros artículos análogos de acampar, toldos de toda clase, fundas sueltas para vehículos automóviles, etc. La fabricación de banderas, estandartes, burletes de guata totalmente recubiertos de tejidos, etc. La fabricación de paños de cocina y artículos similares, la fabricación de cunas portátiles para niños, etc. La fabricación de bolsas, sacos, etc. La fabricación de los componentes textiles de las   mantas eléctricas. Esta clase no incluye: Cuando los artículos abarcados por esta clase se producen en la misma unidad que produce los tejidos, la actividad se considera una actividad auxiliar de la tejedura (véase 1711). La fabricación de tejidos de punto y ganchillos (véase 1730). La fabricación de artículos confeccionados con materias textiles para uso técnico (véase 1729).',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '17220',
                'description'   => 'Fabricación de tapices y alfombras',
                'note'          => 'La fabricación de revestimientos de suelos de productos textiles incluidos los fieltros punzonados: la fabricación de alfombras, tapices y tapetes  felpudos y esteras. Esta clase no incluye: La fabricación de tejidos confeccionados a mano o de aguja (véase 1721). La fabricación de felpudos y esteras de materias trenzables (véase 2029). La fabricación de productos de caucho para revestimientos de pisos (véase 2519). Los revestimientos de plástico para pisos (véase 2520). Fabricación de linóleo y otros productos de superficie dura para el cubrimiento de pisos (véase 3699)',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '17230',
                'description'   => 'Fabricación de cuerdas, cordeles, bramantes y redes',
                'note'          => 'Fabricación de cuerdas, cordeles, bramantes, cordajes y cintas y similares de fibras textiles, estén o no impregnados, bañados, recubiertos o revestidos de caucho o materias plásticas. la fabricación de redes de punto anudado hechas de cordelería. Fabricación de productos de cordelería y de redes: Redes para pescar, las redes para deporte, etc. La confección de hamacas y de hamacas. reparación de redes y cordajes. Esta clase no incluye: La fabricación de redecillas para el pelo (véase 18119).',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '17290',
                'description'   => 'Fabricación de otros productos textiles ncp',
                'note'          => 'La fabricación de cintas tejidas, incluidas las consistente en urdimbre sin tramas unidas por medio de un adhesivo. La fabricación de artículos de pasamanería: trenzas, borlas, pompones, etc., tules y de tejidos de mallas anudadas, de encajes en pieza, en tiras o en motivos, de bordados. La fabricación de tejidos impregnados, recubiertos o estratificados con materias  plásticas, como el cuero de imitación, fieltros recubiertos, etc. La fabricación de guata y artículos textiles de guata: compresas y tampones. la fabricación de hilos metalizado, de hilo de goma recubierta de material textil. la fabricación de tejidos con baño de goma o sustancias amiláceas, aceites, resinas,caucho. la fabricación de artículos textiles diversos para uso técnico: mechas textiles, mangueras, cintas transportadoras, gasas y telas para cernir. Esta clase no incluye: La fabricación de correas transportadoras y de correaje de transmisión de  tejido y de hilados o hilos impregnados, bañados con caucho, si el caucho es la materia prima principal (véase 2519). La fabricación de placas, planchas y cintas de caucho celular o de plástico celular combinadas con fieltro o y cintas de caucho celular o de plástico celular combinadas con fieltro o artículos no tejidos en que la materia textil se utiliza solo como material de refuerzo (véase 2519 y 2520) respectivamente. La fabricación de tela mecánica (véase 28999). La fabricación de linóleo (3699). la fabricación de revestimiento para suelo de fieltros punzonados. (véase 1722).',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '17301',
                'description'   => 'Fabricación de medias',
                'note'          => 'La fabricación de calcetines, medias y artículos similares',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '17302',
                'description'   => 'Fabricación de chompas y artículos similares de punto',
                'note'          => 'La fabricación, de chompas, suéteres, pullovers, chalecos con o sin mangas y artículos similares de punto.',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '17309',
                'description'   => 'Fabricación de tejidos y artículos de punto ncp',
                'note'          => 'La fabricación de chales, pañuelos para el cuello, bufandas, etc. Esta subclase no incluye: La fabricación de artículos de punto con tejidos no producidos en la misma unidad (véase 1810). La fabricación de aparatos ortopédicos (véase 3311)',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '18101',
                'description'   => 'Fabricación de prendas de vestir confeccionadas, para hombres, mujeres y niños',
                'note'          => 'La confección de prendas exteriores con tejidos, géneros de punto y ganchillos, para hombres mujeres y niños tales como abrigos, trajes, conjuntos, chaquetas, pantalones, faldas, etc. La confección de ropa interior para  hombres, mujeres y niños: camisetas, calzoncillos, pijamas, la confección de camisas, batas. la confección de ropa interior con tejidos, géneros de punto y ganchillo, encaje, etc., para mujeres y niñas: camisetas, pijamas,  camisones, sostenes, etc. Confección de ropa para bebé. Esta subclase no incluye: La fabricación de ropa con tejidos producidos en la misma unidad (véase 1730). La confección de prendas de vestir de pieles finas (véase 1820). La fabricación de calzado (véase 1920). La confección de prendas de vestir de caucho o materia plásticas (véase 2519-2520 respectivamente). Fabricación de prendas de asbesto (véase 2699). La fabricación de guantes y  cascos para practicar deportes (véase 3693). la reparación de prendas de cascos para practicar deportes (véase 3693). la reparación de prendas de vestir (véase 5260).',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '18102',
                'description'   => 'Fabricación de ropa de trabajo, uniformes y guardapolvos',
                'note'          => 'Fabricación de ropa de trabajo, uniformes y guardapolvos Esta subclase no incluye: La fabricación de calzado (véase 19201). La confección de prendas de  vestir de caucho o materias plásticas (véase 2519). ',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '18103',
                'description'   => 'Fabricación de ropa deportiva',
                'note'          => 'La fabricación de toda clase de ropa deportiva, incluido los trajes  de baño. Esta subclase no incluye: La fabricación de cascos de seguridad excepto para practicar  deportes de plástico y de metal (véase 2520 y 2899 respectivamente).',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '18109',
                'description'   => 'Fabricación de prendas de vestir de cuero y otras prendas ncp',
                'note'          => 'La fabricación de prendas de vestir de cuero y otras materias textiles:  chamarras, sacos, abrigos, faldas, sombreros y gorras, guantes, pañuelos  y otras prendas de vestir. Esta subclase no incluye:  La fabricación de guantes y cascos para practicar deportes. ( véase 3693 ).',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '18200',
                'description'   => 'Adobo y teñido de pieles; fabricación de artículos de piel',
                'note'          => 'La producción de pieles finas adobadas y de cueros y pieles curtidos y adobados sin depilar y la fabricación de artículos de pieles finas. Incluye  operaciones como, descarnadura, engrase, curtido, blanqueo, depilación y  despinzado. Los artículos que se confeccionan con pieles finas y otras  pieles sin depilar, son las prendas de vestir y accesorios conjuntos de peletería y otros artículos como alfombras. También incluye la fabricación de pieles artificiales y de artículos confeccionados con estas pieles. Esta subclase no incluye: La producción de pieles finas (véase 0122). La producción de  pieles en bruto procedentes en mataderos (véase 1511). La fabricación de peletería de imitación (tela de pelo largo obtenida por tejido). (véase 1711 y  1730 respectivamente). La fabricación de sombreros y partes de  sombreros de piel (véase 1810). La fabricación de botas y zapatos con partes de piel (véase 1920).',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '19110',
                'description'   => 'Curtido de cueros',
                'note'          => 'La producción de cuero curtido. la producción de cuero agamuzados, apergaminados, charol y cueros metalizados. La fabricación de cuero regenerado como ser planchas, hojas que contienen cuero o fibras de cuero. Esta clase no incluye: La producción de cueros y pieles en bruto precedentes de matadero (véase 15111). La fabricación de prendas de vestir de cuero (véase 18109). El curtido o adobado de pieles y cueros sin depilar (véase 1820). La fabricación de cuero imitación no precedente de cuero natural, (véase 1729).',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '19120',
                'description'   => 'Fabricación de artículos de marroquinería, talabartería',
                'note'          => 'La fabricación de artículos de viaje, bolsos de mano y artículos semejantes de cuero natural, artificial o regenerado, de plástico, de materias textiles,  de fibra vulcanizada o cartón, siempre que se utilice la misma tecnología que para el cuero. Esta clase no incluye: La fabricación de prendas de vestir y sombreros de cuero (véase 1810). La fabricación de calzado (véase 1920).',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '19201',
                'description'   => 'Fabricación de calzado de cuero, excepto ortopédico y de asbesto',
                'note'          => 'La fabricación de calzados de cuero para todo uso. Esta subclase no incluye: La fabricación de calzado de material textil sin suela (véase 1730). La fabricación de calzado de asbesto (véase 2699). La fabricación de calzado ortopédico (véase 3311). La reparación del calzado (véase 5260).',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '19202',
                'description'   => 'Fabricación de calzado de tela, plástico, goma, caucho y otros materiales, excepto calzado ortopédico y de asbesto',
                'note'          => 'La fabricación de calzados de materias textiles con cualquier tipo de suela y fabricado mediante proceso, tales como: corte, costura, montaje, engomado, etc. La fabricación de calzados de caucho y plástico con cualquier tipo de suela, fabricado mediante procesos de ensamblado por vulcanización y pegado, etc. Esta subclase no incluye: La fabricación de calzado de asbesto (véase 2699).La fabricación de calzado ortopédico (véase 3311)',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '19203',
                'description'   => 'Fabricación de partes de calzado',
                'note'          => 'La fabricación de partes de calzado de todo tipo de material como ser suelas, plantillas, tacones, etc.',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '20100',
                'description'   => 'Aserrado y cepillado de madera',
                'note'          => 'Las actividades de los aserraderos y plantas acepilladoras, sean o no móviles, en bosques y otros lugares. El aserrado de madera en bruto constituida  por troncos y trozas para producir maderos. La fabricación de traviesas de madera para las vías férreas, postes para líneas telegráfica o telefónica. La fabricación de madera sin ensamblar para entarimados. La fabricación de virutas, aserrín de maderas, sean estas de maderas coníferas (pino, nogal, eucalipto), o distintas de las coníferas (mara, amarillo, jichituriqui, mapajo, palo maría, verdolago, yesquero, tajibo, almendrillos). La fabricación de tablillas para la ensambladura de pisos de madera. El secado de la madera.La impregnación y el tratamiento químico de la madera con agentes La impregnación y el tratamiento químico de la madera con agentes conservantes y otras sustancias inmunizantes. Esta clase no incluye: La extracción y producción de madera en bruto . La fabricación de partes y piezas de carpintería para edificios y construcciones. (véase 2022).',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '20210',
                'description'   => 'Fabricación de hojas de madera para enchapado; de tableros contrachapados, tableros laminados, tableros de partículas y otros tableros y paneles',
                'note'          => 'La fabricación de hojas de madera para enchapado suficientemente delgadas para producir madera enchapada y tableros contrachapados y para otros fines. Las hojas pueden obtenerse mediante aserrado, rebanado, desenrollo presentadas de manera que conforman un motivo decorativo. La producción de madera aglomerada. La fabricación de tableros contrachapados, tableros de madera enchapada, y otros productos similares de madera laminada, y la fabricación de tableros de partículas y de fibra. La fabricación de estos productos se caracteriza por la utilización de prensas de alta presión y a veces, por el uso de colas. Estas pueden ser de maderas coníferas ydistintas de las coníferas. Esta clase no incluye:  La fabricación de madera rebanada o desenrollada de un espesor mayor que la que se utiliza en los tableros contrachapados (véase 2010).',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '20220',
                'description'   => 'Fabricación de partes y piezas de carpintería para edificios y construcciones',
                'note'          => 'La fabricación de piezas de carpintería destinadas principalmente a la construcción: la fabricación de puertas y ventanas y sus marcos. la fabricación de tabletas para la ensambladura de pisos de madera, incluso pisos de parqué (véase 2010). La fabricación de armarios de cocina, bibliotecas, roperos, y otros muebles empotrados. (véase 2029)',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '20230',
                'description'   => 'Fabricación de recipientes de madera',
                'note'          => 'La fabricación de casas, casitas, jaulas, cilindros, urnas y envases similares de madera, la fabricación de todo tipo de paletas de madera para carga, la fabricación de barriles, cubas y otras manufacturas de tonelería de madera Esta clase no incluye: La fabricación de cestos y recipientes de materiales trenzables (véase 2029). La fabricación de maletas de madera no revestidos con otro material.  (véase 2029). ',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '20290',
                'description'   => 'Fabricación de otros productos de madera; de artículos de corcho, paja y materiales trenzables ncp',
                 'note'          => 'La fabricación de otros productos de madera como: herramientas, monturas y mangos de cepillos o escobas, hormas y tensores para zapatos estatuillas y otros objetos ornamentales en madera, perchas de ropa, utensilios de cocina y para uso doméstico, cajas, cofres y artículos similares de madera. La fabricación de ataúdes de madera. La fabricación de otros artículos de madera no clasificados en otra parte. la elaboración de corcho natural para obtener productos, tales como corcho descortezado, o en forma de bloques, hojas, planchas o tiras. Fabricación de corcho aglomerado.  Fabricación de artículos de corcho natural o aglomerado. Fabricación de cestos, artículos de mimbre y otros artículos de materiales trenzables. Esta clase no incluye: La fabricación de esteras y esterllas de materiales textiles (véase 1722). La fabricación de maletas y cajas de madera revestidas de otro material (véase  1912). La fabricación de calzado y partes de calzado (véase 1920). L a fabricación de lamparas y accesorios para iluminación (véase 3150). La a fabricación de lamparas y accesorios para iluminación (véase 3150). La fabricación de bastones y de mangos y de madera para paraguas (véase 3699). La fabricación de muebles de junco, caña y mimbre (véase 3610).',
                ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '21010',
                'description'   => 'Fabricación de pasta de madera, papel y cartón',
                'note'          => 'La fabricación de pasta de papel blanqueada, semiblanqueada o cruda mediante procedimientos mecánicos, químicos o semiquímicos. La fabricación  de pasta de papel a partir de papeles o cartones usados. La fabricación de  pasta de papel a partir de borra de algodón y de otras materias celulósicas fibrosas mediante procesos mecánicos, químicos o semiquímicos. fabricación de papel y cartón con vistas a un tratamiento industrial posterior. El encolado el recubrimiento y la impregnación de papel y cartón. La fabricación de papel rizado o plegado. La fabricación de papel periódico y de otros papeles para imprimir o para escribir. La fabricación de papeles para la  producción de papel higiénico, toallas, servilletas, pañuelos, etc. La fabricación de guata de celulosa y materiales de fibra de celulosa. La fabricación de papel  y cartón de embalaje; fabricación de cartón para ondular. La fabricación de papel  para cigarrillos. La fabricación de papeles y cartones sulfurizados (pergamino vegetal); de papeles impermeables a la grasa, de papel  para calcar, transparentes o translúcidos; de papel y cartón multilaminar Esta clase no incluye: La fabricación de cartón ondulado (véase 2102). La fabricación de artículos La fabricación de cartón ondulado (véase 2102). La fabricación de artículos  de papel y cartón (véase 2102). La fabricación de otros artículos de pasta de madera,  papel y cartón (véase 2109). La fabricación de papel abrasivo. (véase 2699).',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '21020',
                'description'   => 'Fabricación de papel y cartón ondulado y de envases de papel y cartón',
                'note'          => 'La fabricación de cartón ondulado; envases de papel o cartón ondulado; cajones, cajas y estuches arenados o plegados, de papel o cartón o no ondulado; sacos y bolsas; otros envases de papel y cartón; cartonajes utilizados en oficinas y artículos similares como archivadores, sobres para discos gramófonos y artículos similares sin impresión Esta clase no incluye: La fabricación de sobres para correspondencias (véase 21091). Las actividades de impresión (véase 2221).',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '21091',
                'description'   => 'Fabricación de artículos de papel de uso doméstico e higiénico',
                'note'          => 'La fabricación de papel higiénico, pañuelos, toallitas faciales, toallas, servilletas y otros artículos similares de papel cartón o pasta moldeada, para uso doméstico, como por ejemplo, bandejas ,platos y vasos; la fabricación de tampones y toallas higiénicas, pañales desechables y otros artículos similares. Esta subclase no incluye: La fabricación de papel en bruto, en rollos y hojas (véase 2101). La fabricación de artículos, para envase, empaques y embalajes (véase 2102).',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '21099',
                'description'   => 'Fabricación  de otros artículos de papel y cartón ncp',
                'note'          => 'Fabricación  de otros artículos de papel y cartón ncp Esta subclase incluye: La fabricación de papeles carbónicos, papeles de autocopia (papel sin carbón) y otros papeles para copia o reproducir. La fabricación de sobres,  esquellas o tarjetas postales no ilustradas. La fabricación de artículos moldeados de papel, cartón o pasta de papel, como tambores, bobinas, tubos, conos, tapas; papel en rollos o en hojas cuadrangulares o circulares; papel de carta u otros papeles utilizadas para escribir o para gráficos, cortados en distintos tamaños o formas; papel engomado o adhesivo, en cintas o rollos. La fabricación de embalajes alveolares de pasta de papel para  huevos y otros productos similares, etc. Esta subclase no incluye: La fabricación de papel y cartón en bruto (véase 2101). La fabricación de artículos para envase, empaque y embalajes (véase 2102). La fabricación  de cartas de juegos de mesa, juguetes de papel y cartón (véase 3694).',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '22110',
                'description'   => 'Edición de libros, folletos, partituras y otras publicaciones',
                'note'          => 'La edición de libros, folletos y publicaciones similares, incluida la edición de diccionarios, enciclopedias, mapas y partituras musicales.',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '22120',
                'description'   => 'Edición de periódicos, revistas y publicaciones periódicas',
                'note'          => 'La edición de periódicos, revistas y publicaciones periódicas de contenido técnico o general, revistas profesionales, etc.',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '22130',
                'description'   => 'Edición de grabaciones',
                'note'          => 'La edición de discos, discos compactos y cintas de música u otras  grabaciones sonoras.',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '22190',
                'description'   => 'Otras actividades de edición',
                'note'          => 'La edición de calendarios, carteles, fotos, grabados, tarjetas postales, formularios, reproducciones de láminas de obras de arte, calcomanías y otros materiales impresos tales como tarjetas reproducidas por medios mecánicos o fotomecánicos. Esta clase no incluye: La edición de películas de vídeo (véase 9211).',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '22210',
                'description'   => 'Actividades de impresión',
                'note'          => 'La impresión por medio de prensas de imprenta, multicopistas, reproductoras, grabadoras en relieve, fotocopiadoras de revistas y otras publicaciones periódicas, libros, partituras de música, mapas, atlas, carteles,  etc. ,billetes de banco, sellos de correos, timbres fiscales, documentos  de propiedad, cheques y otros títulos, etc. Catálogos prospectos, material de publicidad comercial, etc.,. Revistas y otras publicaciones periódicas.  libros, partituras de música, mapas, atlas, carteles, etc. Registros, álbumes agendas, calendarios y otros impresos comerciales artículos de papelería de uso personal y otros impresos. Formularios, talonarios para facturas, recibos y similares, etc. Comprende también: El acabado de hojas impresas como libros, folletos, publicaciones periódicas, catálogos, etc., mediante el plegado, alzado, empastado, encolado, corte. el acabado de papel o cartón impreso como formularios, anuncios comerciales, muestras, etiquetas, tarjetas, calendarios, anuncios, por correspondencia, prospectos mediante plegado, estampado, taladrado picado, perforado, gravado en relieve, punzado, laminado. NOTA: Cuando en una unidad la mayor parte de las unidades de  encuadernación vayan asociadas de la impresión esa unidad se clasificará en esta última actividad. Esta clase no incluye: La impresión de etiquetas de papel y cartón (véase 2109). Las actividades de edición se incluyen en la clase apropiada, según la industria de que se trate (véase 221).',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '22220',
                'description'   => 'Actividades de servicios relacionadas con la impresión',
                'note'          => 'La encuadernación, la composición, la producción de caracteres de   imprenta compuestos, planchas o cilindros de impresión preparados, piedras litográficas impresas y otro medios impresos de reproducción para su utilización por otras unidades.',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '22300',
                'description'   => 'Reproducción de grabaciones',
                'note'          => 'La reproducción de materiales grabados, tales como: discos, discos compactos y cintas de música, videocintas, a partir de grabaciones originales. La reproducción para difusión comercial  a partir de grabaciones originales, de programas y datos informaticos en discos y cintas. Esta clase no incluye: La reproducción de material impreso (véase 2221). La fabricación a cambio de una retribución o por contrata de productos intermedios, como matrices de discos gramófonos. (véase 9249).',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '23100',
                'description'   => 'Fabricación de productos de hornos de coque',
                'note'          => 'El funcionamiento de coquerias principalmente para producir coque y semicoque a partir de carbón de piedra y lignito y para producir carbón de retorta y productos residuales, como alquitrán de hulla y brea.  Aglomeración de coque. Esta clase no incluye: La aglomeración de antracita (véase 1010). La aglomeración de lignito pardo (véase 1020). La destilación de alquitrán de hulla (véase 2411).',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '23200',
                'description'   => 'Fabricación de productos de la refinación del petróleo',
                'note'          => 'La producción de combustibles para motores: gasolina, kerosene, etc., gases de refinería como etano, propano, butano, etc. la fabricación de  aceites, grasas lubricantes derivados de petróleo, incluso a partir de desechos del petróleo. La fabricación de productos para la industria petroquímica y para la elaboración de revestimientos de carreteras. La fabricación de  diversos productos: vaselina, parafina, etc. Esta clase no incluye: La explotación de yacimientos de petróleo y gas para obtener petróleo crudo y gas natural. (véase 1110). la fabricación de lubricantes especiales y aditivos para lubricantes (véase 2429).',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '23300',
                'description'   => 'Elaboración de combustible nuclear',
                'note'          => 'La producción de uranio enriquecido, la producción de combustibles nucleares, la producción de elementos radioactivos para uso industrial o médico. Esta clase no incluye: La extracción y concentración de minerales de uranio y torio y la fabricación de concentrado de óxido de uranio (véase 1200)',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '24111',
                'description'   => 'Fabricación de gases industriales',
                'note'          => 'La fabricación de gases industriales: corresponden a gases elementales, como el helio, argón, oxígeno, nitrógeno y halógenos como el cloro, flúor, bromo; aire comprimido o líquido: el acetileno, ya sea producido mediante transformación química de derivados del petróleo o a partir de minerales, como el carbono y la caliza; los gases refrigerantes producidos a partir de hidrocarburos, como los freones y demás compuestos cloro-fluoruro carbonados: la producción de anhídrido carbónico ya sea como gas  carbónico comprimido o como hielo seco, mezclas de estos gases con aplicaciones específicas. Esta subclase no incluye: La extracción del metano, etano, butano o propano (véase 1110). La fabricación de gases combustibles como el estaño, butano o propano en refinería de ',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '24112',
                'description'   => 'Fabricación de sustancias químicas básicas',
                'note'          => 'La fabricación de colorantes y pigmentos de orígen animal. vegetal, sintético y mineral, en forma básica o concentrada. La fabricación de extractos curtientes de origen vegetal. La fabricación de productos inorgánicos utilizados como luminoforos. La fabricación de elementos químicos. La fabricación de compuestos inorgánico como ácidos, bases, sus sales, etc.,  acíclicos, saturados y no saturados, alcoholes acíclicos, ácidos mono y  policarboxílicos incluido el ácido acético. otros compuestos de función oxigeno fabricación de compuestos orgánicos incluidos los productos procedentes de la binarios o múltiples compuestos de función nitrógeno incluidas las aminas. También la  destilación de la madera etc., La fabricación de carbón vegetal, la producción de alcohol etílico de síntesis, la fabricación de productos aromáticos sintéticos. Esta subclase no incluye: La extracción de metano, etano, butano y propano en el yacimiento (véase 1110). La fabricación de alcohol etílico de fermentación (véase 1551). La producción de etano, butano, propano en la refinería de petróleo (véase 2320). La fabricación de abonos nitrogenados y compuestos de nitrógeno (véase 2412). La fabricación de plásticos en formas primarias y de caucho sintético (véase 2413). la fabricación de ácido salicilico (véase 2423). La fabricación de glicerina cruda (véase 2424). la fabricación de aceites  esenciales (véase 2429). La fabricación de ácido nítrico, amoniaco, cloruro de amonio, nitritos y nitratos de potasio, etc. (véase 2412). La fabricación de  óxido de aluminio (véase 27202). la fabricación de colorantes y pigmentos preparados (véase 2422).',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '24120',
                'description'   => 'Fabricación de abonos y compuestos de nitrógeno',
                'note'          => 'La fabricación de abono nitrogenados fosfatados o potásicos puros o  complejos, urea, fosfatos naturales en bruto y sales de potasio naturales en bruto. la fabricación de productos nitrogenados afines: ácido nítrico y  ácido sulfonítrico, amoniaco, cloruro de amonio, nitritos y nitratos de potasio,  fosfatos de triamonio y carbonatos de amonio. Esta clase no incluye: La recolección de guano (véase 1421). La producción de productos agroquímicos (véase 2421).',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '24130',
                'description'   => 'Fabricación de plásticos en formas primarias y de caucho sintético',
                'note'          => 'La fabricación de materia plásticas en formas primarias: polímeros  incluidos los polímeros de etileno, propileno, cloruro de vinilo, estireno, acetato de vinilo y acrílico, poliamidas, resinas fenólicas, resinas apoxídicas y polietureno, siliconas, residuos de petróleo, politerpenos sintéticos, polisulfuros; celulosa y sus derivados, obtenidos por transformación química de ésta como el acetato de celulosa, nitrocelulosa, viscosa, rayón, nylón, celuloide. esta clase incluye también: la fabricación de caucho sintético en  sus formas primarias: caucho sintético o látex de caucho sintético. La fabricación de mezclas de caucho sintético y caucho natural y gomas similares al caucho como balata, etc. Esta clase no incluye: La fabricación de productos de caucho (véase 251). La fabricación de productos de materias plásticas (véase 252). El reciclaje de caucho y materias plásticas (véase 3720).',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '24210',
                'description'   => 'Fabricación de plaguicidas y otros productos químicos de uso agropecuario',
                'note'          => 'La fabricación de insecticidas, raticidas, fungicidas, herbicidas, productos antigerminantes, reguladores del crecimiento de las plantas, desinfectantes y otros productos agroquímicos, incluso para uso doméstico y sanitario Esta clase no incluye: La fabricación de abono y compuestos de nitrógeno (véase 2412).',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '24220',
                'description'   => 'Fabricación de pinturas, barnices y productos de revestimiento similares, tintas de imprenta y masillas',
                'note'          => 'La fabricación de pinturas, barnices, esmaltes, lacas. La fabricación de pigmentos preparados, opacinificantes y colorantes; la fabricación de esmaltes vitrificables y barnices para vidriar, enlucidos cerámicos y preparados similares. la fabricación de masillas, compuestos para calafatear (rellenar o sellar) y preparados similares no refractarios, como las masillas para pegar vidrios, para obturar grietas o fisuras diversas. la fabricación de  disolventes y diluyentes orgánicos compuestos, de preparados quitapinturas y quitaesmaltes. Esta clase no incluye: La fabricación de tintes y colorantes (véase 2411). La fabricación de tintas para escribir o dibujar (véase 2429).',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '24230',
                'description'   => 'Fabricación de productos farmacéuticos, sustancias químicas medicinales y productos botánicos',
                'note'          => 'La investigación, perfeccionamiento y producción de sustancias medicinales  las activas utilizadas en la fabricación de productos y preparaciones  farmacéuticas; como vitaminas, alcaloides vegetales, antibióticos,. sulfonamidas,etc. La fabricación de azucares químicamente puros excepto glucosa, maltosa y lactosa. Fabricación de preparaciones farmacéuticas al alcance del público en general y de distribución reglamentada por las autoridades sanitarias; ampollas, tabletas, cápsulas, ampolletas, ungüentos, polvos y  soluciones desinfectantes, cicatrizantes, etc. Fabricación de medicamentos para uso humano o veterinario: sueros, plasmas, vacunas. Productos  botánicos pulverizados, graduados, molidos o preparados de otro modo; incluye los productos homeopáticos sólidos, líquidos. La fabricación de apósitos quirúrgicos, guatas, gasas, vendas, impregnados de sustancias medicinales, algodón medicinal, etc. Los estuches y botiquines con agua  oxigenada, tintura de yodo apósitos, etc. Esta clase no incluye: El envase y empaque de productos farmacéuticos por cuenta propia (véase 5134 y 5231 respectivamente). El envase y empaque a cambio de una  retribución (véase 7495).',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '24241',
                'description'   => 'Fabricación de jabones y detergentes',
                'note'          => 'La fabricación de jabones incluidos los de tocador, sólidos o líquidos.  La  fabricación de preparados para lavar y detergentes en forma líquida o sólida. Preparados para lava vajillas. Suavizantes para tejidos. Preparaciones para perfumar o desodorizar ambiente. Esta subclase no incluye: La fabricación de champús (véase 24242).',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '24242',
                'description'   => 'Fabricación de cosméticos, perfumes, productos de higiene y tocador',
                'note'          => 'La fabricación de perfumes y productos de belleza e higiene personal; perfumes y aguas de tocador. productos de belleza y de maquillaje. Productos para el bronceado y la prevención de las quemaduras de sol. Preparado para la manicura y pedicura, champús y lacas para el pelo, brillantinas, preparados para las ondulaciones y desrizados. Dentríficos y preparados para la higiene bucal. preparados para el afeitado, desodorantes. Esta subclase no incluye: La extracción y refinado de aceites esenciales (véase 2429). La fabricación  de jabones (véase 24241)',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '24243',
                'description'   => 'Fabricación de preparados para limpiar y pulir',
                'note'          => 'La fabricación de producto de limpieza y de abrillantamiento: preparados  para perfumar y desodorizar locales, ceras artificiales y ceras preparadas lustres y cremas para cuero, madera, carrocerías, cristales, metales, etc.',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '24290',
                'description'   => 'Fabricación de otros productos químicos ncp',
                'note'          => 'La fabricación de explosivos y pólvoras. Pólvoras  propulsoras, productos  pirotécnicos mechas detonadoras de seguridad y mechas lentas ( o de minería), cápsula y cebos fulminates, etc. Artículos para fuegos artificiales y demás artículos similares. la fabricación de gelatinas y sus derivados colas y adhesivo preparados, incluidos las colas y adhesivos a base de caucho.  Extracción y refinación de aceites esenciales o esencias y los aceites resinoides de orígen vegetal utilizados en la preparación de perfume y cosméticos. Aceites y grasas modificadas químicamente. Lubricantes especiales y aditivos para lubricantes. Productos antidetonantes, anticoagulantes, líquidos para transmisión hidráulica. Materiales para el acabado de productos textiles y cuero.  Preparaciones para el decapado de metales. Aditivos preparados para cementos . aditivos para aceites lubricante, aceleradores de vulcanización, catalizadores y otros productos químicos de uso industrial. Líquidos para frenos hidráulicos preparados para acelerar la vulcanización del caucho, tintas para escribir y dibujar. La elaboración de la sal refinada. Esta clase  incluye: La fabricación de fósforos (véase 3999). la fabricación de perfumes y  productos belleza (véase 24242). La fabricación de tintas para impresión (véase 2422). Los productos químicos para el tratamiento y curtido del cuero  (véase 24112).',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '24300',
                'description'   => 'Fabricación de fibras manufacturadas',
                'note'          => 'La fabricación de fibras sintéticas elaboradas a partir de polímeros sintético que provienen de etileno, propileno, poliesteres, poliamidas, loiuretano, obteniéndose, básicamente fibras como el orlón, dácron, poliésteres, nylon, polipropileno, desechos de fibras sintéticas, etc. La fabricación de cables y filamentos artificiales o sintéticos. La fabricación de fibras sintéticas o artificiales discontinuas, sin cardar, ni peinar, ni tratadas de cualquier otra forma su hilado. La fabricación de hilos sintéticos o artificiales sintéticos, simples, incluido el hilo de alta tenacidad, la fabricación monofilamentos y tiras,  o artificiales. Esta clase no incluye : La fabricación de hilo e hilados a partir de fibras artificiales o sintéticas ( véase 1711). La fabricación de hilados tehiso, doblados, cableados o procesados de otra manera a partir de filamentos, estopas, fibras discontinuas e hilados no producidos en la misma   unidad (véase 1711).',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '25110',
                'description'   => 'Fabricación de cubiertas y cámaras de caucho; recauchutado y renovación de cubiertas de caucho',
                'note'          => 'La fabricación de llantas y neumáticos de caucho par todo tipo de vehículos, incluidas la llantas y neumáticos para equipo o maquinaria móvil. Cubiertas neumáticas y cubiertas sólidas o mullidas. La fabricación de cámaras de aire para neumáticos. la fabricación de bandas de rodadura intercambiables, bandas de fondo de llanta, bandas de rodadura para el recauchutado de cubiertas, etc. Esta clase no incluye: La fabricación de tejidos de cordelería para neumáticos (véase 1729). La fabricación de materiales para la reparación de neumáticos (véase 2519). La reparación parcial, colocación o reposición de neumáticos y cámaras (véase 50203).',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '25190',
                'description'   => 'Fabricación de otros productos de caucho',
                'note'          => 'La fabricación de otros productos de caucho natural, sintético o regenerado sin vulcanizar, vulcanizados o endurecido: planchas, hojas, bandas, varillas, perfiles,  tubos, conductos y mangueras. Artículos de caucho para usos farmacéuticos. Prendas de vestir de caucho confeccionadas por pegados, costura o de otro modo. Revestimiento de caucho para el suelo. Materia textiles, hilo y tejidos engomados, hilos y  cuerdas de caucho, la fabricación de materiales para la reparación de  artículos de caucho. Esta clase no incluye: La producción de caucho en plantaciones (véase 0111). La fabricación de ropa de tejidos elásticos (véase 1810), la fabricación de calzado (véase 1920). La fabricación de tiras de remiendo para recauchutar cubiertas (véase 2511). La fabricación de artículos de uso doméstisco dental y quirúrgico (véase 3311). La fabricación de colchones de caucho celular no enfundados (véase 3610). La  fabricación de accesorios deportivos (véase 3693). la fabricación de juegos y  juguetes (véase 3694). La obtención de caucho en formas primarias (véase 2413). La producción de caucho regenerados (véase 3720). La fabricación de linóleo y recubrimientos duros para pisos (véase 3699).',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '25201',
                'description'   => 'Fabricación de envases plásticos',
                'note'          => 'La fabricación de artículos de envases y embalaje de materias plásticas: bolsas, sacos, cajas, cajones, bidones, botellas, etc. Esta subclase no incluye: La fabricación de artículos de viajes de plásticos (véase 1912). La fabricación de artículos de caucho sintéticos o natural (véase 2519). Las  operaciones de embalajes por cuenta de terceros (véase 7495). El  reciclaje de desperdicios y desechos de plástico (véase 3720).',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '25209',
                'description'   => 'Fabricación de productos plásticos en formas básicas y artículos de plástico ncp',
                'note'          => 'La fabricación de productos de materias plásticas tales como: placas, planchas, tubos, conductos, y mangueras de plástico, placas, planchas, tubos, conductos, y mangueras de plástico, accesorios para tuberías, etc. La fabricación de productos de materias plásticas, para la construcción, revestimientos de  plásticos para suelos, paredes o techos en rollos  o en forma de losetas, artículos de plástico de uso sanitario, etc. La fabricación de servicios de mesa, utensilios de cocina y artículos de tocador, artículos de escritorio y para uso escolar guarniciones para muebles, estatuillas. Prendas y complementos de vestir de plástico, ya sean cocido o pegados.  Esta subclase no incluye: La fabricación de artículos de viajes de plástico (véase 1912) La fabricación de calzado de plástico (véase 19202). La fabricación de mobiliaria de plástico (véase 36103). La fabricación de juegos y juguetes de plástico (véase 3694).',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '26101',
                'description'   => 'Fabricación de envases de vidrio',
                'note'          => 'Fabricación de botellas y otros recipientes y envolturas, de vidrio o de cristal. Esta subclase no incluye: La fabricación de material medico de laboratorio, incluso jeringas (véase 3311). La fabricación de juguetes de vidrio (véase 3694).',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '26102',
                'description'   => 'Fabricación de vidrio',
                'note'          => 'La fabricación de vidrio plano endurecido o laminado,  espejos de vidrio. La fabricación de aisladores de vidrio  de varias capas, vidrios de seguridad.  Esta subclase no incluye: La fabricación parabrisas (véase 3430)',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '26109',
                'description'   => 'Fabricación de productos de vidrio ncp',
                'note'          => 'La fabricación de vasos y otros artículos para el hogar,  de vidrio o de cristales, objetos de vitrocerámica de mesa y cocina. La fabricación de fibras de vidrio, incluida la lana  de vidrio y artículos sin tejer de estas fibras, vidrio para laboratorio, ',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '26911',
                'description'   => 'Fabricación de artículos de cerámica de uso doméstico, sanitario y ornamental',
                'note'          => 'La fabricación de artículos de porcelana, loza, piedra o arcilla  o de alfarería común. La fabricación de vajillas y otros artículos  loza, cerámica o porcelana de uso domestico o de tocador. La fabricación de estatuillas y otros artículos cerámicos de  ornamentación. Incluye también la fabricación de artefactos sanitarios de cerámica y demás artículos de cerámica de uso no estructural. Esta subclase no incluye: La fabricación de artículos de cerámica refractaria y de materiales de construcción de cerámica (véase 2692 y 2693  respectivamente). La fabricación de dientes postizos  (véase 3311). La fabricación de joyas de fantasía (véase 3699).',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '26912',
                'description'   => 'Fabricación de otros artículos de cerámica no refractaria para uso no estructural',
                'note'          => 'La fabricación de aisladores eléctricos y piezas aislantes de material cerámico, productos de cerámico para usos de laboratorio químicos e industriales. La fabricación de tarros y otras vasijas similares del tipo empleado para el transporte y como recipientes La fabricación de otros productos cerámicos. Esta subclase no incluye: La fabricación de artículos de cerámica refractaria y de materiales de construcción de cerámica (véase 2692 y 2693 respectivamente)',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '26920',
                'description'   => 'Fabricación  de productos de cerámica refractaria',
                'note'          => 'La fabricación de ladrillos, bloques, losetas, y otros  artículos similares de cerámica refractaria para la construcción  La fabricación de productos de cerámica resistentes  a elevadas temperaturas, para la industria metalúrgica, química, etc. La fabricación de cementos refractarios. Esta clase no incluye: La fabricación de artículos de cerámica no refractaria (véase 2691) y la fabricación de productos de arcilla y cerámica no refractaria para uso estructural (véase 2693).',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '26930',
                'description'   => 'Fabricación de productos de arcilla y cerámica no refractarias para uso estructural',
                'note'          => 'La fabricación de azulejos y baldosas de cerámica, lozas para pavimentación o revestimiento, mosaicos, etc., no  refractario. La fabricación de baldosas y adoquines no refractario, ladrillos, tejas y productos de tierras cocidas para la construcción La fabricación de materiales no refractarios de arcilla estructural destinados ala construcción. Esta clase no incluye: La fabricación de productos de cerámica refractaria (véase  2692)',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '26941',
                'description'   => 'Fabricación de cemento',
                'note'          => 'La fabricación de cementos hidráulicos, incluidos el portland, aluminoso y otros tipos de cemento. Esta subclase no incluye: La fabricación de cementos dentales (véase 2423). La fabricación de cementos refractario (véase 2692). La fabricación de  artículos de cemento y de yeso (véase 2695).',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '26942',
                'description'   => 'Fabricación de cal y yeso',
                'note'          => 'La fabricación de cal viva, cal apagada y cal hidráulica. La fabricación de yesos con yeso calcinado y con sulfatos de  calcio. Esta subclase no incluye: La extracción de yeso (véase 14101).',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '26950',
                'description'   => 'Fabricación de artículos de hormigón, cemento y  yeso',
                'note'          => 'La fabricación de artículos de hormigón, cemento yeso  utilizados en la construcción, baldosas, ladrillos, planchas, panelas, tuberías, postes, etc. La fabricación de elementos estructurales prefabricados para la construcción de hormigón, cemento, o piedra artificial para obras públicas.  Esta clase no incluye: elementos de yeso para la construcción, como planchas, placas paneles etc. La fabricación de mezclas preparadas para hormigón. La fabricación de artículos de fibrocemento de celulosa o materiales similares: placas onduladas, otras placas, paneles, tejas, tubos, tuberías, tanques de agua y otros artículos. Materiales de construcción compuesto de sustancias vegetales (lana de madera, paja, cañas, juncos) aglomerados con cemento, yeso u otro aglutinante mineral.',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '26960',
                'description'   => 'Corte, tallado y acabado de la piedra',
                'note'          => 'Aserrado, cortado, tallado y acabado de la piedra para su empleo en la construcción, cementerios, carreteras, muebles de piedra y otros usos. Esta clase no incluye:  La extracción de piedra en bruto sin desbastar (véase 1410)  La producción de muelas de molino, piedras abrasivas y artículos similares (véase 2699)',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '26990',
                'description'   => 'Fabricación de otros productos minerales no metálicos ncp',
                'note'          => 'La fabricación de hilares y telas, prendas de vestir, calzado, corras, cuerdas, cordones, papel, fieltro, etc., de amianto y de otros minerales no metálicos. La fabricación de materiales de fricción sobre una base de asbesto, de otras sustancias minerales y de celulosa, combinados con otros materiales. La fabricación de materiales minerales y aislante: lana de escorias, lana de   roca y otras lanas minerales similares; vermiculita dilatadas,  arcillas dilatadas, y materiales similares para aislamiento térmico o sonoro. La fabricación de artículos de asfalto o de materiales similares, lozas, losetas, etc. La producción de piedra de molina, de piedras de afilar o de pulir y productos abrasivos naturales, o artificiales, en polvo o en grano, aplicados sobre una base de material textil, de papel, de cartón y de otro material. La fabricación de artículos de sustancias minerales  diversas: mica trabajada y manufacturas de mica, de turba o de  grafito ( que no sean artículos eléctricos) o de otras sustancias  minerales. Esta clase no incluye: La fabricación de lana de vidrio (véase 26109)',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '27100',
                'description'   => 'Industrias básicas de hierro y acero',
                'note'          => 'El funcionamiento de altos hornos, convertidores de acero, talleres de laminado y de acabado. La producción de lingotes de hierro y acero a partir de la reducción de minerales o de chatarra. La producción de lingotes para fundición y para afino. La producción de productos férreos obtenidos a partir de la reducción directa del mineral de hierro y otros productos esponjosos en masas, granulados y formas similares La producción de productos de acero laminados en frío, o en caliente. La producción de lingotes, en otros formas primarias y productos semiacabados. La producción de productos de hierro, acero o acero de aleación, laminados, trefilados, extrudidos o forjados. El tratamiento de estos productos puede ser en caliente  o en frío o puede empezar en caliente y terminar en frío. Entre los productos importantes de los talleres de laminado plano laminado tubular y acabado se cuenta las hojas, planchas, rollos, barras y varillas; ángulos, perfiles, secciones y alambre; tubos  y cañas, incluso tubos, caños y perfiles huecos fundidos,  soldados o remachados; material de construcción para vías   férreas y otros productos acabados de hierro o de acero. La producción y el revestimiento continuo de bandas anchas,  flejes, placas, chapas y planos anchos laminados en caliente.  La producción y el revestimiento continuo de bandas anchas,  placas y chapas laminadas en frío. La producción de hojalata de chapas revestidas electroliticamente de cromo de hierro negro. La producción de residuos y desechos de fundición. Esta clase no incluye: La extracción de minerales hierro (véase 1310). El funcionamiento de coqueria (véase 22310)',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '27201',
                'description'   => 'Producción de metales comunes no ferrosos en formas primarias',
                'note'          => 'La producción de metales comunes no ferrosos utilizando mineral en bruto, mineral en mata, otras materias primas intermedias  entre el mineral en bruto y el metal (por ejemplo, alúmina) y chatarra. Las operaciones realizadas por talleres de fundición, de refinación o de otra índole para producir metales comunes  no ferrosos sin labrar. Los talleres de fundición y refinación de cobre, plomo, níquel, cromo, manganeso, zinc, aluminio, estaño y otros metales comunes no ferrosos y aleaciones de esos metales la producción de aluminio y matas de cobre, producción de matas níquel. La fabricación de productos de metales comunes no ferrosos mediante laminado, trefilado o extrusión, la fabricación´de polvos o escamas; hojas delgadas, hojas planchas o tiras;  barras, varillas o perfiles, alambre; tubos, cañas o accesorios para tubos o caños. Esta subclase no incluye: Las operaciones de forja o fundición realizadas como parte de la fabricación de un determinado tipo de producto.',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '27202',
                'description'   => 'Producción de metales preciosos en formas primarias',
                'note'          => 'La fabricación de productos primarios de metales preciosos oro, plata y metales del grupo del platino. La refinación de dichos metales preciosos mediante procesos químico a fin  de eliminar impurezas intrínseca. La producción de metales preciosos labrados o no : plata en grumos, granos, lingotes,  barras fundidas, gránulos, etc.; o en barras laminadas, varillas secciones, alambres, planchas hojas y tiras, o en tubos, hojuelas, polvo, etc. Oro o platino y metales del grupo del platino en formas similares a la indicadas para la plata. Producción de  metales enchapados: metales comunes enchapados de plata en forma de barras, varillas, secciones, hojas, tubos, etc., metales comunes o plata enchapados de oro o formas similares a las indicadas para la plata; oro plata o metales comunes enchapados de platino o metales de grupo del platino en  formas similares a las indicadas para la plata. Esta subclase no incluye: La fabricación de joyas de metales preciosos o monedas de plata (véase 3691). La fabricación de cajas de metales preciosos para relojes (véase 3330)',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '27310',
                'description'   => 'Fundición de hierro y acero',
                'note'          => 'La fabricación de barras y perfiles de acero obtenidos por  estirado en frío, productos planos de acero laminado en rollo o en chapas, mediante el relaminado en frío de productos  laminados en caliente. La fabricación de perfile o chapas perfiladas  en frío, por conformación en un tren de laminación o mediante plegado en una prensa de productos plenos de acero laminado.  La fabricación de alambre de acero estirados en frío. La producción de ferroaleaciones, excepto el ferromanganeso rico en carbono y de ferrofosforo. La producción de polvo de hierro por electrólisis y otros procesos químicos. La producción de material para vías férreas, excepto raíces y traviesas. Esta subclase no incluye: La fabricación de raíles y traviesas para vías férreas.',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '27320',
                'description'   => 'Fundición de metales no ferrosos',
                'note'          => 'La fundición de productos acabados o semiacabados de metales no ferrosos y de metales preciosos. La fundición de piezas de moldeo metálicas pesadas, La fundición de piezas de moldeo de metales preciosos.',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '28110',
                'description'   => 'Fabricación de productos metálicos para uso estructural',
                'note'          => 'La fabricación e estructuras y partes de estructuras metálicas, de acero,  hierro y productos similares, tales como puentes y secciones de puentes, columnas, vigas, andamiajes tubulares, armaduras, arcos, cabios, castilletes para bocas de pozos, la construcción de edificios  prefabricados de metal. La fabricación de puertas y ventanas metálicas y de sus marcos, postigos, cierres metálicos, escaleras de incendio, rejas y carpintería metálica similar a la utilizada en la construcción. Los productos característicos de esta clase, se hacen generalmente  con chapas, fleje, barras, tubos, perfiles diversos de hierro, de acero o de aluminio, o de elementos de hierro forjado, o de fundición moldeada taladros ajustados o  acoplados con remaches, pernos o soldadura, se trata de artículos transportables, listos para ser instalados. Esta clase no incluye: La fabricación de piezas y accesorios ensamblados para vías férreas (véase 2899).',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '28120',
                'description'   => 'Fabricación de tanques, depósitos y recipientes de metal',
                'note'          => 'La fabricación de recipientes de metal para gas comprimido o licuado,  de cualquier capacidad, son generalmente de formas cilíndricas, tubos o botellas, resistentes generalmente para resistir presiones altas. Otros constituidos por un depósito interior y una o varias capas envolventes entre las que se puede disponer un material aislante, para obtener un gran aislamiento térmico. La fabricación de calderas y radiadores para calefacción central proyectadas para producir al mismo tiempo agua caliente y vapor a baja presión utilizadas para la calefacción en las viviendas, fabricas, invernaderos, etc. La fabricación de tanques,  cisternas o recipientes similares de metal utilizados habitualmente como equipo fijo para el almacenamiento o la producción de los establecimientos industriales. Pueden ser abiertos o cerrados, estar revestido interiormente de ebonita, de plástico o de un metal distinto al hierro, del acero o del aluminio. Esta clase no incluye: La fabricación de barriles tambores, bidones , baldes, cajas y artículos similares, utilizados para el transporte y envases de productos. (véase 2899). La fabricación de contenedores diseñados y equipados  especialmente para su acarreo por uno o más medios de transporte (véase 3420).',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '28130',
                'description'   => 'Fabricación de generadores de vapor, excepto calderas de agua caliente para calefacción central',
                'note'          => 'Fabricación de calderas generadores de vapor de agua y otros vapores que no sean calderas de agua, son calderas de una mediana y alta  potencia que permiten aumento de la presiones del orden de 2000 fibras. Esto implica que la fabricación garantice su resistencia a  elevadas presiones de operación, así como a la corrosión. La fabricación de material auxiliar para calderas, tales como economizadores de agua para su calentamiento previo, recalentadores cilindros recolectores que recogen el vapor de un grupo de calderas, acumuladores de vapor, es decir grandes depósitos de cilindros o de acero en los que se acumula una reserva de vapor. Así mismo se incluyen los deshollinadores, recuperadores de gases y dispositivos sacabarros, todos estos accesorios se fabrican con las mismas técnicas y materiales que las calderas. Esta clase no incluye: La fabricación de calderas y radiadores para calefacción central (véase 2812). La fabricación de turbo calderas o de máquinas de vapor estáticas con caldera integral (véase 2911).',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '28910',
                'description'   => 'Forja, prensado, estampado y laminado de metales; pulvimetalurgia',
                'note'          => 'La fabricación de artículos metálicos, acabados o semiacabados,  mediante forja, prensado y estampado o laminado por medio de procesos en que se rodillos de compresión o de procesos de pulvimetalurgía, utilizando polvos de metal que se someten a tratamiento calorífico o a compresión; en general se trata de la fabricación de una amplia gama de productos.',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '28920',
                'description'   => 'Tratamiento y revestimiento de metales; obras de ingeniería mecánica en general realizadas a cambio de una retribución o contrata',
                'note'          => 'Las actividades de enchapado, pulimento, anodizado, coloración, cromado zincado, galvanizado, recromatizado, zulfatado, etc. Son procesos en los  que se deposita otro metal sobre la superficie metálica y mediante la aplicación de corriente eléctrica se le confiere propiedades especificas de acabado. Asimismo incluyen procedimientos tales como: el bruñido, desbarbado, limpieza con chorro de arena, pulimento en tambor giratorio, limpieza , soladura esmerilado y otros tratamientos especiales del metal y de artículos de metal que se realizan por contrata o a cambio de una  retribución. Las unidades que realizan estas actividades generalmente no  son dueñas de los artículos que procesan ni los venden a terceros.',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '28930',
                'description'   => 'Fabricación de artículos de cuchillería, herramientas de mano y artículos de ferretería',
                'note'          => 'Fabricación de artículos de cuchillería, navajas, máquinas afeitar, hojas de afeite, tijeras, utensilios de mesa y de cocina; herramientas de mano sin motor, del tipo utilizado en la agricultura, ganadería y silvicultura;  carpintería ensamblaje mecánico, chapistería y en la industria en general La fabricación de sierras, hojas para sierras, cizallas para máquinas o  para aparatos mecánicos, accesorios intercambiables para herramientas,  maquinas, herramienta: brocas, punzones, matrices, fresas, puntas, yunques, tornos de banco, abrazaderas, lámparas de soldar, candados,   cerraduras, pasadores, llaves y artículos y herramientas similares. Esta clase no incluye: La fabricación de mesa y cocina de metales comunes, incluidas las enchapadas con metales preciosos (véase 2899). Si se trata de vajillas  elaboradoras de metales preciosos (véase 3691). La fabricación de elementos de mano con motor (véase 2922).',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '28991',
                'description'   => 'Fabricación de envases de productos metálicos',
                'note'          => 'La fabricación de recipientes utilizados para el envase o transporte de mercancías : barriles, tambores, bidones, tarros, cajas, etc., incluidos los de gran tamaño. Esta subclase no incluye: La fabricación de recipientes para el almacenamiento y la elaboración de materiales (véase 2812)',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '28999',
                'description'   => 'Fabricación de productos metálicos ncp',
                'note'          => 'Fabricación de sujetadores hechos de metal: clavos, remaches, tachuelas alfileres, grapas, arandelas y productos similares sin rosca, la  fabricación de pequeños artículos de metal para oficina, cajas de  caudales, cajas fuertes, pórticos y puertas de cámaras blindadas,  acorazadas o reforzadas. Fabricación de productos de tornillería: tuercas, pernos, tornillos y   productos roscados y no roscados; cadenas, hebillas, corchetes,   almohadillas metálicas para fregar, cascos de seguridad, cables de metal, pero no aptos para conducir electricidad, de hierro, acero, aluminio y  cobre, telas metálicas, mallas de alambre, alambre de púas, etc.  Fabricación de muelles incluso semiacabados de uso general, artículosç para el hogar y otros utensilios de cocina de metales comunes, incluidas las enchapadas con metales preciosos, pequeños aparatos de cocina  accionados a mano, pequeños artículos sanitarios de metal esmaltados Esta subclase no incluye: La fabricación de cadenas de transmisión de potencia (véase 2913). La fabricación de muelles para reloj (véase 3330). Fabricación muebles de  metal (véase 36102). Fabricación de artículos de metales preciosos.  (Véase 3691).',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '29110',
                'description'   => 'Fabricación de motores y turbinas, excepto motores para aeronaves, vehículos automotores y motocicletas',
                'note'          => 'Fabricación de motores y turbinas, excepto motores para aeronaves, vehículos automotores y motocicletas',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '29120',
                'description'   => 'Fabricación de bombas, compresores, grifos y válvulas',
                'note'          => 'Fabricación de grifos, llaves de paso, válvulas y accesorios similares metálicos para tubos, calderas, tanques, cubas y artefactos similares, incluso válvulas productoras de presión, válvulas reguladas  termostaticamente. La fabricación de bombas de aire y de vacío,  compresoras de aire y otros compresores de gas, bombas para líquidos   que tengan o no dispositivos de medición, bombas de mano y bombas para motores de combustión interna de émbolo, bombas para impeler hormigón y otras bombas. Fabricación de máquinas y motores hidraúlicos compuestos de bombas de gran potencia. Se incluye el mantenimiento y la reparación de bombas, compresores, grifos y válvulas, cuando es realizado por la misma unidad de producción. Esta clase no incluye: La fabricación de grifos, llaves de paso, válvulas y accesorios similares de caucho, vulcanizado no endurecido, plástico, materiales de cerámica o  vidrio se incluyen según el material que se trate (véase 2519).  Fabricación de otros productos de caucho; (véase 2520). Fabricación de artículos de plástico (véase 26916). Fabricación de productos de  cerámica no refractaria, para uso no estructural y (véase 2610).  Fabricación de productos de vidrio respectivamente. La fabricación de  ventiladores para uso doméstico, incluso ventiladores de pie (véase 2930).',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '29130',
                'description'   => 'Fabricación de cojinetes, engranajes, trenes de engranajes y piezas de transmisión',
                'note'          => 'Fabricación de rodamientos de (bolas, rodillos, agujas) y de piezas de  los mismos. La fabricación de tipo mecánico de todo tipo de material, para la transmisión de fuerza motriz: árboles de levas, cigüeñales,  manivelas; árboles de transmisión, chumaceras, cajas de cojinetes, y cojinetes simples para ejes: engranajes, trenes de engranaje, ruedas de  fricción; cajas de engranaje y otros dispositivos para cambios de  marcha; embragues, incluso embragues centrífugos automáticos y  embragues de aire comprimido; volantes, etc. La fabricación de cadenas de eslabones articulados y cadenas de transmisión de potencia. Esta clase no incluye: La fabricación de cadenas de metal (véase 2899). La fabricación de   embragues electromagnéticos (véase 3190). La fabricación de  subensambladuras para equipo de transmisión de fuerza motriz que  pueden identificarse como partes de vehículos automotores (véase 3430).',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '29140',
                'description'   => 'Fabricación de hornos; hogares y quemadores',
                'note'          => 'Fabricación de hogares y grande hornos no eléctrico para tostar, fundir y someter a tratamiento térmico metales, no metales y otros materiales. La fabricación de hogares y grandes hornos por inducción y dieléctico; equipo industrial y de laboratorio para calentamiento por inducción y dialéctico, incinerados; quemadores de combustible líquido, combustible sólido pulverizado y gas: cargadores mecánicos, parrillas mecánicas, descargadores mecánicos de cenizas y aparatos similares. También incluye el mantenimiento y la reparación de los hornos hogares y quemadores industriales, cuando es realizado por la misma unidad que los produce. Esta no incluye: La fabricación de instalaciones y equipo diseñados para elevar la  temperatura de alimentos, bebidas o tabaco (véase 2925). La fabricación de hornos no eléctricos de panadería (véase 2925) La fabricación de instalaciones y equipo diseñados para elevar la  temperatura de pulpas, paneles y otros materiales industriales (véase 2929). La fabricación de esterilizadores médicos, quirúrgicos o de laboratorio (véase 3311).',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '29150',
                'description'   => 'Fabricación de equipo de elevación y manipulación',
                'note'          => 'Fabricación de máquinas para mover físicamente materiales, mercancías y persona, distintas de los vehículos de circulación por carretera. La fabricación, de elevadores, cabrias y cabrestantes; gatos, grúas de brazo móvil; grúas corrientes, grúas de cable; bastidores de móviles,  camiones de pórtico alto, carretillas de faena, estén provistas o no de una grúa u otro equipo de elevación o manipulación, sean propulsadas o no, como las que utilizan en fábricas, almacenes, muelles andenes de  ferrocarril y otros lugares, incluso tractores para uso en los andenes de las estaciones ferroviarias. La fabricación de partes especiales de los equipos de elevación y manipulación, incluso ganchillos cucharas y pinzas, excepto para topadoras, angulares o no. También incluye el mantenimiento y reparación de equipos de elevación y manipulación cuando es realizado por la misma unidad que la produce. Esta clase no incluye: La fabricación de motores de combustión interna para equipo de elevación y manipulación (véase 291), la fabricación de tractores  utilizados en la agricultura (véase 2921). La fabricación de equipo de construcción (véase 2924).',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '29190',
                'description'   => 'Fabricación de otros tipos de maquinaria de uso general',
                'note'          => 'Fabricación de balanzas de uso doméstico y comercial, equipo de refrigeración o congelación de uso comercial, tales como vitrinas y máquinas expendedoras, equipo de refrigeración o congelación de uso comercial, maquinaria para empaquetar y envolver mercancías, incluidas las maquinas que realizan una o mas funciones, tales como las de llenar,  cerrar y sellar, encapillar o etiquetar recipiente, como botellas latas, cajas o sacos; maquinaria para limpiar o secar las botellas, y otros  recipientes; para gasificar bebidas.  Fabricación de otra maquinaria y  equipo de uso general no clasificada en otra parte, incluso partes  especiales de maquinaria y equipo de uso general; se incluye el mantenimiento y la reparación de maquinaria de uso general, cuando es  realizado por la misma unidad que la produce. Esta clase no incluye: La fabricación de máquinas secadoras de ropa para uso industrial (véase 2929).  Fabricación de máquinas secadoras de ropa para uso  doméstico( véase 2030).  La fabricación de ventiladores utilizado  principalmente en habitaciones u oficinas (véase 2930).  La fabricación de balanzas de precisión (3312).',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '29210',
                'description'   => 'Fabricación de maquinaria agropecuaria y forestal',
                'note'          => 'Fabricación de maquinaria agropecuaria y forestal',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '29220',
                'description'   => 'Fabricación  de máquinas herramienta',
                'note'          => 'Fabricación  de máquinas herramienta',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '29230',
                'description'   => 'Fabricación  de maquinaria metalúrgica',
                'note'          => 'Fabricación  de maquinaria metalúrgica',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '29240',
                'description'   => 'Fabricación de maquinaria para la explotación de minas y canteras y para obras de construcción',
                'note'          => 'Fabricación de maquinaria de elevación y manipulación diseñada  especialmente para uso en obras subterráneas, equipo para perforar e  hincar, destinados o no, a usos subterráneos, maquinaria para  tratamiento de minerales mediante: cribao, separación, trituración, pulverización, mezcladoras de hormigón, mortero, máquinas de  moldeamiento, extrusoras, tractores de oruga, tractores utilizados en la construcción o en la explotación de minas, topadoras corrientes y de la  pala angular, explanadoras, niveladoras, traillas para la explotación de minas y canteras y ara obras de construcción, exparcidoras de hormigón; se incluye el mantenimiento y la reparación de maquinaria para la  explotación de minas y canteras y para la construcción. Esta clase no incluye: La fabricación de tractores de uso agrícola (véase 2921,  La fabricación de máquinas herramienta para trabajar la piedra, incluso máquinas para  hendir o exfoliar la piedra (véase 2922).',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '29250',
                'description'   => 'Fabricación de maquinaria para la elaboración de alimentos, bebidas y tabaco',
                'note'          => 'Fabricación de maquinaria utilizada en la industria lechera, máquinas para la industria de la molienda de granos, máquinas utilizadas en la  elaboración del vino, sidra, jugos de frutas y bebidas similares,  maquinaria y equipo especial para uso en panadería para preparar  macarrones, espaguetis y productos similares, mezcladoras, fraccionadoras y moldeadoras de masa; instalaciones o equipo de  calefacción eléctrica para el tratamiento de alimentos o bebidas mediante cambios de temperatura, hornos no eléctricos de panadería, máquinas  para la extracción y preparación de grasas o aceites fijos de origen animal o vegetal, maquinaria para la industria del tabaco, maquinaria para el procesamiento de cacao, para la fabricación de azúcar, para la cerveza para procesar carne, para preparar frutas, nueces, hortalizas, legumbres, para preparar pescado y la fabricación de otra maquinaria para  preparación y elaboración de alimentos y bebidas. Se incluye el  mantenimiento y la reparación de maquinaria para la elaboración de  alimentos, bebidas y tabaco, cuando es realizado por la misma unidad de  producción. Esta clase no incluye: la fabricación de cubas y tanques sin accesorios térmicos y mecánicos (véase 2812), la fabricación de máquinas de empacar y envolver, básculas y balanzas véase 2919, la maquinaria para la impresa,  selección y clasificación de huevos, frutas y otros productos agrícolas (véase 2921).',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '29260',
                'description'   => 'Fabricación de maquinaria para la elaboración de productos textiles, prendas de vestir y cueros',
                'note'          => 'Fabricación de máquinas de preparación de fibras textiles, para la  hilatura, desengrasadoras, peinadoras, cardadoras, retorcedoras,  telares corrientes, devanadoras, urdidoras, telares corrientes, telares manuales; se incluye el mantenimiento y la reparación de estas máquinas  cuando se realiza en la misma unidad de producción. Esta clase no incluye: La fabricación de máquinas de coser utilizadas en la encuadernación (véase 2929).',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '29270',
                'description'   => 'Fabricación de armas y municiones',
                'note'          => 'Fabricación de armas y municiones',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '29290',
                'description'   => 'Fabricación de otros tipos de maquinaria de uso  especial',
                'note'          => 'Fabricación de máquinas y equipos para la elaboración del caucho o del  plástico y para la fabricación de productos de los materiales,  fabricación de maquinaria para producir baldosas, ladrillos, pastas de cerámica moldeadas, tubos, electrodos de grafito, tiza de pizarrón, moldes de fundición, etc.  Esta clase no incluye: La fabricación de aparatos de uso doméstico véase 2930.',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '29300',
                'description'   => 'Fabricación de aparatos de uso doméstico ncp',
                'note'          => 'Fabricación de aparatos termoeléctricos de uso doméstico, tales como calentadoras de agua, calentadores de ambiente y ventiladores de uso  doméstico, aparatos de cocina, cocinillas eléctricas, planchas de  cocinar, resistencias para la calefacción eléctrica; se incluye el  mantenimiento y la reparación de aparatos de uso doméstico, siempre y cuando se realice en la misma unidad que los produce.  Fabricación de aparatos no eléctricos de uso doméstico, tales como cocinas, cocinillas, parrillas instalaciones domésticas de calefacción, central, calentadores de  agua. Calentadores de platos, etc. De uso doméstico no clasificados en otra partida. Esta clase no incluye: La fabricación de ventiladores de uso industrial (véase 2919).  El mantenimiento y la reparación de aparatos de uso doméstico realizado  fuera de la unidad de producción véase 52609).',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '30000',
                'description'   => 'Fabricación de maquinaria de oficina, contabilidad e informática',
                'note'          => 'Fabricación de maquinaria de oficina, contabilidad e informática',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '31100',
                'description'   => 'Fabricación de motores, generadores y transformadores eléctricos',
                'note'          => 'Fabricación de motores, generadores y transformadores eléctricos',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '31200',
                'description'   => 'Fabricación de aparatos de distribución y control de energía eléctrica',
                'note'          => 'La fabricación de aparatos para aislar, proteger o concentrar circuitos eléctricos, como interruptores, conmutadores, fusibles, pararrayos, reguladores de tensión, supresores de picos de tensión, enchufes,  tomacorrientes, portalámparas, etc.; propios para tensiones inferiores a los 1000 voltios, como los que generalmente se utilizan en viviendas o aparatos de distribución y control de la energía eléctrica, siempre y  cuando se realice en la misma unidad de producción. Esta clase no incluye La fabricación de artículos de caucho( véase 2519); fabricación de artículos de plástico moldeado véase 25209.  Fabricación de artículos de cerámica (véase 26911.)  La fabricación de electrodos de carbón o de  gráfico (véase 3190).',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '31300',
                'description'   => 'Fabricación de hilos y cables aislados',
                'note'          => 'La fabricación de hilos y cables recubiertos de material aislante y otros conductores de electricidad aislados, estén provistos o no de  conectores. Esta clase no incluye  La fabricación de cables de metal no ferrosos sin material aislante  (véase 272012).  Fabricación de cables de metal no aislados o de cables,  aislados pero no aptos para conducir electricidad (véase 2899).',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '31400',
                'description'   => 'Fabricación de acumuladores y de pilas y baterías primarias',
                'note'          => 'Fabricación de acumuladores y de pilas y baterías primarias',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '31500',
                'description'   => 'Fabricación de lámparas eléctricas y equipo de iluminación',
                'note'          => 'Fabricación de lámparas de mesa, escritorio, pie y otro equipo de  iluminación, incluso equipo no eléctrico, fabricación de avisos y carteles iluminados, y otros anuncios similares, partes para lámparas, pantallas. Esta clase no incluye: La fabricación  de equipo de iluminación para motocicletas y vehículos automotores (véase 3190).',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '31900',
                'description'   => 'Fabricación de otros tipos de equipo eléctrico ncp',
                'note'          => 'Fabricación de dispositivos eléctricos de encendido y arranque para  motores, artefactos eléctricos especiales de iluminación y señalización  utilizados en motocicletas y automóviles, faros, lámparas y aparatos accionados por electricidad para dar señales visuales como timbres, alarmas contra robos y alarmas de incendios; limpiaparabrisas, y  desempañadores eléctricos.  Piezas aislantes para aparatos y equipos  eléctricos.  Tubos y juntas de metal forrados de material aislante para la conducción de electricidad.  Máquinas y aparatos eléctricos no  clasificados en otra parte. Esta clase no incluye: La fabricación de accesorios aislantes de caucho para aparatos o  equipos eléctricos véase 2519.  Fabricación de accesorios aislantes de plástico para aparatos o equipos eléctricos (véase 2610).  Fabricación de  envolturas de vidrio para lámparas y aisladores eléctricos de vidrio  (véase 2610).  La fabricación de pistolas de aspersión eléctricas de uso  manual (véase 2919).',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '32100',
                'description'   => 'Fabricación de tubos, válvulas y de otros componentes electrónicos',
                'note'          => 'Fabricación de tubos, válvulas y de otros componentes electrónicos',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '32200',
                'description'   => 'Fabricación  de transmisores de radio y televisión y de aparatos para telefonía y telegrafía con hilos',
                'note'          => 'Fabricación  de transmisores de radio y televisión y de aparatos para telefonía y telegrafía con hilos',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '32300',
                'description'   => 'Fabricación de receptores de radio y televisión, aparatos de grabación y reproducción de sonido, vídeo y productos conexos',
                'note'          => 'Fabricación de receptores de radio y televisión, aparatos de grabación y reproducción de sonido, vídeo y productos conexos',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '33110',
                'description'   => 'Fabricación de equipo médico y quirúrgico y de aparatos ortopédicos',
                'note'          => 'Fabricación de artículos y aparatos protésicos, muletas fajas, bragueros  quirúrgicos, corses, fajas medicoquirúrgicas; zapatos ortopédicos,  férulas y otros artículos y materiales para fracturas.  Fabricación de dientes postizos y otras partes artificiales del cuerpo humano.  La  fabricación de muebles para medicina, cirugía, odontología, veterinaria, tales como mesa de operaciones, camillas, camas de hospital con  dispositivos mecánicos, sillones de odontología, sillones de peluquería que puedan realizar movimientos de elevación e inclinación.  también incluye el mantenimiento y la reparación de instrumentos médicos,  cuando se realizan en la misma unidad de producción. Esta clase no incluye: La fabricación de cementos utilizados en odontología (véase 2423).  La  fabricación de corsés y fajas ordinarias (véase 18101).  La fabricación de  dentaduras postizas por odontólogos y de anteojos por optómetras (véase 8512).',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '33120',
                'description'   => 'Fabricación de instrumentos y aparatos para medir, verificar, ensayar, navegar y otros fines, excepto el equipo de control de procesos industriales',
                'note'          => 'Fabricación de instrumentos y aparatos para medir, verificar, ensayar, navegar y otros fines, excepto el equipo de control de procesos industriales',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '33130',
                'description'   => 'Fabricación de equipo de control de procesos industriales',
                'note'          => 'Fabricación de equipo de control de procesos industriales',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '33200',
                'description'   => 'Fabricación de instrumentos de óptica y equipo fotográfico',
                'note'          => 'Fabricación de instrumentos de óptica y equipo fotográfico',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '33300',
                'description'   => 'Fabricación de relojes',
                'note'          => 'Fabricación de relojes',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '34100',
                'description'   => 'Fabricación de vehículos automotores',
                'note'          => 'Fabricación de vehículos automotores',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '34200',
                'description'   => 'Fabricación de carrocerías para vehículos automotores; fabricación de remolques y semirremolques',
                'note'          => 'Fabricación de carrocerías diseñadas para ser montadas sobre chasis  de vehículos automotores; carrocerías para vehículos sin chasis y carrocerías de monocasco; carrocerías para vehículos de transporte de personas, camiones y vehículos de uso especial; carrocerías metálicas, de madera, plástico o combinaciones de estos u otros materiales. Fabricación de contenedores, especialmente diseñados y equipados para su acarreo por un o más medios de transporte. Fabricación de remolque y semirremolques y sus partes y piezas. Esta subclase no incluye: La fabricación de partes y piezas y accesorios de carrocerías para  vehículos automotores (véase 3430).',
            ],
  
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '34300',
                'description'   => 'Fabricación de partes, piezas y accesorios para vehículos automotores y sus motores',
                'note'          => 'Fabricación de partes, piezas y accesorios en todo tipo de material (madera, corcho, plástico, caucho, metal y/o combinaciones de estos y otros materiales ) para vehículos automotores , y sus motores, incluso para sus carrocerías, tales como frenos, cajas de engranaje, ejes, aros de ruedas, amortiguadores, radiadores, silenciadores, tubos de escape, embragues, volantes, radiadores, silenciadores, tubos de escape,  embragues, volantes, columnas y cajas de dirección y otras partes  y accesorios no clasificados en otras partes, para vehículos automotores y sus motores. Esta subclase no incluye: La fabricación de espejos de vidrio con marco o sin él, incluido los  espejos retrovisores para vehículos (véase 2610). La fabricación de asientos y sillas, tapizadas o no para automotores y aviones (véase 3610)',
            ],
            
            
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '35110',
                'description'   => 'Construcción y reparación de buques',
                'note'          => 'Construcción y reparación de buques',
            ],
    
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '35120',
                'description'   => 'Construcción y reparación de embarcaciones de recreo y deporte',
                'note'          => 'La construcción y reparación embarcaciones o botes de remo o motor, canoas, etc. La construcción de embarcaciones de recreo equipadas con motor dentro o fuera de borda o impulsados por canaletes o remos',
            ],
            
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '35200',
                'description'   => 'Fabricación de locomotoras y de material rodante para ferrocarriles y tranvías',
                'note'          => 'Fabricación de locomotoras y de material rodante para ferrocarriles y tranvías',
            ],
            
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '35300',
                'description'   => 'Fabricación de aeronaves y naves espaciales',
                'note'          => 'Fabricación de aeronaves y naves espaciales',
            ],
            
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '35910',
                'description'   => 'Fabricación de motocicletas',
                'note'          => 'La fabricación de aparatos y sus partes eléctricas para motocicletas  (véase 3190). Las fabricación de bicicletas o de sillones de ruedas  motorizados para discapacitados (véase 3592). El mantenimiento y la  reparación de motocicletas (véase 5040)',
            ],
            
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '35920',
                'description'   => 'Fabricación de bicicletas y de sillones de ruedas para inválidos',
                'note'          => 'La fabricación de aparatos no motorizados, velocípedos equipados con una o más ruedas, triciclos de reparto. Fabricación de sillones de ruedas para discapacitados, estén o no motorizados y sean o no propulsados por algún medio mecánico. También la fabricación de partes y piezas de  bicicletas y sillones de ruedas para discapacitados.  Esta clase no incluye: La fabricación de vehículos de ruedas para niños (véase 3694). El mantenimiento y la reparación de bicicletas y de sillones de ruedas  para discapacitados (véase 52609).',
            ],
            
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '35990',
                'description'   => 'Fabricación de otros tipos de equipo de transporte ncp',
                'note'          => 'La fabricación de vehículos de propulsión manual: carretillas, carritos para equipaje, carritos para supermercados, carretoncillos, carros y portacargas de varios tipos, incluso los diseñados especialmente para  determinadas industrias, vehículos de tracción animal. Esta clase no incluye: la fabricación de partes o piezas diferentes a secciones importantes  de estos vehículos, se clasifican , según el material empleado, véase en la división 25 (fabricación de productos de caucho y de plástico) y (véase 2899) si las partes o piezas están fabricadas de metal.',
            ],
            
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '36101',
                'description'   => 'Fabricación de muebles y partes de muebles, principalmente de madera',
                'note'          => 'La fabricación de muebles de madera de todo tipo y para cualquier uso (hogar, oficina, teatro, iglesias, restaurantes, hospitales, aviones automóviles, etc.) y la fabricación de partes de muebles de madera. Esta clase no incluye: La fabricación de tableros de madera celular, armarios y similares empotrados (véase 2022). La fabricación de mobiliario tipo aplique como percheros para ropa y sombreros, no considerados muebles en pie (véase 2029). La fabricación de muebles de hormigón (véase 26959). La fabricación de muebles de cerámica (véase 26919) . la fabricación de sillas de de ruedas para discapacitados, estén o no motorizados (véase 3592).',
            ],
            
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '36102',
                'description'   => 'Fabricación de muebles y partes de muebles, principalmente de metal',
                'note'          => 'La fabricación de muebles de metal de todo tipo y para cualquier uso (hogar, oficina, teatro, iglesias, restaurantes, hospitales, aviones, automóviles, etc.) y la fabricación de partes de muebles metálicos Esta subclase no incluye: La fabricación de muebles para medicina, cirugía, odontología y veterinaria véase 3311).',
            ],
            
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '36103',
                'description'   => 'Fabricación de muebles, excepto los que son principalmente de madera y metálicos',
                'note'          => 'La fabricación de muebles de todo tipo, mimbre, bambú, plástico, cuero, vidrio, etc., iglesias, restaurantes, hospitales, aviones, automóviles, etc. y la fabricación de partes de muebles de estos materiales.',
            ],
            
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '36104',
                'description'   => 'Fabricación de somieres y colchones',
                'note'          => 'La fabricación de diferentes tipos de colchones y somier; colchones con muelles, colchones rellenos o provistos de cualquier material de sustentación; colchones de caucho celular y plástico, sin recubrimiento, etc. y la fabricación  de partes de colchones',
            ],
            
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '36910',
                'description'   => 'Fabricación de joyas y artículos conexos',
                'note'          => 'La fabricación de piedras de calidad industrial y de piedras preciosas y semipreciosas sintéticas y construidas.  Fabricación de joyas de metales preciosos, piedras preciosas o semipreciosas o de una  combinación de estos materiales; la fabricación de artículos de  orfebrería elaborados de metales preciosos vajilla plana o onda,  recipientes de mesa, artículos de tocador, artículos estacionarios de uso  religioso, etc., la fabricación de artículos de uso técnico o de laboratorio  elaborados de metales preciosos; la fabricación de monedas (incluso  monedas de curso legal), otras monedas, medallas y medallones, sean o no de metales preciosos y la fabricación de partes y piezas de joyas de fantasía (véase 3699).',
            ],
            
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '36920',
                'description'   => 'Fabricación de instrumentos de música',
                'note'          => 'La fabricación de instrumentos de música de cuerda, instrumentos de teclado, instrumentos de viento, instrumentos de percusión, silbatos, cuernos de llamadas y otros instrumentos sonoros de boca para llamado o señalización y la fabricación de partes, piezas y accesorios de  instrumentos, incluidos las cuerdas, etc.  La fabricación puede ser en  diferentes materiales. Esta clase no incluye: La fabricación de instrumentos musicales de juguete (véase 3694).',
            ],
            
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '36930',
                'description'   => 'Fabricación de artículos de deporte',
                'note'          => 'La fabricación de artículos y equipo de deporte, equipos de pesca y  camping, etc., la fabricación de bolas y balones duros, blandos e  inflables, raquetas bates, palos de golf , artículos para pesca deportiva artículos para caza, guantes y cubrecabezas para deporte. Esta clase no incluye: La fabricación de prendas deportivas (véase 18103); la fabricación de  calzado deportivo (véase 3694); la fabricación de monturas (véase 1912)',
            ],
            
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '36940',
                'description'   => 'Fabricación de juegos y juguetes',
                'note'          => 'Fabricación de todo tipo de juguetes, de cualquier material, tales como madera, cerámica, plástico, caucho, etc., y la ropa y accesorios para  muñecos, juguetes de montar con rueda, instrumentos musicales de  juguete artículos para juegos de feria, fabricación de juegos  electrónicos, y la fabricación de modelos a escala y modelos recreativos  similares, sean o no susceptibles de accionamiento, rompecabezas de  todo tipo; otros juguetes',
            ],
            
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '36990',
                'description'   => 'Otras industrias manufactureras ncp',
                'note'          => 'Fabricación de lápices, lapiceras, bolígrafos, sellos; cochecitos, cunas portátiles para bebés; sombrillas bastones, látigos, botones, broches de presión, sierres de cremallera; encendedores de cigarrillos, escobas, cepillos almohadillas y rodillos para pintura, escurridores.  Artículos  de uso personal como peines, ganchos para el cabello, pelucas, pestañas postizas; columpios, barracas de tiro al blanco; linóleo y otros  materiales duros para revestir pisos, joyas de fantasía de cualquier  material; fabricación de velas, cirios, flores, frutas y plantas, artificiales, maniquíes para sastres y otros artículos no clasificados en otra parte.  Esta clase no incluye La fabricación de mechas para encendedores (véase 1729):  La  fabricación de piezas de vidrio utilizadas para la elaboración de joyas de fantasía. (Véase 2610).',
            ],
            
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '37100',
                'description'   => 'Reciclamiento de desperdicios y  desechos metálicos',
                'note'          => 'El tratamiento de desechos y desperdicios metálicos y de artículos de metal, usados o no, para su conversión en materias primas secundarias. El producto característico de esta actividad está constituido por  desperdicios y desechos metálicos; no obstante, de hecho esos  desperdicios y desechos forman parte de la producción tradicional de  todas las industrias que fabrican metales, productos metálicos, maquinaria y equipo. Esta clase no incluye: La fabricación de productos acabados a partir de materias primas secundarias (Véase sección D).',
            ],
            
            [    
                'category'      => 'E',
                'heading'       => 'Producción',
                'code'          => '37200',
                'description'   => 'Reciclamiento de desperdicios y  desechos no metálicos',
                'note'          => 'Las mismas actividades que las de la clase 3710.  El proceso de  reciclamiento no debe formar parte del procesamiento del producto para obtener nuevas materias primas ni llevarse a cabo en la unidad  dedicada a tal procesamiento; de ser así, todo el proceso debería  incluirse en la clase correspondiente a dicho procesamiento a dicha unidad Esta clase no incluye: El tratamiento de desechos de comidas, bebidas y tabaco (Véase 15 y 16  respectivamente),  La producción, de productos acabados a partir de materias primas secundarias como el hilado de hilo a partir de  desperdicios de la hilatura, o la fabricación de pulpa a partir de  desechos de papel, o el recauchutado de neumáticos, que se  clasifican con su fabricación (Véase sección D),  La elaboración de torio  y uranio empobrecidos (Véase 2330).',
            ],
            
            
            [    
                'category'      => 'F',
                'heading'       => 'Producción',
                'code'          => '40101',
                'description'   => 'Producción de energía hidráulica',
                'note'          => 'La producción o el suministro de energía hidráulica.',
            ],
            
            [    
                'category'      => 'F',
                'heading'       => 'Producción',
                'code'          => '40102',
                'description'   => 'Producción de energía térmica convencional',
                'note'          => 'La producción de energía eléctrica mediante, turbo vapor y turbo diesel, servicio de suministro de energía térmica.',
            ],
            
            [    
                'category'      => 'F',
                'heading'       => 'Producción',
                'code'          => '40103',
                'description'   => 'Transporte de energía eléctrica',
                'note'          => 'El servicio de transmisión de energía eléctrica mediante líneas y  subestaciones de transmisión.',
            ],
            
            [    
                'category'      => 'F',
                'heading'       => 'Producción',
                'code'          => '40104',
                'description'   => 'Distribución de energía eléctrica',
                'note'          => 'El suministro de energía eléctrica mediante subestaciones de reducción, líneas de transmisión, redes distribución primaria y secundaria.',
            ],
            
            [    
                'category'      => 'F',
                'heading'       => 'Producción',
                'code'          => '40109',
                'description'   => 'Producción de energía eléctrica ncp',
                'note'          => 'La producción de energía eléctrica mediante fuentes de energía solar, biomasa, eólica, geotérmica.',
            ],
            
            [    
                'category'      => 'F',
                'heading'       => 'Producción',
                'code'          => '40201',
                'description'   => 'Producción de gas',
                'note'          => 'La fabricación de gas combustible gaseoso, producción de gas mediante la destilación del carbón o mediante mezclas de gas natural, gas de  hulla, gas de agua, gas pobre y gases análogos distintos de los gases de  petróleo. Esta subclase no incluye El transporte por gasoductos (Véase 6030).',
            ],
            
            [    
                'category'      => 'F',
                'heading'       => 'Producción',
                'code'          => '40202',
                'description'   => 'Distribución de combustibles gaseosos',
                'note'          => 'La distribución de combustible gaseoso por conducciones, gas  manufacturado y servicios de distribución de combustible gaseoso por conducto urbano. Esta subclase no incluye La explotación de coquerías (Véase 2310).  La fabricación de refinos del petróleo (Véase 2320).  La producción de gases de industriales  (Véase 2410) El transporte de gases por tuberías por cuenta de terceros (Véase 6030).',
            ],
            
            [    
                'category'      => 'F',
                'heading'       => 'Producción',
                'code'          => '40300',
                'description'   => 'Suministro de vapor y agua caliente',
                'note'          => 'La producción , captación y distribución de vapor y agua caliente para proporcionar calefacción, energía u otros suministros,  También la producción y distribución de agua fría o hielo con fines de refrigeración.',
            ],
            
            [    
                'category'      => 'F',
                'heading'       => 'Producción',
                'code'          => '41001',
                'description'   => 'Captación, depuración y distribución de agua de fuentes subterráneas',
                'note'          => 'Agua natural, agua potable, agua no potable y servicios de distribución  agua de fuentes subterráneas.',
            ],
            
            [    
                'category'      => 'F',
                'heading'       => 'Producción',
                'code'          => '41002',
                'description'   => 'Captación, depuración y distribución de agua de fuentes superficiales',
                'note'          => 'Agua natural, agua potable, agua no potable y servicios de  distribución, de agua de fuentes superficiales. Estas subclases no incluyen: La utilización de sistemas de riego para explotaciones agrarias (Véase 0141). El tratamiento de aguas residuales (Véase 9000).',
            ],
    
            [    
                'category'      => 'G',
                'heading'       => 'Producción',
                'code'          => '45101',
                'description'   => 'Demolición y derribo de edificios y otras estructuras',
                'note'          => 'La demolición y el derribo de edificios y otras estructuras.  La limpieza de escombros.  La excavación de zanjas y la venta de  materiales procedentes de estructura demolidas.',
            ],
            
            [    
                'category'      => 'G',
                'heading'       => 'Producción',
                'code'          => '45102',
                'description'   => 'Perforación, excavación, pruebas, sondeo y muestreo de terreno con fines de construcción',
                'note'          => 'Las perforaciones, terraplenamiento, nivelación, movimiento de tierra excavación, pruebas, sondeo y muestreos con fines de construcción o  para estudios geofísicos o geológicos u otros similares, las  perforaciones horizontales para el paso de cables o cañerías de  drenaje, etc. Esta subclase no incluye La perforación de pozos de producción de petróleo, y gas natural  (Véase 1120).  La excavación de posos de minas (Véase 54209).  La  perforación de pozos hidráulicos (Véase 45209). La prospección de  yacimientos de petróleo y gas natural y los estudios físicos, geológicos o sismográficos. (Véase 7421).',
            ],
            
            [    
                'category'      => 'G',
                'heading'       => 'Producción',
                'code'          => '45109',
                'description'   => 'Movimiento de suelos y preparación de terreno relleno y desmonte para obras ncp',
                'note'          => 'Drenaje, remoción de rocas, excavación de zanjas para servicios públicos para alcantarillado urbano y para construcciones diversas, movimiento de tierras para hacer terraplenes o desmontes previos a la construcción de  vías, carreteras, autopistas, ferrocarriles, etc.',
            ],
            
            [    
                'category'      => 'G',
                'heading'       => 'Producción',
                'code'          => '45201',
                'description'   => 'Construcción, reforma y reparación de edificios',
                'note'          => 'La construcción reforma y reparación de una y dos viviendas construcción de inmuebles de varias viviendas, almacenes y edificios industriales, agrarios, comerciales y de servicios, incluidos los aparcamientos subterráneos o no subterráneos. Esta subclase no incluye: La construcción de estadios, piscinas gimnasios pistas de tenis, campos de golf y otras instalaciones, deportivas excluidos sus edificios. (véase  45209). Las instalaciones de edificios y sus obras (véase 4530).',
            ],
            
            [    
                'category'      => 'G',
                'heading'       => 'Producción',
                'code'          => '45202',
                'description'   => 'Construcción, reforma y reparación de obras de infraestructura de transporte',
                'note'          => 'Construcción reforma y reparación de obras de infraestructura de transporte ncp, excepto los edificios para tráfico y comunicaciones,  estaciones, terminales y edificios asociados. La cimentación, pavimentación para carreteras y calles, autopistas puentes, túneles vías férreas y pistas de aterrizaje, la señalización mediante pintura, etc.',
            ],
            
            [    
                'category'      => 'G',
                'heading'       => 'Producción',
                'code'          => '45209',
                'description'   => 'Construcción de obras de ingeniería civil ncp',
                'note'          => 'Construcciones de conducciones de petróleo, gas, agua y otras conducciones Construcciones de tendidos eléctricos de superficie y subterráneos de larga distancia; líneas de telecomunicaciones de superficie y subterráneas; redes locales o urbanas de agua y saneamiento, redes locales o urbanas de gas, tendidos eléctricos locales o urbanos de superficie y subterráneos; líneas de telecomunicaciones locales o urbanas de superficie o subterráneas; construcciones generales de centrales eléctricas y de construcción para la industria, minería, construcción de estructuras deportivas; piscinas y otras instalaciones deportivas, recreativas; construcción de diques, presas, canales, acequias y acueductos, esclusas, compuertas y otras estructuras hidromecánicas; trabajo de dragado y otras obras de hidráulica, montaje de andamios, cimentación incluida la instalación de pilotos, perforación de pozos de agua, hormigón armado, montaje de piezas de acero para la construcción de inmuebles y de otras estructuras. Construcción de cubiertas de tejados, colocación de vierteaguas y canalones, trabajos de impermeabilización  y otros trabajos especializados. Esta subclase no incluye: Las actividades de planificación y diseño paisajísticos, de empradizar y enjardinar y de cuidar prados, jardines y árboles (véase 0140). Las  actividades de construcción directamente relacionadas con la extracción  de petróleo y de gas natural (véase 1120), la erección de estructuras o edificios prefabricados cuyas partes sean de producción propia, se  incluye en la parte  pertinente de industria manufacturera, según el tipo de material utilizado,  excepto cuando dicho material sea el hormigón,  en cuyo caso se incluye en la clase. La erección de estructuras metálicas  con partes de producción propia (véase 2811). El acondicionamiento  y la terminación (o acabado) de edificios  (véase 4530-4540) respectivamente. Las actividades de arquitectura e ingeniería (véase 7421). La dirección  de las obras de construcción (véase 7421).',
            ],
            
            [    
                'category'      => 'G',
                'heading'       => 'Producción',
                'code'          => '45301',
                'description'   => 'Instalación de ascensores, montacargas y escaleras mecánicas',
                'note'          => 'Instalación de ascensores y montacargas y escaleras mecánicas',
            ],
            
            [    
                'category'      => 'G',
                'heading'       => 'Producción',
                'code'          => '45302',
                'description'   => 'Instalaciones y mantenimiento eléctrico y electrónicos',
                'note'          => 'La instalación eléctrica en edificios residenciales y no residenciales,  instalación eléctrica para otros proyectos de construcción, cables y   material eléctrico, sistemas de alarma antirrobos, alarma contra incendios, instalaciones de antenas para viviendas, de calefacciones y otros equipos  eléctricos para inmuebles, pararrayos de sistemas de iluminación y señalización eléctrica para carreteras, aeropuertos y otros trabajos de instalación eléctrica.',
            ],
            
            [    
                'category'      => 'G',
                'heading'       => 'Producción',
                'code'          => '45303',
                'description'   => 'Instalaciones de sistemas de acondicionamiento de ambientes',
                'note'          => 'La instalación en edificios y otras partes de construcción de aparatos y  conducciones de calefacción central, ventilación, aire acondicionado, etc.',
            ],
            
            [    
                'category'      => 'G',
                'heading'       => 'Producción',
                'code'          => '45304',
                'description'   => 'Instalación de aislamiento térmico, acústico, hídrico y antivibratorio',
                'note'          => 'La instalación en edificios y otras obras de construcción de aislamiento  térmico, acústico, hídrico y antivibratorio, el aislamiento de las  canalizaciones de calefacción y refrigeración. Esta subclase no incluye: La reparación y mantenimiento de ascensores, montacargas y escaleras mecánicas (véase 2922).',
            ],
            
            [    
                'category'      => 'G',
                'heading'       => 'Producción',
                'code'          => '45305',
                'description'   => 'Instalaciones de estaciones de telecomunicaciones y de radar',
                'note'          => 'Instalaciones de estaciones de telecomunicaciones y de radar',
            ],
            
            [    
                'category'      => 'G',
                'heading'       => 'Producción',
                'code'          => '45306',
                'description'   => 'Instalaciones de plomería, desagües, gas, agua, sanitarios, con sus artefactos conexos',
                'note'          => 'El tendido de cañerías de agua y de desagüe, calderas, instalación de gas, instalación de cercas y rejillas.',
            ],
            
            [    
                'category'      => 'G',
                'heading'       => 'Producción',
                'code'          => '45307',
                'description'   => 'Reparaciones relacionadas con la instalación y acondicionamiento de edificios y obras de ingeniería civil',
                'note'          => 'Las reparaciones relacionadas con las actividades de instalación y  acondicionamiento de edificios y obras de ingeniería civil anteriormente detalladas.',
            ],
            
            [    
                'category'      => 'G',
                'heading'       => 'Producción',
                'code'          => '45401',
                'description'   => 'Instalaciones de carpintería, herrería  de obra artística',
                'note'          => 'Instalación de puertas y ventanas, carpintería metálica y no metálica, etc.',
            ],
            
            [    
                'category'      => 'G',
                'heading'       => 'Producción',
                'code'          => '45402',
                'description'   => 'Trabajos de revestimiento, pulimento de paredes y pisos',
                'note'          => 'Los trabajos de revocado, solado de suelos y paredes exteriores e interiores, colocación de pavimentos flexibles (moquetas, linóleo) pavimentación y revestimiento de suelos (parqué y similares). Revestimiento de paredes incluido el empapelado, trabajo de decoración de interior. Revestimiento de cerámica, terrazo, mármol, granito, pizarra y otras piedras para paredes de suelo, tanto de interior como exterior.',
            ],
            
            [    
                'category'      => 'G',
                'heading'       => 'Producción',
                'code'          => '45403',
                'description'   => 'Colocación de vidrios y cristales en obra',
                'note'          => 'La instalación y revestimiento de vidrio, espejos y otros artículos de vidrio, etc. Esta subclase no incluye: La instalación de ventanas (véase 4501), placas solares (véase 45304) y la colocación de papeles pintados (véase 45402)',
            ],
            
            [    
                'category'      => 'G',
                'heading'       => 'Producción',
                'code'          => '45404',
                'description'   => 'Pintura y trabajos de decoración',
                'note'          => 'Pintado de interiores y exteriores de edificios, otros trabajos de pintado, acabado de edificios y obras.',
            ],
            
            [    
                'category'      => 'G',
                'heading'       => 'Producción',
                'code'          => '45405',
                'description'   => 'Trabajos de reparación relacionadas con la terminación de edificios',
                'note'          => 'Los trabajos de reparación relacionadas con la terminación de edificios detallados anteriormente.',
            ],
            
            [    
                'category'      => 'G',
                'heading'       => 'Producción',
                'code'          => '45409',
                'description'   => 'Otros trabajos de terminación de edificios ncp',
                'note'          => 'Trabajos de ornamentación, limpieza exterior de edificios con vapor, chorro de arena u otros métodos, otras obras de acabado de edificios, incluida la recogida de escombros. Esta subclase no incluye: La limpieza interior de edificios y obras (véase 7493).  La construcción de piscinas deportivas (véase 45209).',
            ],
            
            [    
                'category'      => 'G',
                'heading'       => 'Producción',
                'code'          => '45500',
                'description'   => 'Alquiler de equipo de construcción y demolición dotado de operarios',
                'note'          => 'El alquiler de maquinaria y equipo de construcción, incluso de camiones  grúa dotados de operarios. Esta clase no incluye: El alquiler de equipo de construcción o demolición sin operario (véase 7122)',
            ],
        
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '50101',
                'description'   => 'Venta de vehículos automotores, nuevos',
                'note'          => 'La venta por mayor o al por menor de vehículos automotores de pasajeros  (camiones, remolques, semiremolques, microbuses, autobuses, taxis,  ambulancias, jeep, lands-robert, cabezas de tractores). Venta de vehículos automotores, usados de uso especial (ambulancias, casas rodantes, etc.) y otros vehículos automotores de pasajeros con mecanismos de conducción semejantes. Esta subclase no incluye: La venta de tractores agrícolas (véase 5150)',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '50102',
                'description'   => 'Venta de vehículos automotores, usados',
                'note'          => 'La venta al por mayor o al por menor de vehículos usados de pasajeros usados (camiones, remolques, semiremolques, microbuses, autobuses, taxis, ambulancias, jeep, lands-robert, cabezas de tractores). Venta de  vehículos de uso especial  (ambulancias, casas rodantes, etc.) y otros vehículos automotores de pasajeros con mecanismos de conducción semejantes usados.',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '50201',
                'description'   => 'Mantenimiento y reparación del motor; mecánica integral',
                'note'          => 'El servicio de mantenimiento y reparación de vehículos de motor, control de estabilización de vehículos de motor, reparación de amortiguadores, otros servicios relacionados con el motor.',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '50202',
                'description'   => 'Lavado de automotores automático y manual',
                'note'          => 'Lavado de automóviles y servicios similares, fumigado, lustrado y otros  servicios conexos.',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '50203',
                'description'   => 'Reparación de cámaras de cubiertas',
                'note'          => 'El servicio de reparación de neumáticos, alimentación de dirección, y balance de ruedas, otros servicios de reparación de cubiertas.',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '50204',
                'description'   => 'Tapizado y retapizado',
                'note'          => 'El tapizado y retapizado de asientos, cobertores y de otros automotores',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '50205',
                'description'   => 'Reparaciones eléctricas, del tablero e instrumental',
                'note'          => 'Las reparaciones eléctricas, del tablero e instrumental, reparación y recarga  de baterías, instalación y reparación de alarmas, radios, de sistemas de climatización de automotores, otros servicios de instalación y reparación del sistema eléctrico de vehículos de motor.',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '50206',
                'description'   => 'Reparación, colocación y pintado de carrocerías; guardabarros y protecciones exteriores',
                'note'          => 'La reparación, colocación y pintado de carrocerías, reparación de parabrisas,  lunetas y ventanillas, de cerraduras, radio sistemas de aire acondicionado, reparación y colocación de guardabarros, colocación de protecciones, exteriores y parachoques, etc.',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '50209',
                'description'   => 'Mantenimiento y reparación de vehículos ncp',
                'note'          => 'Los servicios de reparación de caños de escape, mantenimiento y reparación de frenos, servicios de cambio de aceite de filtros, servicios de grúa para automotores, servicios de ayuda en carretera, etc.',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '50300',
                'description'   => 'Venta de partes, piezas y accesorios de vehículos automotores',
                'note'          => 'Venta al por mayor y menor de todo tipo de partes de piezas y accesorios para vehículos automotores realizada independientemente de la venta de  los propios vehículos.',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '50401',
                'description'   => 'Venta de motocicletas y de sus partes, piezas y accesorios',
                'note'          => 'La venta al por mayor y menor de motocicletas, incluido los ciclomotores, repuestos y accesorios de motocicletas de todo tipo. ',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '50402',
                'description'   => 'Mantenimiento y reparación de motocicletas',
                'note'          => 'Mantenimiento y reparación de motocicletas Esta subclase no incluye: El mantenimiento y reparación de bicicletas (véase 52609).',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '50501',
                'description'   => 'Venta al por menor de combustible para automotores',
                'note'          => 'La venta por menor de combustibles (carburantes, gasolina, gas licuado del petróleo) para vehículos automotores y motocicletas (en estaciones de  servicio, etc.). Si la principal actividad es la venta de combustible, tales  productos deben incluirse en esta clase.  Esta subclase  no incluye: La venta al por mayor de carburantes (véase 51411), La venta al por menor de gas licuado de petróleo para usos de cocina o para calefacción (véase 5239).',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '50502',
                'description'   => 'Venta al por menor de lubricantes, grasas y refrigerantes para automotores',
                'note'          => 'La venta al por menor de lubricantes, refrigerantes y productos de limpieza y de todo tipo para vehículos automotores o incluso para otros usos.  Esta subclase no incluye: La venta al por mayor de carburantes (véase 51411). La venta al por menor de gas licuado de petróleo para usos de cocina o para calefacción.  (Véase 5239).',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '51101',
                'description'   => 'Venta al por mayor de intermediarios en comisión o consignación de productos agrícolas y pecuarios',
                'note'          => 'Venta al por mayor de intermediarios en comisión o consignación de productos agrícolas y pecuarios',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '51102',
                'description'   => 'Venta al por mayor de intermediarios en comisión o consignación de café',
                'note'          => 'Venta al por mayor de intermediarios en comisión o consignación de café',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '51103',
                'description'   => 'Venta al por mayor de intermediarios en comisión o consignación de alimentos, bebidas y tabaco',
                'note'          => 'Venta al por mayor de intermediarios en comisión o consignación de alimentos, bebidas y tabaco',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '51104',
                'description'   => 'Venta al por mayor de intermediarios en comisión o consignación de productos textiles, prendas de vestir, calzado excepto el ortopédico,  artículos de marroquinería, paraguas y similares y productos d',
                'note'          => 'Venta al por mayor de intermediarios en comisión o consignación de productos textiles, prendas de vestir, calzado excepto el ortopédico,  artículos de marroquinería, paraguas y similares y productos de cuero ncp',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '51105',
                'description'   => 'Venta al por mayor de intermediarios en comisión o consignación de  madera y materiales para la construcción',
                'note'          => 'Venta al por mayor de intermediarios en comisión o consignación de  madera y materiales para la construcción',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '51106',
                'description'   => 'Venta al por mayor de intermediarios en comisión o consignación de productos farmacéuticos, medicinales y cosméticos',
                'note'          => 'Venta al por mayor de intermediarios en comisión o consignación de productos farmacéuticos, medicinales y cosméticos',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '51107',
                'description'   => 'Venta al por mayor de intermediarios en comisión o consignación de  maquinaria, equipo profesional, industrial y comercial',
                'note'          => 'Venta al por mayor de intermediarios en comisión o consignación de  maquinaria, equipo profesional industrial y comercial',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '51108',
                'description'   => 'Venta al por mayor de intermediarios en comisión o consignación de papel, cartón, libros, revistas, diarios, materiales de embalaje y artículos de librería',
                'note'          => 'Venta al por mayor de intermediarios en comisión o consignación de papel, cartón, libros, revistas, diarios, materiales de embalaje y artículos de librería',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '51109',
                'description'   => 'Venta al por mayor de intermediarios en comisión o consignación de  mercaderías ncp',
                'note'          => 'Las actividades de comisionistas, corredores de productos básicos,  subastados y otros mayoristas que comercian en nombre y por cuenta de terceros y que por lo general, ponen en contacto a vendedores y compradores o realizan transacciones comerciales en nombre de un principal. Estas subclases no incluyen: Los vendedores de vehículos automotores y motocicletas en comisión  (véase 50), el comercio al por mayor propio o por cuenta de terceros (véase 5121 a 5190). Las actividades de agentes y corredores especializados en contratos a término ( o en futuros) de productos básicos y de las bolsas de concertación de esos contratos (véase 671). Las actividades de  corredores de seguros (véase 6720). Las actividades de agentes de bienes  raíces (véase 70).',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '51211',
                'description'   => 'Venta al por mayor de materias primas agropecuarias y de la silvicultura',
                'note'          => 'La venta al por mayor de cereales, semillas (distintas de las oleaginosas), semillas oleaginosas, alimentos para el ganado, flores y plantas, tabaco en rama (sin manufacturar), venta la por mayor de otras plantas, de materias primas agrarias, etc. Esta subclase no incluye: El comercio al por mayor de fibras textiles (véase 51492).',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '51212',
                'description'   => 'Venta al por mayor de animales vivos',
                'note'          => 'El comercio al por mayor de ganado vacuno, ovino, porcino, etc.',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '51213',
                'description'   => 'Venta al por mayor de cueros y pieles',
                'note'          => 'El comercio al por mayor de pieles en bruto y curtidas o preparadas para su transformación. Esta subclase no incluye: El comercio al por mayor de artículos de cuero y piel (véase 51314).',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '51221',
                'description'   => 'Venta al por mayor y empaque de frutas, legumbres y hortalizas frescas',
                'note'          => 'La venta al por mayor de frutas, hortalizas y legumbres frescas. Esta subclase no incluye: El comercio al por mayor de estos productos de conserva, secos y  congelados (véase 51229)',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '51222',
                'description'   => 'Venta al por mayor de productos lácteos',
                'note'          => 'Venta la por mayor de productos de leche, productos lácteos (quesos, cuajadas, requesón, cremas de leche, etc.).',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '51223',
                'description'   => 'Venta al por mayor de huevos, aceites y grasas comestibles',
                'note'          => 'La venta la por mayor de huevos, aceites y grasas comestibles de orígen animal y vegetal.',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '51224',
                'description'   => 'Venta al por mayor de carnes rojas, menudencias; productos de granja y embutidos',
                'note'          => 'Venta al por mayor de carnes rojas, menudencias; productos de granja y embutidos. Esta subclase no incluye: La venta al por mayor de carne en conserva (véase 51209).',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '51225',
                'description'   => 'Venta al por mayor de pan, productos de confitería, pastas frescas',
                'note'          => 'Venta la por mayor de pan, productos de confitería, pastas frescas. Esta subclase no incluye: Venta la por mayor de pan, productos de panadería, de confitería, pastas frescas, en los establecimiento donde son elaborados (véase 1541).',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '51226',
                'description'   => 'Venta al por mayor de café, té, cacao y especias',
                'note'          => 'Venta al por mayor de café, té, cacao y especias (canela, clavo de olor, anís, pimienta, etc.)',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '51227',
                'description'   => 'Venta al por mayor de bebidas, cigarrillos y  tabaco',
                'note'          => 'La venta al por mayor de jugos de frutas, agua mineral y otras bebidas no alcohólicas. La venta al por mayor de cerveza, vino, singanis y otras  bebidas alcohólicas. La venta de cigarrillos. Esta subclase no incluye:  El embotellado por cuenta de terceros (véase 74950).',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '51228',
                'description'   => 'Venta al por mayor de azúcar, dulces, chocolates, golosinas  y otros, excepto cigarrillos',
                'note'          => 'Venta al por mayor de azúcar, productos de dulcería, preparados principalmente  de azúcar, frutas, nueces, secas confitadas, gomas de mascar, caramelos, turrones, jaleas, bocadillos, etc.',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '51229',
                'description'   => 'Venta al por mayor de productos alimenticios ncp',
                'note'          => 'La venta al por mayor de frutas, verduras y legumbres secas o en conserva, harinas y productos para panadería, alimentos infantiles y dietéticos. La venta al por mayor de miel, sal y pastas alimenticias, productos  alimenticios para animales domésticos, productos congelados como verduras, carnes pescados, platos precocinados, postres,etc.',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '51311',
                'description'   => 'Venta al por mayor  de productos textiles excepto prendas de vestir',
                'note'          => 'La venta al por mayor de telas, lana para tricotar o hacer punto, materiales  básicos para la fabricación de alfombras, tapices, bordados, etc.',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '51312',
                'description'   => 'Venta al por mayor de confecciones para el hogar',
                'note'          => 'La venta al por mayor de sábanas, manteles, toallas, mantas de viaje,  frazadas, cortinas confeccionadas, colchas, cubrecamas, alfombras, etc.',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '51313',
                'description'   => 'Venta al por mayor de prendas y accesorios de vestir',
                'note'          => 'La venta al por mayor de todo tipo de prendas de vestir (incluso las prendas de vestir de cuero y peletería), para hombres, mujeres y complementos de vestir y de artículos elaborados de piel, prendas deportivas, etc.',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '51314',
                'description'   => 'Venta al por mayor de calzado, excepto el ortopédico, artículos de marroquinería, y similares',
                'note'          => 'La venta al por mayor de calzado de cualquier material y sus partes.',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '51315',
                'description'   => 'Venta al por mayor de artículos de cuero',
                'note'          => 'La venta al por mayor de artículos de viaje (bolsos de mano, carteras) y artículos de talabartería guarnicionería (sillas de montar), artículos  semejantes de cuero natural, artificial o regenerado, etc. Esta subclase no incluye:  La venta la por mayor de calzados ortopédicos (véase 51343). La venta al por mayor de vestir confeccionados de cuero (véase 51313).',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '51321',
                'description'   => 'Venta al por mayor de libros y revistas',
                'note'          => 'La venta al por mayor de libros, revistas Esta subclase no incluye: La venta  libros y revistas usados (véase 52402).',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '51322',
                'description'   => 'Venta al por mayor de periódicos',
                'note'          => 'Venta al por mayor de periódicos',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '51329',
                'description'   => 'Venta al por mayor de papel, cartón, materiales de embalaje y artículos de librería ncp',
                'note'          => 'La venta al por mayor de papel, cartón, materiales de embalaje, útiles de escritorio (bolígrafos, lápices, etc.).',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '51331',
                'description'   => 'Venta al por mayor de muebles, artículos de mimbre y corcho; colchones y somieres',
                'note'          => 'La venta al por mayor de muebles de todo tipo, de cualquier material (madera, mimbre, bambú, metales comunes, vidrio, cuero, plástico, etc.) y para todo uso. La venta al por mayor de colchones de todo tipo (colchones con  muelles y rellenos y provistos de algún material de sustentación o colchones de caucho, etc.)  Esta subclase no incluye:  La venta al por mayor de muebles de piedra, hormigón y cerámica. La venta  al por mayor de muebles para equipo científico, médico y de laboratorio (véase 51343).',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '51332',
                'description'   => 'Venta al por mayor de artículos de iluminación',
                'note'          => 'La venta al por mayor de lámparas de filamento incandescente, incluso faros reflectores sellados, lámparas de rayos ultravioletas e infrarrojos,  lámparas de descarga: fluorescentes, de cátodo caliente y de otro tipo. La venta al por mayor de lámparas de arco, equipo de iluminación incluso equipo no eléctrico, lamparas de destello para fotografía, carteles iluminados, placas indicadoras del nombre iluminadas y anuncios similares. La venta al por mayor de juegos de bombillos para decorar árboles de navidad. Esta subclase no incluye:  La venta al por mayor de equipo de iluminación para motocicletas y vehículos  automotores (véase 5030).',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '51333',
                'description'   => 'Venta al por mayor de artículos de bazar y menaje',
                'note'          => 'La venta al por mayor de cubertería y utensilios domésticos de metal.',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '51334',
                'description'   => 'Venta al por mayor de artefactos para el hogar, eléctricos, a gas, kerosene u otros combustibles',
                'note'          => 'La venta al por mayor de aparatos eléctricos de uso doméstico: mantas eléctricas, refrigeradores y congeladores, lavaplatos, equipo de lavandería, secadoras, aspiradoras, enceradoras de pisos, eliminadoras de desperdicios, licuadoras, exprimidoras, abrelatas y otros aparatos para preparar y elaborar alimentos, etc. La venta la por mayor de afeitadoras eléctricas, cepillos  dentales eléctricos, afiladores de cuchillos, campanas de ventilación y de absorción de humos, etc. La venta al por mayor de calentadores de agua,  aparatos termoeléctricos de peluquería (secadores, cepillos y rizadores), ventiladores de uso domestico, aparatos de cocina (hornos corrientes y de microondas, cocinillas eléctricas, planchas de cocinar, tostadoras, cafeteras, teteras, sartenes, asadores, parrillas, etc.) La venta al por mayor de  aparatos no eléctricos de uso doméstico (cocinas, cocinillas, parrillas, etc.).  Esta subclase no incluye: La venta al por mayor de aparatos de uso industrial y comercial.  (Véase 51502).',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '51335',
                'description'   => 'Venta al por mayor de instrumentos musicales',
                'note'          => 'La venta al por mayor de instrumentos de cuerda, instrumentos de teclado instrumentos de viento (bronce, madera, etc.), instrumentos de percusión.  También incluye partes piezas accesorios de instrumentos. La venta al por mayor de receptores de radio y televisión, aparatos de grabación y  reproducción de sonido y vídeo (también micrófonos, altavoces, auriculares, audífonos, amplificadores y equipos de amplificación de sonidos).  La venta al por mayor de partes y piezas de receptores de radio y televisión, etc. La venta al por mayor de aparatos de reproducción y grabación de señales de vídeo. La venta al por mayor de grabadores de casetes, etc. La venta al por mayor de contestadores telefónicos, giradiscos, tocadiscos, etc.',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '51336',
                'description'   => 'Venta al por mayor de equipos de sonido, casetes de audio y video y discos',
                'note'          => 'La venta al por mayor de receptores de radio y televisión, aparatos de grabación y reproducción de sonido y vídeo (también micrófonos, altavoces, auriculares, audífonos, amplificadores, y equipos de amplificación de sonidos) La venta al por mayor de partes y piezas de receptores de radio y televisión, etc. La venta al por mayor de aparatos de grabación y de reproducción de señales de vídeo. La venta al por mayor de contestadores telefónicos,  giradiscos, tocadiscos.',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '51339',
                'description'   => 'Venta al por mayor de artículos para el hogar ncp',
                'note'          => 'La venta al por mayor de otros productos no clasificados anteriormente.',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '51341',
                'description'   => 'Venta al por mayor de productos farmacéuticos y medicinales',
                'note'          => 'La venta al por mayor de preparados farmaceúticos para uso médico de alcance del público en general y de distribución reglamentada por las  autoridades sanitarias (ampollas, tabletas, cápsulas, ungüentos, polvos y soluciones). La venta la por ,mayor de apósitos quirúrgicos, guatas medicinales vendajes para fracturas, catgut y otros productos para suturar, etc. Esta subclase no incluye: El envase y empaque de productos farmaceúticos por cuenta propia .',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '51342',
                'description'   => 'Venta al por mayor de productos de perfumería y de belleza',
                'note'          => 'La venta al por mayor de artículos de higiene personal, jabón, champús, lacas preparados para ondular y alisar el cabello, preparados para afeitarse,  perfumes, aguas de colonia, aguas de tocador, preparados para manicuro y  pedicuro, pastas dentales, cosméticos, sales de baño, protector solares, etc.Esta subclase no incluye: La venta al por mayor de artículos de limpieza (véase 51391).',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '51343',
                'description'   => 'Venta al por mayor de instrumental médico y odontológico, y otros artículos ortopédicos',
                'note'          => 'La venta al por mayor de aparatos de uso práctico y científico en medicina,  cirugía, odontología, veterinaria. También aparatos electrónicos para  diagnósticos: electrocardiográficos, tornos de dentista, jeringas con o sin  aguja, instrumentos de oftalmología, instrumentos ópticos tales como: espejos, reflectores, endoscopios, etc.  Aparatos basados en el uso de rayos  X y en la emisión de rayos alfa, beta, gama, destinados o no a la medicina o la  veterinaria, tubos de rayos X, generadores de alta tensión, paneles, mesas y pantallas de control, esterilizadores. Aparatos de mecanoterapía, máquinas masaje, aparatos para pruebas psicológicas, aparatos de ozonoterapía,  oxinoterapía y respiración artificial, máscaras de gas, excepto la simple  protección. Aparatos ortopédicos, muletas, fajas quirúrgicas, corsés, zapatos ortopédicos, féculas y otros materiales para fracturas, aparatos que se llevan  puestos, se portan o se implantan (audífonos y marcapasos). Dientes postizos, extremidades artificiales del cuerpo humano. Muebles para medicina, cirugía, odontología y veterinaria, tales como mesas de operaciones,  Es subclase no incluye La venta de productos apósitos quirúrgicos, guatas medicinales, vendaje para fracturas, catgut y otros preparados para suturas (Véase 51341 y la de cementos utilizados en odontología.',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '51344',
                'description'   => 'Venta al por mayor de productos veterinarios',
                'note'          => 'La venta al por mayor de  medicamentos veterinarios  y artículos para uso   veterinario, incluye también el envase y empaque de dichos productos,  cuando se realiza por cuenta propia.',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '51351',
                'description'   => 'Venta al por mayor de artículos de óptica',
                'note'          => 'La venta al por mayor de elementos ópticos de vidrio y de cualquier otro material, prismas, y lentes, espejos con configuración de elementos ópticos, filtros de color, elementos polarizadores, lentes optálmicas, lentes de  contacto, fibras ópticas; monturas de anteojos, monturas con lentes, gafas de sol, gafas protectoras y gafas correctoras.     Instrumentos  ópticos tales  como microscopios para microfotografía y microproyección.  Miras telescópicas  para armas, máquinas y aparatos, láseres, excepto diodos de láser, lupas y cristales de aumento para uso manual, espejos de vidrio, mirillas de puerta, etc.',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '51352',
                'description'   => 'Venta al por mayor de artículos de fotografía',
                'note'          => 'La venta al por mayor de cámaras fotográficas y cinematográficas, cámaras de todo tipo para toda clase de usos, incluso cámaras utilizadas para preparar planchas de fotograbado para fotografía subacuática o aérea, para producir microfilmes o microfichas, cámaras de filmación con banda sonora.   Proyectores y ampliadores y reductores de imagen, proyectores  cinematográficos, proyectores con dispositivos, reproductores de sonido.  Aparatos con lámparas de descarga, aparatos con lámparas de destello  excepto las bombillas de magnesio.  Aparatos y equipo para laboratorio fotográfico incluso cinematografía.  Aparatos para proyección del diseño de circuitos sobre materiales semiconductores sensibilizados, pantallas de proyección. Esta subclase no incluye: La venta al por mayor de productos fotoquímicos (véase 51491).',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '51353',
                'description'   => 'Venta al por mayor de artículos de relojería',
                'note'          => 'La venta al por mayor de relojes de toda clase, cajas para relojes incluso de metales preciosos y otros aparatos para medir los intervalos de tiempo. Correas cintas y pulseras de metal, incluso metales preciosos para relojes Piezas para relojes de todo tipo tales como muelles, rubíes, esteras,   chapas, puentes y otras piezas.',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '51354',
                'description'   => 'Venta al por mayor de artículos de joyería y fantasías',
                'note'          => 'La venta al por mayor joyas de partes labradas, piedras preciosas y semipreciosas, diamantes piedras de calidad industrial, metales preciosos, artículos de orfebrería elaborados con metales preciosos entre ellos cubiertos vajilla, recipientes de mesa, artículos religiosos, etc. Partes y piezas de joyas o de artículos de orfebrería y monedas, etc., la venta  al por mayor de joyas de fantasía.  Esta subclase no incluye:  La venta al por mayor de empastes dentales y de materiales de sutura,  esterilizados (véase 51341).',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '51391',
                'description'   => 'Venta al por mayor de materiales y productos de limpieza',
                'note'          => 'La venta al por mayor de jabón en barras, pastillas, panes, líquidos, pastas, o en otras formas, betunes y cremas para el calzado, bruñidores y cremas para pisos, carrocerías, vidrio o metal, pastas y polvos abrasivos y  productos similares en formas de papel, fieltro, guata, telas no tejidas, plásticos celulares o caucho celular, impregnados, revestido o recubiertos con bruñidores o cremas, pastas o polvos abrasivos, ceras preparados para  perfumar o desodorizar ambientes. Esta subclase no incluye: La venta al por mayor de compuestos químicos definidos químicamente  (Véase 51491). El envase de productos de limpieza realizados a cambio de una  retribución o contrata  (véase 7495).',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '51392',
                'description'   => 'Venta al por mayor de juguetes y artículos de cotillón',
                'note'          => 'La venta al por mayor de diversos tipos de juguetes (muñecos que representan  a personas u otras criaturas de diferentes materiales y ropa y accesorios para muñecos), juguetes de montar con ruedas, triciclos, artículos para juegos de feria, de mesa o de salón, incluso mesas de pinpón, de pinball, mesas de billar, mesas especiales para juegos de casino, y equipo automático para  juego, juegos electrónicos, juegos de vídeo, juegos de damas rompecabezas de todo tipo, otros juguetes. También incluye la venta de cotillón. Esta subclase no incluye: La venta al por mayor de las bicicletas y rodados (véase 51394).',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '51393',
                'description'   => 'Venta al por mayor de artículos de esparcimiento y deportes',
                'note'          => 'La venta al por mayor de artículos de equipo para gimnasio, atletismo, juegos al aire libre, raquetas, embarcaciones deportivas, artículos para acampada, tiro con sus armas y municiones, equipos de pesca, caza, natación de lona o plástico,etc.',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '51394',
                'description'   => 'Venta al por mayor de bicicletas y rodados similares',
                'note'          => 'La venta al por mayor de bicicletas no motorizadas, velocípedos equipados con una o más ruedas, triciclos de reparto, bicicletas con sidecar, tándems, bicicletas de carrera y bicicletas para niños. Sillones de ruedas para inválidos Esta subclase no incluye: La venta al por mayor de velocípedos con motor auxiliar y la venta de sidecares para bicicletas (véase 5040). La venta al por menor de vehículos de ruedas para niños (véase 51392).',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '51395',
                'description'   => 'Venta al por mayor de papeles para pared, revestimientos y alfombras para pisos, y artículos similares para la decoración',
                'note'          => 'La venta al por mayor de artículos para empapelados de paredes y otros revestimiento. La venta al por mayor de linóleo de pisos, alfombras y otros artículos similares de decoración.',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '51396',
                'description'   => 'Venta al por mayor de artículos artesanales',
                'note'          => 'La venta al por mayor de artículos generalmente procesados a mano de diferentes materiales: metal, madera, etc., tales como (vestimenta, artículos de uso doméstico, adornos, etc.).',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '51399',
                'description'   => 'Venta al por mayor de artículos de uso doméstico y/o personal ncp',
                'note'          => 'La venta al por mayor cuadros y marcos que no sean obra de arte o de colección, sahumerios, parrillas, flores y plantas artificiales, etc.',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '51411',
                'description'   => 'Venta al por mayor de combustibles y lubricantes para automotores',
                'note'          => 'La venta al por mayor de combustibles sólidos, líquidos y gaseosos;  lubricantes y productos conexos.',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '51412',
                'description'   => 'Venta al por mayor de combustibles y lubricantes excepto para automotores: gas en garrafas, leña y carbón',
                'note'          => 'La venta al por mayor de combustibles y lubricantes, excepto para automotores, gas en garrafas, leña y carbón.',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '51420',
                'description'   => 'Venta al por mayor de metales y minerales metalíferos',
                'note'          => 'La venta al por mayor de minerales de metales férreos, metales no férreos, hierro y acero en formas primarias, metales preciosos y otros metales no  ferrosos. Esta clase no incluye: La venta al por mayor de chatarra y productos de desecho metálicos (véase 51493).',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '51431',
                'description'   => 'Venta al por mayor de materiales de construcción',
                'note'          => 'La venta al por mayor de cemento, piedra, arcilla, arena, productos refractarios, productos metálicos estructurales y sus partes, prefabricados para edificaciones, etc. También incluye sanitarios: bañeras, lavados,  inodoras yotros sanitarios.  Esta clase no incluye: La venta al por mayor de armarios de cocina, roperos y otros muebles  empotrados o no (véase 51331).',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '51432',
                'description'   => 'Venta al por mayor de madera sin desbastar y productos primarios',
                'note'          => 'La venta al por mayor de productos de madera utilizados principalmente para la industria de la construcción, tales como: maderaje, vigas, bloques, listones, ensamblados en tableros para pisos de parqué, cabios, jacalbones  y productos similares que se utilizan con fines estructurales y en el sustentamiento de andamios, puertas, ventanas, contraventanas. Ventas por sustentamiento de andamios, puertas, ventanas, contraventanas.  Esta subclase no incluye: La venta al por mayor de armarios de cocina, roperos y otros muebles empotrados o no (véase 51331).',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '51433',
                'description'   => 'Venta al por mayor de artículos de ferretería, fontanería y calefacción',
                'note'          => 'La venta al por mayor de artículos de ferretería, como: herramientas de mano  de todo tipo utilizadas en la agricultura, ganadería, carpintería, en  ensambladura mecánica, enchapisteria y otras industrias. Sierras y hojas para sierras, incluso sierras circulares y de cadena, cuchillas, sisallas, bricas, buzones, matrices, fresas, puntas, placas, barras, herramientas de herrería, machos de forja, yunques, tornos de banco, abrazaderas, lámparas de soldar, cerraduras, candados, pasadores, llaves y otros accesorios y  herramientas similares para diferentes usos. También incluye la venta al por   mayor de tuberías, cañerías, accesorios, grifos, juntas, conexiones,  cañerías de caucho, equipo para la instalación de fontanería y calefacción.',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '51434',
                'description'   => 'Venta al por mayor de pintura y productos conexos',
                'note'          => 'La venta al por mayor de pinturas, barnices, esmaltes, lacas, pigmentos preparados, opacificante preparados, colores preparados, esmaltes vitrificables, barnices para vidriar, similares utilizados en la industria de la cerámica y el vidrio. Pigmentos  y otras materias colorantes del tipo utilizado en la fabricación de  pinturas y por artistas y otros pintores. Masillas, disolventes, diluyentes, removedores de pintura, barniz y tinta de imprenta.',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '51435',
                'description'   => 'Venta al por mayor de cristales, espejos y mamparas',
                'note'          => 'La venta al por mayor de vidrio de todas sus formas y de artículos de vidrio: vidrio en masa, laminas, planchas, tubos, varillas, vidrio de diversas  composición química, vidrio de distintas características físicas, vidrio con armado de alambre, vidrio coloreado, teñido, endurecido. Artículos de vidrio utilizados en la construcción, como bloques de vidrio. Artículos de vidrio para la cocina, cristalería de laboratorio, vidrio para relojes, vidrio óptico  y piezas de vidrio óptico, etc. Esta subclase no incluye: La venta al por mayor de telas tejidas con hilados de fibras de vidrio (véase 51311). Venta al por mayor de material médico de laboratorio, incluso jeringas (véase 51343). Venta al por mayor de elementos ópticos labrados (véase 51351)Venta al por mayor de juguetes de vidrio (véase 51392)',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '51491',
                'description'   => 'Venta al por mayor de productos químicos',
                'note'          => 'La venta al por mayor de productos químicos industriales: anilina, tinta de impresión, aceites esenciales, gases industriales, colas sintéticas, colorantes resina sintética, metano, parafina, aromatizantes y potenciadores del sabor. Abonos insecticidas raticidas, fungicidas, herbicidas productos  antigerminantes, reguladores de crecimiento de las plantas, desinfectantes y otros productos químicos para uso agropecuario. Plástico y caucho en formas primarias, incluso polímeros de etileno, de polipropileno y de otras olifenas de estiroleno, de cloruro de vinilo y otras esteras de vinilo, poliamidas, amonorresinas, resinas fenólicas, etc.',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '51492',
                'description'   => 'Venta al por mayor de desperdicios y desechos metálicos',
                'note'          => 'La venta al por mayor de desperdicios o desechos metálicos, desechos  de metales preciosos, ferrosos y otros desperdicios o desechos como la chatarra.',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '51493',
                'description'   => 'Venta al por mayor de desperdicios y desechos no metálicos',
                'note'          => 'La venta al por mayor de desperdicios y/o desechos industriales y material  para reciclaje, desperdicios y desechos de la industria alimentaria, del  tabaco, desechos textiles diversos, etc.',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '51499',
                'description'   => 'Venta al por mayor de otros productos intermedios ncp',
                'note'          => 'La venta al por mayor de papel y cartón, fibras textiles de todo tipo de otros productos similares. Esta subclase no incluye: La venta al por mayor de papel y cartón considerado producto de desecho.',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '51501',
                'description'   => 'Venta al por mayor de máquinas, equipos e implementos de uso  agropecuario',
                'note'          => 'Venta al por mayor de máquinas, equipos e implementos de uso  agropecuario',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '51502',
                'description'   => 'Venta al por mayor de máquinas, equipos e implementos de uso en la minería.',
                'note'          => 'Venta al por mayor de máquinas, equipos e implementos de uso en la minería.',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '51503',
                'description'   => 'Venta al por mayor de máquinas, equipos e implementos de uso en la industria manufacturera',
                'note'          => 'Venta al por mayor de máquinas, equipos e implementos de uso en la industria manufacturera',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '51504',
                'description'   => 'Venta al por mayor de máquinas y equipos de construcción e ingeniería civil',
                'note'          => 'Venta al por mayor de máquinas y equipos de construcción e ingeniería civil',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '51505',
                'description'   => 'Venta al por mayor de máquinas, equipos e implementos de uso médico y paramédico',
                'note'          => 'Venta al por mayor de máquinas, equipos e implementos de uso médico y paramédico',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '51506',
                'description'   => 'Venta al por mayor de equipos informáticos y máquinas electrónicas de escribir y calcular',
                'note'          => 'Venta al por mayor de equipos informáticos y máquinas electrónicas de escribir y calcular ',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '51507',
                'description'   => 'Venta al por mayor de máquinas y equipos de comunicaciones, control y seguridad',
                'note'          => 'Venta al por mayor de máquinas y equipos de comunicaciones, control y seguridad',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '51509',
                'description'   => 'Venta al por mayor de máquinas, equipos e implementos de uso especial ncp',
                'note'          => 'La venta al por mayor de productos especiales tales como maquinaria y equipo agropecuario, minero, metalúrgico, equipo de transporte ( excepto  vehículos automotores, motocicletas y bicicletas), maquinaria y equipo de uso industrial y manufacturero, construcción y de ingeniería civil, máquinas, equipos e implementos de uso médico y paramédico, equipos informaticos y maquinas electrónicas de escribir y calcular, máquinas y equipos de control y seguridad, etc., así como la venta al por mayor de materiales conexos.',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '51900',
                'description'   => 'Venta al por mayor de otros productos',
                'note'          => 'El comercio al por mayor de productos diversos no incluidos en ninguna de las clases anteriores',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '52111',
                'description'   => 'Venta al por menor en supermercados con surtido compuesto y predominio de productos alimenticios, bebidas y tabaco',
                'note'          => 'La venta al por menor en supermercados de productos cuyo surtido está compuesto principalmente de alimentos, bebidas y tabaco; no obstante también expanden otras mercancías para consumo de los hogares, tales como: vestuario, electrodomésticos, muebles, artículos de ferretería, cosméticos, etc.  Esta subclase no incluye: La venta de alimentos y bebidas para su consumo en el lugar de venta (véase 55201).',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '52112',
                'description'   => 'Venta al por menor en almacenes con surtido compuesto y predominio de productos alimenticios y bebidas y tabaco',
                'note'          => 'La venta al por menor en almacenes generales, misceláneos o tiendas por departamento con surtido diverso compuesto de productos principalmente de alimentos, bebidas y tabaco; no obstante también expenden otras mercancías para consumo de los hogares, tales como: vestuario,  electrodomésticos, muebles, productos de farmacia, artículos de ferretería, cosméticos, etc. Se incluyen los establecimiento denominados bazares, con surtido diverso de mercancías, tales como: artículos escolares, mercería,  tarjetas, juguetería, fantasías, etc.',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '52113',
                'description'   => 'Venta al por menor en tiendas de barrio  con surtido compuesto y predominio de productos alimenticios, bebidas y tabaco',
                'note'          => 'La venta al por menor en tiendas de barrio de productos cuyo surtido está, compuesto principalmente de alimientos (pan y refrescos), bebidas y  tabaco; también expenden otras mercancias para consumo de los hogares.  Esta subclase no incluye: La venta de productos agropecuarios por los propios productores. (Véase 011).',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '52190',
                'description'   => 'Venta al por menor de otros productos en almacenes no especializados',
                'note'          => 'La venta al por menor de otros productos en almacenes no especializados.',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '52201',
                'description'   => 'Venta al por menor y empaque de frutas, legumbres y hortalizas frescas',
                'note'          => 'La venta al por menor y empaque de frutas, legumbres y hortalizas frescas. Esta subclase no incluye:La venta al por menor y empaque de frutas, legumbres y hortalizas secas, congeladas o en conserva (véase 5229)',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '52202',
                'description'   => 'Venta al por menor de productos lácteos',
                'note'          => 'La venta al por menor de leche, productos lácteos ( quesos, cuajadas, requesón, cremas de leche, etc.)',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '52203',
                'description'   => 'Venta al por menor de huevos, aceites y grasas comestibles',
                'note'          => 'La venta al por menor de huevos, aceites y grasas comestibles de orígen animal y vegetal.',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '52204',
                'description'   => 'Venta al por menor de carnes rojas, menudencias; productos de granja y embutidos',
                'note'          => 'Venta al por menor de carnes rojas, menudencias; productos de granja y embutidos Esta subclase no incluye: La venta al por menor de carne en conserva (véase 52209).',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '52205',
                'description'   => 'Venta al por menor de pan, productos de confitería, pastas frescas',
                'note'          => 'Venta al por menor de pan, productos de confitería,pastelería y pastas frescas en los establecimientos donde son elaborados (véase 1541).',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '52206',
                'description'   => 'Venta al por menor de café, té, cacao y especias',
                'note'          => 'La venta al por menor de café, té, cacao y especias (canela, clavo de olor anís, pimienta, etc.)',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '52207',
                'description'   => 'Venta al por menor de bebidas, cigarrillos y  tabaco',
                'note'          => 'La venta al por menor de jugos de frutas, agua mineral y otras bebidas no alcohólicas. Cerveza, vinos, singanis y otras bebidas alcohólicas. Cigrarrillos, cigarros y tabaco en general. Esta subclase no incluye: El embotellado por cuenta de terceros (véase 7495).',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '52208',
                'description'   => 'Venta al por menor de azúcar, dulces, chocolates, golosinas y otros, excepto cigarrillos',
                'note'          => 'Venta al por menor de azúcar, productos de dulcería, preparados  principalmente de azúcar, frutas, nueces secas confitadas, gomas de mascar, caramelos, turrones, jaleas, bocadillos, etc.  ',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '52209',
                'description'   => 'Venta al por menor de alimentos ncp en almacenes especializados',
                'note'          => 'La venta al por menor de frutas, verduras y legumbres secas o en conserva, harina y productos para panadería, alimentos infantiles y dietéticos, alimentos preparados, como platos precocidos, etc. La venta al por menor de miel, sal y pastas alimenticias, productos alimenticios para animales domésticos, productos congelados como verduras, carnes pescados, platos precocinados, postres, etc. La venta al por menor de productos congelados como verduras carnes, pesacdos, platos precocinados, postres, etc. ',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '52311',
                'description'   => 'Venta al por menor de productos farmacéuticos y medicinales',
                'note'          => 'La venta al por menor de productos farmaceúticos y medicamentos de uso veterinario.',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '52312',
                'description'   => 'Venta al por menor de cosméticos, artículos de tocador y perfumería',
                'note'          => 'La venta al por menor de artículos de higiene personal, jabón, champús,  lacas preparados para ondular y aislar el cabello, preparados para efectuares, perfumes, aguas de colonia, aguas de tocador, preparados  para manicuro y pedicuro, pastas dentales, cosméticos, sales de baño, protectores solares, etc.',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '52313',
                'description'   => 'Venta al por menor de artículos médicos, odontológicos y aparatos ortopédicos',
                'note'          => 'La venta al por menor de aparatos de uso práctico y científico en medicina, cirugía, ododontología y veterinaria. También aparatos electrónicos para diagnóstico: electrocardiografos, tornos de dentista, jeringas con o sin aguja, instrumentos de oftalmología, instrumentos ópticos tales como: espejos, reflectores, endoscopios, etc. Aparatos basados en el uso de rayos X y en la emisión de rayos alfa, beta y gama, destinados o no a la medicina o la veterinaria, tubos de rayos X, generadores de alta tensión, paneles, mesas y pantallas de control, esterilizadores. Aparatos de mecanoterapía, máquinas de masaje, aparatos para pruebas psicológicas, aparatos de ozonoterapía,  oxinoterapía y respiración artificial, máscaras de gas, excepto la simple  protección. Aparatos ortopédicos, muletas, fajas quirúrgicas, corsés, zapatos ortopédicos, féculas y otros materiales para fracturas, aparatos que se llevan  puestos, se portan o se implantan (audífonos y marcapasos). Dientes postizos, extrermidades artificiales del cuerpo humano. Muebles para medicina,cirugía, odontología y veterinaría, tales como mesas de operaciones, camas de hospital con dispositivos mecánicos, sillones de dentista y sillones  de peluquería que pueden realizar moviemientos idénticos a los de dentistas.  Esta subclase no incluye: La venta de productos apósitos quirúrgicos, guatas medicinales, vendaje para fracturas, catgut y otros preparados para suturas (Véase 51341) y la de cementos utilizados en odontología.',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '52314',
                'description'   => 'Venta al por menor de productos veterinarios',
                'note'          => 'La venta al por menor de productos veterinarios.',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '52321',
                'description'   => 'Venta al por menor  de productos textiles, excepto prendas de vestir',
                'note'          => 'La venta al por menor de telas, lana para tricotar o hacer punto, materiales  básicos para la fabricación de alfombras, tapices, bordados, etc.',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '52322',
                'description'   => 'Venta al por menor de confecciones para el hogar',
                'note'          => 'La venta al por menor de sábanas, manteles, toallas, mantas de viaje,  frazadas, cortinas confeccionadas, colchas, cubrecamas, alfombras, etc.',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '52323',
                'description'   => 'Venta al por menor de prendas y accesorios de vestir',
                'note'          => 'La venta al por menor de todo tipo de prendas de vestir (incluso las prendas de vestir de cuero y peletería) y accesorios de vestir tales como guantes, corbatas tirantes, sombreros, paraguas, bastones, etc. Esta subclase no incluye: La venta al por menor de todo tipo de confecciones para el hogar (véase 52323).',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '52324',
                'description'   => 'Venta al por menor de calzado, excepto el ortopédico, artículos de marroquinería, y similares',
                'note'          => 'La venta al por menor  de calzado de cualquier material y sus partes. Esta subclase no incluye:  La venta al por menor de calzados ortopédicos (véase 52313). Prendas de vestir confeccionadas en cuero (véase 52323).',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '52325',
                'description'   => 'Venta al por menor de artículos de cuero',
                'note'          => 'La venta al por mayor de artículos de viaje (bolsos de mano, carteras) y artículos de talabartería guarnicionería (sillas de montar), artículos  semejantes ',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '52331',
                'description'   => 'Venta al por menor de muebles, artículos de mimbre y corcho; colchones y somiers',
                'note'          => 'La venta al por menor de muebles de todo tipo, de cualquier material (madera, mimbre, bambú, metales comúnes, vidrio, cuero, plástico, etc.) y para todo uso. La venta al por menor de colchones de todo tipo (colchones con  muelles y rellenos y provistos de algún material de sustentación o colchones de caucho,etc)  Esta subclase no incluye: La venta al por menor de muebles de piedra, hormigón y cerámica. La venta  al por menor de muebles para equipo científico, médico y de laboratorio (véase 52313)',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '52332',
                'description'   => 'Venta al por menor de artículos de iluminación',
                'note'          => 'La venta al por menor de lámparas de filamento incandescente, incluso faros reflectores sellados, lámparas de rayos ultravioletas e infrarrojos, lámparas de descarga: fluorescentes, de cátodo caliente y de otro tipo. La venta al por menor de lámparas de arco, equipo de iluminación incluso equipo no eléctrico, lamparas de destello para fotografía, carteles iluminados, placas indicadoras del nombre iluminadas y anuncios similares. La venta al por menor de juegos de bombillos para decorar árboles de navidad.  Esta subclase no incluye: La venta al por menor de equipo de iluminación para motocicletas y vehículos automotores (véase 5030).',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '52333',
                'description'   => 'Venta al por menor de artículos de bazar y menaje',
                'note'          => 'La venta al por menor de cubertería y utensilios domésticos de metal, cristalería y pocelana.',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '52334',
                'description'   => 'Venta al por menor de artefactos para el hogar, eléctricos, a gas, kerosene u otros combustibles',
                'note'          => 'La venta al por menor de aparatos eléctricos de uso doméstico: mantas eléctricas, refrigeradores y congeladores, lavaplatos, equipo de lavandería, secadoras, aspiradoras, enceradoras de pisos, eliminadoras de desperdicios, licuadoras, exprimidoras, abrelatas y otros aparatos para preparar y elaborar alimentos,etc. La venta al por menor de afeitadoras eléctricas, cepillos  dentales eléctricos, afiladores de cuchillos, campanas de ventilación y de absorción de humos, etc. La venta al por menor de calentadores de agua,  aparatos termoeléctricos de peluquería (secadores, cepillos y rizadores), ventiladores de uso domestico, apartos de cocina (hornos corrientes y de microndas, cocinillas eléctricas, planchas de cocinar, tostadoras, cafeteras, teteras, sartenes, asadores, parrillas, etc.) La venta al por menor de  aparatos no eléctricos de uso doméstico (cocinas, cocinillas, parrillas, etc). Esta subclase no incluye: La venta al por menor de aparatos de uso industrial y comercial. (Véase 5236).',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '52335',
                'description'   => 'Venta al por menor de instrumentos musicales',
                'note'          => 'La venta al por menor de instrumentos de cuerda, instrumentos de teclado instrumentos de viento (bronce, madera, etc.), instrumentos de percusión. También incluye partes piezas accesorios de instrumentos.',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '52336',
                'description'   => 'Venta al por menor de equipos de sonido, casetes de audio, vídeo y discos',
                'note'          => 'La venta al por menor de receptores de radio y televisión, aparatos de grabación y reproducción de sonido y video  microfonos, altavoces, auriculares, audifonos, amplificadores, y equipos de amplificación de sonido de partes y piezas de receptores de radio y televisión, La venta al por menor de aparatos de grabación y de reproducción de señales de video, grabadores de cassetts, contestadores telefónicos, giradiscos, tocadisco,etc.',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '52339',
                'description'   => 'Venta al por menor de artículos para el hogar ncp',
                'note'          => 'La venta al por menor de otros productos no clasificados anteriormente.',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '52341',
                'description'   => 'Venta al por menor de materiales de construcción',
                'note'          => 'La venta al por menor de productos de madera utilizados principalmente para la industria de la construcción, tales como: maderaje, vigas, bloques,   listones ensamblados en tableros para pisos de parqué, cabios, jabalcones,  y productos similares que se utilizan con fines estructurales y en el sustentamiento de andamios, puertas, ventanas, contraventanas y sus marcos tengan o no herrajes, como bisagras, cerraduras, escaleras, pórticos o barandales, tableros de madera celular, arrimadillos y armarios empotrados, piezas no ensambladas de esos productos, partes y piezas de carpintería, venta de viviendas prefabricadas, la venta de corcho en bruto, cemento  estructurales y sus partes, prefabricados para sus edificaciones, sanitarios  bañeras, lavados, inodoros y otros sanitarios.  Esta subclase no incluye:  La venta al por menor de armarios de cocina, roperos y otros muebles empotrados o no (véase 52331).',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '52342',
                'description'   => 'Venta al por menor de artículos de ferretería, fontanería y calefacción',
                'note'          => 'La venta al por menor de artículos de ferreteria, como: herramientas de mano  de todo tipo utilizadas en la agricultura, ganadería, carpintería, en  ensambladura mecánica, en chapisteria y otras industrias. Sierras y hojas para sierras, incluso sierras circulares y de cadena, cuchillas, sisallas, bricas, buzones, matrices, fresas, puntas, placas, barras, herramientas de herrería, machos de forja, yunques, tornos de banco, abrazaderas, lámparas de soldar, cerraduras, candados, pasadores, llaves y otros accesorios y  herramientas similares para diferentes usos. También incluye la venta al por  menor de tuberias, cañerias, accesorios, grifos, juntas, conecciones,  cañerias de caucho, equipo para la instalación de fontanería y calefacción.',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '52343',
                'description'   => 'Venta al por menor de pintura y productos conexos',
                'note'          => 'La venta al por menor de pinturas, barnices, esmaltes, lacas, pigmentos preparados, opacificante, preparados, colores preparados, esmaltes vitrificables, barnices para vidriar, enlucidos cerámicos y preparados  similares utilizados en la industria de la cerámica y el vidrio. Pigmentos y otras materias colorantes del tipo utilizado en la fabricación de  pinturas y por artistas y otros pintores. Masillas, disolventes, diluyentes, removedores de pintura,barniz y tinta de imprenta.',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '52344',
                'description'   => 'Venta al por menor de cristales, espejos y mamparas',
                'note'          => 'La venta al por menor de vidrio de todas sus formas y de artículos de vidrio: vidrio en masa, laminas, planchas, tubos, varillas, vidrio de diversas composición química, vidrio de distintas caracteristicas físicas, vidrio con aramado de alambre, vidrio coloreado, teñido, endurecido. Artículos de vidrio utilizados en la construcción, como bloques de vidrio. Artículos de vidrio para la cocina, cristalería de laboratorio, vidrio para relojes, vidrio óptico  y piezas de vidrio óptico,etc. Esta subclase no incluye: La venta al por menor de telas tejidas con hilados de fibras de vidrio (véase 52311). Venta al por menor de material médico de laboratorio, incluso jeringas (véase 52313). Venta al por menor de elementos ópticos labrados (véase 51381). Venta al por menor de juguetes de vidrio (véase 51392)',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '52351',
                'description'   => 'Venta al por menor de libros, revistas',
                'note'          => 'La venta al por menor de libros, revistas Esta subclase no incluye:La venta Venta  libros y revistas usados (véase 52402).',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '52352',
                'description'   => 'Venta al por menor de periódicos',
                'note'          => 'La venta al por menor de periódicos',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '52359',
                'description'   => 'Venta al por menor de papel, cartón, materiales de embalaje y artículos de librería ncp',
                'note'          => 'La venta al por menor de papel, cartón, materiales de embalaje, artículos de libreria (bolígrafos, lapices, etc.).',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '52361',
                'description'   => 'Venta al por menor de maquinaria de oficina y contabilidad',
                'note'          => 'La venta al por menor de maquinaria, equipo e implementos de uso especial',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '52362',
                'description'   => 'Venta al por menor de equipos informáticos',
                'note'          => 'La venta al por menor de máquinas computadoras, impresoras, fotocopiadoras, máquinas de escribir manuales y eléctricas, automáticas, transcriptoras, calculadoras, cajas registradoras, expendoras automáticas de billetes de bancos, sacapuntas, engrampadoras, lectores mágneticos y ópticos, etc.   El mantenimiento y la reparación de maquinaria de oficina, contabilidad e informática. (Véase 725).',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '52363',
                'description'   => 'Venta al por menor de máquinas y equipos de comunicaciones, control y seguridad',
                'note'          => 'La venta por menor de productos de telefonía, equipos de circuito cerrado, sistemas de alarma y sistemas contra incendios, robos y otros sistemas de  seguridad, etc.',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '52371',
                'description'   => 'Venta al por menor de flores',
                'note'          => 'Venta al por menor de flores',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '52372',
                'description'   => 'Venta al por menor de plantas, semillas y abonos',
                'note'          => 'Venta al por menor plantas, semillas y abonos',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '52373',
                'description'   => 'Venta al por menor de animales domésticos',
                'note'          => 'Venta al por menor de animales domésticos o de compañia (mascotas)',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '52381',
                'description'   => 'Venta al por menor de artículos de óptica',
                'note'          => 'La venta al por menor de elementos ópticos de vidrio y de cualquier otro material, prismas, y lentes, espejos con configuración de elementos ópticos, filtros de color, elementos polarizadores, lentes optálmicas, lentes de  contacto, fibras ópticas; monturas de anteojos monturas con lentes, gafas de sol, gafas protectoras y gafas correctoras.  Instrumentos ópticos tales  como gemelos, catalejos, otros telescopios ópticos y sus monturas,  instrumentos ópticos para astronomía, microscopios ópticos compuestos,  microscopios para microfotografía y microproyección.  Miras telescópicas  para armas, máquinas y aparatos, láseres, excepto diodos de láser, lupas y cristales de aumento para uso manual, espejos de vidrio, mirillas de puerta, etc. También camaras utilizadas para preparar planchas de fograbado para fotografía suacuática o aérea, para producir microfilmes o microfichas, cámaras de filmación con banda sonora; proyectores y ampliadores y reductores de imágen, proyectores cinematográficos, proyectores con  dispositivos, reproductores de sonido; aparatos con lámparas de  descarga, aparatos con lámparas de destellos excepto las bombillas de  magnesio; aparatos y equipos para laboratorio fotográfico incluso de cinematografía, aparatos para proyección del diseño de circuitos sobre materiales semiconductores sensibilizados, pantallas de  proyección.',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '52382',
                'description'   => 'Venta al por menor de artículos de fotografía',
                'note'          => 'La venta al por menor de cámaras fotográficas y cinematográficas, cámaras de todo tipo para toda clase de usos, incluso cámaras utilizadas para preparar planchas de fótograbado para fotografía subacuática o aérea, para producir microfilmes o microfichas, cámaras de filmación con banda sonora.   Proyectores y ampliadores y reductores de imagen, proyectores  cinematográficos, proyectores con dispositivos, reproductores de sonido. Aparatos con lámparas de descarga, aparatos con lámparas de destello  excepto las bombillas de magnesio.  Aparatos y equipo para laboratorio fotográfico incluso cinematografía.  Aparatos para proyección del diseño de circuitos sobre materiales semiconductores sensibilizados, pantallas de proyección. Esta subclase no incluye: La venta al por mayor de productos fotoquímicos (véase 51491).',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '52383',
                'description'   => 'Venta al por menor de artículos de relojería',
                'note'          => 'La venta al por menor de relojes de toda clase, cajas para relojes incluso de metales preciosos y otros aparatos para medir los intervalos de tiempo. Correas, cintas y pulseras de metal, incluso metales preciosos para relojes Piezas para relojes de todo tipo tales como muelles, rubíes, esteras,   chapas, puentes y otras piezas.',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '52384',
                'description'   => 'Venta al por menor de artículos de joyería y fantasías',
                'note'          => 'La venta al por menor de  joyas de partes labradas, piedras preciosas y semipreciosas, diamantes piedras de calidad industrial, metales preciosos, artículos de orfebrería elaborados con metales preciosos entre ellos cubiertos, vajilla, recipientes de mesa, artículos religiosos, etc. Partes y piezas de joyas o de artículos de orfebrería y monedas, etc., la venta  al por menor de joyas de fantasía.  Esta subclase no incluye: La venta al por menor de empastes dentales y de materiales de sutura, esterilizados (véase 51341).',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '52391',
                'description'   => 'Venta al por menor de materiales y productos de limpieza',
                'note'          => 'La venta por menor de jabón en barras, pastillas, panes, líquidos, pastas o en otras formas; betunes y cremas para calzado, bruñidores y cremas para pisos, carrocerías, vidrio o metal, pastas y polvos abrasivos y  productos similares en formas de papel, fieltro, guata, telas no tejidas, plásticos celulares o caucho celular, impregnados, revestido o recubiertos con bruñidores o cremas, pastas o polvos abrasivos, ceras preparados para  perfumar o desodorizar ambientes. Esta suclase no incluye: La venta al por menorr de compuestos químicos definidos químicamente  (Véase 5237). El envase de productos de limpieza realizados a cambio de una  retribución o contrata  (véase 7495).',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '52392',
                'description'   => 'Venta al por menor de juguetes y artículos de cotillón',
                'note'          => 'La venta al por menor de diversos tipos de juguetes (muñecos que representan a personas u otras criaturas de diferentes materiales y ropa y accesorios para muñecos), juguetes de montar con ruedas, triciclos, artículos para juegos de feria, de mesa o de salón, incluso mesas de pinpón, de pinball, mesas de billar, mesas especiales para juegos de casino, y equipo automátco para juego, juegos eléctronicos, juegos de video, juegos de damas rompecabezas de todo tipo, otros juguetes. También incluye la venta de cotillón. Esta subclase no incluye: La venta al por menor de las bicicletas y rodados (véase 52394).',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '52393',
                'description'   => 'Venta al por menor de artículos de esparcimiento y deportes',
                'note'          => 'La venta al por menor de artículos de equipo para gimnasio, atletismo, juegos al aire libre, raquetas, embarcaciones deportivas, artículos para acampada, tiro con sus armas y municiones, equipos de pesca, caza, natación de lona o plástico,etc.',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '52394',
                'description'   => 'Venta al por menor de bicicletas y rodados similares',
                'note'          => 'La venta al por menor de bicicletas no motorizadas, velocípedos equipados con una o más ruedas, triciclos de reparto, bicicletas con sidecar, tándems, bicicletas de carrera y bicicletas para niños. Sillones de ruedas para inválidos Esta subclase no incluye: La venta al por menor de velocípedos con motor auxiliar y la venta de sidecares para bicicletas (véase 50401). La venta al por menor de vehículos de ruedas para niños (véase 52392).',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '52395',
                'description'   => 'Venta al por menor de papeles para pared, revestimientos para pisos y artículos similares para la decoración',
                'note'          => 'La venta al por menor de papeles para pared, linóleo y otros revestimientos; y artículos similares de decoración.',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '52396',
                'description'   => 'Venta al por menor de artículos artesanales',
                'note'          => 'La venta al por menor de artículos generalmente procesados a mano de diferentes materiales: metal, madera, tela etc., tales como vestimenta, artículos de uso doméstico, adornos, etc.',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '52397',
                'description'   => 'Venta al por menor de combustibles sólidos y líquidos',
                'note'          => 'La venta al por menor de combustible para motores: gasolina, querosene y aceites y grasas lubricantes derivados del petróleo.',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '52398',
                'description'   => 'Venta al por menor de combustible gaseoso',
                'note'          => 'La venta al por menor de gas licuado.',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '52399',
                'description'   => 'Venta al por menor de otros productos en almacenes especializados ncp',
                'note'          => 'La venta al por menor realizadas en casas de regalo, artículos de platería, cuadros y marcos que no sean obra de arte o de colección, sahumerios, lápidas y articulos de santería, parrillas, flores y plantas artificiales,etc.',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '52401',
                'description'   => 'Venta al por menor de muebles usados',
                'note'          => 'Venta al por menor de muebles usados, colchones usados de todo tipo (colchones con muelles y rellenos y provistos de algún material de sustentación o colchones de caucho, etc.)',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '52402',
                'description'   => 'Venta al por menor de libros, revistas y similares usados',
                'note'          => 'Venta al por menor de libros, revistas y similares usados Esta subclase no incluye: La venta al por menor de obras de arte y libros antiguos (véase 52409).',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '52403',
                'description'   => 'Venta al por menor de prendas de vestir y productos  textiles usados',
                'note'          => 'Venta al por menor de prendas de vestir y productos  textiles usados artículos peletería. Accesorio de vestir tales como guantes, corbatas, tirantes, sombreros, paraguas, bastone, etc.',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '52409',
                'description'   => 'Venta al por menor en almacenes de artículos usados ncp',
                'note'          => 'La venta al por menor de antiguedades, obras de arte, libros antiguos y otros bienes de segunda mano.',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '52510',
                'description'   => 'Venta al por menor en empresas de venta por correo',
                'note'          => 'La venta al por menor de cualquier tipo de producto por medio de pedidos por correo, las mercancías se envían al comprador, que las elige previamente de acuerdo a un catálogo, muestrario o cualquier otro tipo  de oferta. También comprende la ventas al por menor por televisión, radio telefono de cualquier producto.',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '52520',
                'description'   => 'Venta al por menor en puestos de venta y mercados',
                'note'          => 'La venta al por menor de toda clase artículos, realizada en puestos  móviles, como: tarimas de madera, tarimas plegables de lona, carreteras, vehículos acondicionados para realizar las ventas. También incluye las ventas realizadas en casetas móviles situados en los mercados, a los bordes de la vía pública o a los margenes de las carreteras. Esta clase no incluye: La venta de productos agropecuarios por los propios productores en los mercados campesinos, no se considera como una actividad económica separada de la actividad de producción, por que no existe reventa de productos.',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '52590',
                'description'   => 'Otros tipos de venta al por menor no realizada en almacenes',
                'note'          => 'La venta al por menor no realizada en almacenes.',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '52591',
                'description'   => 'Venta al por menor de loterías, bingos y rifas',
                'note'          => 'La venta de boletos de loterías, bingos y rifas',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '52601',
                'description'   => 'Reparación de calzados y artículos de marroquinería y otros artículos de cuero',
                'note'          => 'Reparación de calzados y artículos de marroquinería y otros artículos de cuero',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '52602',
                'description'   => 'Reparación de artículos eléctricos de uso doméstico',
                 'note'          => 'La reparación de artículos eléctricos de uso doméstico; mantas eléctricas, refrigeradores y congeladores, lavaplatos, equipo de lavanderia, secadores, aspiradoras, enceradoras de pisos, eliminadoras de desperdicios,  licuadoras, exprimidoras, abrelatas y otros aparatos para preparar y elaborar alimentos,etc. La reparación de afeitadoras eléctricas, cepillos  dentales eléctricos, afiladores de cuchillos, campanas de ventilación y de absorción de humos, etc. La reparación de calentadores de agua,  aparatos termoeléctricos de peluquería (secadores, cepillos y rizadores), ventiladores de uso domestico, aparatos de cocina (hornos corrientes y de microndas, cocinillas eléctricas, planchas de cocinar, tostadoras, cafeteras, teteras, sartenes, asadores, parrillas, etc.) La reparación  de  aparatos no eléctricos de uso doméstico (cocinas, cocinillas, parrillas, etc).',
                ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '52603',
                'description'   => 'Reparación  y tapizado de muebles',
                'note'          => 'La reparación de todo tipo de muebles también incluye el tapizado. Esta subclase no incluye: La restauración de muebles (véase3610).',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '52604',
                'description'   => 'Reparación de bicicletas, triciclos y otros',
                'note'          => 'La reparación de bicicletas, triciclos y otros Esta subclase no incluye: La reparación y mantenimiento de vehículos automotor (véase 5020);  mantenimiento y reparación de motocicletas (véase 5040).',
            ],
            
            [    
                'category'      => 'H',
                'heading'       => 'Comercio',
                'code'          => '52609',
                'description'   => 'Reparación de efectos personales y enseres domésticos ncp',
                'note'          => 'La reparación y arreglo de prendas de vestir, efectos personales y enseres domésticos no relacionadas con las actividades de fabricación y venta al por mayor o menor. También incluye la copia de llaves, etc. Esta subclase no incluye: La reparación de instrumentos musicales (véase 3692); la restauración de obras de arte, incluido los libros antiguos (véase 9214).',
            ],
            
            [    
                'category'      => 'I',
                'heading'       => 'Producción',
                'code'          => '55101',
                'description'   => 'Servicios de alojamiento en hoteles',
                'note'          => 'Servicios de alojamiento en hoteles',
            ],
            
            [    
                'category'      => 'I',
                'heading'       => 'Producción',
                'code'          => '55102',
                'description'   => 'Servicios de alojamiento en residencias',
                'note'          => 'Servicios de alojamiento en residencias',
            ],
            
            [    
                'category'      => 'I',
                'heading'       => 'Producción',
                'code'          => '55103',
                'description'   => 'Servicios de alojamiento en hospedajes y otros',
                'note'          => 'Servicios de alojamiento en hospedajes y otros.',
            ],
    
            [    
                'category'      => 'I',
                'heading'       => 'Servicio',
                'code'          => '55104',
                'description'   => 'Servicios de alojamiento en moteles',
                'note'          => 'El servicio de alojamiento suministrado en unidades constituidas por  habitaciones, mediante un pago por horas o periodos de tiempo inferiores  a un día, no poseen áreas sociales comunes y los servicios que se prestan  se limitan a los de la habitación.',
            ],
        
    
            [    
                'category'      => 'I',
                'heading'       => 'Producción',
                'code'          => '55201',
                'description'   => 'Servicios de expendio de comidas en establecimientos con servicio de mesa y/o en mostrador',
                'note'          => 'Servicios de expendio de comidas en establecimientos con servicio de mesa y/o en mostrador',
            ],
            
            [    
                'category'      => 'I',
                'heading'       => 'Servicio',
                'code'          => '55202',
                'description'   => 'Servicio de expendio de comidas exclusivo en churrasquerías',
                'note'          => 'Servicio de expendio de comidas exclusivo en churrasquerías',
            ],
            
            [    
                'category'      => 'I',
                'heading'       => 'Servicio',
                'code'          => '55203',
                'description'   => 'Servicio de expendio de comidas exclusivo en pollos broaster',
                'note'          => 'Servicio de expendio de comidas exclusivo en pollos broaster ',
            ],
            
            [    
                'category'      => 'I',
                'heading'       => 'Servicio',
                'code'          => '55204',
                'description'   => 'Servicio de expendio de comidas exclusivo en pescado',
                'note'          => 'La venta de comidas para su consumo, normalmente en el local, incluida la venta de bebidas para acompañar las comidas en establecimientos tales como restaurantes, pensiones, cafes, merenderos, etc., y otras que presentan decoración altamente estandarizada.  Estas subclases no incluyen: La venta de alimentos mediante máquinas expendedoras (véase 2559). Los servicios de coche comedor, prestados por empresas ferroviarias (véase 6010).',
            ],
            
            [    
                'category'      => 'I',
                'heading'       => 'Servicio',
                'code'          => '55205',
                'description'   => 'Servicio, preparación y venta de comidas rápidas',
                'note'          => 'Los servicios y preparación y venta de comidas rápidas en establecimientos fijos tales como : hamburguesas, hot-dog, sándwichs, etc. También se incluyen los servicios de coches cama si son proporcionados por unidades independientes. Esta subclase no incluye: La provisión de comidas preparadas a empresas y particulares (véase 55209). Los servicios de coche comedor, prestados por empresas ferroviarias (véase 6010).',
            ],
            
            [    
                'category'      => 'I',
                'heading'       => 'Servicio',
                'code'          => '55206',
                'description'   => 'Servicios de expendio de comidas en establecimientos fijos o móviles',
                'note'          => 'Los servicos de preparación y venta de comidas en las calles, lugares fijos o móviles que no poseen un espacio para el consumo tales como:  chicharrón de pollo, anticuchos, hamburguesas, hot-dog, sándwichs, etc. Esta subclase no incluye: La preparación de comidas preparadas a empresas particulares (véase 55209). Los servicios de coche comedor prestados por empresas ferroviarias (véase 6010).',
            ],
            
            [    
                'category'      => 'I',
                'heading'       => 'Servicio',
                'code'          => '55209',
                'description'   => 'Otros servicios de expendio de comidas ncp.',
                'note'          => 'Los servicios de venta de comidas en comedores colectivos, normalmente a precios reducidos, puede ser destinado a grupos de personas de vínculo profesional u otros tales como: comedores escolares, universitarios, etc. La provisión de comidas preparadas elaboradas en un establecimiento central para su consumo en otras instalaciones. Suministro de comidas para líneas aéreas y otras empresas de transporte. Comidas preparadas para banquetes,  bodas, fiestas y otras celebraciones, etc. El expendio de alimentos o comidas en pastelerías, salteñerías; establecimiento de venta de apís, tojoris, etc. Esta subclase no incluye: Los servicios de coche comedor prestados por empresas ferroviarias. (Véase 6010)',
            ],
            
            [    
                'category'      => 'I',
                'heading'       => 'Servicio',
                'code'          => '55211',
                'description'   => 'Servicios de expendio de bebidas alcohólicas en bares y cantinas',
                'note'          => 'El expendio de bebidas alcohólicas para su consumo dentro del  establecimiento, normalmente a precios muy reducidos. Esta subclase no incluye: Los bares y cantinas que formen parte integral de las unidades que prestan el servicio de alojamiento (véase 5510).',
            ],
            
            [    
                'category'      => 'I',
                'heading'       => 'Servicio',
                'code'          => '55212',
                'description'   => 'Servicios de expendio de bebidas alcohólicas en whiskerías',
                'note'          => 'El expendio de variedad de bebidas alcohólicas para su consumo dentro del establecimiento que ofrecen o no algún tipo de espectáculo y algunos suelen adecuar un espacio para bailar. Esta subclase no incluye: La práctica  de danza en establecimientos que no expenden bebidas alcohólicas (véase 92191).',
            ],
            
            [    
                'category'      => 'I',
                'heading'       => 'Servicio',
                'code'          => '55213',
                'description'   => 'Servicios de expendio de bebidas alcohólicas en quintas y chicherías',
                'note'          => 'El servicio de las quintas que son conocidas como lugares que expenden bebidas alcohólicas y comidas para su consumo dentro del establecimiento, generalmente se encuentran fuera del centro o alrededor de la ciudad. Las chicherias se denominan así por el expendio exclusivamente de chicha.',
            ],
            
            [    
                'category'      => 'I',
                'heading'       => 'Servicio',
                'code'          => '55214',
                'description'   => 'Servicios de expendio de bebidas no alcohólicas',
                'note'          => 'El expendio de refrescos gaseosos, etc.',
            ],
            
            [    
                'category'      => 'I',
                'heading'       => 'Servicio',
                'code'          => '55215',
                'description'   => 'Servicio de heladerías',
                'note'          => 'La venta de una variedad de helados de diferentes sabores que pueden ser de crema y agua.',
            ],
            
            [    
                'category'      => 'I',
                'heading'       => 'Servicio',
                'code'          => '55216',
                'description'   => 'Servicio de expendio de jugos, zumos y ensaladas de frutas',
                'note'          => 'La venta de jugos, zumos y ensaladas de frutas.',
            ],
            
            [    
                'category'      => 'I',
                'heading'       => 'Servicio',
                'code'          => '55217',
                'description'   => 'Servicios de expendio de bebidas en establecimientos fijos o móviles',
                'note'          => 'Expendio de una variedad de bebidas alcohólicas y no alcohólicas que se expenden en las calles y demas lugares que no poseen un espacio para el consumo.',
            ],
            
            [    
                'category'      => 'I',
                'heading'       => 'Servicio',
                'code'          => '55219',
                'description'   => 'Otros servicios de expendio de bebidas ncp',
                'note'          => 'La provisión de bebidas preparadas elaboradas en un establecimiento  central para su consumo en otras instalaciones, preparadas para  banquetes, bodas, fiestas y otras celebraciones.',
            ],
        
        
    
            [    
                'category'      => 'J',
                'heading'       => 'Producción',
                'code'          => '60100',
                'description'   => 'Servicio de transporte ferroviario',
                'note'          => 'El transporte por ferrocarril interdepartamental e internacional de pasajeros y de carga, el servico de tracción o remolque ferroviario, servicos de actividaes conexas. También los servicios de coche comedor y coche cama,. cuando no son prestado por unidades separadas Esta subclase no incluye: Los servicios de coche cama y los servicios de coche comedor, si son prestados por unidades separadas (véase 55109 y 55209). Las actividades  relacionadas con las actividades de pasajeros o de carga, la manipulación y  mantenimiento y las reparaciones menores de material rodante. (Véase 63031).',
            ],
    
            [    
                'category'      => 'J',
                'heading'       => 'Servicio',
                'code'          => '60211',
                'description'   => 'Servicio de transporte automotor urbano de pasajeros',
                'note'          => 'El transporte automotor urbano de pasajero que tiene rutas fijas y horarios prestablecidos (colectivos, micros, minibuses, etc). Esta subclase no incluye: El mantenimiento y reparación de vehículos destinados al transporte por carretera (véase 5020), y la de los vehículos destinados al tranporte por ferrocarril (véase 63031).',
            ],
    
            [    
                'category'      => 'J',
                'heading'       => 'Producción',
                'code'          => '60212',
                'description'   => 'Servicio de transporte automotor suburbano de pasajeros',
                'note'          => 'El transporte automotor interprovincial, interdepartamental e internacional de pasajeros, etc.',
            ],
                
            [    
                'category'      => 'J',
                'heading'       => 'Producción',
                'code'          => '60221',
                'description'   => 'Servicios de alquiler de automotores con conductor',
                'note'          => 'Servicio de transporte en táxis, radio táxis, motocicletas buses escolares, otros servicios de alquiler de automotor con conductor, etc. Esta subclase no incluye: El alquiler de vehículos con carga con conductor (véase 6044). El  arrendamiento financiero, es decir, con opción a compra es decir, arrendamiento finaciero leasing (véase 6591). el alquiler de vehículos  sin conductor. (Véase 7111).',
            ],
            
            [    
                'category'      => 'J',
                'heading'       => 'Producción',
                'code'          => '60222',
                'description'   => 'Otros servicios de transporte no regular de pasajeros',
                'note'          => 'El transporte no regular de autobúses turísticos, vehículos de tracción  humana y animal, servicios especiales como servicio de hipódromos,  espectáculos deportivos culturales, etc, etc.',
            ],
    
            [    
                'category'      => 'J',
                'heading'       => 'Servicio',
                'code'          => '60230',
                'description'   => 'Servicio de transporte automotor de carga por carretera',
                'note'          => 'Todos los transportes regulares de carga por carretera, Incluye una  variedad de mercancías a saber troncos, ganado, productos congelados, derivados del petróleo, otros gases o líquidos sin envasar, mercancías en contenedores, mudanzas, productos secos o sin envasar, animales vivos, transporte de automotores, carga de vehículos de tracción animal, muebles de mudanza,etc. Esta subclase no incluye: El funcionamiento de estaciones terminales para la manipulación de la carga (véase 6303). El embalage en cajas o cajones con fines de transporte (véase 6309).',
            ],
            
            [    
                'category'      => 'J',
                'heading'       => 'Servicio',
                'code'          => '60300',
                'description'   => 'Servicio de transporte por tuberías',
                'note'          => 'El servico de transporte de gases, líquidos,  petróleo y otros productos por tuberías. Funcionamiento de estaciones de bombeo y la conservación de las tuberías Esta clase no incluye: El transporte de gas natural, gas manufacturado, agua o vapor desde la estación distribuidora hasta el usuario final (véase las divisiones 40 o 41).',
            ],
            
            [    
                'category'      => 'J',
                'heading'       => 'Servicio',
                'code'          => '61100',
                'description'   => 'Transporte marítimo y de cabotaje',
                'note'          => 'Servicio de transporte marítimo y de cabotaje ',
            ],
    
            [    
                'category'      => 'J',
                'heading'       => 'Producción',
                'code'          => '61200',
                'description'   => 'Transporte por vías de navegación interiores',
                'note'          => 'El tranporte de pasajeros y carga por ríos, canales y otras vías de  navegación interiores como radas y puertos.',
            ],
            
            [    
                'category'      => 'J',
                'heading'       => 'Producción',
                'code'          => '62101',
                'description'   => 'Servicio de transporte aéreo regular de pasajeros',
                'note'          => 'El transporte de pasajeros a nivel nacional, internacional con itinerarios y horarios establecidos.',
            ],
    
            [    
                'category'      => 'J',
                'heading'       => 'Servicio',
                'code'          => '62102',
                'description'   => 'Servicio de transporte aéreo regular de carga',
                'note'          => 'El transporte de carga a nivel nacional, internacional con itinerarios y horarios establecidos.',
            ],
            
            [    
                'category'      => 'J',
                'heading'       => 'Servicio',
                'code'          => '62200',
                'description'   => 'Transporte no regular por vía aérea',
                'note'          => 'El transporte no regular de pasajeros y carga a nivel nacional, internacional que no tienen itinerarios y horarios establecidos. También incluye el alquiler  de transporte aéreo.',
            ],
            
            [    
                'category'      => 'J',
                'heading'       => 'Servicio',
                'code'          => '63010',
                'description'   => 'Servicios de manipulación de la carga',
                'note'          => 'Los servicios de carga y descarga de mercadería o equipajes de pasajeros  sin discriminar medios de transporte, la estiba y desestiba, etc.',
            ],
            
            [    
                'category'      => 'J',
                'heading'       => 'Servicio',
                'code'          => '63020',
                'description'   => 'Servicio de almacenamiento y depósito',
                'note'          => 'El almacenamiento y depósito de silos de granos, cámaras frigoríficas, almacenes para mercancías diversas, incluso productos de zona franca, etc. Esta clase no incluye: El funciomaniento de instalaciones de estacionamientos para vehículos automotores (véase 6303).',
            ],
            
            [    
                'category'      => 'J',
                'heading'       => 'Servicio',
                'code'          => '63031',
                'description'   => 'Servicios de explotación de infraestructura; peajes y otros derechos',
                'note'          => 'El control del tráfico. Gran diversidad de actvidades relacionadas con el transporte de pasajeros y carga utilizando el transporte terrestre. El funcionamiento de estaciones terminales, como estaciones ferroviarias, de autobuses, de manipulación de mercancías,etc.; el funcionamiento de carreteras, puentes, tuneles, playas estacionamiento o garajes, esclusas, etc. Esta subclase no incluye: El mantenimiento y la reparación especializada de locomotoras y de  material rodante, para ferrocarriles y tranvías. (Véase 3520).',
            ],
            
            [    
                'category'      => 'J',
                'heading'       => 'Servicio',
                'code'          => '63032',
                'description'   => 'Servicios complementarios para el transporte aéreo',
                'note'          => 'La explotación de aerpuertos, control del tráfico aéreo, hangares, estacionamiento y remolque de aeronaves, extición de incendios, etc.',
            ],
            
            [    
                'category'      => 'J',
                'heading'       => 'Servicio',
                'code'          => '63033',
                'description'   => 'Servicios complementarios para el transporte por agua',
                'note'          => 'El servicio de ayuda ala navegación, salvamento, etc.',
            ],
    
            [    
                'category'      => 'J',
                'heading'       => 'Producción',
                'code'          => '63041',
                'description'   => 'Servicios de agencias de viajes',
                'note'          => 'El suministro, de información, asesoramiento y planificación de viajes y del  alojamiento y transporte para viajeros y turistas, el suministro de pasajes para viajes, etc.',
            ],
            
            [    
                'category'      => 'J',
                'heading'       => 'Producción',
                'code'          => '63042',
                'description'   => 'Servicios complementarios de apoyo turístico',
                'note'          => 'Los servicios de guias turisticos y las actividades de agencias de oficinas de turismo.',
            ],
            
            [    
                'category'      => 'J',
                'heading'       => 'Servicio',
                'code'          => '63090',
                'description'   => 'Servicio de apoyo y logística de agencias para el transporte de mercaderías',
                'note'          => 'Los servicios transitorios, la organización o coordinación del transporte en nombre del expedidor o consignatorio, la recepción y aceptación de la carga (incluso la recogida y entrega local), la preparación de documentos de transporte, la agrupación y el fraccionamiento de la carga, la contratación de fletes, la tramitación de las formalidades de aduana, la verificación de  facturas y susminstro de información sobre tarifas, el embalaje y desembalaje  de cajas y cajones, la inspección, pesada y muestreo de la carga, etc. Esta clase no  incluye: El aseguramiento de la carga (véaase 67201). ',
            ],
            
            [    
                'category'      => 'J',
                'heading'       => 'Servicio',
                'code'          => '64110',
                'description'   => 'Servicios de correo nacional',
                'note'          => 'La recolección, el transporte, la entrega (nacional e internacional) de  correspondencia y paquetes. La venta de sellos de correo, la recolección de correspondencia y paquetes depositados en buzones públicos o en  oficinas de correos y su distribución y entrega. También se incluyen actividades de clasificación de la correspondencia, alquiler de buzones postales, servicios de apartatado postal,etc. Esta subclase no incluye: Las actividades similares realizadas por agentes privados, fuera de un  contrato de servicio público (véase 6412). Las actividades de servicio de giro y ahorro de postales y otras actividades financieras realizadas a veces en combinación con las actividades postales propiamente dichas (véase 6519).',
            ],
            
            [    
                'category'      => 'J',
                'heading'       => 'Servicio',
                'code'          => '64120',
                'description'   => 'Servicios de correo distinta a las actividades de correo nacional',
                'note'          => 'Las actividades de correo no realizadas por la Empresa de Correos de  Bolivia (ECOBOL), es decir fuera de un contrato de servicio público, y comprende la recolección, transporte entrega de cartas y otro tipo de  correspondencia. Pueden utilizar diferentes tipos de transporte. Esta clase no incluye: Las actividades de correo realizadas por la Empresa de Correos de  Bolivia (ECOBOL) (véase 6411).',
            ],
            
            [    
                'category'      => 'J',
                'heading'       => 'Servicio',
                'code'          => '64201',
                'description'   => 'Servicios de transmisión de datos y mensajes',
                'note'          => 'El servicio de telefonia larga distancia nacional e internacional  automática y semiautomática, telefonía pública, fronteriza, local, móvil  celular. Servicios a nivel nacional e internacional de telegrafía, faxígrama, telex, Servicios de transmición de estaciones terrenas. Servico de redes privadas, del gobierno, mantenimiento de redes de telecomunicaciones,etc.',
            ],
            
            [    
                'category'      => 'J',
                'heading'       => 'Servicio',
                'code'          => '64202',
                'description'   => 'Servicio de transmisión de radio y televisión',
                'note'          => 'El servicio de red necesario para la transmisión de señales visuales y auditivas a través de radio y televisión, estaciones repetidoras y satélites. Servicios de alquiler de señales e instalaciones de satélite, los servicios de conección y  los servicios integrados de red. Esta subclase no incluye: El servicio de señales visuales y auditivas -datos- por red, (véase 64201).',
            ],
            
            [    
                'category'      => 'J',
                'heading'       => 'Servicio',
                'code'          => '64209',
                'description'   => 'Servicios de transmisión de sonido, imágenes, datos u otra información ncp',
                'note'          => 'Los servicios de videos de conferencias, televisión digital comprimida, video cable, internet, intranet, servicios de red digital se servicos integrados, el  asesoramiento, asistencia técnica y mantenimiento de equipo y de material auxiliar, etc.',
            ],
            
            [    
                'category'      => 'K',
                'heading'       => 'Servicio',
                'code'          => '65110',
                'description'   => 'Servicios de la banca central',
                'note'          => 'Las actividades del Banco Central de Bolivia: la recepción de depósitos para operaciones de compensación entre instituciones financieras, el mantenimiento de la reservas nacionales de divisas y la emisión y la administración de la moneda nacional.',
            ],
            
            [    
                'category'      => 'K',
                'heading'       => 'Servicio',
                'code'          => '65191',
                'description'   => 'Servicios de las entidades bancarias',
                'note'          => 'Las actividades de todos lo bancos, incluidas la entidades oficiales de  crédito',
            ],
            
            [    
                'category'      => 'K',
                'heading'       => 'Servicio',
                'code'          => '65192',
                'description'   => 'Servicios de las cajas de ahorro y préstamo',
                'note'          => 'Las actividades de las cajas de ahorro',
            ],
            
            [    
                'category'      => 'K',
                'heading'       => 'Servicio',
                'code'          => '65193',
                'description'   => 'Servicios de las cooperativas de ahorro y crédito',
                'note'          => 'Las cooperativas de crédito rurales y no rurales.',
            ],
            
            [    
                'category'      => 'K',
                'heading'       => 'Servicio',
                'code'          => '65910',
                'description'   => 'Arrendamiento financiero',
                'note'          => 'La financiación por leasing financiero con una duración que comprende  aproximadamente la vida util prevista del bien, teniendo el beneficiario practicamente todas las ventajas de su utilización, asi como todos los riesgos vinculados a la propiedad; no es preciso que llegue a efectuarse la opción de compra final del bien en cuestión. Esta clase no incluye: El alquiler o leasing operativo descrito en la división 71 con arreglo al tipo  bienes arrendados.',
            ],
            
            [    
                'category'      => 'K',
                'heading'       => 'Servicio',
                'code'          => '65920',
                'description'   => 'Otros servicios de crédito',
                'note'          => 'El otorgamiento de préstamos por entidades que no reciben depósitos y que están fuera del sistema bancario, y cuyo destino es financiar otras  actividades económicas, al consumo, la vivienda u otros bienes.',
            ],
            
            [    
                'category'      => 'K',
                'heading'       => 'Servicio',
                'code'          => '65990',
                'description'   => 'Otro tipo de servicios de intermediación financiera ncp',
                'note'          => 'La intermediación financiera distinta a la efectada por instituciones monetarias.',
            ],
            
            [    
                'category'      => 'K',
                'heading'       => 'Servicio',
                'code'          => '66010',
                'description'   => 'Servicio de planes de seguros de vida',
                'note'          => 'Los seguros y reaseguros de vida y otros tipos de seguro a largo o corto plazo, contengan o no un elemento importante de ahorro, incluyendo la captación y la inversión de fondos.',
            ],
            
            [    
                'category'      => 'K',
                'heading'       => 'Servicio',
                'code'          => '66020',
                'description'   => 'Administración de fondos de jubilaciones y pensiones',
                'note'          => 'Los planes de pensiones jubilatorias y las acividades de captación e inversión de los fondos.',
            ],
            
            [    
                'category'      => 'K',
                'heading'       => 'Servicio',
                'code'          => '66030',
                'description'   => 'Servicios de otros planes de seguros excepto de vida',
                'note'          => 'Los planes de seguros contra accidentes, o contra incendios, seguro médico,  de casas o de automóviles, seguro de transporte, contra pérdidas pecuniarias de responsabilidad civil,etc.',
            ],
            
            [    
                'category'      => 'K',
                'heading'       => 'Servicio',
                'code'          => '67110',
                'description'   => 'Servicios de administración de mercados financieros',
                'note'          => 'Abarca la administración y supervisión de supermercados financieros por corporaciones independientes de las autoridades públicas y las bolsas de valores u otras entidades que regulan o supervisan las operaciones de los mercados financieros.',
            ],
            
            [    
                'category'      => 'K',
                'heading'       => 'Servicio',
                'code'          => '67120',
                'description'   => 'Servicios bursátiles de mediación o por cuenta de terceros',
                'note'          => 'Las actividades de los agentes de valores. Los mediadores en los mercados monetario y en los de divisas. Otras actividades de medición en los mercados financieros.',
            ],
            
            [    
                'category'      => 'K',
                'heading'       => 'Servicio',
                'code'          => '67191',
                'description'   => 'Servicios de casas y agencias de cambio',
                'note'          => 'Servicios de casas y agencias de cambio',
            ],
            
            [    
                'category'      => 'K',
                'heading'       => 'Servicio',
                'code'          => '67199',
                'description'   => 'Otros servicios auxiliares de la intermediación financiera ncp',
                'note'          => 'Los asesores financieros, asesores y corredores hipotecarios, librecambistas, etc.',
            ],
            
            [    
                'category'      => 'K',
                'heading'       => 'Servicio',
                'code'          => '67201',
                'description'   => 'Servicios auxiliares a los servicios de seguros y de administración de fondos de jubilaciones y pensiones',
                 'note'          => 'Las actividades involucradas o estrechamente relacionadas con la administración de los seguros pero distintas de la intermediación financiera. Los servicios de corredores de seguros, peritos, tasadores y liquidadores de siniestros y acuarios, sosciedades administradoras de los fondos de inversión y las de administración de salvamento.',
                ],
            
            [    
                'category'      => 'K',
                'heading'       => 'Servicio',
                'code'          => '67202',
                'description'   => 'Servicios auxiliares a los servicios de administración de fondos de jubilaciones y pensiones',
                'note'          => 'Las actividades involucradas o estrechamente relacionadas con la administración de los fondos de pensiones, pero distintos de la  intermediación financiera.',
            ],
            
            [    
                'category'      => 'L',
                'heading'       => 'Servicio',
                'code'          => '70100',
                'description'   => 'Servicios inmobiliarios realizados por cuenta propia, con bienes propios o arrendados',
                'note'          => 'La compra, venta, alquiler y explotación de bienes inmuebles propios o alquilados, tales como edificios de apartamentos, viviendas y edificios no  residenciales; la urbanización y el fraccionamiento de terrenos en solares, etc. El acondicionamiento y la venta de terrenos, así como de lotes en  residenciales para viviendas móviles. Esta clase no incluye: Las actividades de urbanización por cuenta propia que comprenden la  realización de obras de construcción (véase 4520). La explotación de hoteles, casas de huéspedes, campamentos corrientes y para casas rodantes y otros tipos de hospedaje (véase 5510). Las actividades de las agencias inmobiliarias intermediarias en el alquiler de viviendas (véase 7020).',
            ],
            
            [    
                'category'      => 'L',
                'heading'       => 'Servicio',
                'code'          => '70201',
                'description'   => 'Servicios inmobiliarios de compra, venta y alquiler',
                'note'          => 'Compra, venta, alquiler, remate, tasación, etc., realizadas a cambio de una  retribución o por contrata.',
            ],
            
            [    
                'category'      => 'L',
                'heading'       => 'Servicio',
                'code'          => '70202',
                'description'   => 'Servicios de administración inmobiliaria de bienes inmuebles',
                'note'          => 'Las agencias de cobro de alquileres.',
            ],
            
            [    
                'category'      => 'L',
                'heading'       => 'Servicio',
                'code'          => '70203',
                'description'   => 'Servicios de promoción y asesoramiento en materia inmobiliaria',
                'note'          => 'Las actividades de promoción de inmuebles destinados a oficinas, hoteles, centros comerciales e industriales, etc., el asesoramiento en materia mobiliaria a cambio de una retribución por contrata.',
            ],
            
            [    
                'category'      => 'L',
                'heading'       => 'Producción',
                'code'          => '71110',
                'description'   => 'Alquiler de equipo de transporte por vía terrestre sin personal',
                'note'          => 'El alquiler de toda clase de equipo de transporte terrestre, a saber, locomotoras y vapores de ferrocarril, automóviles, camiones, remolques y  semirremolques, motocicletas, casas rodantes, etc., sin conductor. Se incluye el alquiler a corto y largo plazo, comprenda o no serrvicios de mantenimiento. El alquiler de contenedores, trailers y otros. Esta subclase no incluye: El alquiler a corto y largo plazo de vehículo o camiones con conductor (véase 6022 y 6023 respectivamente). El arrendamiento con opción de compra (véase 6591). El alquiler de bicicletas (véase 7130).',
            ],
            
            [    
                'category'      => 'L',
                'heading'       => 'Producción',
                'code'          => '71120',
                'description'   => 'Alquiler de equipo de transporte por vía acuática sin personal',
                'note'          => 'El alquiler de deslizadores a motot, balsas pesacdoras, sin tripulación. Esta clase  no incluye: El alquiler de equipo de transporte acuático dotado de tripulación (véase 6120).',
            ],
            
            [    
                'category'      => 'L',
                'heading'       => 'Servicio',
                'code'          => '71130',
                'description'   => 'Alquiler de equipo de transporte por vía aérea sin personal ni tripulación',
                'note'          => 'El alquiler de equipo de transporte por vía aérea, a saber, aeroplanos sin tripulación , sea o no a corto o largo plazo y comprenda o no servicios de mantenimiento. Esta clase no incluye: El alquiler de equipo de tranporte por vía aerea dotado de tripulación  (véase 6210).',
            ],
            
            [    
                'category'      => 'L',
                'heading'       => 'Servicio',
                'code'          => '71210',
                'description'   => 'Alquiler de maquinaria y equipo agropecuario sin personal',
                'note'          => 'El alquiler de maquinaria y equipo agrpecuario sin operarios. Esta clase no incluye: El alquiler de este tipo de maquinaria o equipo con operarios (véase 0140). El arrendamiento con opción de compra ( véase 6591).',
            ],
            
            [    
                'category'      => 'L',
                'heading'       => 'Servicio',
                'code'          => '71220',
                'description'   => 'Alquiler de maquinaria y equipo de construcción e ingeniería civil sin personal',
                'note'          => 'El alquiler a corto o largo plazo de maquinaria y equipo de construcción e ingeniería civil sin operarios. Esta clase no incluye: El alquiler de este tipo de maquinaria o equipo con operarios (véase 4550). El arrendamiento con opción de compra (véase 6591',
            ],
            
            [    
                'category'      => 'L',
                'heading'       => 'Servicio',
                'code'          => '71230',
                'description'   => 'Alquiler de maquinaria y equipo de oficina (incluso computadoras)',
                'note'          => 'El alquiler de todo tipo de maquinaría y equipo de oficina, como máquinas de reproducción, maquinas de escribir procesadoras de textos; de contabilidad  como calculadoras electrónicas, cajas registradoras, y otras máquinas provistas de dispositivos de cálculo; y de informática, computadoras digitales, análogicas o híbridas, unidades centrales de procesamiento,  unidades periférica y lectores magnéticas u ópticas, sin operarios ni servicios  administrativos.',
            ],
            
            [    
                'category'      => 'L',
                'heading'       => 'Servicio',
                'code'          => '71290',
                'description'   => 'Alquiler de otros tipos de maquinaria y equipo sin personal ncp',
                'note'          => 'El alquiler de todo tipo de maquinaria, sea o no electrica, utilizada en general  por la industrias en sus actividades de producción, tales como motores y  turbinas; máquinas herramienta; equipo para la explotación de minas y de yacimiento de petróleo; equipo comercial y para radio, televisión y  comunicación; maquinaria de uso profesional o cientifico, para medir y  controlar y para otros usos comerciales o industriales. Esta clase no incluye: El arrendamiento con opción de compra (véase 6591). El alquiler de maquinaría y equipo agropecuario (véase 7121). El alquiler de maquinaría y  equipo de construcción y de ingeniería civil (véase 7122). El alquiler de maquinaria y equipo de oficina (7123).',
            ],
            
            [    
                'category'      => 'L',
                'heading'       => 'Servicio',
                'code'          => '71300',
                'description'   => 'Alquiler de efectos personales y enseres domésticos ncp',
                'note'          => 'El alquiler de todo tipo de artículos independientemente de que sus usuarios son hogares o industrias. El alquiler especializado de artículos tales como productos textiles (lavado o no ), prendas de vestir y calzado, muebles artículos de cerámica y de vidrio, utensilios de cocina y de mesa,  aparatos eléctricos y de uso doméstico, embaracaciones de recreo e  instalaciones conexas, caballos de montar, bicicletas, equipos de deporte, joyas instrumentos musicales, material de escenografía y de vestuario, libros periódicos y revistas, cintas y discos para grabaciones de sonido y de imagen También alquiler general de artículos. Esta subclase no incluye: El alquiler sin conductor de coches de pasajeros y furgonetas, motocicletas,  caravanas y remolques (véase 7111). El alquiler de equipo de recreo también puede ser realizado por las industrias del esparcimiento (véase 92). El prestamo de libros, revistas, videocintas y discos por parte de las bibliotecas (véase 9231).',
            ],
            
            [    
                'category'      => 'L',
                'heading'       => 'Servicio',
                'code'          => '72100',
                'description'   => 'Servicios de consultores en equipo de informática',
                'note'          => 'La asesoria sobre clases y configuraciones de aparatos, así como los correspondientes programas y aplicaciones, análisis de las necesidades y  problemas de los usuarios y asesoramiento sobre posibles soluciones. Esta subclase no incluye: La asesoría sobre equipo informáticos asociados a la fabricación  o venta de ordenadores (véase 3000,5236, 5150 respectivamente).',
            ],
    
            [    
                'category'      => 'L',
                'heading'       => 'Producción',
                'code'          => '72200',
                'description'   => 'Servicios de consultores en informática y suministro de programas de informática',
                'note'          => 'El análisis y resolución de la necesidades y problemas de los usuarios. La  creación de producción, suministro y documentación de programas hechos  a medida con arreglo a pedidos de usuarios específicos. La creación,  producción, susministro y documentación de programas, incluida su edición  a la clientela (no hechos a medida) Esta clase no incluye: La reproducción de programas informáticos para su comercialización.',
            ],
            
            [    
                'category'      => 'L',
                'heading'       => 'Servicio',
                'code'          => '72300',
                'description'   => 'Procesamiento de datos',
                'note'          => 'El proceso de tratatamiento de datos suministrado por el cliente: proceso completo de Datos. Servicio de entrada de datos; su grabación, lectura óptica, etc. La gestión y utlización de forma continuada, de instalaciones de proceso de datos.  Esta clase no incluye: El alquiler a corto y a la largo pazo de computadoras, del equipo periférico conexo y de máquinas de sumar y calculadoras (véase 7123). La creación  de sistemas de computadoras listo para ser utilizados, incluso las actividades de programación. (Véase 7220). El mantenimineto y la reparación de computadoras (véase 7250).',
            ],
            
            [    
                'category'      => 'L',
                'heading'       => 'Servicio',
                'code'          => '72400',
                'description'   => 'Servicios relacionados con bases de datos',
                'note'          => 'Las actividades relacionadas con las bases de datos: la creación de base  datos. El almacenamiento de datos: elaboración de un modelo de registro informático para alamacenar la información prevista en un  formato  prestablecido. El servicio de consulta de las bases de dato: suministro de datos en un orden o secuencia determinados, mediante recuperación o acceso por línea directa (gestión informatizada), de modo que sean accesibles para  todos o para unos usuarios limitados y esten ordanados en la forma  solicitada. Esta subclase no incluye: Las actividades de suministros computarizados de documentación llevadas a cabo por bibliotecas y archivos (véase 9231).',
            ],
            
            [    
                'category'      => 'L',
                'heading'       => 'Servicio',
                'code'          => '72500',
                'description'   => 'Servicios de mantenimiento y reparación de maquinaria de oficina, contabilidad e informática',
                'note'          => 'En esta clase incluyen el mantenimiento y la reparación de maquinaria de oficina, contabilidad e informática y del equipo períferico conexo',
            ],
            
            [    
                'category'      => 'L',
                'heading'       => 'Servicio',
                'code'          => '72900',
                'description'   => 'Otras actividades de informática',
                'note'          => 'Actividades de informática no clasificadas en otra parte.',
            ],
            
            [    
                'category'      => 'L',
                'heading'       => 'Producción',
                'code'          => '73101',
                'description'   => 'Servicio de Investigación y desarrollo en  Ciencias Naturales',
                'note'          => 'Esta clase abarca los estudios sistemáticos y las actividades creativas que se ajustan a las actividades de investigaciones y desarrollo en las ciencias Naturales (Biología, Estadística, Física, Informatica, Matemáticas, Quimica  y Medicina). Su objetivo es ampliar el caudal de conocimientos y facilitar su aplicación.',
            ],
            
            [    
                'category'      => 'L',
                'heading'       => 'Producción',
                'code'          => '73102',
                'description'   => 'Servicio de Investigación y desarrollo en Ingeniería',
                'note'          => 'Los estudios sistemáticos y esfuerzos creativos en el campo de la ingeniería (Civil,Eléctrica, Electrónica, Quimica, Mecánica, Ingeniería industrial,  Petrolera, Metalurgíca). Esta subclase no incluye: La enseñanaza superior; aunque se realicen actividades de investigación y desarrollo (véase 80303).',
            ],
            
            [    
                'category'      => 'L',
                'heading'       => 'Producción',
                'code'          => '73200',
                'description'   => 'Investigaciones y desarrollo experimental en el campo de las Ciencias Sociales y las Humanidades',
                'note'          => 'Los trabajos sistematicos de  naturaleza creativa que forma parte de las  actividades de investigación y desarrollo descritos anteriormente y se  realizan en el campo de las ciencias sociales (sociología, trabajo social, antropología- arqueología, ciencias de la comunicación , derecho y ciencias   políticas, ciencias de la educación, historia, literatura, etc). ',
            ],
            
            [    
                'category'      => 'L',
                'heading'       => 'Servicio',
                'code'          => '74110',
                'description'   => 'Servicios jurídicos',
                'note'          => 'El asesoramiento y la representación en casos civiles, penales, familiares, agrarios, mineros, comerciales, laborales, administrativos y de otra índole, a saber la representación de los intereses de una parte contra los de otra sea o  ante tribunales u otros organismos judiciales y administrativos.  Actividades realizadas o supervisadas por abogados. Casos civiles, violaciones de los derechos privados o civiles de personas naturales o juridicas, como por ejemplo casos de responsabilidad civil, penal, etc., delitos contra el estado y suelen ser iniciadas por éste. Otras actividades consisten en la prestación de asesoramiento en general o en relación con conflictos laborales, la preparación de documentos jurídicos distintos de los relacionados con pleitos como escrituras, de constitución, contratos de sociedades colectivas de documentos similares para la formación de sociedades. Actividades relacionadas con patentes y  derechos de autor, preparación de escrituras, testamentos, fideicomiso, etc.  Y las actividades notariales y de arbritadores. Esta clase no incluye: Las actividades de los tribunales de justicia (véase 75231).',
            ],
            
            [    
                'category'      => 'L',
                'heading'       => 'Servicio',
                'code'          => '74120',
                'description'   => 'Servicios de contabilidad, teneduría de libros y auditoría; asesoramiento en materia de impuestos',
                'note'          => 'El registro contable de las transacciones comerciales de empresas u otras  entidades . La preparación e inspección  de cuentas fiancieras y la  certificación de su exactitud. La preparación de declaraciones del impuesto  sobre la renta de las personas físicas y del impuesto, sobre sociedades.  Las actividades de asesoramiento y representación (no jurídicas) ejercidas ante la administración tributaria en nombre de sus clientes. Esta clase no incluye: Las actividades de procesamiento y tabulación de datos (véase 7414). La gestión del cobro de facturas (véase 7499).',
            ],
            
            [    
                'category'      => 'L',
                'heading'       => 'Servicio',
                'code'          => '74130',
                'description'   => 'Estudios de mercado y realización de encuestas de opinión pública',
                'note'          => 'Los estudios sobre las posibilidades de comercialización, la aceptación y  el grado de difusión de los productos y sobre los hábitos de compra de los consumidores como objeto de promover las ventas y desarrollar  nuevos productos, incluido los analisis estadísticos de los resultados. Las encuestas de opinión pública sobre cuestones políticas, económicas y  sociales, así como sus análisis estadísticos.  Esta clase no incluye: Los trabajos estadísticos realizados por la administración pública (véase 7511).',
            ],
            
            [    
                'category'      => 'L',
                'heading'       => 'Servicio',
                'code'          => '74140',
                'description'   => 'Servicio de asesoramiento, orientación y gestión empresarial',
                'note'          => 'Los serviciode easesoramiento, orientación y asistencia prestados alas empresas: el asesoramiento y ayuda a las empresas y organismos públicos para la planificación, organización, la búsqueda de la eficacia y del control la información dela gestión, etc. La concepción de sistemas de contabilidad, estuduios de contabilidad de los costes y procedimentos de control  presupuestario. El arbitraje y la conciliación entre la empresa y sus trabajadores, los servicios de agronomos y econocmistas, agrarios en  dirección y gestión. Esta clase no incluye: Las actividades de informatica (vvéase 72). El asesoramiento y la representación juridicos (véase 7411). Las actividades de contabilidad teneduria de libros, auditoria, y asesoramiento en materia de impuestos. (Véase 7412). El estudio de mercados y la realización de encuestas de opinión pública (véase 7413). Las actividades de easesoramiento técnico (véase 7421). Las actividades de publicidad (véase 7430)',
            ],
            
            [    
                'category'      => 'L',
                'heading'       => 'Servicio',
                'code'          => '74211',
                'description'   => 'Servicios de arquitectura',
                'note'          => 'Las actvidades de diseño de edificios, el dibujo de planos de  construcción y, a menudo la supervisión de obras, asi como con la planificación urbana y arqutectura paisajista Esta subclase no incluye: La decoración de interiores (véase 7499).',
            ],
            
            [    
                'category'      => 'L',
                'heading'       => 'Servicio',
                'code'          => '74212',
                'description'   => 'Servicios de ingeniería',
                'note'          => 'Las actividades técnicas o de ingeniería abaracan actividades especializadas que se relacionan con la ingeniería civil, hidraúlica y de tráfico, incluso la dirección de obras, la ingeniería eléctrica y electrónica, la ingenieria de minas, la ingeniería química, mecánica industrial y de sistemas, la  ingeniería especializada en sistemas de acondicionamiento de aire regrigeración, sanamiento, control de la contaminación condicionamiento acustico,etc. Las actividades geológicas y de prospección que se basan en la realización de mediciones y observaciones de superficie para obtener información sobre la estructura del subsuelo y la ubicación de yacimientos de petróleo, gas natural y minerales, y depositos de aguas subterráneas, pueden incluir  estudio aerofísicos, hidrológicos, etc. Las actividades de cartografía y   las actividades  de agrimensura conexas.  Esta subclase no incluye: Las perforaciones de prueba relacionadas con la extracción de petróleo y  (véase 1120). Las actividades de investigación y desarrollos (véase 73). Los ensayos técnicos (véase 7422).',
            ],
            
            [    
                'category'      => 'L',
                'heading'       => 'Servicio',
                'code'          => '74213',
                'description'   => 'Servicios geológicos y  de prospección minera',
                'note'          => 'Las actividades geológicas y de prospección minera.',
            ],
            
            [    
                'category'      => 'L',
                'heading'       => 'Servicio',
                'code'          => '74214',
                'description'   => 'Servicios geológicos y  de prospección petrolera',
                'note'          => 'Las actividades geológicas y de prospección petrolera.',
            ],
            
            [    
                'category'      => 'L',
                'heading'       => 'Servicio',
                'code'          => '74219',
                'description'   => 'Otros servicios de actividades técnicas',
                'note'          => 'Las actividades técinas no contempladas en otra parte.',
            ],
            
            [    
                'category'      => 'L',
                'heading'       => 'Servicio',
                'code'          => '74220',
                'description'   => 'Servicios de ensayos y análisis técnicos',
                'note'          => 'La medición de la pureza de agua o aire, de la radioactividad; el análisis de la contaminación potencial por emisión de humos o aguas residuales. Los análisis en el campo de la alimentación. La realización de pruebas de resistencia de materiales. El control técnico de construcción. La homologación de aeronaves, vehículos motorizados, contenedores presurizados, etc.',
            ],
            
            [    
                'category'      => 'L',
                'heading'       => 'Servicio',
                'code'          => '74300',
                'description'   => 'Servicios de publicidad',
                'note'          => 'La prestación de servicios de publicidad. Las actividades de las empresas de publicidad abaracan la creación y realización de campañas publicitarias independientemente del medio en el que se vayan a difundir. La colocación de publicidad exterior de carteles, vallas, la colocación de anuncios en  automoviles y autobuses, etc. La venta y obtención de tiempo y espacios publicitarios, la publicidad aérea. Esta clase no incluye: La impresión de material publicitario (véase 2221). El estudio de mercado  (véase 7414). Actividades de publicidad por corrreo. ( véase 7499). La  producción de anuancios comerciales para su difusión por radio, televisión o cinematógrafos (vease 9213).',
            ],
            
            [    
                'category'      => 'L',
                'heading'       => 'Servicio',
                'code'          => '74910',
                'description'   => 'Obtención y dotación de personal',
                'note'          => 'La búsqueda, selección, colocación de personal directivo y ejecutivo: la descripción del puesto de trabajo, la selección y el exámen de candidatos,  la investigación de referencias, etc. La busqueda,  selección y colocación del personal, ya sea para la empresa contratante o para el propio trabajador:  La descripción del puesto de trabajo, la selección y el exámen de candidatos, la investigación de referencias, etc. Esta subclase no incluye: Las actividades de los contratistas de mano de obra para el sector  agropecuario o pecuario. Las actividades de agencias (véase 7499). Las actividades de asesoramiento laboral (véase 5532). Las actividades de contratación de actores para peliculas  cinematograficas y obras de teatro (véase 92499).',
            ],
            
            [    
                'category'      => 'L',
                'heading'       => 'Servicio',
                'code'          => '74921',
                'description'   => 'Servicios de transporte de caudales y objetos de valor',
                'note'          => 'El transporte de objetos de valor, el servicio de vehículos blindados,etc.',
            ],
            
            [    
                'category'      => 'L',
                'heading'       => 'Servicio',
                'code'          => '74922',
                'description'   => 'Servicios de investigación y seguridad personal',
                'note'          => 'Los servicios de investigación, las actividades de los detectives privados, los servicios de vigilancia protección y seguridad: la custodia por  vigilantes, jurados de edificios de departamentos, oficinas, almacenes, fabricas, solares en construcción, etc. Las actividades de guardaespaldas,  de control mediante dispositivos de seguridad mecánico o eléctricos, el asesoramiento en el campo de la seguridad industrial, de los hogares y  servicios públicos, el adiestramiento de perros para defensa. Esta subclase no incluye: La instalación de sistemas de alarma (véase 45302). Las investigaciones relativas a los seguros (véase 6720).',
            ],
            
            [    
                'category'      => 'L',
                'heading'       => 'Servicio',
                'code'          => '74930',
                'description'   => 'Servicios de limpieza de edificios',
                'note'          => 'La limpieza interior de todo tipo de edificios, incluidas oficinas, fabricas, comercios, edificios de organismos públicos y otros establecimientos empresariales y profesionales.  La limpieza de cristales, la limpieza de chimeneas, hogares de chimeneas, limpieza de cristales,  hogares de chimeneas, hornos, incineradores, calderas, conductos de ventilación y extractores de aire. La desinfección y exterminio. Esta clase no incluye: La limpieza con vapor, con chorro de arena o con otros medios de  exteriores de edificios y las de limpieza de edificios recien contruidos (véase 45405). El lavado con champú de alfombras y tapices y la limpieza de colgaduras y cortina (véase 9301). Las actividades de empleados domésticos. (Véase 9500)',
            ],
            
            [    
                'category'      => 'L',
                'heading'       => 'Servicio',
                'code'          => '74940',
                'description'   => 'Servicios de fotografía',
                'note'          => 'La producción de fotografías comerciales y de consumo privado: la realización de retratos para pasaportes, colegios, bodas, etc. La  fotografía para anuncios y editoriales, actividades relacionadas con la moda y para anuncios inmobiliarios o turisticos. La fotografía aérea, el procesamiento de películas incluye el revelado, la impresión y ampliación  de fotografía o filmes de fotografos, aficionado o profesionales. El montaje de diaposistivas y la copia de la restauración o retoque de fotografía o negativos antiguos. Esta subclase no incluye: El procesamiento de filmes de las industrias cinematograficas y de la televisión (véase 9211).',
            ],
            
            [    
                'category'      => 'L',
                'heading'       => 'Servicio',
                'code'          => '74950',
                'description'   => 'Servicios de envase y empaque',
                'note'          => 'La actividades de embasado y empaquetado por cuenta de terceros, con intervención o no de procesos automatizados: llenado de aerosoles, embotellado de productos líquido, empaquetados de sólidos, (al vacio, con papel de aluminio, etc), etiquetado, embalaje de paquetes y envoltura de regalos. Esta subclase no incluye: Las actividades de empaquetado por cuenta propia, asociado al comercio (véase 5152). Las actividades de empaquetado relacionados con el  transporte (véase 6309).',
            ],
            
            [    
                'category'      => 'L',
                'heading'       => 'Servicio',
                'code'          => '74960',
                'description'   => 'Servicios de fotocopias, impresión heliográfica y otras formas de reproducción',
                'note'          => 'Las actividades de fotocopiado y la reproducción de fotocopias, impresión de copias heliográficas, otros servicios de reproducción',
            ],
            
            [    
                'category'      => 'L',
                'heading'       => 'Servicio',
                'code'          => '74990',
                'description'   => 'Otros servicios empresariales ncp',
                'note'          => 'Una gran variedad de actividades de tipo servicio realizadas generalmente  para clientes comerciales: cobranzas de cuentas, evaluación y calificación  del grado de solvencia a las prácticas comerciales de particulares o empresas.  Intermediación comercial, a saber, la gestión de la compra o venta de pequeñas y medianas empresas, incluso la prestación de servicios profesionales. Actividades de evaluación, excepto las relacionadas con bienes raíces y seguros. Actividades de taquigrafía, reproducción y  despacho de correspondencia, incluso labores de mecanografía y otras actividades de oficina, tales como las de transcripción de cintas, discos  y bandas correccción de  pruebas, etc, rotulación, llenado de selladura y despacho por correo de sobres, preparación de listas de destinatario, etc. Incluso para el enviado de materiales publicitarios. Diseño de telas,  prendas de vestir, calzado, muebles y otros artículos de decoración  interior y de moda. Actividades de tramitación de documentos,  actividades de demostración y exibición, actividades de subasta, traducción a interpretación, actividades de promoción comercial mediante  cartillas  de sellos de canje, actividades de contestación de teléfonos.  Actividades realizadas por agencias a nombre de particulares para obtener contratos de actuación en películas cinematográficas, obras teatrales y otros espectáculos culturales y deportivos y para ofertar libros, guiones, obras de arte, foftografía, etc.  Esta subclase no incluye: La conceción de crédito mediante tarjetas de crédito (véase 6596). El diseño de máquinas (véase 7421). La exibición de anuncio y otras actividades de diseño publicitario (véase 7430).',
            ],
            
            [    
                'category'      => 'M',
                'heading'       => 'Servicio',
                'code'          => '75110',
                'description'   => 'Administración Pública',
                'note'          => 'El desempeño de funciones ejecutivas y legislativas de administración  central regional y local; la administración y supervisión de asuntos fiscales, la aplicación del presupuesto y la gestión de los fondos  públicos ; la gestión administrativa de servicios estadísticos y sociológicos y de planificación social y económica global a distintos niveles de la  administración. Esta subclase no incluye: Administración y respaldo de las investigaciones prácticas y el desarrollo  experimental referentes a la defensa (véase 7522).',
            ],
            
            [    
                'category'      => 'M',
                'heading'       => 'Servicio',
                'code'          => '75120',
                'description'   => 'Regulación de las actividades de organismos que prestan servicios sanitarios, educativos, culturales y otros servicios sociales, excepto servicios de seguridad social',
                'note'          => 'La gestión adminsitrativa de programas destinados a mejorar el bienestar de los ciudadamos de departamentos públicos de : sanidad, eduación, cultura, deporte, actividades recreactivas, medio ambientales vivienda, servicios sociales, etc. Esrta clase no incluye: Las actividades postales (véase 7411)y las de telecomunicaciónes (véase 7420) las actividades de investigación y de desarrollo experimenta,(véase 73). Las actividades relativas a los planes de seguridad social obligatoria (véase 7530). Las actividades de enseñanza (véase 80). Las actividades relacionadas con la salud humana (véase 851). Los servicios de saneamiento, limpieza y actividades similares (véase 9000). Las actividades de bibliotecas, archivos, museos y otras actividades culturales. (véase 925). Las actividades deportivas y otras actividades recreativas (véase 9241 y 9249).',
            ],
            
            [    
                'category'      => 'M',
                'heading'       => 'Servicio',
                'code'          => '75130',
                'description'   => 'Regulación y facilitación de la actividad económica',
                'note'          => 'La administración pública y la regulación de varios sectores económicos (agricultura, ordenación territorial, recursos energéticos, y mineros,  infraestructura, transporte, comunicaciones, y hoteleria y turismo);  las actividades de apoyo, donaciones subvenciones, gestión administrativa de actividades de caracter laboral, comercio al por mayor y menor,  el deposito y el almacenamiento; la administración de objetivos multiples, la aplicación de políticas de desarrollo regional.',
            ],
            
            [    
                'category'      => 'M',
                'heading'       => 'Servicio',
                'code'          => '75140',
                'description'   => 'Actividades de servicios auxiliares para la administración pública en general',
                'note'          => 'Las actividades de servicios generales de personal; la administración,  dirección y apoyo de servicios generales, compras y suministros, etc. Conservación y custodia de registros y archivos públicos, administración de edificios de propiedad pública u ocupados por la administración  pública, servicios de oficinas centrales y otros servicios generales no relacionados con ninguna función concreta.',
            ],
            
            [    
                'category'      => 'M',
                'heading'       => 'Servicio',
                'code'          => '75210',
                'description'   => 'Relaciones exteriores',
                'note'          => 'La gestión administrativa y funcionamiento del Ministerio  de Asuntos  Exteriores y las representaciones diplomáticas y consulares acreditadas  en el extranjero, la concesión de ayuda económica a terceros países,  este o no canalizada a través de organizaciones internacionales, la conceción de ayuda militar a otros países,  la organización del comercio y  la asistencia internacional canalizada a través del Ministerio de Relaciones Exteriores a refugiados o de lucha contra el hambre. Esta  subclase no incluye: Las actividades diplomáticas de los organismos extranjeros ejercidas en territorio nacional (véase 9900).',
            ],
            
            [    
                'category'      => 'M',
                'heading'       => 'Servicio',
                'code'          => '75220',
                'description'   => 'Actividades de defensa',
                'note'          => 'La dirección, supervisión y gestión de asuntos y jueces de defensa militar:  establecimientos penitenciarios. respectivos comandos como ser el de ingeniería, transportes, comunicaciones, inteligencia, sevicio de información, material, y otras fuerzas y mandos que no sean de combate como ser el logístico, la asistencia sanitaria al personal militar de campaña, la prestación de  apoyo a la elaboración de planes de emergencia y la organización de ejercitos, administración  en que intervengan población e instituciones civiles, también la aplicación de las políticas de investigación y desarrollo en materia de defensa y la administración de los fondos pertinentes.  Esta  subclase no incluye: Las actividades administrativas del ministerio de defensa (véase 7511). La prestación de ayuda militar a otros países (véase 7521). Las actividades de los tribunales militares (véase 7523). El abastecimiento de suministros para su utilización en situaciones de emergencia interna en tiempo de paz derivadas de desastres (véase 7523). Las actividades educativas de  escuelas, colegios y academias militares (véase división 80). La actividades de los hospitales militares (véase 8511).',
            ],
            
            [    
                'category'      => 'M',
                'heading'       => 'Servicio',
                'code'          => '75231',
                'description'   => 'Actividades de servicios judiciales y de justicia',
                'note'          => 'La administración y el funcionamiento  del sistema judicial y de los  tribunales civiles, penales, militares, etc. La administración de establecimientos penitenciarios.',
            ],
            
            [    
                'category'      => 'M',
                'heading'       => 'Servicio',
                'code'          => '75232',
                'description'   => 'Actividades de servicios de orden público y de seguridad',
                'note'          => 'Incluye las actividades de las fuerzas especiales de policia, protección  civil, extensión y prevensión de incendios, etc.',
            ],
            
            [    
                'category'      => 'M',
                'heading'       => 'Servicio',
                'code'          => '75300',
                'description'   => 'Actividades de planes de seguridad social de afiliación obligatoria',
                'note'          => 'Los elementos específicos que conforman la seguridad social obligatoria o pública son los siguientes: gestión por organismos  públicos y por entidades privadas, debidamente autorizadas, de  prestaciones económicas establecidas a favor de la totalidad de la población o de grupos profesionales determinados. En el supuesto de prestaciones voluntarias, la cobertura se hara mediante alguna fórmula de seguro colectivo. Las actividades de los organismos de la seguridad social y las mutualidades colaboradoras de estos y de los organismos públicos y departamento de las administraciones públicas que gestionan prestaciones económicas de seguridad social. Se consideran prestaciones económicas de seguridad social  a las pensiones, subsidio y demas prestaciones en dinero, tanto periódicas como por una  sola vez, que cubran las situaciones siguientes:  enfermedad, accidentes de trabajo,  enfermedad profesional, vejez, invalidez, muerte, incapacidad maternidad y familia. Esta subclase no incluye: Los seguros y planes de pensiones (véase 66). La formación profesional ocupacional. Las actividades sanitarias de  servicos sociales (véase 851). Las actividades de servicios sociales (véase 853).',
            ],
            
            [    
                'category'      => 'N',
                'heading'       => 'Servicio',
                'code'          => '80101',
                'description'   => 'Educación  inicial',
                'note'          => 'La eduacción preescolar y la educación infantil impartida en centros públicos o privados autorizados por la administración educativa. Se  imparte en guarderia infantiles, escuelas de párvulos o jardínes de infancia, para los niños que no estan aún en edad de ser admitidos en la enseñanza  del nivel primario. Esta subclase no incluye: Las actividades de guardería. (Véase 85312).',
            ],
            
            [    
                'category'      => 'N',
                'heading'       => 'Servicio',
                'code'          => '80102',
                'description'   => 'Educación primaria',
                'note'          => 'La enseñanza general en escuelas educativas elementales, unidades educativas primarias cuya función principal consiste en proporcionar los primeros elementos de la instrucción. Los programas persiguen el objetivo de dotar a los estudiantes de conocimientos básicos en materia de lectura,   escritura, matemáticas, junto con nociones de otras materias. Por lo general en este nivel de instrucción es poco especializada. Se incluyen los programas de instrucción elemental para niños que no tienen  oportunidad de asistencia a la escuela . Esta subclase no incluye: Los programas de alfabetización para adultos. (Véase 8090).',
            ],
            
            [    
                'category'      => 'N',
                'heading'       => 'Servicio',
                'code'          => '80210',
                'description'   => 'Educación secundaria de formación general',
                'note'          => 'Se imparte en unidades educativas, escuelas técnicas e implica cuatro años  como mínimo de estudio, brindando una educación general o especializada,  a todas las personas que culminaron el nivel primario. La especialización esta encaminada a preparar a los estudiantes para el nivel de enseñanza y poder tomar cursos adicionales requeridos. En esta  subclase esta también la enseñanza especial de tipo académico para  estudiantes incapacitados.  Esta subclase no incluye: Los programas de enseñanza general  para adultos que en estos participan  voluntariamente, por ejemplo las de clases nocturnas (véase 8090).',
            ],
            
            [    
                'category'      => 'N',
                'heading'       => 'Servicio',
                'code'          => '80220',
                'description'   => 'Educación secundaria de formación técnica y profesional',
                'note'          => 'La enseñanza técnica y profesional de nivel inferior al universitario. Por lo general en los programas de este nivel se hace hincapíe en una determinada  especialización y se imparten conocimientos teóricos y prácticos que suelen tener por objeto mejorar las posibilidades actuales o futuras de empleo,   formación profesional de especifica de grado medio. Esta subclase no incluye: La enseñanaz técnico profesional de los niveles post-secundario y universitario(véase 8030).',
            ],
            
            [    
                'category'      => 'N',
                'heading'       => 'Servicio',
                'code'          => '80301',
                'description'   => 'Formación superior no universitaria',
                'note'          => 'La educación postsecundaria que no conduce a la obtención de un título universitario: formación docente, educación en intituciones militares.',
            ],
            
            [    
                'category'      => 'N',
                'heading'       => 'Servicio',
                'code'          => '80302',
                'description'   => 'Educación superior universitaria',
                'note'          => 'La educación universitaria propiamente dicha, que culmina en la obtención de un título universitario. En este nivel se ofrece una gran variedad de  programas especializados en diferentes disciplinas, algunos de los cuales se concentran en conocimientos prácticos.',
            ],
            
            [    
                'category'      => 'N',
                'heading'       => 'Servicio',
                'code'          => '80303',
                'description'   => 'Educación superior de especialización y postgrado',
                'note'          => 'La formación en cursos especializados y postgrado que precisan para su  realización poseer una titulación universitaria. Formación a nivel de doctorado, especialización, médica, etc.',
            ],
            
            [    
                'category'      => 'N',
                'heading'       => 'Servicio',
                'code'          => '80901',
                'description'   => 'Educación de adultos',
                'note'          => 'La enseñanza para personas no abarcadas por los sistemas ordinarios de  enseñanza primaria, secundaria y universitaria, la instrucción puede ser diurna o nocturna, impartidas en escuelas o en instituciones especiales para adultos. Instrucción impartida mediante programas de radio, televisión, correspondensia y otros medios de comunicación, escuelas de manejo, actividades de enseñanza a domicilio y/o particulares, etc. Esta subclse no incluye: La enseñanza superior (véase 8030). Las escuelas de baile (véase 92191). La enseñanza realizada con deportes y juegos (véase 92412).',
            ],
            
            [    
                'category'      => 'N',
                'heading'       => 'Servicio',
                'code'          => '80902',
                'description'   => 'Enseñanza comercial, contable y secretariado',
                'note'          => 'Enseñanza comercial, contable y secretariado',
            ],
            
            [    
                'category'      => 'N',
                'heading'       => 'Servicio',
                'code'          => '80903',
                'description'   => 'Enseñanza de artes',
                'note'          => 'Enseñanza de artes',
            ],
            
            [    
                'category'      => 'N',
                'heading'       => 'Servicio',
                'code'          => '80904',
                'description'   => 'Enseñanza para la prestación de servicios (hotelería, repostería, confección, peluquería , etc)',
                'note'          => 'Enseñanza para la prestación de servicios (hotelería, repostería , confección peluquería, etc.)',
            ],
            
            [    
                'category'      => 'N',
                'heading'       => 'Servicio',
                'code'          => '80905',
                'description'   => 'Enseñanza para la conducción de automotores y aviones',
                'note'          => 'Enseñanza para la conducción de automotores y aviones',
            ],
            
            [    
                'category'      => 'N',
                'heading'       => 'Servicio',
                'code'          => '80906',
                'description'   => 'Enseñanza de idiomas',
                'note'          => 'Enseñanza de idiomas',
            ],
            
            [    
                'category'      => 'N',
                'heading'       => 'Servicio',
                'code'          => '80907',
                'description'   => 'Enseñanza de informática y computación',
                'note'          => 'Enseñanza de informática y computación',
            ],
            
            [    
                'category'      => 'N',
                'heading'       => 'Servicio',
                'code'          => '80908',
                'description'   => 'Enseñanza para personas discapacitadas',
                'note'          => 'La enseñanza de educación comercial, contable y secretariado, de servicios de enseñanza de holetería, confección, repostería, peluquería,  académica y profesional.',
            ],
            
            [    
                'category'      => 'N',
                'heading'       => 'Servicio',
                'code'          => '80909',
                'description'   => 'Otras enseñanzas ncp',
                'note'          => 'Instrucción impartida mediante programas de radio y televisión, correspondencia y otros medios de comunicación, actividades de enseñanza  a domicilio y/o particulares, etc. Esta sublclase no incluye: La enseñanza relacionada con deportes y juegos (véase 92412).',
            ],
            
            [    
                'category'      => 'O',
                'heading'       => 'Servicio',
                'code'          => '85110',
                'description'   => 'Servicios hospitalarios',
                'note'          => 'Las actividades de los hospitales generales y especializados, sanitarios,  fisioterapeutas, de forma independientes (véase 8519) odontológica y otras instituciones sanitarias, incluso los hospitales de base militares y de centros penitenciarios. Los servicos de hospitalización prestados principalmentes a pacientes internos, las actividades de   tratamiento que no necesitan hospitalización a tiempo completo, tales como tratamiento oncológicos; infectológicos; dialíticos; atención de la salud mental, atención pedriatíca, atención gerontológica, etc, Comprende también los servicios de personal médico y paramédico, laboratorio e instalaciones técnicas, incluso servicios de radiología y anastesiología y otras instalaciones de servicios hospitalarios, tales conmo comedores y salas de servicio de urgencia.Esta subclase no incluye: La atención de salud al personal militar en campaña (véase 7522). La  asistencia en consultas privadas (véase 85122). La asistencia odontológicasin alojamiento (véase 85123). Los servicios de ambulancia (véase 8519).',
            ],
            
            [    
                'category'      => 'O',
                'heading'       => 'Servicio',
                'code'          => '85121',
                'description'   => 'Servicio de atención médica en clínicas',
                'note'          => 'Las acividades de consultas médicas en establecimientos con internación en clínicas que prestan atención realizadas por médicos de medicina general,  especialistas y cirujanos. Consultorios de guardia para resolver urgencias médicas, vacunatorios, centros del primer nivel de atención. Los servicos de  cirugia ambulatoria, tales como los de cirugía plástica, electrocuagulación, lipoaspiración, etc. Esta subclase no incluye:La atención de pacientes internos en hospitales (véase 8511), las actividades sanitarias realizads por personal auxiliar, como comadrona, enfermeras y fisioterapeutas, de forma independientes (véase 8519).',
            ],
            
            [    
                'category'      => 'O',
                'heading'       => 'Servicio',
                'code'          => '85122',
                'description'   => 'Servicios de consultas médicas',
                'note'          => 'Las actividades de consulta y tratamiento de tipo general o especializado. Práctica médica realizada a pacientes externos o ambulatorios cuyos servicios deben pagarase por adelantado en consultorios privados.',
            ],
            
            [    
                'category'      => 'O',
                'heading'       => 'Servicio',
                'code'          => '85123',
                'description'   => 'Servicios de odontología',
                'note'          => 'Las activiades de consulta y tratamiento especializado en odontología . Práctica médica realizada a pacientes externos o ambulatorios. Incluye departamentos odontológicos de las empresas de medicina prepagada, y consultorios privados. Las actividades odontológicas realizadas  en empresas, escuelas, hogares de ancianos, organizaciones sindicales,  asociaciones profesionales, etc. Esta subclase no incluye: laboratorios dentales (véase3311). Los ensayos bromatológicos (véase 7422).',
            ],
            
            [    
                'category'      => 'O',
                'heading'       => 'Servicio',
                'code'          => '85191',
                'description'   => 'Servicios de laboratorios clínicos',
                'note'          => 'Las actividades de laboratorio médicos, banco de sangre, etc.Esta subclase no incluye: Los ensayos bromatológicos (véase 7422).',
            ],
            
            [    
                'category'      => 'O',
                'heading'       => 'Servicio',
                'code'          => '85192',
                'description'   => 'Servicios de centros radiológicos',
                'note'          => 'Las actividades de centro de rayos X entomológicos',
            ],
            
            [    
                'category'      => 'O',
                'heading'       => 'Servicio',
                'code'          => '85193',
                'description'   => 'Servicios de centros terapéuticos',
                'note'          => 'Las actividades de terapia mediante medio físicos(equipo de corriente eléctrica) y tratamiento de ejercicios, juegos,etc.',
            ],
            
            [    
                'category'      => 'O',
                'heading'       => 'Servicio',
                'code'          => '85199',
                'description'   => 'Otros servicios relacionados con la salud humana ncp',
                'note'          => 'Todas las actividades relacionadas con la salud humana, no realizadas en hospitales o por doctores en medicina, si no por otro personal sanitario legalmente habilitado, para tratar pacientes, las activiades de enfermeras,  comadronas, u otros facultativos en el ámbito de la oftometría, hidroterapia, ergoterapia, logoterapia, podoilogia, homeopatía, acupuntores, etc., las actividades de ambulancias corrientes y ambulancias aéreas, etc. Las actividades no clasificads en rúbricas anteriores ejercidas fuera del marco sanitario o reglametario., como curanderos, etc. Esta subclase  no incluye: Los ensayos bromatológicos (véase 7422). Las actividades termales y los balneareos (véase 93091). Las actividades de adelagasamiento y masaje (véase 93091).',
            ],
            
            [    
                'category'      => 'O',
                'heading'       => 'Servicio',
                'code'          => '85200',
                'description'   => 'Servicios  veterinarios',
                'note'          => 'Las actividades de centro y cuidados médicos dispensados a animales domésticos y de compañia supervisados directamente por veterinarios, todas las actividaes clinicopatológicas relacionadas con animales; la actividades de veterinaria que requieren el uso de ambulancia, etc. Nota: Estas actividades las realizan veterinarios titulados en clínicas veterinarias, así como en visitas de  establecimientos agropecuarios,  perreras, a domicilio, en consultas y salas de operaciones o en otros lugares. El alojamiento de animales sin prestación de asistencia sanitaria (véase 01420). La inseminación artificial (véase  01420).',
            ],
            
            [    
                'category'      => 'O',
                'heading'       => 'Servicio',
                'code'          => '85311',
                'description'   => 'Servicios de asistencia social a niños con alojamiento',
                'note'          => 'Las actividades realizadas por turnos y destinadas a proprcionar asistencia y servicios sociales a menores: orfanatorio, hogares y albergues infantiles correccionales para menores, etc. Esta subclase no incluye: Los servicios de adopción (véase 8532).',
            ],
            
            [    
                'category'      => 'O',
                'heading'       => 'Servicio',
                'code'          => '85312',
                'description'   => 'Servicios de asistencia social a jóvenes con alojamiento',
                'note'          => 'Las actividades realizadas por turnos y destinadas a proporcionar asistencia  y servicos sociales a menores: orfanatorio, hogares y albergues infantiles, correcionales para jóvenes, etc. Esta subclase no incluye: Los servicios de adopción (véase 8532).',
            ],
            
            [    
                'category'      => 'O',
                'heading'       => 'Servicio',
                'code'          => '85313',
                'description'   => 'Servicios de asistencia social a ancianos con alojamiento',
                'note'          => 'Las actividades destinadas a proporcionar asistencia social a los ancianos.Servicios prestados durante las 24 horas del día, hogares y asilos de ancianos',
            ],
            
            [    
                'category'      => 'O',
                'heading'       => 'Servicio',
                'code'          => '85314',
                'description'   => 'Servicios de asistencia social a personas discapacitadas con alojamiento',
                'note'          => 'Las actividades destinadas a prestar asistencia social a personas con algún impedimentio para valerse por sí  mismas, enfermos física o  mentalmente incluidos los ciegos o sordomudos.',
            ],
            
            [    
                'category'      => 'O',
                'heading'       => 'Servicio',
                'code'          => '85315',
                'description'   => 'Servicios de asistencia social en centros de rehabilitación',
                'note'          => 'Las actividades destinadas a prestar asistencia social con alojamiento sin tratamiento médico a personas adictas a los estupefacientes o al alcohol.',
            ],
            
            [    
                'category'      => 'O',
                'heading'       => 'Servicio',
                'code'          => '85319',
                'description'   => 'Otros servicios de asistencia social con alojamiento ncp',
                'note'          => 'Las actividades de las instituciones que atienden a las madres solteras y  a sus hijos, a las mujeres que son objetos de malos tratos, de agresiones sexuales, etc., y en su caso a sus hijos. Las actividades de los albergues y centros de acogida para personas en situación de exclusión social. Esta subclase no incluye: Los servicios de desastre (véase 8532).',
            ],
            
            [    
                'category'      => 'O',
                'heading'       => 'Servicio',
                'code'          => '85321',
                'description'   => 'Servicios sociales a niños sin alojamiento',
                'note'          => 'Las actividades de guarderias y otras actividades de atención diurna  de menores y de menores aquejados de algún tipo de dicapacidad. Orientación de niños, adopción, prevención de tratos crueles a niños, etc.',
            ],
            
            [    
                'category'      => 'O',
                'heading'       => 'Servicio',
                'code'          => '85322',
                'description'   => 'Servicios sociales de orientación y asesoramiento sin alojamiento',
                'note'          => 'Las actividades de lugares a centros abiertos y destinados a la tensión  de orientación de una determinada población o barrio, desarrollando  funciones en educación, apoyo preventivo a la marginación. Las actividades de intervención con la unidad de convivencia en  situaciones de riesgo o crisis.',
            ],
            
            [    
                'category'      => 'O',
                'heading'       => 'Servicio',
                'code'          => '85323',
                'description'   => 'Servicios sociales de orientación familiar',
                'note'          => 'Las actividades destinadas a la orientación de familias en situaciones de conflicto psicofamiliares, planificación familiar, acogimiento familiar y tratamiento de familias en cuyo seno se producen malos tratos, etc.',
            ],
            
            [    
                'category'      => 'O',
                'heading'       => 'Servicio',
                'code'          => '85324',
                'description'   => 'Servicios sociales a personas discapacitadas sin alojamiento',
                'note'          => 'Las actividades en centros destinadas a la atención de personas con  alguna discapacitación física, desarrollando actividades diferentes en  beneficio del discapacitado.',
            ],
            
            [    
                'category'      => 'O',
                'heading'       => 'Servicio',
                'code'          => '85325',
                'description'   => 'Servicios de asistencia social en centros de rehabilitación',
                'note'          => 'Las actividades destinadas aprestar orientación y ayuda (sin tratamiento médico) a personas adictas a los estupefacientes o al alcohol.',
            ],
            
            [    
                'category'      => 'O',
                'heading'       => 'Servicio',
                'code'          => '85329',
                'description'   => 'Otros servicios de asistencia social sin alojamiento ncp',
                'note'          => 'Las actividades de orientación a personas en libertad provisional, la prestación de ayudas a victimas de catátrofes y personas en situación de exclusión social, las actividades benéficas, como la recaudación de fondos u otras actividades de apoyo a los servicios sociales, las actividades de organizaciones de bienestar social relacionadas con la iglesia,  organizaciones para socorro, organizaciones nacionales o locales de autoayuda, organismos no gubernamentales, como la cruz roja. Esta subclase no incluye: Las actividades que suelen formar parte de planes de seguridad social,  afiliación obligatoria (véase 7530). Las actividades similares a las descritas  en esta clase pero realizadas por unidades que proporcionan alojamiento  (véase 8531).',
            ],
            
            [    
                'category'      => 'O',
                'heading'       => 'Servicio',
                'code'          => '90001',
                'description'   => 'Servicios de depuración de aguas residuales y alcantarillado y cloacas',
                'note'          => 'El tratamiento de desechos líquidos: la evacuación por cloacas, alcantarillas u otros métodos, de excrementos humanos, incluido su tratamiento y   eliminación, la dilución, cribado, filtración, sedimentación,  precipitación química, tratamiento de fangos activados y otros proceso de eliminación de agua residuales: el mantenimineto de cloacas y de alcantarillas, el vaciado y la limpieza de retretes y fosas sépticas, el mantenimiento de inodoros, de acción química. El tratamiento de aguas residuales procedentes de piscinas y de industrias. Esta subclase no incluye:  La capatación, depuración y distribución de agua (véase 4100). La   actividades de desinfección y exterminio realizadas en edificios (véase 7493).',
            ],
            
            [    
                'category'      => 'O',
                'heading'       => 'Servicio',
                'code'          => '90002',
                'description'   => 'Servicios de limpieza de vías públicas y tratamiento de desechos',
                'note'          => 'La recogida de basura de los recipientes colocados en lugares públicos; el barrido y la limpieza de calles, caminos plazas de estacionamiento, etc., el tratamiento de desechos sólidos: La recogida de basura, desperdicios,   trastos y desechos; El transporte de desechos, la eliminación de desechos  mediante incineración o por otros medios de reducción; la descarga de desperdicios en tierra, el tratamiento y destrucción de desechos tóxicos, inclluida la limpieza del suelo contaminado. Esta subclase no incluye: La lucha contra plagas y peste agropecuarias (véase 0140). El reciclaje de desechos (véase 37). La gestión de desechos reactivo (véase 2330).',
            ],
            
            [    
                'category'      => 'O',
                'heading'       => 'Servicio',
                'code'          => '91110',
                'description'   => 'Servicios de organizaciones empresariales y de empleadores',
                'note'          => 'Las actividades de las organizaciones y federaciones, empresariales y  patronales, en las distintas ramas empresariales o comerciales: difusión de información, representación ante los organismos de la administración, relaciones públicas, negociaciones laborales, las actividades de las cámaras de comercio, gremios y de organismos similares. Esta subclase no incluye: La publicación de periódicos, revistas, etc., por estas organizaciones ( véase 2212). La realización de negociaciones laborales a cambio una  retribución o contrata (véase 7414). ',
            ],
            
            [    
                'category'      => 'O',
                'heading'       => 'Servicio',
                'code'          => '91120',
                'description'   => 'Servicios de organizaciones profesionales',
                'note'          => 'Los servicios de actividades de organizaciones y asociaciones de todas las profesiones. También las actividades de asociaciones de especialistas en el campo cultural como escritores, pintores, artistas, periodistas, etc.,  Los miembros de estas organizaciones por lo general tiene un nivel universitario o un nivel técnico superior, aunque esto no es un requisito, por que en esta clase también están las asociaciones de capataces, vendedores, agentes de seguros taquígrafos, etc., En los servicios prestados por los profesionales consiste en la difusión de información, el establecimiento y   fiscalización del cumplimiento de normas profesionales, la representación  ante los organismos de la administración y las relaciones públicas Esta subclase no incluye: La publicación de revistas, periódicos y otros, por estas organizaciones  (véase 2212). La enseñanza impartida por estas organizaciones (véase 80).',
            ],
            
            [    
                'category'      => 'O',
                'heading'       => 'Servicio',
                'code'          => '91200',
                'description'   => 'Servicios de sindicatos',
                'note'          => 'Las actividades de asociaciones de trabajadores asalariados, para la representación ante los organismos de la administración y las relaciones públicas . sindicatos interesados en tomar medidas concertadas por conducto  de su organización. Esta subclase no incluye: La publicación de periódicos, revistas, por estas organizaciones (véase 2212). ',
            ],
            
            [    
                'category'      => 'O',
                'heading'       => 'Servicio',
                'code'          => '91910',
                'description'   => 'Servicios de organizaciones religiosas',
                'note'          => 'Las actividades de organizaciones religiosas o de personas que atienden a los feligreses en iglesias, mezquitas, templos, sinagogas u otros lugares, las actividades de monasterios , conventos y similares, también retiro religioso. Esta subclase no incluye: La publicación de periódicos revistas, por estas organizaciones  (véase 2212). La enseñanza impartida por estas organizaciones (véase 80). Las actividades de tipo social llevadas a cabo por estas organizaciones (véase 8531-8532).Los servicios de astrólogos y espiritistas (véase 93099).',
            ],
            
            [    
                'category'      => 'O',
                'heading'       => 'Servicio',
                'code'          => '91920',
                'description'   => 'Servicios de organizaciones políticas',
                'note'          => 'Las actividades y organizaciones políticas y de organizaciones auxiliares de estas asociadas con un partido político, cuya finalidad es la de influir en la toma de decisiones de los organismos de administración. ',
            ],
            
            [    
                'category'      => 'O',
                'heading'       => 'Servicio',
                'code'          => '91990',
                'description'   => 'Servicios de otras asociaciones ncp',
                'note'          => 'La amplia gama de actividades, la promoción de una causa o cuestión pública mediante campañas de educación del público, influencia política , recaudación  de fondos, etc.; La prestación de apoyo a servicios comunales y educativos;  la protección y el  mejoramiento de la situación de determinados grupos por ejemplo grupos étnicos, o minoritarias, la asociación de conocer a otras personas con interés similares, clubes rotarios, lógias masónicas,  asociaciones cristianas o hebreas de jóvenes; la asociación con fines  patrióticos, asociaciones de jóvenes scout, clubes u organizaciones  estudiantes. La asociación con fines culturales, recreativos o artesanales (excepto deporte o los juegos), clubes de poesía y de literatura y de libros, clubes de historia, jardinería, de cinematografía y fotografía, de música y arte, de artesanía y filatelia y muchos tipos de clubes Esta subclase no incluye: Las asociaciones dedicadas a la práctica de actividades artísticas, como las de asociaciones de teatro, zarzuela, etc. (Véase 9214). Las actividades de los clubes deportivos (véase 92412). Las asociaciones y clubes de dominó música (Véase 92412).',
            ],
            
            [    
                'category'      => 'O',
                'heading'       => 'Producción',
                'code'          => '92110',
                'description'   => 'Producción y distribución de filmes y cintas de vídeo',
                'note'          => 'La producción de películas sean o no de ficción, utlizando cinta  cinematográfica o de video, para su exibición en cinematógrafos o para su transmisión por televisión, producción de los estudios cinematográficos o de laboratorios especiales para la creación de dibujos animados. Producción de películas documentales, largometrajes, etc. Se incluye las actividades auxiliares a cambio de una retribución o contrata, tales como el montaje y doblado de películas. También incluye la distribución de filmes y videocintas a otra industria, pero no al público en general. Se trata de la  venta o alquiler de videos o filmes y cintas a otras industrias, para su exibición al público o su transmisión por televisión.  Esta subclase no incluye: Los servicios de reproducción de material audiovisual a partir de grabaciones originales (véase 2230). Los servicios realizados por representantes de artistas (véase 7499). La producción de películas o cintas realizadas normalmente en estudios de televisión (véase 9213).  Las actividades que realizan directores, compositores, actores, creadores  de dibujos animados, etc. (Véase 9214).',
            ],
            
            [    
                'category'      => 'O',
                'heading'       => 'Servicio',
                'code'          => '92120',
                'description'   => 'Exhibición de filmes y videocintas',
                'note'          => 'La proyección de películas o de cintas de videos en salas cinematográficas al aire libre o en otras salas de proyección .Esta clase no incluye: El alquiler se salas cinematográficas, etc. (Véase 70) ',
            ],
            
            [    
                'category'      => 'O',
                'heading'       => 'Servicio',
                'code'          => '92131',
                'description'   => 'Servicios de radio',
                'note'          => 'La producción ya sea en vivo o en cinta u otro material de grabación de programas de radios para su difusión sumultánea o posterior. Los  programas pueden ser para entretenimiento, noticias de promoción, educación, capacitación o difusión de noticias, noticias deportivas, pronósticos del tiempo, entrevistas. El resultado de las cintas pueden venderse, alquilarse o archivarse para su oportuna transmisión o retrasmisión. Esta subclase no incluye: Las transmisiones de radio por cable o por repetidor o via satélite. ',
            ],
            
            [    
                'category'      => 'O',
                'heading'       => 'Servicio',
                'code'          => '92132',
                'description'   => 'Servicios de programas de televisión',
                'note'          => 'La producción ya sea en vivo o en cintas de video de programas de televisión para su difusión sumultanea o posterior. Todo tipo de programas, las cintas pueden venderse alquilarse o archivarse para su oportuna transmisión o retransmisión. Esta subclase no incluye: Las transmisiones de televisión por cable (véase 64202). Las actividades de  agencia (véase 7499). La producción de filmes y video cintas en estudio  cinematograficos (véase 9211).',
            ],
            
            [    
                'category'      => 'O',
                'heading'       => 'Producción',
                'code'          => '92141',
                'description'   => 'Creación e interpretación artística y literaria',
                'note'          => 'La producción de obras de teatro, conciertos y óperas espectáculos de danza, obras de teatro, sean para una o mas funciones',
            ],
            
            [    
                'category'      => 'O',
                'heading'       => 'Servicio',
                'code'          => '92142',
                'description'   => 'Producción de espectáculos',
                'note'          => 'Las actividades de diseño y  manejo de escenografia como montaje de  iluminación y sonido, funcionamiento de agencias, de ventas de billetes, de teatro y otros locales, conciertos, etc. Esta subclase no incluye: El alquiler de salas de teatro, etc. (Véase 70).',
            ],
            
            [    
                'category'      => 'O',
                'heading'       => 'Servicio',
                'code'          => '92143',
                'description'   => 'Otras actividades relacionadas con el espectáculo',
                'note'          => 'A compositores, actores, músicos, conferencistas, o disertantes, escultores, pintores, caricaturistas, grabadores, artistas plásticos, etc. Artistas que trabajan independientemente. Esta subclase no incluye: Las actividades de agencias (véase 7499).',
            ],
            
            [    
                'category'      => 'O',
                'heading'       => 'Servicio',
                'code'          => '92191',
                'description'   => 'Servicios de salones de baile, discotecas y similares',
                'note'          => 'Las actividades de entretenimiento que no están especificados en otra parte: salas de baile, discotecas y similares, además la instrucción  de danza.',
            ],
            
            [    
                'category'      => 'O',
                'heading'       => 'Servicio',
                'code'          => '92199',
                'description'   => 'Otros servicios de entretenimiento ncp',
                'note'          => 'La actividad del parque de diversión  y centros similares; los espectáculos circenses, de títeres, las ferias, las actividades de barracas de tiro al blanco . Esta subclase no incluye: Otras actividades de esparcimiento (véase 9249).',
            ],
            
            [    
                'category'      => 'O',
                'heading'       => 'Servicio',
                'code'          => '92200',
                'description'   => 'Servicio de agencias de noticias',
                'note'          => 'Las actividades de consorcios y agencias de noticias que proporcionan  material noticiero, fotográfico y periodístico a los medios de difusión  y  prestan servicios de noticias a periódicos y revistas.',
            ],
            
            [    
                'category'      => 'O',
                'heading'       => 'Servicio',
                'code'          => '92310',
                'description'   => 'Servicios de bibliotecas y archivos',
                'note'          => 'Las actividades de bibliotecas de todo tipo de salas de lectura, audición o proyección, archivos públicos: La creación de colecciones, ya sean especializadas o no, la elaboración de catálogos. El préstamo y almacenamiento de libros , mapas, revistas, películas, discos, etc. Los servicios de atención  de solicitudes de información, atención al público en general o a una clientela especializada, a saber: estudiantes, científicos, empleados de la organización  a que pertenezca la biblioteca, organizaciones, etc. Esta subclase no incluye; las actividades relativas a bases de datos (véase 7240).',
            ],
            
            [    
                'category'      => 'O',
                'heading'       => 'Producción',
                'code'          => '92320',
                'description'   => 'Servicios de museos y preservación de lugares y edificios históricos',
                'note'          => 'Las actividades de museos de todos los tipos, museos de arte cerámica, museos de historia, ciencias y tecnología, museos militares y casas históricas, preservación de lugares, y edificios históricos, etc.',
            ],
            
            [    
                'category'      => 'O',
                'heading'       => 'Producción',
                'code'          => '92330',
                'description'   => 'Servicios de jardines botánicos y zoológicos y de parques nacionales',
                'note'          => 'Las actividades de jardines botánicos, jardines zoológicos y parques nacionales, incluso de la preservación de la flora y fauna silvestres, etc.',
            ],
            
            [    
                'category'      => 'O',
                'heading'       => 'Servicio',
                'code'          => '92411',
                'description'   => 'Servicios de organización, dirección y gestión de prácticas deportivas y explotación de las instalaciones',
                'note'          => 'La organización de todo tipo se actividades deportivas al aire libre o bajo techo, con la participación de profesionales o aficionados, así también en las instalaciones que se realizan estas actividades. Clubes, gimnasios, anfiteatros, o estadios al aire libre (dotado o no de techo y asientos) y otras instalaciones para practicar deportes. En los deportes están: fútbol, bolos, natación, golf, boxeo, lucha , gimnasia, levantamiento de pesas, deportes de invierno, ajedrez, juegos de damas, dominó o naipes, atletismo, tiro al blanco, etc., La producción de espectáculos deportivos. Las actividades relacionadas con carreras de caballos, de galgos y de automóviles. También la caza y pesca deportiva o con fines de esparcimiento y las actividades de servicio conexas. Esta subclase no incluye: Las actividades realizadas en parques y playas (véase 9249).',
            ],
            
            [    
                'category'      => 'O',
                'heading'       => 'Servicio',
                'code'          => '92412',
                'description'   => 'Servicios prestados por escuelas, profesionales y técnicos, para la realización de prácticas deportivas',
                'note'          => 'Las actividades de clubes y escuelas deportivas y la que realizan por cuenta propia deportistas y atletas, jueces y árbitros, cronometradores, instructores, profesores, entrenadores, etc., Así como las de escuela de deportes y caza y las relacionadas con carreras de caballos, de galgos, y de automóviles',
            ],
            
            [    
                'category'      => 'O',
                'heading'       => 'Servicio',
                'code'          => '92491',
                'description'   => 'Servicios de esparcimiento relacionadas con juegos de azar y apuestas',
                'note'          => 'Las actividades de esparcimiento loterías y apuestas, servicios de casinos y salas de juegos de azar y apuesta y otros similares',
            ],
            
            [    
                'category'      => 'O',
                'heading'       => 'Servicio',
                'code'          => '92492',
                'description'   => 'Servicios de salones de juegos',
                'note'          => 'Los servicios de juegos electrónicos, juegos de mesa , de salón, billar, polo bowling, etc.',
            ],
            
            [    
                'category'      => 'O',
                'heading'       => 'Servicio',
                'code'          => '92499',
                'description'   => 'Otros servicios de actividades de esparcimiento ncp',
                'note'          => 'Las actividades de esparcimiento que no están incluidas en ninguna de las demás clases de esta división. La contratación de actores y actrices para obras  cinematográficas, de televisión o de  teatro, de agencias de contratación  de espectáculos teatrales o de otros tipos espectáculos recreativos; de  grabación de sonido (música, etc.) En discos gramofónicos en cinta recreativa de parques y playas, (también en alquiler de casetas, taquillas, sillas, etc.) Alquiler de caballos con fines recreativos, adiestramiento de animales de compañia, etc. Esta subclase  no incluye: La fabricación de discos gramofónicos y cintas magnetofónicos de vídeo La fabricación de discos gramofónicos y cintas magnetofónicos de vídeo (véase 3230). El adiestramiento de perros guardianes (véase 7492). La producción de espectáculos circenses o la sala de baile y discotecas  (véase 9219).',
            ],
            
            [    
                'category'      => 'O',
                'heading'       => 'Servicio',
                'code'          => '93010',
                'description'   => 'Servicios de lavado y limpieza de prendas de tela y de piel, incluso la limpieza en seco',
                'note'          => 'Las actividades de lavado teñido en seco, planchado, etc. De todo tipo de prendas de vestir (incluso prendas de piel) y otros artículos textiles, que se realizan a maquina, a mano o en maquinas industriales o comerciales, el lavado de alfombras y tapices y la limpieza de cortinas y colgaderas. Así como el alquiler de ropa blanca, uniformes de trabajo y prendas conexas por las lavanderías. También la recolección y distribución de ropa por las lavanderías. Esta clase abarca también la reparación de arreglo menor de prendas de vestir y otros artículos de tela si estas actividades se realizan en combinación con las de limpieza. Esta subclase no incluye: La reparación y el arreglo de prendas de vestir, etc., que se realizan como  actividad independiente (véase 5260). El alquiler de prendas de vestir y otros artículos de uso doméstico confeccionados de tela (véase 7130) aun cuando  su limpieza forme parte de las actividades de esta clase.',
            ],
            
            [    
                'category'      => 'O',
                'heading'       => 'Servicio',
                'code'          => '93020',
                'description'   => 'Servicios de peluquería y otros tratamientos de belleza',
                'note'          => 'Las actividades de lavado, corte, recorte, peinado, teñido, coloración, ondulación y alisado de cabello ;y otras actividades similares para hombres y mujeres, así como el afeitado o recorte de barba. Los masajes faciales, manicura, pedicura, maquillaje, etc. Esta clase no incluye; la fabricación de pelucas, etc. (Véase 3699) ',
            ],
            
            [    
                'category'      => 'O',
                'heading'       => 'Servicio',
                'code'          => '93030',
                'description'   => 'Servicios funerarios y actividades conexas',
                'note'          => 'La sepultura e incineración de cadáveres o animales y otras actividades conexas , como las de preparación de los despojos para su inhumación o cremación (distinto de los servicios religiosos), alquiler de locales especiales en cazas de vejación , ensalzamiento de cadáveres y otros servicios de ponpas fúnebres, alquiler o venta de tumbas y mausoleos, gestión y mantenimiento de cementerios. Esta clase no incluye: Las ceremonias religiosas de honrras fúnebres (véase 9191).',
            ],
            
            [    
                'category'      => 'O',
                'heading'       => 'Servicio',
                'code'          => '93091',
                'description'   => 'Servicio para el mantenimiento físico-corporal',
                'note'          => 'Las actividades de servicio relacionados con el biensetar y la lozania físicas, como los de baños turcos, saunas, baños de vapor, solarios, balnearios, salones de adelgazamiento y de masaje, etc.',
            ],
            
            [    
                'category'      => 'O',
                'heading'       => 'Servicio',
                'code'          => '93099',
                'description'   => 'Otros servicios ncp',
                'note'          => 'Las actividades de astrología y espiritismo, las realizadas con fines sociales como agencias matrimoniales, de investigaciones geneológicas, de contratación de acompañantes, la actividad de lustra botas, los porteadores de maletas, acomodadores de autos, etc. Esta subclase no incluye: Las actividades domésticas realizadas a título individual por empleados domésticos de todo tipo (véase 9500).',
            ],
            
            [    
                'category'      => 'P',
                'heading'       => 'Servicio',
                'code'          => '95000',
                'description'   => 'Servicio de hogares privados que contratan servicio doméstico',
                'note'          => 'Las actividades de hogares que contratan a título personal servicios domésticos: doncellas, cocineros, camareros, ayudas de cámara, mayordomos, jardineros, porteros, choferes, conserjes niñeras, secretarios, etc. Esta subclase no incluye: El suministro de personal domésticos por empresas que se encargan de los que haceres del hogar (véase 7491).',
            ],
            
            [    
                'category'      => 'Q',
                'heading'       => 'Servicio',
                'code'          => '98000',
                'description'   => 'Servicio de organizaciones y órganos extraterritoriales',
                'note'          => 'Las actividades de organizaciones internacionales: Naciones Unidas y sus organismos especializados, la Comunidad Europea, la Asociación Europea de Libre Comercio, La Organización de Cooperación y Desarrollo Económico, El Consejo de Cooperación Aduanera, La Organización de Países de Petróleo, El Fondo Monetario Internacional,  El Banco Mundial, etc. Esta subclase no incluye:La administración y el funcionamiento de las misiones Diplomáticas y consulares localizadas en el extranjero o en oficinas (véase 7521) del país que dependen.',
            ],
            
            [    
                'category'      => 'Z',
                'heading'       => 'Servicio',
                'code'          => '99001',
                'description'   => 'Jubilados o rentistas',
                'note'          => 'Son aquellas personas que no trabajan y perciben una renta después de haber cumplido con los años de servicio laboral que indica la Ley.',
            ],
            
            [    
                'category'      => 'Z',
                'heading'       => 'Servicio',
                'code'          => '99002',
                'description'   => 'Estudiantes',
                'note'          => 'Son aquellas personas que no trabajan y dedican su tiempo completo a la formación profesional técnica y universitaria. ',
            ],
            
            [    
                'category'      => 'Z',
                'heading'       => 'Servicio',
                'code'          => '99003',
                'description'   => 'Amas de casa',
                'note'          => 'Corresponde a las personas dedicadas a tiempo completo a las labores domésticas del hogar como ser el limpiar, cocinar, planchar, cuidar a los niños y otras relacionadas. Excluyen a los trabajadores domésticos remunerados (empleada doméstica, jardinero, chofer,etc.).',
            ]
        ];

        foreach ($EAS as $EA) {
            Caedec::create([
                'category'      => $EA['category'],
                'heading'       => $EA['heading'],
                'code'          => $EA['code'],
                'description'   => $EA['description'],
                'note'          => $EA['note'],
            ]);
        }
    }
}
