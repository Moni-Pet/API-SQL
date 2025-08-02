<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities = [             
            ['city' =>  'Aguascalientes', 
            'state_id' => 1],
            
            ['city' =>  'Asientos', 
            'state_id' => 1],
                    
            [
            'city' =>  'Calvillo',
            'state_id' => 1],
                    
            [
            'city' =>  'Cosío',
            'state_id' => 1],
                    
            [
            'city' =>  'Jesús María',
            'state_id' => 1],
                    
            [
            'city' =>  'Pabellón de Arteaga',
            'state_id' => 1,
            ],
                    
            [
            'city' =>  'Rincón de Romos',
            'state_id' => 1,
            ],
                    
            [
            'city' =>  'San José de Gracia',
            'state_id' => 1,
            ],
                    
            [
            'city' =>  'Tepezalá',
            'state_id' => 1,
            ],
                    
            [
            'city' =>  'El Llano',
            'state_id' => 1,
            ],
                    
            [
            'city' =>  'San Francisco de los Romo',
            'state_id' => 1,
            ],
                    
            [
            'city' =>  'Ensenada',
            'state_id' => 2,
            ],
                    
            [
            'city' =>  'Mexicali',
            'state_id' => 2,
            ],
                    
            [
            'city' =>  'Tecate',
            'state_id' => 2,
            ],
                    
            [
            'city' =>  'Tijuana',
            'state_id' => 2,
            ],
                    
            [
            'city' =>  'Playas de Rosarito',
            'state_id' => 2,
            ],
                    
            [
            'city' =>  'Comondú',
            'state_id' => 3,
            ],
                    
            [
            'city' =>  'Mulegé',
            'state_id' => 3,
            ],
                    
            [
            'city' =>  'La Paz',
            'state_id' => 3,
            ],
                    
            [
            'city' =>  'Los Cabos',
            'state_id' => 3,
            ],
                    
            [
            'city' =>  'Loreto',
            'state_id' => 3,
            ],
                    
            [
            'city' =>  'Calkiní',
            'state_id' => 4,
            ],
                    
            [
            'city' =>  'Campeche',
            'state_id' => 4,
            ],
                    
            [
            'city' =>  'Carmen',
            'state_id' => 4,
            ],
                    
            [
            'city' =>  'Champotón',
            'state_id' => 4,
            ],
                    
            [
            'city' =>  'Hecelchakán',
            'state_id' => 4,
            ],
                    
            [
            'city' =>  'Hopelchén',
            'state_id' => 4,
            ],
                    
            [
            'city' =>  'Palizada',
            'state_id' => 4,
            ],
                    
            [
            'city' =>  'Tenabo',
            'state_id' => 4,
            ],
                    
            [
            'city' =>  'Escárcega',
            'state_id' => 4,
            ],
                    
            [
            'city' =>  'Calakmul',
            'state_id' => 4,
            ],
                    
            [
            'city' =>  'Candelaria',
            'state_id' => 4,
            ],
                    
            [
            'city' =>  'Abasolo',
            'state_id' => 8,
            ],
                    
            [
            'city' =>  'Acuña',
            'state_id' => 8,
            ],
                    
            [
            'city' =>  'Allende',
            'state_id' => 8,
            ],
                    
            [
            'city' =>  'Arteaga',
            'state_id' => 8,
            ],
                    
            [
            'city' =>  'Candela',
            'state_id' => 8,
            ],
                    
            [
            'city' =>  'Castaños',
            'state_id' => 8,
            ],
                    
            [
            'city' =>  'Cuatro Ciénegas',
            'state_id' => 8,
            ],
                    
            [
            'city' =>  'Escobedo',
            'state_id' => 8,
            ],
                    
            [
            'city' =>  'Francisco I. Madero',
            'state_id' => 8,
            ],
                    
            [
            'city' =>  'Frontera',
            'state_id' => 8,
            ],
                    
            [
            'city' =>  'General Cepeda',
            'state_id' => 8,
            ],
                    
            [
            'city' =>  'Guerrero',
            'state_id' => 8,
            ],
                    
            [
            'city' =>  'Hidalgo',
            'state_id' => 8,
            ],
                    
            [
            'city' =>  'Jiménez',
            'state_id' => 8,
            ],
                    
            [
            'city' =>  'Juárez',
            'state_id' => 8,
            ],
                    
            [
            'city' =>  'Lamadrid',
            'state_id' => 8,
            ],
                    
            [
            'city' =>  'Matamoros',
            'state_id' => 8,
            ],
                    
            [
            'city' =>  'Monclova',
            'state_id' => 8,
            ],
                    
            [
            'city' =>  'Morelos',
            'state_id' => 8,
            ],
                    
            [
            'city' =>  'Múzquiz',
            'state_id' => 8,
            ],
                    
            [
            'city' =>  'Nadadores',
            'state_id' => 8,
            ],
                    
            [
            'city' =>  'Nava',
            'state_id' => 8,
            ],
                    
            [
            'city' =>  'Ocampo',
            'state_id' => 8,
            ],
                    
            [
            'city' =>  'Parras',
            'state_id' => 8,
            ],
                    
            [
            'city' =>  'Piedras Negras',
            'state_id' => 8,
            ],
                    
            [
            'city' =>  'Progreso',
            'state_id' => 8,
            ],
                    
            [
            'city' =>  'Ramos Arizpe',
            'state_id' => 8,
            ],
                    
            [
            'city' =>  'Sabinas',
            'state_id' => 8,
            ],
                    
            [
            'city' =>  'Sacramento',
            'state_id' => 8,
            ],
                    
            [
            'city' =>  'Saltillo',
            'state_id' => 8,
            ],
                    
            [
            'city' =>  'San Buenaventura',
            'state_id' => 8,
            ],
                    
            [
            'city' =>  'San Juan de Sabinas',
            'state_id' => 8,
            ],
                    
            [
            'city' =>  'San Pedro',
            'state_id' => 8,
            ],
                    
            [
            'city' =>  'Sierra Mojada',
            'state_id' => 8,
            ],
                    
            [
            'city' =>  'Torreón',
            'state_id' => 8,
            ],
                    
            [
            'city' =>  'Viesca',
            'state_id' => 8,
            ],
                    
            [
            'city' =>  'Villa Unión',
            'state_id' => 8,
            ],
                    
            [
            'city' =>  'Zaragoza',
            'state_id' => 8,
            ],
                    
            [
            'city' =>  'Armería',
            'state_id' => 9,
            ],
                    
            [
            'city' =>  'Colima',
            'state_id' => 9,
            ],
                    
            [
            'city' =>  'Comala',
            'state_id' => 9,
            ],
                    
            [
            'city' =>  'Coquimatlán',
            'state_id' => 9,
            ],
                    
            [
            'city' =>  'Cuauhtémoc',
            'state_id' => 9,
            ],
                    
            [
            'city' =>  'Ixtlahuacán',
            'state_id' => 9,
            ],
                    
            [
            'city' =>  'Manzanillo',
            'state_id' => 9,
            ],
                    
            [
            'city' =>  'Minatitlán',
            'state_id' => 9,
            ],
                    
            [
            'city' =>  'Tecomán',
            'state_id' => 9,
            ],
                    
            [
            'city' =>  'Villa de Álvarez',
            'state_id' => 9,
            ],
                    
            [
            'city' =>  'Acacoyagua',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Acala',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Acapetahua',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Altamirano',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Amatán',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Amatenango de la Frontera',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Amatenango del Valle',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Angel Albino Corzo',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Arriaga',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Bejucal de Ocampo',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Bella Vista',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Berriozábal',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Bochil',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'El Bosque',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Cacahoatán',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Catazajá',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Cintalapa',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Coapilla',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Comitán de Domínguez',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'La Concordia',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Copainalá',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Chalchihuitán',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Chamula',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Chanal',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Chapultenango',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Chenalhó',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Chiapa de Corzo',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Chiapilla',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Chicoasén',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Chicomuselo',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Chilón',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Escuintla',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Francisco León',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Frontera Comalapa',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Frontera Hidalgo',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'La Grandeza',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Huehuetán',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Huixtán',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Huitiupán',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Huixtla',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'La Independencia',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Ixhuatán',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Ixtacomitán',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Ixtapa',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Ixtapangajoya',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Jiquipilas',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Jitotol',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Juárez',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Larráinzar',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'La Libertad',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Mapastepec',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Las Margaritas',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Mazapa de Madero',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Mazatán',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Metapa',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Mitontic',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Motozintla',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Nicolás Ruíz',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Ocosingo',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Ocotepec',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Ocozocoautla de Espinosa',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Ostuacán',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Osumacinta',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Oxchuc',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Palenque',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Pantelhó',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Pantepec',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Pichucalco',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Pijijiapan',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'El Porvenir',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Villa Comaltitlán',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Pueblo Nuevo Solistahuacán',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Rayón',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Reforma',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Las Rosas',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Sabanilla',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Salto de Agua',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'San Cristóbal de las Casas',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'San Fernando',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Siltepec',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Simojovel',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Sitalá',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Socoltenango',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Solosuchiapa',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Soyaló',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Suchiapa',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Suchiate',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Sunuapa',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Tapachula',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Tapalapa',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Tapilula',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Tecpatán',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Tenejapa',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Teopisca',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Tila',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Tonalá',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Totolapa',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'La Trinitaria',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Tumbalá',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Tuxtla Gutiérrez',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Tuxtla Chico',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Tuzantán',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Tzimol',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Unión Juárez',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Venustiano Carranza',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Villa Corzo',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Villaflores',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Yajalón',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'San Lucas',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Zinacantán',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'San Juan Cancuc',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Aldama',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Benemérito de las Américas',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Maravilla Tenejapa',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Marqués de Comillas',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Montecristo de Guerrero',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'San Andrés Duraznal',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Santiago el Pinar',
            'state_id' => 5,
            ],
                    
            [
            'city' =>  'Ahumada',
            'state_id' => 6,
            ],
                    
            [
            'city' =>  'Aldama',
            'state_id' => 6,
            ],
                    
            [
            'city' =>  'Allende',
            'state_id' => 6,
            ],
                    
            [
            'city' =>  'Aquiles Serdán',
            'state_id' => 6,
            ],
                    
            [
            'city' =>  'Ascensión',
            'state_id' => 6,
            ],
                    
            [
            'city' =>  'Bachíniva',
            'state_id' => 6,
            ],
                    
            [
            'city' =>  'Balleza',
            'state_id' => 6,
            ],
                    
            [
            'city' =>  'Batopilas',
            'state_id' => 6,
            ],
                    
            [
            'city' =>  'Bocoyna',
            'state_id' => 6,
            ],
                    
            [
            'city' =>  'Buenaventura',
            'state_id' => 6,
            ],
                    
            [
            'city' =>  'Camargo',
            'state_id' => 6,
            ],
                    
            [
            'city' =>  'Carichí',
            'state_id' => 6,
            ],
                    
            [
            'city' =>  'Casas Grandes',
            'state_id' => 6,
            ],
                    
            [
            'city' =>  'Coronado',
            'state_id' => 6,
            ],
                    
            [
            'city' =>  'Coyame del Sotol',
            'state_id' => 6,
            ],
                    
            [
            'city' =>  'La Cruz',
            'state_id' => 6,
            ],
                    
            [
            'city' =>  'Cuauhtémoc',
            'state_id' => 6,
            ],
                    
            [
            'city' =>  'Cusihuiriachi',
            'state_id' => 6,
            ],
                    
            [
            'city' =>  'Chihuahua',
            'state_id' => 6,
            ],
                    
            [
            'city' =>  'Chínipas',
            'state_id' => 6,
            ],
                    
            [
            'city' =>  'Delicias',
            'state_id' => 6,
            ],
                    
            [
            'city' =>  'Dr. Belisario Domínguez',
            'state_id' => 6,
            ],
                    
            [
            'city' =>  'Galeana',
            'state_id' => 6,
            ],
                    
            [
            'city' =>  'Santa Isabel',
            'state_id' => 6,
            ],
                    
            [
            'city' =>  'Gómez Farías',
            'state_id' => 6,
            ],
                    
            [
            'city' =>  'Gran Morelos',
            'state_id' => 6,
            ],
                    
            [
            'city' =>  'Guachochi',
            'state_id' => 6,
            ],
                    
            [
            'city' =>  'Guadalupe',
            'state_id' => 6,
            ],
                    
            [
            'city' =>  'Guadalupe y Calvo',
            'state_id' => 6,
            ],
                    
            [
            'city' =>  'Guazapares',
            'state_id' => 6,
            ],
                    
            [
            'city' =>  'Guerrero',
            'state_id' => 6,
            ],
                    
            [
            'city' =>  'Hidalgo del Parral',
            'state_id' => 6,
            ],
                    
            [
            'city' =>  'Huejotitán',
            'state_id' => 6,
            ],
                    
            [
            'city' =>  'Ignacio Zaragoza',
            'state_id' => 6,
            ],
                    
            [
            'city' =>  'Janos',
            'state_id' => 6,
            ],
                    
            [
            'city' =>  'Jiménez',
            'state_id' => 6,
            ],
                    
            [
            'city' =>  'Juárez',
            'state_id' => 6,
            ],
                    
            [
            'city' =>  'Julimes',
            'state_id' => 6,
            ],
                    
            [
            'city' =>  'López',
            'state_id' => 6,
            ],
                    
            [
            'city' =>  'Madera',
            'state_id' => 6,
            ],
                    
            [
            'city' =>  'Maguarichi',
            'state_id' => 6,
            ],
                    
            [
            'city' =>  'Manuel Benavides',
            'state_id' => 6,
            ],
                    
            [
            'city' =>  'Matachí',
            'state_id' => 6,
            ],
                    
            [
            'city' =>  'Matamoros',
            'state_id' => 6,
            ],
                    
            [
            'city' =>  'Meoqui',
            'state_id' => 6,
            ],
                    
            [
            'city' =>  'Morelos',
            'state_id' => 6,
            ],
                    
            [
            'city' =>  'Moris',
            'state_id' => 6,
            ],
                    
            [
            'city' =>  'Namiquipa',
            'state_id' => 6,
            ],
                    
            [
            'city' =>  'Nonoava',
            'state_id' => 6,
            ],
                    
            [
            'city' =>  'Nuevo Casas Grandes',
            'state_id' => 6,
            ],
                    
            [
            'city' =>  'Ocampo',
            'state_id' => 6,
            ],
                    
            [
            'city' =>  'Ojinaga',
            'state_id' => 6,
            ],
                    
            [
            'city' =>  'Praxedis G. Guerrero',
            'state_id' => 6,
            ],
                    
            [
            'city' =>  'Riva Palacio',
            'state_id' => 6,
            ],
                    
            [
            'city' =>  'Rosales',
            'state_id' => 6,
            ],
                    
            [
            'city' =>  'Rosario',
            'state_id' => 6,
            ],
                    
            [
            'city' =>  'San Francisco de Borja',
            'state_id' => 6,
            ],
                    
            [
            'city' =>  'San Francisco de Conchos',
            'state_id' => 6,
            ],
                    
            [
            'city' =>  'San Francisco del Oro',
            'state_id' => 6,
            ],
                    
            [
            'city' =>  'Santa Bárbara',
            'state_id' => 6,
            ],
                    
            [
            'city' =>  'Satevó',
            'state_id' => 6,
            ],
                    
            [
            'city' =>  'Saucillo',
            'state_id' => 6,
            ],
                    
            [
            'city' =>  'Temósachic',
            'state_id' => 6,
            ],
                    
            [
            'city' =>  'El Tule',
            'state_id' => 6,
            ],
                    
            [
            'city' =>  'Urique',
            'state_id' => 6,
            ],
                    
            [
            'city' =>  'Uruachi',
            'state_id' => 6,
            ],
                    
            [
            'city' =>  'Valle de Zaragoza',
            'state_id' => 6,
            ],
                    
            [
            'city' =>  'Azcapotzalco',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Coyoacán',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Cuajimalpa de Morelos',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Gustavo A. Madero',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Iztacalco',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Iztapalapa',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'La Magdalena Contreras',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Milpa Alta',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Álvaro Obregón',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Tláhuac',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Tlalpan',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Xochimilco',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Benito Juárez',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Cuauhtémoc',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Miguel Hidalgo',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Venustiano Carranza',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Canatlán',
            'state_id' => 10,
            ],
                    
            [
            'city' =>  'Canelas',
            'state_id' => 10,
            ],
                    
            [
            'city' =>  'Coneto de Comonfort',
            'state_id' => 10,
            ],
                    
            [
            'city' =>  'Cuencamé',
            'state_id' => 10,
            ],
                    
            [
            'city' =>  'Durango',
            'state_id' => 10,
            ],
                    
            [
            'city' =>  'General Simón Bolívar',
            'state_id' => 10,
            ],
                    
            [
            'city' =>  'Gómez Palacio',
            'state_id' => 10,
            ],
                    
            [
            'city' =>  'Guadalupe Victoria',
            'state_id' => 10,
            ],
                    
            [
            'city' =>  'Guanaceví',
            'state_id' => 10,
            ],
                    
            [
            'city' =>  'Hidalgo',
            'state_id' => 10,
            ],
                    
            [
            'city' =>  'Indé',
            'state_id' => 10,
            ],
                    
            [
            'city' =>  'Lerdo',
            'state_id' => 10,
            ],
                    
            [
            'city' =>  'Mapimí',
            'state_id' => 10,
            ],
                    
            [
            'city' =>  'Mezquital',
            'state_id' => 10,
            ],
                    
            [
            'city' =>  'Nazas',
            'state_id' => 10,
            ],
                    
            [
            'city' =>  'Nombre de Dios',
            'state_id' => 10,
            ],
                    
            [
            'city' =>  'Ocampo',
            'state_id' => 10,
            ],
                    
            [
            'city' =>  'El Oro',
            'state_id' => 10,
            ],
                    
            [
            'city' =>  'Otáez',
            'state_id' => 10,
            ],
                    
            [
            'city' =>  'Pánuco de Coronado',
            'state_id' => 10,
            ],
                    
            [
            'city' =>  'Peñón Blanco',
            'state_id' => 10,
            ],
                    
            [
            'city' =>  'Poanas',
            'state_id' => 10,
            ],
                    
            [
            'city' =>  'Pueblo Nuevo',
            'state_id' => 10,
            ],
                    
            [
            'city' =>  'Rodeo',
            'state_id' => 10,
            ],
                    
            [
            'city' =>  'San Bernardo',
            'state_id' => 10,
            ],
                    
            [
            'city' =>  'San Dimas',
            'state_id' => 10,
            ],
                    
            [
            'city' =>  'San Juan de Guadalupe',
            'state_id' => 10,
            ],
                    
            [
            'city' =>  'San Juan del Río',
            'state_id' => 10,
            ],
                    
            [
            'city' =>  'San Luis del Cordero',
            'state_id' => 10,
            ],
                    
            [
            'city' =>  'San Pedro del Gallo',
            'state_id' => 10,
            ],
                    
            [
            'city' =>  'Santa Clara',
            'state_id' => 10,
            ],
                    
            [
            'city' =>  'Santiago Papasquiaro',
            'state_id' => 10,
            ],
                    
            [
            'city' =>  'Súchil',
            'state_id' => 10,
            ],
                    
            [
            'city' =>  'Tamazula',
            'state_id' => 10,
            ],
                    
            [
            'city' =>  'Tepehuanes',
            'state_id' => 10,
            ],
                    
            [
            'city' =>  'Tlahualilo',
            'state_id' => 10,
            ],
                    
            [
            'city' =>  'Topia',
            'state_id' => 10,
            ],
                    
            [
            'city' =>  'Vicente Guerrero',
            'state_id' => 10,
            ],
                    
            [
            'city' =>  'Nuevo Ideal',
            'state_id' => 10,
            ],
                    
            [
            'city' =>  'Abasolo',
            'state_id' => 12,
            ],
                    
            [
            'city' =>  'Acámbaro',
            'state_id' => 12,
            ],
                    
            [
            'city' =>  'San Miguel de Allende',
            'state_id' => 12,
            ],
                    
            [
            'city' =>  'Apaseo el Alto',
            'state_id' => 12,
            ],
                    
            [
            'city' =>  'Apaseo el Grande',
            'state_id' => 12,
            ],
                    
            [
            'city' =>  'Atarjea',
            'state_id' => 12,
            ],
                    
            [
            'city' =>  'Celaya',
            'state_id' => 12,
            ],
                    
            [
            'city' =>  'Manuel Doblado',
            'state_id' => 12,
            ],
                    
            [
            'city' =>  'Comonfort',
            'state_id' => 12,
            ],
                    
            [
            'city' =>  'Coroneo',
            'state_id' => 12,
            ],
                    
            [
            'city' =>  'Cortazar',
            'state_id' => 12,
            ],
                    
            [
            'city' =>  'Cuerámaro',
            'state_id' => 12,
            ],
                    
            [
            'city' =>  'Doctor Mora',
            'state_id' => 12,
            ],
                    
            [
            'city' =>  'Dolores Hidalgo Cuna de la Independencia Nacional',
            'state_id' => 12,
            ],
                    
            [
            'city' =>  'Guanajuato',
            'state_id' => 12,
            ],
                    
            [
            'city' =>  'Huanímaro',
            'state_id' => 12,
            ],
                    
            [
            'city' =>  'Irapuato',
            'state_id' => 12,
            ],
                    
            [
            'city' =>  'Jaral del Progreso',
            'state_id' => 12,
            ],
                    
            [
            'city' =>  'Jerécuaro',
            'state_id' => 12,
            ],
                    
            [
            'city' =>  'León',
            'state_id' => 12,
            ],
                    
            [
            'city' =>  'Moroleón',
            'state_id' => 12,
            ],
                    
            [
            'city' =>  'Ocampo',
            'state_id' => 12,
            ],
                    
            [
            'city' =>  'Pénjamo',
            'state_id' => 12,
            ],
                    
            [
            'city' =>  'Pueblo Nuevo',
            'state_id' => 12,
            ],
                    
            [
            'city' =>  'Purísima del Rincón',
            'state_id' => 12,
            ],
                    
            [
            'city' =>  'Romita',
            'state_id' => 12,
            ],
                    
            [
            'city' =>  'Salamanca',
            'state_id' => 12,
            ],
                    
            [
            'city' =>  'Salvatierra',
            'state_id' => 12,
            ],
                    
            [
            'city' =>  'San Diego de la Unión',
            'state_id' => 12,
            ],
                    
            [
            'city' =>  'San Felipe',
            'state_id' => 12,
            ],
                    
            [
            'city' =>  'San Francisco del Rincón',
            'state_id' => 12,
            ],
                    
            [
            'city' =>  'San José Iturbide',
            'state_id' => 12,
            ],
                    
            [
            'city' =>  'San Luis de la Paz',
            'state_id' => 12,
            ],
                    
            [
            'city' =>  'Santa Catarina',
            'state_id' => 12,
            ],
                    
            [
            'city' =>  'Santa Cruz de Juventino Rosas',
            'state_id' => 12,
            ],
                    
            [
            'city' =>  'Santiago Maravatío',
            'state_id' => 12,
            ],
                    
            [
            'city' =>  'Silao de la Victoria',
            'state_id' => 12,
            ],
                    
            [
            'city' =>  'Tarandacuao',
            'state_id' => 12,
            ],
                    
            [
            'city' =>  'Tarimoro',
            'state_id' => 12,
            ],
                    
            [
            'city' =>  'Tierra Blanca',
            'state_id' => 12,
            ],
                    
            [
            'city' =>  'Uriangato',
            'state_id' => 12,
            ],
                    
            [
            'city' =>  'Valle de Santiago',
            'state_id' => 12,
            ],
                    
            [
            'city' =>  'Victoria',
            'state_id' => 12,
            ],
                    
            [
            'city' =>  'Villagrán',
            'state_id' => 12,
            ],
                    
            [
            'city' =>  'Xichú',
            'state_id' => 12,
            ],
                    
            [
            'city' =>  'Yuriria',
            'state_id' => 12,
            ],
                    
            [
            'city' =>  'Acapulco de Juárez',
            'state_id' => 13,
            ],
                    
            [
            'city' =>  'Ahuacuotzingo',
            'state_id' => 13,
            ],
                    
            [
            'city' =>  'Ajuchitlán del Progreso',
            'state_id' => 13,
            ],
                    
            [
            'city' =>  'Alcozauca de Guerrero',
            'state_id' => 13,
            ],
                    
            [
            'city' =>  'Alpoyeca',
            'state_id' => 13,
            ],
                    
            [
            'city' =>  'Apaxtla',
            'state_id' => 13,
            ],
                    
            [
            'city' =>  'Arcelia',
            'state_id' => 13,
            ],
                    
            [
            'city' =>  'Atenango del Río',
            'state_id' => 13,
            ],
                    
            [
            'city' =>  'Atlamajalcingo del Monte',
            'state_id' => 13,
            ],
                    
            [
            'city' =>  'Atlixtac',
            'state_id' => 13,
            ],
                    
            [
            'city' =>  'Atoyac de Álvarez',
            'state_id' => 13,
            ],
                    
            [
            'city' =>  'Ayutla de los Libres',
            'state_id' => 13,
            ],
                    
            [
            'city' =>  'Azoyú',
            'state_id' => 13,
            ],
                    
            [
            'city' =>  'Benito Juárez',
            'state_id' => 13,
            ],
                    
            [
            'city' =>  'Buenavista de Cuéllar',
            'state_id' => 13,
            ],
                    
            [
            'city' =>  'Coahuayutla de José María Izazaga',
            'state_id' => 13,
            ],
                    
            [
            'city' =>  'Cocula',
            'state_id' => 13,
            ],
                    
            [
            'city' =>  'Copala',
            'state_id' => 13,
            ],
                    
            [
            'city' =>  'Copalillo',
            'state_id' => 13,
            ],
                    
            [
            'city' =>  'Copanatoyac',
            'state_id' => 13,
            ],
                    
            [
            'city' =>  'Coyuca de Benítez',
            'state_id' => 13,
            ],
                    
            [
            'city' =>  'Coyuca de Catalán',
            'state_id' => 13,
            ],
                    
            [
            'city' =>  'Cuajinicuilapa',
            'state_id' => 13,
            ],
                    
            [
            'city' =>  'Cualác',
            'state_id' => 13,
            ],
                    
            [
            'city' =>  'Cuautepec',
            'state_id' => 13,
            ],
                    
            [
            'city' =>  'Cuetzala del Progreso',
            'state_id' => 13,
            ],
                    
            [
            'city' =>  'Cutzamala de Pinzón',
            'state_id' => 13,
            ],
                    
            [
            'city' =>  'Chilapa de Álvarez',
            'state_id' => 13,
            ],
                    
            [
            'city' =>  'Chilpancingo de los Bravo',
            'state_id' => 13,
            ],
                    
            [
            'city' =>  'Florencio Villarreal',
            'state_id' => 13,
            ],
                    
            [
            'city' =>  'General Canuto A. Neri',
            'state_id' => 13,
            ],
                    
            [
            'city' =>  'General Heliodoro Castillo',
            'state_id' => 13,
            ],
                    
            [
            'city' =>  'Huamuxtitlán',
            'state_id' => 13,
            ],
                    
            [
            'city' =>  'Huitzuco de los Figueroa',
            'state_id' => 13,
            ],
                    
            [
            'city' =>  'Iguala de la Independencia',
            'state_id' => 13,
            ],
                    
            [
            'city' =>  'Igualapa',
            'state_id' => 13,
            ],
                    
            [
            'city' =>  'Ixcateopan de Cuauhtémoc',
            'state_id' => 13,
            ],
                    
            [
            'city' =>  'Zihuatanejo de Azueta',
            'state_id' => 13,
            ],
                    
            [
            'city' =>  'Juan R. Escudero',
            'state_id' => 13,
            ],
                    
            [
            'city' =>  'Leonardo Bravo',
            'state_id' => 13,
            ],
                    
            [
            'city' =>  'Malinaltepec',
            'state_id' => 13,
            ],
                    
            [
            'city' =>  'Mártir de Cuilapan',
            'state_id' => 13,
            ],
                    
            [
            'city' =>  'Metlatónoc',
            'state_id' => 13,
            ],
                    
            [
            'city' =>  'Mochitlán',
            'state_id' => 13,
            ],
                    
            [
            'city' =>  'Olinalá',
            'state_id' => 13,
            ],
                    
            [
            'city' =>  'Ometepec',
            'state_id' => 13,
            ],
                    
            [
            'city' =>  'Pedro Ascencio Alquisiras',
            'state_id' => 13,
            ],
                    
            [
            'city' =>  'Petatlán',
            'state_id' => 13,
            ],
                    
            [
            'city' =>  'Pilcaya',
            'state_id' => 13,
            ],
                    
            [
            'city' =>  'Pungarabato',
            'state_id' => 13,
            ],
                    
            [
            'city' =>  'Quechultenango',
            'state_id' => 13,
            ],
                    
            [
            'city' =>  'San Luis Acatlán',
            'state_id' => 13,
            ],
                    
            [
            'city' =>  'San Marcos',
            'state_id' => 13,
            ],
                    
            [
            'city' =>  'San Miguel Totolapan',
            'state_id' => 13,
            ],
                    
            [
            'city' =>  'Taxco de Alarcón',
            'state_id' => 13,
            ],
                    
            [
            'city' =>  'Tecoanapa',
            'state_id' => 13,
            ],
                    
            [
            'city' =>  'Técpan de Galeana',
            'state_id' => 13,
            ],
                    
            [
            'city' =>  'Teloloapan',
            'state_id' => 13,
            ],
                    
            [
            'city' =>  'Tepecoacuilco de Trujano',
            'state_id' => 13,
            ],
                    
            [
            'city' =>  'Tetipac',
            'state_id' => 13,
            ],
                    
            [
            'city' =>  'Tixtla de Guerrero',
            'state_id' => 13,
            ],
                    
            [
            'city' =>  'Tlacoachistlahuaca',
            'state_id' => 13,
            ],
                    
            [
            'city' =>  'Tlacoapa',
            'state_id' => 13,
            ],
                    
            [
            'city' =>  'Tlalchapa',
            'state_id' => 13,
            ],
                    
            [
            'city' =>  'Tlalixtaquilla de Maldonado',
            'state_id' => 13,
            ],
                    
            [
            'city' =>  'Tlapa de Comonfort',
            'state_id' => 13,
            ],
                    
            [
            'city' =>  'Tlapehuala',
            'state_id' => 13,
            ],
                    
            [
            'city' =>  'La Unión de Isidoro Montes de Oca',
            'state_id' => 13,
            ],
                    
            [
            'city' =>  'Xalpatláhuac',
            'state_id' => 13,
            ],
                    
            [
            'city' =>  'Xochihuehuetlán',
            'state_id' => 13,
            ],
                    
            [
            'city' =>  'Xochistlahuaca',
            'state_id' => 13,
            ],
                    
            [
            'city' =>  'Zapotitlán Tablas',
            'state_id' => 13,
            ],
                    
            [
            'city' =>  'Zirándaro',
            'state_id' => 13,
            ],
                    
            [
            'city' =>  'Zitlala',
            'state_id' => 13,
            ],
                    
            [
            'city' =>  'Eduardo Neri',
            'state_id' => 13,
            ],
                    
            [
            'city' =>  'Acatepec',
            'state_id' => 13,
            ],
                    
            [
            'city' =>  'Marquelia',
            'state_id' => 13,
            ],
                    
            [
            'city' =>  'Cochoapa el Grande',
            'state_id' => 13,
            ],
                    
            [
            'city' =>  'José Joaquín de Herrera',
            'state_id' => 13,
            ],
                    
            [
            'city' =>  'Juchitán',
            'state_id' => 13,
            ],
                    
            [
            'city' =>  'Iliatenco',
            'state_id' => 13,
            ],
                    
            [
            'city' =>  'Acatlán',
            'state_id' => 14,
            ],
                    
            [
            'city' =>  'Acaxochitlán',
            'state_id' => 14,
            ],
                    
            [
            'city' =>  'Actopan',
            'state_id' => 14,
            ],
                    
            [
            'city' =>  'Agua Blanca de Iturbide',
            'state_id' => 14,
            ],
                    
            [
            'city' =>  'Ajacuba',
            'state_id' => 14,
            ],
                    
            [
            'city' =>  'Alfajayucan',
            'state_id' => 14,
            ],
                    
            [
            'city' =>  'Almoloya',
            'state_id' => 14,
            ],
                    
            [
            'city' =>  'Apan',
            'state_id' => 14,
            ],
                    
            [
            'city' =>  'El Arenal',
            'state_id' => 14,
            ],
                    
            [
            'city' =>  'Atitalaquia',
            'state_id' => 14,
            ],
                    
            [
            'city' =>  'Atlapexco',
            'state_id' => 14,
            ],
                    
            [
            'city' =>  'Atotonilco el Grande',
            'state_id' => 14,
            ],
                    
            [
            'city' =>  'Atotonilco de Tula',
            'state_id' => 14,
            ],
                    
            [
            'city' =>  'Calnali',
            'state_id' => 14,
            ],
                    
            [
            'city' =>  'Cardonal',
            'state_id' => 14,
            ],
                    
            [
            'city' =>  'Cuautepec de Hinojosa',
            'state_id' => 14,
            ],
                    
            [
            'city' =>  'Chapantongo',
            'state_id' => 14,
            ],
                    
            [
            'city' =>  'Chapulhuacán',
            'state_id' => 14,
            ],
                    
            [
            'city' =>  'Chilcuautla',
            'state_id' => 14,
            ],
                    
            [
            'city' =>  'Eloxochitlán',
            'state_id' => 14,
            ],
                    
            [
            'city' =>  'Emiliano Zapata',
            'state_id' => 14,
            ],
                    
            [
            'city' =>  'Epazoyucan',
            'state_id' => 14,
            ],
                    
            [
            'city' =>  'Francisco I. Madero',
            'state_id' => 14,
            ],
                    
            [
            'city' =>  'Huasca de Ocampo',
            'state_id' => 14,
            ],
                    
            [
            'city' =>  'Huautla',
            'state_id' => 14,
            ],
                    
            [
            'city' =>  'Huazalingo',
            'state_id' => 14,
            ],
                    
            [
            'city' =>  'Huehuetla',
            'state_id' => 14,
            ],
                    
            [
            'city' =>  'Huejutla de Reyes',
            'state_id' => 14,
            ],
                    
            [
            'city' =>  'Huichapan',
            'state_id' => 14,
            ],
                    
            [
            'city' =>  'Ixmiquilpan',
            'state_id' => 14,
            ],
                    
            [
            'city' =>  'Jacala de Ledezma',
            'state_id' => 14,
            ],
                    
            [
            'city' =>  'Jaltocán',
            'state_id' => 14,
            ],
                    
            [
            'city' =>  'Juárez Hidalgo',
            'state_id' => 14,
            ],
                    
            [
            'city' =>  'Lolotla',
            'state_id' => 14,
            ],
                    
            [
            'city' =>  'Metepec',
            'state_id' => 14,
            ],
                    
            [
            'city' =>  'San Agustín Metzquititlán',
            'state_id' => 14,
            ],
                    
            [
            'city' =>  'Metztitlán',
            'state_id' => 14,
            ],
                    
            [
            'city' =>  'Mineral del Chico',
            'state_id' => 14,
            ],
                    
            [
            'city' =>  'Mineral del Monte',
            'state_id' => 14,
            ],
                    
            [
            'city' =>  'La Misión',
            'state_id' => 14,
            ],
                    
            [
            'city' =>  'Mixquiahuala de Juárez',
            'state_id' => 14,
            ],
                    
            [
            'city' =>  'Molango de Escamilla',
            'state_id' => 14,
            ],
                    
            [
            'city' =>  'Nicolás Flores',
            'state_id' => 14,
            ],
                    
            [
            'city' =>  'Nopala de Villagrán',
            'state_id' => 14,
            ],
                    
            [
            'city' =>  'Omitlán de Juárez',
            'state_id' => 14,
            ],
                    
            [
            'city' =>  'San Felipe Orizatlán',
            'state_id' => 14,
            ],
                    
            [
            'city' =>  'Pacula',
            'state_id' => 14,
            ],
                    
            [
            'city' =>  'Pachuca de Soto',
            'state_id' => 14,
            ],
                    
            [
            'city' =>  'Pisaflores',
            'state_id' => 14,
            ],
                    
            [
            'city' =>  'Progreso de Obregón',
            'state_id' => 14,
            ],
                    
            [
            'city' =>  'Mineral de la Reforma',
            'state_id' => 14,
            ],
                    
            [
            'city' =>  'San Agustín Tlaxiaca',
            'state_id' => 14,
            ],
                    
            [
            'city' =>  'San Bartolo Tutotepec',
            'state_id' => 14,
            ],
                    
            [
            'city' =>  'San Salvador',
            'state_id' => 14,
            ],
                    
            [
            'city' =>  'Santiago de Anaya',
            'state_id' => 14,
            ],
                    
            [
            'city' =>  'Santiago Tulantepec de Lugo Guerrero',
            'state_id' => 14,
            ],
                    
            [
            'city' =>  'Singuilucan',
            'state_id' => 14,
            ],
                    
            [
            'city' =>  'Tasquillo',
            'state_id' => 14,
            ],
                    
            [
            'city' =>  'Tecozautla',
            'state_id' => 14,
            ],
                    
            [
            'city' =>  'Tenango de Doria',
            'state_id' => 14,
            ],
                    
            [
            'city' =>  'Tepeapulco',
            'state_id' => 14,
            ],
                    
            [
            'city' =>  'Tepehuacán de Guerrero',
            'state_id' => 14,
            ],
                    
            [
            'city' =>  'Tepeji del Río de Ocampo',
            'state_id' => 14,
            ],
                    
            [
            'city' =>  'Tepetitlán',
            'state_id' => 14,
            ],
                    
            [
            'city' =>  'Tetepango',
            'state_id' => 14,
            ],
                    
            [
            'city' =>  'Villa de Tezontepec',
            'state_id' => 14,
            ],
                    
            [
            'city' =>  'Tezontepec de Aldama',
            'state_id' => 14,
            ],
                    
            [
            'city' =>  'Tianguistengo',
            'state_id' => 14,
            ],
                    
            [
            'city' =>  'Tizayuca',
            'state_id' => 14,
            ],
                    
            [
            'city' =>  'Tlahuelilpan',
            'state_id' => 14,
            ],
                    
            [
            'city' =>  'Tlahuiltepa',
            'state_id' => 14,
            ],
                    
            [
            'city' =>  'Tlanalapa',
            'state_id' => 14,
            ],
                    
            [
            'city' =>  'Tlanchinol',
            'state_id' => 14,
            ],
                    
            [
            'city' =>  'Tlaxcoapan',
            'state_id' => 14,
            ],
                    
            [
            'city' =>  'Tolcayuca',
            'state_id' => 14,
            ],
                    
            [
            'city' =>  'Tula de Allende',
            'state_id' => 14,
            ],
                    
            [
            'city' =>  'Tulancingo de Bravo',
            'state_id' => 14,
            ],
                    
            [
            'city' =>  'Xochiatipan',
            'state_id' => 14,
            ],
                    
            [
            'city' =>  'Xochicoatlán',
            'state_id' => 14,
            ],
                    
            [
            'city' =>  'Yahualica',
            'state_id' => 14,
            ],
                    
            [
            'city' =>  'Zacualtipán de Ángeles',
            'state_id' => 14,
            ],
                    
            [
            'city' =>  'Zapotlán de Juárez',
            'state_id' => 14,
            ],
                    
            [
            'city' =>  'Zempoala',
            'state_id' => 14,
            ],
                    
            [
            'city' =>  'Zimapán',
            'state_id' => 14,
            ],
                    
            [
            'city' =>  'Acatic',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Acatlán de Juárez',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Ahualulco de Mercado',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Amacueca',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Amatitán',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Ameca',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'San Juanito de Escobedo',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Arandas',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'El Arenal',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Atemajac de Brizuela',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Atengo',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Atenguillo',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Atotonilco el Alto',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Atoyac',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Autlán de Navarro',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Ayotlán',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Ayutla',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'La Barca',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Bolaños',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Cabo Corrientes',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Casimiro Castillo',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Cihuatlán',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Zapotlán el Grande',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Cocula',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Colotlán',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Concepción de Buenos Aires',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Cuautitlán de García Barragán',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Cuautla',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Cuquío',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Chapala',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Chimaltitán',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Chiquilistlán',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Degollado',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Ejutla',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Encarnación de Díaz',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Etzatlán',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'El Grullo',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Guachinango',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Guadalajara',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Hostotipaquillo',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Huejúcar',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Huejuquilla el Alto',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'La Huerta',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Ixtlahuacán de los Membrillos',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Ixtlahuacán del Río',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Jalostotitlán',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Jamay',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Jesús María',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Jilotlán de los Dolores',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Jocotepec',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Juanacatlán',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Juchitlán',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Lagos de Moreno',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'El Limón',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Magdalena',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Santa María del Oro',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'La Manzanilla de la Paz',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Mascota',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Mazamitla',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Mexticacán',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Mezquitic',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Mixtlán',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Ocotlán',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Ojuelos de Jalisco',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Pihuamo',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Poncitlán',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Puerto Vallarta',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Villa Purificación',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Quitupan',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'El Salto',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'San Cristóbal de la Barranca',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'San Diego de Alejandría',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'San Juan de los Lagos',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'San Julián',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'San Marcos',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'San Martín de Bolaños',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'San Martín Hidalgo',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'San Miguel el Alto',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Gómez Farías',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'San Sebastián del Oeste',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Santa María de los Ángeles',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Sayula',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Tala',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Talpa de Allende',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Tamazula de Gordiano',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Tapalpa',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Tecalitlán',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Tecolotlán',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Techaluta de Montenegro',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Tenamaxtlán',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Teocaltiche',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Teocuitatlán de Corona',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Tepatitlán de Morelos',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Tequila',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Teuchitlán',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Tizapán el Alto',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Tlajomulco de Zúñiga',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'San Pedro Tlaquepaque',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Tolimán',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Tomatlán',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Tonalá',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Tonaya',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Tonila',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Totatiche',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Tototlán',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Tuxcacuesco',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Tuxcueca',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Tuxpan',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Unión de San Antonio',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Unión de Tula',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Valle de Guadalupe',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Valle de Juárez',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'San Gabriel',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Villa Corona',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Villa Guerrero',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Villa Hidalgo',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Cañadas de Obregón',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Yahualica de González Gallo',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Zacoalco de Torres',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Zapopan',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Zapotiltic',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Zapotitlán de Vadillo',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Zapotlán del Rey',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Zapotlanejo',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'San Ignacio Cerro Gordo',
            'state_id' => 15,
            ],
                    
            [
            'city' =>  'Acambay de Ruíz Castañeda',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Acolman',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Aculco',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Almoloya de Alquisiras',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Almoloya de Juárez',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Almoloya del Río',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Amanalco',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Amatepec',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Amecameca',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Apaxco',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Atenco',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Atizapán',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Atizapán de Zaragoza',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Atlacomulco',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Atlautla',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Axapusco',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Ayapango',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Calimaya',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Capulhuac',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Coacalco de Berriozábal',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Coatepec Harinas',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Cocotitlán',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Coyotepec',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Cuautitlán',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Chalco',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Chapa de Mota',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Chapultepec',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Chiautla',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Chicoloapan',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Chiconcuac',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Chimalhuacán',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Donato Guerra',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Ecatepec de Morelos',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Ecatzingo',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Huehuetoca',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Hueypoxtla',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Huixquilucan',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Isidro Fabela',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Ixtapaluca',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Ixtapan de la Sal',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Ixtapan del Oro',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Ixtlahuaca',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Xalatlaco',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Jaltenco',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Jilotepec',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Jilotzingo',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Jiquipilco',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Jocotitlán',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Joquicingo',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Juchitepec',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Lerma',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Malinalco',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Melchor Ocampo',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Metepec',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Mexicaltzingo',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Morelos',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Naucalpan de Juárez',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Nezahualcóyotl',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Nextlalpan',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Nicolás Romero',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Nopaltepec',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Ocoyoacac',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Ocuilan',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'El Oro',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Otumba',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Otzoloapan',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Otzolotepec',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Ozumba',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Papalotla',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'La Paz',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Polotitlán',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Rayón',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'San Antonio la Isla',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'San Felipe del Progreso',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'San Martín de las Pirámides',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'San Mateo Atenco',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'San Simón de Guerrero',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Santo Tomás',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Soyaniquilpan de Juárez',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Sultepec',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Tecámac',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Tejupilco',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Temamatla',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Temascalapa',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Temascalcingo',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Temascaltepec',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Temoaya',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Tenancingo',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Tenango del Aire',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Tenango del Valle',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Teoloyucan',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Teotihuacán',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Tepetlaoxtoc',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Tepetlixpa',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Tepotzotlán',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Tequixquiac',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Texcaltitlán',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Texcalyacac',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Texcoco',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Tezoyuca',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Tianguistenco',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Timilpan',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Tlalmanalco',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Tlalnepantla de Baz',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Tlatlaya',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Toluca',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Tonatico',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Tultepec',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Tultitlán',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Valle de Bravo',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Villa de Allende',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Villa del Carbón',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Villa Guerrero',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Villa Victoria',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Xonacatlán',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Zacazonapan',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Zacualpan',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Zinacantepec',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Zumpahuacán',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Zumpango',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Cuautitlán Izcalli',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Valle de Chalco Solidaridad',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Luvianos',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'San José del Rincón',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Tonanitla',
            'state_id' => 7,
            ],
                    
            [
            'city' =>  'Acuitzio',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Aguililla',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Álvaro Obregón',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Angamacutiro',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Angangueo',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Apatzingán',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Aporo',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Aquila',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Ario',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Arteaga',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Briseñas',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Buenavista',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Carácuaro',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Coahuayana',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Coalcomán de Vázquez Pallares',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Coeneo',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Contepec',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Copándaro',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Cotija',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Cuitzeo',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Charapan',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Charo',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Chavinda',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Cherán',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Chilchota',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Chinicuila',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Chucándiro',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Churintzio',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Churumuco',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Ecuandureo',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Epitacio Huerta',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Erongarícuaro',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Gabriel Zamora',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Hidalgo',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'La Huacana',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Huandacareo',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Huaniqueo',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Huetamo',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Huiramba',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Indaparapeo',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Irimbo',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Ixtlán',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Jacona',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Jiménez',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Jiquilpan',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Juárez',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Jungapeo',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Lagunillas',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Madero',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Maravatío',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Marcos Castellanos',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Lázaro Cárdenas',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Morelia',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Morelos',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Múgica',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Nahuatzen',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Nocupétaro',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Nuevo Parangaricutiro',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Nuevo Urecho',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Numarán',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Ocampo',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Pajacuarán',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Panindícuaro',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Parácuaro',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Paracho',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Pátzcuaro',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Penjamillo',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Peribán',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'La Piedad',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Purépero',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Puruándiro',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Queréndaro',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Quiroga',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Cojumatlán de Régules',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Los Reyes',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Sahuayo',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'San Lucas',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Santa Ana Maya',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Salvador Escalante',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Senguio',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Susupuato',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Tacámbaro',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Tancítaro',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Tangamandapio',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Tangancícuaro',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Tanhuato',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Taretan',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Tarímbaro',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Tepalcatepec',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Tingambato',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Tingüindín',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Tiquicheo de Nicolás Romero',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Tlalpujahua',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Tlazazalca',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Tocumbo',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Tumbiscatío',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Turicato',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Tuxpan',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Tuzantla',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Tzintzuntzan',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Tzitzio',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Uruapan',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Venustiano Carranza',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Villamar',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Vista Hermosa',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Yurécuaro',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Zacapu',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Zamora',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Zináparo',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Zinapécuaro',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Ziracuaretiro',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Zitácuaro',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'José Sixto Verduzco',
            'state_id' => 16,
            ],
                    
            [
            'city' =>  'Amacuzac',
            'state_id' => 17,
            ],
                    
            [
            'city' =>  'Atlatlahucan',
            'state_id' => 17,
            ],
                    
            [
            'city' =>  'Axochiapan',
            'state_id' => 17,
            ],
                    
            [
            'city' =>  'Ayala',
            'state_id' => 17,
            ],
                    
            [
            'city' =>  'Coatlán del Río',
            'state_id' => 17,
            ],
                    
            [
            'city' =>  'Cuautla',
            'state_id' => 17,
            ],
                    
            [
            'city' =>  'Cuernavaca',
            'state_id' => 17,
            ],
                    
            [
            'city' =>  'Emiliano Zapata',
            'state_id' => 17,
            ],
                    
            [
            'city' =>  'Huitzilac',
            'state_id' => 17,
            ],
                    
            [
            'city' =>  'Jantetelco',
            'state_id' => 17,
            ],
                    
            [
            'city' =>  'Jiutepec',
            'state_id' => 17,
            ],
                    
            [
            'city' =>  'Jojutla',
            'state_id' => 17,
            ],
                    
            [
            'city' =>  'Jonacatepec',
            'state_id' => 17,
            ],
                    
            [
            'city' =>  'Mazatepec',
            'state_id' => 17,
            ],
                    
            [
            'city' =>  'Miacatlán',
            'state_id' => 17,
            ],
                    
            [
            'city' =>  'Ocuituco',
            'state_id' => 17,
            ],
                    
            [
            'city' =>  'Puente de Ixtla',
            'state_id' => 17,
            ],
                    
            [
            'city' =>  'Temixco',
            'state_id' => 17,
            ],
                    
            [
            'city' =>  'Tepalcingo',
            'state_id' => 17,
            ],
                    
            [
            'city' =>  'Tepoztlán',
            'state_id' => 17,
            ],
                    
            [
            'city' =>  'Tetecala',
            'state_id' => 17,
            ],
                    
            [
            'city' =>  'Tetela del Volcán',
            'state_id' => 17,
            ],
                    
            [
            'city' =>  'Tlalnepantla',
            'state_id' => 17,
            ],
                    
            [
            'city' =>  'Tlaltizapán de Zapata',
            'state_id' => 17,
            ],
                    
            [
            'city' =>  'Tlaquiltenango',
            'state_id' => 17,
            ],
                    
            [
            'city' =>  'Tlayacapan',
            'state_id' => 17,
            ],
                    
            [
            'city' =>  'Totolapan',
            'state_id' => 17,
            ],
                    
            [
            'city' =>  'Xochitepec',
            'state_id' => 17,
            ],
                    
            [
            'city' =>  'Yautepec',
            'state_id' => 17,
            ],
                    
            [
            'city' =>  'Yecapixtla',
            'state_id' => 17,
            ],
                    
            [
            'city' =>  'Zacatepec',
            'state_id' => 17,
            ],
                    
            [
            'city' =>  'Zacualpan de Amilpas',
            'state_id' => 17,
            ],
                    
            [
            'city' =>  'Temoac',
            'state_id' => 17,
            ],
                    
            [
            'city' =>  'Acaponeta',
            'state_id' => 18,
            ],
                    
            [
            'city' =>  'Ahuacatlán',
            'state_id' => 18,
            ],
                    
            [
            'city' =>  'Amatlán de Cañas',
            'state_id' => 18,
            ],
                    
            [
            'city' =>  'Compostela',
            'state_id' => 18,
            ],
                    
            [
            'city' =>  'Huajicori',
            'state_id' => 18,
            ],
                    
            [
            'city' =>  'Ixtlán del Río',
            'state_id' => 18,
            ],
                    
            [
            'city' =>  'Jala',
            'state_id' => 18,
            ],
                    
            [
            'city' =>  'Xalisco',
            'state_id' => 18,
            ],
                    
            [
            'city' =>  'Del Nayar',
            'state_id' => 18,
            ],
                    
            [
            'city' =>  'Rosamorada',
            'state_id' => 18,
            ],
                    
            [
            'city' =>  'Ruíz',
            'state_id' => 18,
            ],
                    
            [
            'city' =>  'San Blas',
            'state_id' => 18,
            ],
                    
            [
            'city' =>  'San Pedro Lagunillas',
            'state_id' => 18,
            ],
                    
            [
            'city' =>  'Santa María del Oro',
            'state_id' => 18,
            ],
                    
            [
            'city' =>  'Santiago Ixcuintla',
            'state_id' => 18,
            ],
                    
            [
            'city' =>  'Tecuala',
            'state_id' => 18,
            ],
                    
            [
            'city' =>  'Tepic',
            'state_id' => 18,
            ],
                    
            [
            'city' =>  'Tuxpan',
            'state_id' => 18,
            ],
                    
            [
            'city' =>  'La Yesca',
            'state_id' => 18,
            ],
                    
            [
            'city' =>  'Bahía de Banderas',
            'state_id' => 18,
            ],
                    
            [
            'city' =>  'Abasolo',
            'state_id' => 19,
            ],
                    
            [
            'city' =>  'Agualeguas',
            'state_id' => 19,
            ],
                    
            [
            'city' =>  'Los Aldamas',
            'state_id' => 19,
            ],
                    
            [
            'city' =>  'Allende',
            'state_id' => 19,
            ],
                    
            [
            'city' =>  'Anáhuac',
            'state_id' => 19,
            ],
                    
            [
            'city' =>  'Apodaca',
            'state_id' => 19,
            ],
                    
            [
            'city' =>  'Aramberri',
            'state_id' => 19,
            ],
                    
            [
            'city' =>  'Bustamante',
            'state_id' => 19,
            ],
                    
            [
            'city' =>  'Cadereyta Jiménez',
            'state_id' => 19,
            ],
                    
            [
            'city' =>  'El Carmen',
            'state_id' => 19,
            ],
                    
            [
            'city' =>  'Cerralvo',
            'state_id' => 19,
            ],
                    
            [
            'city' =>  'Ciénega de Flores',
            'state_id' => 19,
            ],
                    
            [
            'city' =>  'China',
            'state_id' => 19,
            ],
                    
            [
            'city' =>  'Doctor Arroyo',
            'state_id' => 19,
            ],
                    
            [
            'city' =>  'Doctor Coss',
            'state_id' => 19,
            ],
                    
            [
            'city' =>  'Doctor González',
            'state_id' => 19,
            ],
                    
            [
            'city' =>  'Galeana',
            'state_id' => 19,
            ],
                    
            [
            'city' =>  'García',
            'state_id' => 19,
            ],
                    
            [
            'city' =>  'San Pedro Garza García',
            'state_id' => 19,
            ],
                    
            [
            'city' =>  'General Bravo',
            'state_id' => 19,
            ],
                    
            [
            'city' =>  'General Escobedo',
            'state_id' => 19,
            ],
                    
            [
            'city' =>  'General Terán',
            'state_id' => 19,
            ],
                    
            [
            'city' =>  'General Treviño',
            'state_id' => 19,
            ],
                    
            [
            'city' =>  'General Zaragoza',
            'state_id' => 19,
            ],
                    
            [
            'city' =>  'General Zuazua',
            'state_id' => 19,
            ],
                    
            [
            'city' =>  'Guadalupe',
            'state_id' => 19,
            ],
                    
            [
            'city' =>  'Los Herreras',
            'state_id' => 19,
            ],
                    
            [
            'city' =>  'Higueras',
            'state_id' => 19,
            ],
                    
            [
            'city' =>  'Hualahuises',
            'state_id' => 19,
            ],
                    
            [
            'city' =>  'Iturbide',
            'state_id' => 19,
            ],
                    
            [
            'city' =>  'Juárez',
            'state_id' => 19,
            ],
                    
            [
            'city' =>  'Lampazos de Naranjo',
            'state_id' => 19,
            ],
                    
            [
            'city' =>  'Linares',
            'state_id' => 19,
            ],
                    
            [
            'city' =>  'Marín',
            'state_id' => 19,
            ],
                    
            [
            'city' =>  'Melchor Ocampo',
            'state_id' => 19,
            ],
                    
            [
            'city' =>  'Mier y Noriega',
            'state_id' => 19,
            ],
                    
            [
            'city' =>  'Mina',
            'state_id' => 19,
            ],
                    
            [
            'city' =>  'Montemorelos',
            'state_id' => 19,
            ],
                    
            [
            'city' =>  'Monterrey',
            'state_id' => 19,
            ],
                    
            [
            'city' =>  'Parás',
            'state_id' => 19,
            ],
                    
            [
            'city' =>  'Pesquería',
            'state_id' => 19,
            ],
                    
            [
            'city' =>  'Los Ramones',
            'state_id' => 19,
            ],
                    
            [
            'city' =>  'Rayones',
            'state_id' => 19,
            ],
                    
            [
            'city' =>  'Sabinas Hidalgo',
            'state_id' => 19,
            ],
                    
            [
            'city' =>  'Salinas Victoria',
            'state_id' => 19,
            ],
                    
            [
            'city' =>  'San Nicolás de los Garza',
            'state_id' => 19,
            ],
                    
            [
            'city' =>  'Hidalgo',
            'state_id' => 19,
            ],
                    
            [
            'city' =>  'Santa Catarina',
            'state_id' => 19,
            ],
                    
            [
            'city' =>  'Santiago',
            'state_id' => 19,
            ],
                    
            [
            'city' =>  'Vallecillo',
            'state_id' => 19,
            ],
                    
            [
            'city' =>  'Villaldama',
            'state_id' => 19,
            ],
                    
            [
            'city' =>  'Abejones',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Acatlán de Pérez Figueroa',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Asunción Cacalotepec',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Asunción Cuyotepeji',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Asunción Ixtaltepec',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Asunción Nochixtlán',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Asunción Ocotlán',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Asunción Tlacolulita',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Ayotzintepec',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'El Barrio de la Soledad',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Calihualá',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Candelaria Loxicha',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Ciénega de Zimatlán',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Ciudad Ixtepec',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Coatecas Altas',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Coicoyán de las Flores',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'La Compañía',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Concepción Buenavista',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Concepción Pápalo',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Constancia del Rosario',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Cosolapa',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Cosoltepec',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Cuilápam de Guerrero',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Cuyamecalco Villa de Zaragoza',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Chahuites',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Chalcatongo de Hidalgo',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Chiquihuitlán de Benito Juárez',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Heroica Ciudad de Ejutla de Crespo',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Eloxochitlán de Flores Magón',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'El Espinal',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Tamazulápam del Espíritu Santo',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Fresnillo de Trujano',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Guadalupe Etla',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Guadalupe de Ramírez',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Guelatao de Juárez',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Guevea de Humboldt',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Mesones Hidalgo',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Villa Hidalgo',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Heroica Ciudad de Huajuapan de León',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Huautepec',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Huautla de Jiménez',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Ixtlán de Juárez',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Heroica Ciudad de Juchitán de Zaragoza',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Loma Bonita',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Magdalena Apasco',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Magdalena Jaltepec',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa Magdalena Jicotlán',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Magdalena Mixtepec',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Magdalena Ocotlán',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Magdalena Peñasco',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Magdalena Teitipac',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Magdalena Tequisistlán',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Magdalena Tlacotepec',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Magdalena Zahuatlán',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Mariscala de Juárez',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Mártires de Tacubaya',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Matías Romero Avendaño',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Mazatlán Villa de Flores',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Miahuatlán de Porfirio Díaz',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Mixistlán de la Reforma',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Monjas',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Natividad',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Nazareno Etla',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Nejapa de Madero',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Ixpantepec Nieves',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santiago Niltepec',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Oaxaca de Juárez',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Ocotlán de Morelos',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'La Pe',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Pinotepa de Don Luis',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Pluma Hidalgo',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San José del Progreso',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Putla Villa de Guerrero',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa Catarina Quioquitani',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Reforma de Pineda',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'La Reforma',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Reyes Etla',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Rojas de Cuauhtémoc',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Salina Cruz',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Agustín Amatengo',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Agustín Atenango',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Agustín Chayuco',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Agustín de las Juntas',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Agustín Etla',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Agustín Loxicha',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Agustín Tlacotepec',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Agustín Yatareni',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Andrés Cabecera Nueva',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Andrés Dinicuiti',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Andrés Huaxpaltepec',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Andrés Huayápam',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Andrés Ixtlahuaca',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Andrés Lagunas',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Andrés Nuxiño',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Andrés Paxtlán',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Andrés Sinaxtla',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Andrés Solaga',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Andrés Teotilálpam',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Andrés Tepetlapa',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Andrés Yaá',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Andrés Zabache',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Andrés Zautla',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Antonino Castillo Velasco',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Antonino el Alto',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Antonino Monte Verde',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Antonio Acutla',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Antonio de la Cal',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Antonio Huitepec',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Antonio Nanahuatípam',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Antonio Sinicahua',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Antonio Tepetlapa',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Baltazar Chichicápam',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Baltazar Loxicha',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Baltazar Yatzachi el Bajo',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Bartolo Coyotepec',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Bartolomé Ayautla',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Bartolomé Loxicha',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Bartolomé Quialana',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Bartolomé Yucuañe',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Bartolomé Zoogocho',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Bartolo Soyaltepec',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Bartolo Yautepec',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Bernardo Mixtepec',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Blas Atempa',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Carlos Yautepec',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Cristóbal Amatlán',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Cristóbal Amoltepec',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Cristóbal Lachirioag',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Cristóbal Suchixtlahuaca',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Dionisio del Mar',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Dionisio Ocotepec',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Dionisio Ocotlán',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Esteban Atatlahuca',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Felipe Jalapa de Díaz',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Felipe Tejalápam',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Felipe Usila',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Francisco Cahuacuá',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Francisco Cajonos',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Francisco Chapulapa',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Francisco Chindúa',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Francisco del Mar',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Francisco Huehuetlán',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Francisco Ixhuatán',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Francisco Jaltepetongo',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Francisco Lachigoló',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Francisco Logueche',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Francisco Nuxaño',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Francisco Ozolotepec',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Francisco Sola',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Francisco Telixtlahuaca',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Francisco Teopan',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Francisco Tlapancingo',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Gabriel Mixtepec',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Ildefonso Amatlán',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Ildefonso Sola',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Ildefonso Villa Alta',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Jacinto Amilpas',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Jacinto Tlacotepec',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Jerónimo Coatlán',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Jerónimo Silacayoapilla',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Jerónimo Sosola',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Jerónimo Taviche',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Jerónimo Tecóatl',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Jorge Nuchita',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San José Ayuquila',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San José Chiltepec',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San José del Peñasco',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San José Estancia Grande',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San José Independencia',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San José Lachiguiri',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San José Tenango',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Juan Achiutla',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Juan Atepec',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Ánimas Trujano',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Juan Bautista Atatlahuca',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Juan Bautista Coixtlahuaca',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Juan Bautista Cuicatlán',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Juan Bautista Guelache',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Juan Bautista Jayacatlán',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Juan Bautista Lo de Soto',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Juan Bautista Suchitepec',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Juan Bautista Tlacoatzintepec',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Juan Bautista Tlachichilco',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Juan Bautista Tuxtepec',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Juan Cacahuatepec',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Juan Cieneguilla',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Juan Coatzóspam',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Juan Colorado',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Juan Comaltepec',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Juan Cotzocón',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Juan Chicomezúchil',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Juan Chilateca',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Juan del Estado',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Juan del Río',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Juan Diuxi',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Juan Evangelista Analco',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Juan Guelavía',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Juan Guichicovi',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Juan Ihualtepec',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Juan Juquila Mixes',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Juan Juquila Vijanos',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Juan Lachao',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Juan Lachigalla',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Juan Lajarcia',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Juan Lalana',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Juan de los Cués',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Juan Mazatlán',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Juan Mixtepec',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Juan Mixtepec',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Juan Ñumí',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Juan Ozolotepec',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Juan Petlapa',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Juan Quiahije',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Juan Quiotepec',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Juan Sayultepec',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Juan Tabaá',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Juan Tamazola',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Juan Teita',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Juan Teitipac',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Juan Tepeuxila',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Juan Teposcolula',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Juan Yaeé',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Juan Yatzona',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Juan Yucuita',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Lorenzo',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Lorenzo Albarradas',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Lorenzo Cacaotepec',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Lorenzo Cuaunecuiltitla',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Lorenzo Texmelúcan',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Lorenzo Victoria',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Lucas Camotlán',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Lucas Ojitlán',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Lucas Quiaviní',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Lucas Zoquiápam',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Luis Amatlán',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Marcial Ozolotepec',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Marcos Arteaga',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Martín de los Cansecos',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Martín Huamelúlpam',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Martín Itunyoso',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Martín Lachilá',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Martín Peras',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Martín Tilcajete',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Martín Toxpalan',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Martín Zacatepec',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Mateo Cajonos',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Capulálpam de Méndez',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Mateo del Mar',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Mateo Yoloxochitlán',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Mateo Etlatongo',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Mateo Nejápam',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Mateo Peñasco',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Mateo Piñas',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Mateo Río Hondo',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Mateo Sindihui',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Mateo Tlapiltepec',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Melchor Betaza',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Miguel Achiutla',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Miguel Ahuehuetitlán',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Miguel Aloápam',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Miguel Amatitlán',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Miguel Amatlán',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Miguel Coatlán',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Miguel Chicahua',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Miguel Chimalapa',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Miguel del Puerto',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Miguel del Río',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Miguel Ejutla',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Miguel el Grande',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Miguel Huautla',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Miguel Mixtepec',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Miguel Panixtlahuaca',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Miguel Peras',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Miguel Piedras',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Miguel Quetzaltepec',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Miguel Santa Flor',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Villa Sola de Vega',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Miguel Soyaltepec',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Miguel Suchixtepec',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Villa Talea de Castro',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Miguel Tecomatlán',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Miguel Tenango',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Miguel Tequixtepec',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Miguel Tilquiápam',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Miguel Tlacamama',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Miguel Tlacotepec',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Miguel Tulancingo',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Miguel Yotao',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Nicolás',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Nicolás Hidalgo',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Pablo Coatlán',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Pablo Cuatro Venados',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Pablo Etla',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Pablo Huitzo',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Pablo Huixtepec',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Pablo Macuiltianguis',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Pablo Tijaltepec',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Pablo Villa de Mitla',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Pablo Yaganiza',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Pedro Amuzgos',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Pedro Apóstol',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Pedro Atoyac',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Pedro Cajonos',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Pedro Coxcaltepec Cántaros',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Pedro Comitancillo',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Pedro el Alto',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Pedro Huamelula',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Pedro Huilotepec',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Pedro Ixcatlán',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Pedro Ixtlahuaca',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Pedro Jaltepetongo',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Pedro Jicayán',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Pedro Jocotipac',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Pedro Juchatengo',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Pedro Mártir',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Pedro Mártir Quiechapa',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Pedro Mártir Yucuxaco',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Pedro Mixtepec',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Pedro Mixtepec',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Pedro Molinos',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Pedro Nopala',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Pedro Ocopetatillo',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Pedro Ocotepec',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Pedro Pochutla',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Pedro Quiatoni',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Pedro Sochiápam',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Pedro Tapanatepec',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Pedro Taviche',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Pedro Teozacoalco',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Pedro Teutila',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Pedro Tidaá',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Pedro Topiltepec',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Pedro Totolápam',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Villa de Tututepec de Melchor Ocampo',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Pedro Yaneri',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Pedro Yólox',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Pedro y San Pablo Ayutla',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Villa de Etla',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Pedro y San Pablo Teposcolula',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Pedro y San Pablo Tequixtepec',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Pedro Yucunama',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Raymundo Jalpan',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Sebastián Abasolo',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Sebastián Coatlán',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Sebastián Ixcapa',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Sebastián Nicananduta',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Sebastián Río Hondo',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Sebastián Tecomaxtlahuaca',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Sebastián Teitipac',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Sebastián Tutla',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Simón Almolongas',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Simón Zahuatlán',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa Ana',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa Ana Ateixtlahuaca',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa Ana Cuauhtémoc',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa Ana del Valle',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa Ana Tavela',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa Ana Tlapacoyan',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa Ana Yareni',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa Ana Zegache',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa Catalina Quierí',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa Catarina Cuixtla',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa Catarina Ixtepeji',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa Catarina Juquila',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa Catarina Lachatao',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa Catarina Loxicha',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa Catarina Mechoacán',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa Catarina Minas',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa Catarina Quiané',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa Catarina Tayata',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa Catarina Ticuá',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa Catarina Yosonotú',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa Catarina Zapoquila',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa Cruz Acatepec',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa Cruz Amilpas',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa Cruz de Bravo',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa Cruz Itundujia',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa Cruz Mixtepec',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa Cruz Nundaco',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa Cruz Papalutla',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa Cruz Tacache de Mina',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa Cruz Tacahua',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa Cruz Tayata',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa Cruz Xitla',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa Cruz Xoxocotlán',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa Cruz Zenzontepec',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa Gertrudis',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa Inés del Monte',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa Inés Yatzeche',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa Lucía del Camino',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa Lucía Miahuatlán',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa Lucía Monteverde',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa Lucía Ocotlán',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa María Alotepec',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa María Apazco',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa María la Asunción',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Heroica Ciudad de Tlaxiaco',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Ayoquezco de Aldama',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa María Atzompa',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa María Camotlán',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa María Colotepec',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa María Cortijo',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa María Coyotepec',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa María Chachoápam',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Villa de Chilapa de Díaz',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa María Chilchotla',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa María Chimalapa',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa María del Rosario',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa María del Tule',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa María Ecatepec',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa María Guelacé',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa María Guienagati',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa María Huatulco',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa María Huazolotitlán',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa María Ipalapa',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa María Ixcatlán',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa María Jacatepec',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa María Jalapa del Marqués',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa María Jaltianguis',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa María Lachixío',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa María Mixtequilla',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa María Nativitas',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa María Nduayaco',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa María Ozolotepec',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa María Pápalo',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa María Peñoles',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa María Petapa',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa María Quiegolani',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa María Sola',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa María Tataltepec',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa María Tecomavaca',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa María Temaxcalapa',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa María Temaxcaltepec',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa María Teopoxco',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa María Tepantlali',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa María Texcatitlán',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa María Tlahuitoltepec',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa María Tlalixtac',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa María Tocityca',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa María Totolapilla',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa María Xadani',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa María Yalina',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa María Yavesía',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa María Yolotepec',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa María Yosoyúa',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa María Yucuhiti',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa María Zacatepec',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa María Zaniza',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa María Zoquitlán',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santiago Amoltepec',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santiago Apoala',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santiago Apóstol',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santiago Astata',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santiago Atitlán',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santiago Ayuquililla',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santiago Cacaloxtepec',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santiago Camotlán',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santiago Comaltepec',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santiago Chazumba',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santiago Choápam',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santiago del Río',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santiago Huajolotitlán',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santiago Huauclilla',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santiago Ihuitlán Plumas',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santiago Ixcuintepec',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santiago Ixtayutla',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santiago Jamiltepec',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santiago Jocotepec',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santiago Juxtlahuaca',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santiago Lachiguiri',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santiago Lalopa',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santiago Laollaga',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santiago Laxopa',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santiago Llano Grande',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santiago Matatlán',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santiago Miltepec',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santiago Minas',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santiago Nacaltepec',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santiago Nejapilla',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santiago Nundiche',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santiago Nuyoó',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santiago Pinotepa Nacional',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santiago Suchilquitongo',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santiago Tamazola',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santiago Tapextla',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Villa Tejúpam de la Unión',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santiago Tenango',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santiago Tepetlapa',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santiago Tetepec',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santiago Texcalcingo',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santiago Textitlán',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santiago Tilantongo',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santiago Tillo',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santiago Tlazoyaltepec',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santiago Xanica',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santiago Xiacuí',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santiago Yaitepec',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santiago Yaveo',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santiago Yolomécatl',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santiago Yosondúa',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santiago Yucuyachi',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santiago Zacatepec',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santiago Zoochila',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Nuevo Zoquiápam',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santo Domingo Ingenio',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santo Domingo Albarradas',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santo Domingo Armenta',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santo Domingo Chihuitán',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santo Domingo de Morelos',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santo Domingo Ixcatlán',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santo Domingo Nuxaá',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santo Domingo Ozolotepec',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santo Domingo Petapa',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santo Domingo Roayaga',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santo Domingo Tehuantepec',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santo Domingo Teojomulco',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santo Domingo Tepuxtepec',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santo Domingo Tlatayápam',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santo Domingo Tomaltepec',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santo Domingo Tonalá',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santo Domingo Tonaltepec',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santo Domingo Xagacía',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santo Domingo Yanhuitlán',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santo Domingo Yodohino',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santo Domingo Zanatepec',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santos Reyes Nopala',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santos Reyes Pápalo',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santos Reyes Tepejillo',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santos Reyes Yucuná',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santo Tomás Jalieza',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santo Tomás Mazaltepec',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santo Tomás Ocotepec',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santo Tomás Tamazulapan',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Vicente Coatlán',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Vicente Lachixío',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Vicente Nuñú',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Silacayoápam',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Sitio de Xitlapehua',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Soledad Etla',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Villa de Tamazulápam del Progreso',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Tanetze de Zaragoza',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Taniche',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Tataltepec de Valdés',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Teococuilco de Marcos Pérez',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Teotitlán de Flores Magón',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Teotitlán del Valle',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Teotongo',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Tepelmeme Villa de Morelos',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Heroica Villa Tezoatlán de Segura y Luna. Cuna de la Independencia de Oaxaca',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Jerónimo Tlacochahuaya',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Tlacolula de Matamoros',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Tlacotepec Plumas',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Tlalixtac de Cabrera',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Totontepec Villa de Morelos',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Trinidad Zaachila',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'La Trinidad Vista Hermosa',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Unión Hidalgo',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Valerio Trujano',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Juan Bautista Valle Nacional',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Villa Díaz Ordaz',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Yaxe',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Magdalena Yodocono de Porfirio Díaz',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Yogana',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Yutanduchi de Guerrero',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Villa de Zaachila',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'San Mateo Yucutindoo',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Zapotitlán Lagunas',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Zapotitlán Palmas',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Santa Inés de Zaragoza',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Zimatlán de Álvarez',
            'state_id' => 20,
            ],
                    
            [
            'city' =>  'Acajete',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Acateno',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Acatlán',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Acatzingo',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Acteopan',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Ahuacatlán',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Ahuatlán',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Ahuazotepec',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Ahuehuetitla',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Ajalpan',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Albino Zertuche',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Aljojuca',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Altepexi',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Amixtlán',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Amozoc',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Aquixtla',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Atempan',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Atexcal',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Atlixco',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Atoyatempan',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Atzala',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Atzitzihuacán',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Atzitzintla',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Axutla',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Ayotoxco de Guerrero',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Calpan',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Caltepec',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Camocuautla',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Caxhuacan',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Coatepec',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Coatzingo',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Cohetzala',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Cohuecan',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Coronango',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Coxcatlán',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Coyomeapan',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Coyotepec',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Cuapiaxtla de Madero',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Cuautempan',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Cuautinchán',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Cuautlancingo',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Cuayuca de Andrade',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Cuetzalan del Progreso',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Cuyoaco',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Chalchicomula de Sesma',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Chapulco',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Chiautla',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Chiautzingo',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Chiconcuautla',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Chichiquila',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Chietla',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Chigmecatitlán',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Chignahuapan',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Chignautla',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Chila',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Chila de la Sal',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Honey',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Chilchotla',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Chinantla',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Domingo Arenas',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Eloxochitlán',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Epatlán',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Esperanza',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Francisco Z. Mena',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'General Felipe Ángeles',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Guadalupe',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Guadalupe Victoria',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Hermenegildo Galeana',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Huaquechula',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Huatlatlauca',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Huauchinango',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Huehuetla',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Huehuetlán el Chico',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Huejotzingo',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Hueyapan',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Hueytamalco',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Hueytlalpan',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Huitzilan de Serdán',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Huitziltepec',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Atlequizayan',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Ixcamilpa de Guerrero',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Ixcaquixtla',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Ixtacamaxtitlán',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Ixtepec',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Izúcar de Matamoros',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Jalpan',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Jolalpan',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Jonotla',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Jopala',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Juan C. Bonilla',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Juan Galindo',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Juan N. Méndez',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Lafragua',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Libres',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'La Magdalena Tlatlauquitepec',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Mazapiltepec de Juárez',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Mixtla',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Molcaxac',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Cañada Morelos',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Naupan',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Nauzontla',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Nealtican',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Nicolás Bravo',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Nopalucan',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Ocotepec',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Ocoyucan',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Olintla',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Oriental',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Pahuatlán',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Palmar de Bravo',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Pantepec',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Petlalcingo',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Piaxtla',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Puebla',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Quecholac',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Quimixtlán',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Rafael Lara Grajales',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Los Reyes de Juárez',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'San Andrés Cholula',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'San Antonio Cañada',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'San Diego la Mesa Tochimiltzingo',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'San Felipe Teotlalcingo',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'San Felipe Tepatlán',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'San Gabriel Chilac',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'San Gregorio Atzompa',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'San Jerónimo Tecuanipan',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'San Jerónimo Xayacatlán',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'San José Chiapa',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'San José Miahuatlán',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'San Juan Atenco',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'San Juan Atzompa',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'San Martín Texmelucan',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'San Martín Totoltepec',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'San Matías Tlalancaleca',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'San Miguel Ixitlán',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'San Miguel Xoxtla',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'San Nicolás Buenos Aires',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'San Nicolás de los Ranchos',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'San Pablo Anicano',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'San Pedro Cholula',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'San Pedro Yeloixtlahuaca',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'San Salvador el Seco',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'San Salvador el Verde',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'San Salvador Huixcolotla',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'San Sebastián Tlacotepec',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Santa Catarina Tlaltempan',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Santa Inés Ahuatempan',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Santa Isabel Cholula',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Santiago Miahuatlán',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Huehuetlán el Grande',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Santo Tomás Hueyotlipan',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Soltepec',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Tecali de Herrera',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Tecamachalco',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Tecomatlán',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Tehuacán',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Tehuitzingo',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Tenampulco',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Teopantlán',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Teotlalco',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Tepanco de López',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Tepango de Rodríguez',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Tepatlaxco de Hidalgo',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Tepeaca',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Tepemaxalco',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Tepeojuma',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Tepetzintla',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Tepexco',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Tepexi de Rodríguez',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Tepeyahualco',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Tepeyahualco de Cuauhtémoc',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Tetela de Ocampo',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Teteles de Avila Castillo',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Teziutlán',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Tianguismanalco',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Tilapa',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Tlacotepec de Benito Juárez',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Tlacuilotepec',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Tlachichuca',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Tlahuapan',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Tlaltenango',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Tlanepantla',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Tlaola',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Tlapacoya',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Tlapanalá',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Tlatlauquitepec',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Tlaxco',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Tochimilco',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Tochtepec',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Totoltepec de Guerrero',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Tulcingo',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Tuzamapan de Galeana',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Tzicatlacoyan',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Venustiano Carranza',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Vicente Guerrero',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Xayacatlán de Bravo',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Xicotepec',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Xicotlán',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Xiutetelco',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Xochiapulco',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Xochiltepec',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Xochitlán de Vicente Suárez',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Xochitlán Todos Santos',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Yaonáhuac',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Yehualtepec',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Zacapala',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Zacapoaxtla',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Zacatlán',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Zapotitlán',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Zapotitlán de Méndez',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Zaragoza',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Zautla',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Zihuateutla',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Zinacatepec',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Zongozotla',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Zoquiapan',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Zoquitlán',
            'state_id' => 21,
            ],
                    
            [
            'city' =>  'Amealco de Bonfil',
            'state_id' => 22,
            ],
                    
            [
            'city' =>  'Pinal de Amoles',
            'state_id' => 22,
            ],
                    
            [
            'city' =>  'Arroyo Seco',
            'state_id' => 22,
            ],
                    
            [
            'city' =>  'Cadereyta de Montes',
            'state_id' => 22,
            ],
                    
            [
            'city' =>  'Colón',
            'state_id' => 22,
            ],
                    
            [
            'city' =>  'Corregidora',
            'state_id' => 22,
            ],
                    
            [
            'city' =>  'Ezequiel Montes',
            'state_id' => 22,
            ],
                    
            [
            'city' =>  'Huimilpan',
            'state_id' => 22,
            ],
                    
            [
            'city' =>  'Jalpan de Serra',
            'state_id' => 22,
            ],
                    
            [
            'city' =>  'Landa de Matamoros',
            'state_id' => 22,
            ],
                    
            [
            'city' =>  'El Marqués',
            'state_id' => 22,
            ],
                    
            [
            'city' =>  'Pedro Escobedo',
            'state_id' => 22,
            ],
                    
            [
            'city' =>  'Peñamiller',
            'state_id' => 22,
            ],
                    
            [
            'city' =>  'Querétaro',
            'state_id' => 22,
            ],
                    
            [
            'city' =>  'San Joaquín',
            'state_id' => 22,
            ],
                    
            [
            'city' =>  'San Juan del Río',
            'state_id' => 22,
            ],
                    
            [
            'city' =>  'Tequisquiapan',
            'state_id' => 22,
            ],
                    
            [
            'city' =>  'Tolimán',
            'state_id' => 22,
            ],
                    
            [
            'city' =>  'Cozumel',
            'state_id' => 23,
            ],
                    
            [
            'city' =>  'Felipe Carrillo Puerto',
            'state_id' => 23,
            ],
                    
            [
            'city' =>  'Isla Mujeres',
            'state_id' => 23,
            ],
                    
            [
            'city' =>  'Othón P. Blanco',
            'state_id' => 23,
            ],
                    
            [
            'city' =>  'Benito Juárez',
            'state_id' => 23,
            ],
                    
            [
            'city' =>  'José María Morelos',
            'state_id' => 23,
            ],
                    
            [
            'city' =>  'Lázaro Cárdenas',
            'state_id' => 23,
            ],
                    
            [
            'city' =>  'Solidaridad',
            'state_id' => 23,
            ],
                    
            [
            'city' =>  'Tulum',
            'state_id' => 23,
            ],
                    
            [
            'city' =>  'Bacalar',
            'state_id' => 23,
            ],
                    
            [
            'city' =>  'Ahualulco',
            'state_id' => 24,
            ],
                    
            [
            'city' =>  'Alaquines',
            'state_id' => 24,
            ],
                    
            [
            'city' =>  'Aquismón',
            'state_id' => 24,
            ],
                    
            [
            'city' =>  'Armadillo de los Infante',
            'state_id' => 24,
            ],
                    
            [
            'city' =>  'Cárdenas',
            'state_id' => 24,
            ],
                    
            [
            'city' =>  'Catorce',
            'state_id' => 24,
            ],
                    
            [
            'city' =>  'Cedral',
            'state_id' => 24,
            ],
                    
            [
            'city' =>  'Cerritos',
            'state_id' => 24,
            ],
                    
            [
            'city' =>  'Cerro de San Pedro',
            'state_id' => 24,
            ],
                    
            [
            'city' =>  'Ciudad del Maíz',
            'state_id' => 24,
            ],
                    
            [
            'city' =>  'Ciudad Fernández',
            'state_id' => 24,
            ],
                    
            [
            'city' =>  'Tancanhuitz',
            'state_id' => 24,
            ],
                    
            [
            'city' =>  'Ciudad Valles',
            'state_id' => 24,
            ],
                    
            [
            'city' =>  'Coxcatlán',
            'state_id' => 24,
            ],
                    
            [
            'city' =>  'Charcas',
            'state_id' => 24,
            ],
                    
            [
            'city' =>  'Ebano',
            'state_id' => 24,
            ],
                    
            [
            'city' =>  'Guadalcázar',
            'state_id' => 24,
            ],
                    
            [
            'city' =>  'Huehuetlán',
            'state_id' => 24,
            ],
                    
            [
            'city' =>  'Lagunillas',
            'state_id' => 24,
            ],
                    
            [
            'city' =>  'Matehuala',
            'state_id' => 24,
            ],
                    
            [
            'city' =>  'Mexquitic de Carmona',
            'state_id' => 24,
            ],
                    
            [
            'city' =>  'Moctezuma',
            'state_id' => 24,
            ],
                    
            [
            'city' =>  'Rayón',
            'state_id' => 24,
            ],
                    
            [
            'city' =>  'Rioverde',
            'state_id' => 24,
            ],
                    
            [
            'city' =>  'Salinas',
            'state_id' => 24,
            ],
                    
            [
            'city' =>  'San Antonio',
            'state_id' => 24,
            ],
                    
            [
            'city' =>  'San Ciro de Acosta',
            'state_id' => 24,
            ],
                    
            [
            'city' =>  'San Luis Potosí',
            'state_id' => 24,
            ],
                    
            [
            'city' =>  'San Martín Chalchicuautla',
            'state_id' => 24,
            ],
                    
            [
            'city' =>  'San Nicolás Tolentino',
            'state_id' => 24,
            ],
                    
            [
            'city' =>  'Santa Catarina',
            'state_id' => 24,
            ],
                    
            [
            'city' =>  'Santa María del Río',
            'state_id' => 24,
            ],
                    
            [
            'city' =>  'Santo Domingo',
            'state_id' => 24,
            ],
                    
            [
            'city' =>  'San Vicente Tancuayalab',
            'state_id' => 24,
            ],
                    
            [
            'city' =>  'Soledad de Graciano Sánchez',
            'state_id' => 24,
            ],
                    
            [
            'city' =>  'Tamasopo',
            'state_id' => 24,
            ],
                    
            [
            'city' =>  'Tamazunchale',
            'state_id' => 24,
            ],
                    
            [
            'city' =>  'Tampacán',
            'state_id' => 24,
            ],
                    
            [
            'city' =>  'Tampamolón Corona',
            'state_id' => 24,
            ],
                    
            [
            'city' =>  'Tamuín',
            'state_id' => 24,
            ],
                    
            [
            'city' =>  'Tanlajás',
            'state_id' => 24,
            ],
                    
            [
            'city' =>  'Tanquián de Escobedo',
            'state_id' => 24,
            ],
                    
            [
            'city' =>  'Tierra Nueva',
            'state_id' => 24,
            ],
                    
            [
            'city' =>  'Vanegas',
            'state_id' => 24,
            ],
                    
            [
            'city' =>  'Venado',
            'state_id' => 24,
            ],
                    
            [
            'city' =>  'Villa de Arriaga',
            'state_id' => 24,
            ],
                    
            [
            'city' =>  'Villa de Guadalupe',
            'state_id' => 24,
            ],
                    
            [
            'city' =>  'Villa de la Paz',
            'state_id' => 24,
            ],
                    
            [
            'city' =>  'Villa de Ramos',
            'state_id' => 24,
            ],
                    
            [
            'city' =>  'Villa de Reyes',
            'state_id' => 24,
            ],
                    
            [
            'city' =>  'Villa Hidalgo',
            'state_id' => 24,
            ],
                    
            [
            'city' =>  'Villa Juárez',
            'state_id' => 24,
            ],
                    
            [
            'city' =>  'Axtla de Terrazas',
            'state_id' => 24,
            ],
                    
            [
            'city' =>  'Xilitla',
            'state_id' => 24,
            ],
                    
            [
            'city' =>  'Zaragoza',
            'state_id' => 24,
            ],
                    
            [
            'city' =>  'Villa de Arista',
            'state_id' => 24,
            ],
                    
            [
            'city' =>  'Matlapa',
            'state_id' => 24,
            ],
                    
            [
            'city' =>  'El Naranjo',
            'state_id' => 24,
            ],
                    
            [
            'city' =>  'Ahome',
            'state_id' => 25,
            ],
                    
            [
            'city' =>  'Angostura',
            'state_id' => 25,
            ],
                    
            [
            'city' =>  'Badiraguato',
            'state_id' => 25,
            ],
                    
            [
            'city' =>  'Concordia',
            'state_id' => 25,
            ],
                    
            [
            'city' =>  'Cosalá',
            'state_id' => 25,
            ],
                    
            [
            'city' =>  'Culiacán',
            'state_id' => 25,
            ],
                    
            [
            'city' =>  'Choix',
            'state_id' => 25,
            ],
                    
            [
            'city' =>  'Elota',
            'state_id' => 25,
            ],
                    
            [
            'city' =>  'Escuinapa',
            'state_id' => 25,
            ],
                    
            [
            'city' =>  'El Fuerte',
            'state_id' => 25,
            ],
                    
            [
            'city' =>  'Guasave',
            'state_id' => 25,
            ],
                    
            [
            'city' =>  'Mazatlán',
            'state_id' => 25,
            ],
                    
            [
            'city' =>  'Mocorito',
            'state_id' => 25,
            ],
                    
            [
            'city' =>  'Rosario',
            'state_id' => 25,
            ],
                    
            [
            'city' =>  'Salvador Alvarado',
            'state_id' => 25,
            ],
                    
            [
            'city' =>  'San Ignacio',
            'state_id' => 25,
            ],
                    
            [
            'city' =>  'Sinaloa',
            'state_id' => 25,
            ],
                    
            [
            'city' =>  'Navolato',
            'state_id' => 25,
            ],
                    
            [
            'city' =>  'Aconchi',
            'state_id' => 26,
            ],
                    
            [
            'city' =>  'Agua Prieta',
            'state_id' => 26,
            ],
                    
            [
            'city' =>  'Alamos',
            'state_id' => 26,
            ],
                    
            [
            'city' =>  'Altar',
            'state_id' => 26,
            ],
                    
            [
            'city' =>  'Arivechi',
            'state_id' => 26,
            ],
                    
            [
            'city' =>  'Arizpe',
            'state_id' => 26,
            ],
                    
            [
            'city' =>  'Atil',
            'state_id' => 26,
            ],
                    
            [
            'city' =>  'Bacadéhuachi',
            'state_id' => 26,
            ],
                    
            [
            'city' =>  'Bacanora',
            'state_id' => 26,
            ],
                    
            [
            'city' =>  'Bacerac',
            'state_id' => 26,
            ],
                    
            [
            'city' =>  'Bacoachi',
            'state_id' => 26,
            ],
                    
            [
            'city' =>  'Bácum',
            'state_id' => 26,
            ],
                    
            [
            'city' =>  'Banámichi',
            'state_id' => 26,
            ],
                    
            [
            'city' =>  'Baviácora',
            'state_id' => 26,
            ],
                    
            [
            'city' =>  'Bavispe',
            'state_id' => 26,
            ],
                    
            [
            'city' =>  'Benjamín Hill',
            'state_id' => 26,
            ],
                    
            [
            'city' =>  'Caborca',
            'state_id' => 26,
            ],
                    
            [
            'city' =>  'Cajeme',
            'state_id' => 26,
            ],
                    
            [
            'city' =>  'Cananea',
            'state_id' => 26,
            ],
                    
            [
            'city' =>  'Carbó',
            'state_id' => 26,
            ],
                    
            [
            'city' =>  'La Colorada',
            'state_id' => 26,
            ],
                    
            [
            'city' =>  'Cucurpe',
            'state_id' => 26,
            ],
                    
            [
            'city' =>  'Cumpas',
            'state_id' => 26,
            ],
                    
            [
            'city' =>  'Divisaderos',
            'state_id' => 26,
            ],
                    
            [
            'city' =>  'Empalme',
            'state_id' => 26,
            ],
                    
            [
            'city' =>  'Etchojoa',
            'state_id' => 26,
            ],
                    
            [
            'city' =>  'Fronteras',
            'state_id' => 26,
            ],
                    
            [
            'city' =>  'Granados',
            'state_id' => 26,
            ],
                    
            [
            'city' =>  'Guaymas',
            'state_id' => 26,
            ],
                    
            [
            'city' =>  'Hermosillo',
            'state_id' => 26,
            ],
                    
            [
            'city' =>  'Huachinera',
            'state_id' => 26,
            ],
                    
            [
            'city' =>  'Huásabas',
            'state_id' => 26,
            ],
                    
            [
            'city' =>  'Huatabampo',
            'state_id' => 26,
            ],
                    
            [
            'city' =>  'Huépac',
            'state_id' => 26,
            ],
                    
            [
            'city' =>  'Imuris',
            'state_id' => 26,
            ],
                    
            [
            'city' =>  'Magdalena',
            'state_id' => 26,
            ],
                    
            [
            'city' =>  'Mazatán',
            'state_id' => 26,
            ],
                    
            [
            'city' =>  'Moctezuma',
            'state_id' => 26,
            ],
                    
            [
            'city' =>  'Naco',
            'state_id' => 26,
            ],
                    
            [
            'city' =>  'Nácori Chico',
            'state_id' => 26,
            ],
                    
            [
            'city' =>  'Nacozari de García',
            'state_id' => 26,
            ],
                    
            [
            'city' =>  'Navojoa',
            'state_id' => 26,
            ],
                    
            [
            'city' =>  'Nogales',
            'state_id' => 26,
            ],
                    
            [
            'city' =>  'Onavas',
            'state_id' => 26,
            ],
                    
            [
            'city' =>  'Opodepe',
            'state_id' => 26,
            ],
                    
            [
            'city' =>  'Oquitoa',
            'state_id' => 26,
            ],
                    
            [
            'city' =>  'Pitiquito',
            'state_id' => 26,
            ],
                    
            [
            'city' =>  'Puerto Peñasco',
            'state_id' => 26,
            ],
                    
            [
            'city' =>  'Quiriego',
            'state_id' => 26,
            ],
                    
            [
            'city' =>  'Rayón',
            'state_id' => 26,
            ],
                    
            [
            'city' =>  'Rosario',
            'state_id' => 26,
            ],
                    
            [
            'city' =>  'Sahuaripa',
            'state_id' => 26,
            ],
                    
            [
            'city' =>  'San Felipe de Jesús',
            'state_id' => 26,
            ],
                    
            [
            'city' =>  'San Javier',
            'state_id' => 26,
            ],
                    
            [
            'city' =>  'San Luis Río Colorado',
            'state_id' => 26,
            ],
                    
            [
            'city' =>  'San Miguel de Horcasitas',
            'state_id' => 26,
            ],
                    
            [
            'city' =>  'San Pedro de la Cueva',
            'state_id' => 26,
            ],
                    
            [
            'city' =>  'Santa Ana',
            'state_id' => 26,
            ],
                    
            [
            'city' =>  'Santa Cruz',
            'state_id' => 26,
            ],
                    
            [
            'city' =>  'Sáric',
            'state_id' => 26,
            ],
                    
            [
            'city' =>  'Soyopa',
            'state_id' => 26,
            ],
                    
            [
            'city' =>  'Suaqui Grande',
            'state_id' => 26,
            ],
                    
            [
            'city' =>  'Tepache',
            'state_id' => 26,
            ],
                    
            [
            'city' =>  'Trincheras',
            'state_id' => 26,
            ],
                    
            [
            'city' =>  'Tubutama',
            'state_id' => 26,
            ],
                    
            [
            'city' =>  'Ures',
            'state_id' => 26,
            ],
                    
            [
            'city' =>  'Villa Hidalgo',
            'state_id' => 26,
            ],
                    
            [
            'city' =>  'Villa Pesqueira',
            'state_id' => 26,
            ],
                    
            [
            'city' =>  'Yécora',
            'state_id' => 26,
            ],
                    
            [
            'city' =>  'General Plutarco Elías Calles',
            'state_id' => 26,
            ],
                    
            [
            'city' =>  'Benito Juárez',
            'state_id' => 26,
            ],
                    
            [
            'city' =>  'San Ignacio Río Muerto',
            'state_id' => 26,
            ],
                    
            [
            'city' =>  'Balancán',
            'state_id' => 27,
            ],
                    
            [
            'city' =>  'Cárdenas',
            'state_id' => 27,
            ],
                    
            [
            'city' =>  'Centla',
            'state_id' => 27,
            ],
                    
            [
            'city' =>  'Centro',
            'state_id' => 27,
            ],
                    
            [
            'city' =>  'Comalcalco',
            'state_id' => 27,
            ],
                    
            [
            'city' =>  'Cunduacán',
            'state_id' => 27,
            ],
                    
            [
            'city' =>  'Emiliano Zapata',
            'state_id' => 27,
            ],
                    
            [
            'city' =>  'Huimanguillo',
            'state_id' => 27,
            ],
                    
            [
            'city' =>  'Jalapa',
            'state_id' => 27,
            ],
                    
            [
            'city' =>  'Jalpa de Méndez',
            'state_id' => 27,
            ],
                    
            [
            'city' =>  'Jonuta',
            'state_id' => 27,
            ],
                    
            [
            'city' =>  'Macuspana',
            'state_id' => 27,
            ],
                    
            [
            'city' =>  'Nacajuca',
            'state_id' => 27,
            ],
                    
            [
            'city' =>  'Paraíso',
            'state_id' => 27,
            ],
                    
            [
            'city' =>  'Tacotalpa',
            'state_id' => 27,
            ],
                    
            [
            'city' =>  'Teapa',
            'state_id' => 27,
            ],
                    
            [
            'city' =>  'Tenosique',
            'state_id' => 27,
            ],
                    
            [
            'city' =>  'Abasolo',
            'state_id' => 28,
            ],
                    
            [
            'city' =>  'Aldama',
            'state_id' => 28,
            ],
                    
            [
            'city' =>  'Altamira',
            'state_id' => 28,
            ],
                    
            [
            'city' =>  'Antiguo Morelos',
            'state_id' => 28,
            ],
                    
            [
            'city' =>  'Burgos',
            'state_id' => 28,
            ],
                    
            [
            'city' =>  'Bustamante',
            'state_id' => 28,
            ],
                    
            [
            'city' =>  'Camargo',
            'state_id' => 28,
            ],
                    
            [
            'city' =>  'Casas',
            'state_id' => 28,
            ],
                    
            [
            'city' =>  'Ciudad Madero',
            'state_id' => 28,
            ],
                    
            [
            'city' =>  'Cruillas',
            'state_id' => 28,
            ],
                    
            [
            'city' =>  'Gómez Farías',
            'state_id' => 28,
            ],
                    
            [
            'city' =>  'González',
            'state_id' => 28,
            ],
                    
            [
            'city' =>  'Güémez',
            'state_id' => 28,
            ],
                    
            [
            'city' =>  'Guerrero',
            'state_id' => 28,
            ],
                    
            [
            'city' =>  'Gustavo Díaz Ordaz',
            'state_id' => 28,
            ],
                    
            [
            'city' =>  'Hidalgo',
            'state_id' => 28,
            ],
                    
            [
            'city' =>  'Jaumave',
            'state_id' => 28,
            ],
                    
            [
            'city' =>  'Jiménez',
            'state_id' => 28,
            ],
                    
            [
            'city' =>  'Llera',
            'state_id' => 28,
            ],
                    
            [
            'city' =>  'Mainero',
            'state_id' => 28,
            ],
                    
            [
            'city' =>  'El Mante',
            'state_id' => 28,
            ],
                    
            [
            'city' =>  'Matamoros',
            'state_id' => 28,
            ],
                    
            [
            'city' =>  'Méndez',
            'state_id' => 28,
            ],
                    
            [
            'city' =>  'Mier',
            'state_id' => 28,
            ],
                    
            [
            'city' =>  'Miguel Alemán',
            'state_id' => 28,
            ],
                    
            [
            'city' =>  'Miquihuana',
            'state_id' => 28,
            ],
                    
            [
            'city' =>  'Nuevo Laredo',
            'state_id' => 28,
            ],
                    
            [
            'city' =>  'Nuevo Morelos',
            'state_id' => 28,
            ],
                    
            [
            'city' =>  'Ocampo',
            'state_id' => 28,
            ],
                    
            [
            'city' =>  'Padilla',
            'state_id' => 28,
            ],
                    
            [
            'city' =>  'Palmillas',
            'state_id' => 28,
            ],
                    
            [
            'city' =>  'Reynosa',
            'state_id' => 28,
            ],
                    
            [
            'city' =>  'Río Bravo',
            'state_id' => 28,
            ],
                    
            [
            'city' =>  'San Carlos',
            'state_id' => 28,
            ],
                    
            [
            'city' =>  'San Fernando',
            'state_id' => 28,
            ],
                    
            [
            'city' =>  'San Nicolás',
            'state_id' => 28,
            ],
                    
            [
            'city' =>  'Soto la Marina',
            'state_id' => 28,
            ],
                    
            [
            'city' =>  'Tampico',
            'state_id' => 28,
            ],
                    
            [
            'city' =>  'Tula',
            'state_id' => 28,
            ],
                    
            [
            'city' =>  'Valle Hermoso',
            'state_id' => 28,
            ],
                    
            [
            'city' =>  'Victoria',
            'state_id' => 28,
            ],
                    
            [
            'city' =>  'Villagrán',
            'state_id' => 28,
            ],
                    
            [
            'city' =>  'Xicoténcatl',
            'state_id' => 28,
            ],
                    
            [
            'city' =>  'Amaxac de Guerrero',
            'state_id' => 29,
            ],
                    
            [
            'city' =>  'Apetatitlán de Antonio Carvajal',
            'state_id' => 29,
            ],
                    
            [
            'city' =>  'Atlangatepec',
            'state_id' => 29,
            ],
                    
            [
            'city' =>  'Atltzayanca',
            'state_id' => 29,
            ],
                    
            [
            'city' =>  'Apizaco',
            'state_id' => 29,
            ],
                    
            [
            'city' =>  'Calpulalpan',
            'state_id' => 29,
            ],
                    
            [
            'city' =>  'El Carmen Tequexquitla',
            'state_id' => 29,
            ],
                    
            [
            'city' =>  'Cuapiaxtla',
            'state_id' => 29,
            ],
                    
            [
            'city' =>  'Cuaxomulco',
            'state_id' => 29,
            ],
                    
            [
            'city' =>  'Chiautempan',
            'state_id' => 29,
            ],
                    
            [
            'city' =>  'Muñoz de Domingo Arenas',
            'state_id' => 29,
            ],
                    
            [
            'city' =>  'Españita',
            'state_id' => 29,
            ],
                    
            [
            'city' =>  'Huamantla',
            'state_id' => 29,
            ],
                    
            [
            'city' =>  'Hueyotlipan',
            'state_id' => 29,
            ],
                    
            [
            'city' =>  'Ixtacuixtla de Mariano Matamoros',
            'state_id' => 29,
            ],
                    
            [
            'city' =>  'Ixtenco',
            'state_id' => 29,
            ],
                    
            [
            'city' =>  'Mazatecochco de José María Morelos',
            'state_id' => 29,
            ],
                    
            [
            'city' =>  'Contla de Juan Cuamatzi',
            'state_id' => 29,
            ],
                    
            [
            'city' =>  'Tepetitla de Lardizábal',
            'state_id' => 29,
            ],
                    
            [
            'city' =>  'Sanctórum de Lázaro Cárdenas',
            'state_id' => 29,
            ],
                    
            [
            'city' =>  'Nanacamilpa de Mariano Arista',
            'state_id' => 29,
            ],
                    
            [
            'city' =>  'Acuamanala de Miguel Hidalgo',
            'state_id' => 29,
            ],
                    
            [
            'city' =>  'Natívitas',
            'state_id' => 29,
            ],
                    
            [
            'city' =>  'Panotla',
            'state_id' => 29,
            ],
                    
            [
            'city' =>  'San Pablo del Monte',
            'state_id' => 29,
            ],
                    
            [
            'city' =>  'Santa Cruz Tlaxcala',
            'state_id' => 29,
            ],
                    
            [
            'city' =>  'Tenancingo',
            'state_id' => 29,
            ],
                    
            [
            'city' =>  'Teolocholco',
            'state_id' => 29,
            ],
                    
            [
            'city' =>  'Tepeyanco',
            'state_id' => 29,
            ],
                    
            [
            'city' =>  'Terrenate',
            'state_id' => 29,
            ],
                    
            [
            'city' =>  'Tetla de la Solidaridad',
            'state_id' => 29,
            ],
                    
            [
            'city' =>  'Tetlatlahuca',
            'state_id' => 29,
            ],
                    
            [
            'city' =>  'Tlaxcala',
            'state_id' => 29,
            ],
                    
            [
            'city' =>  'Tlaxco',
            'state_id' => 29,
            ],
                    
            [
            'city' =>  'Tocatlán',
            'state_id' => 29,
            ],
                    
            [
            'city' =>  'Totolac',
            'state_id' => 29,
            ],
                    
            [
            'city' =>  'Ziltlaltépec de Trinidad Sánchez Santos',
            'state_id' => 29,
            ],
                    
            [
            'city' =>  'Tzompantepec',
            'state_id' => 29,
            ],
                    
            [
            'city' =>  'Xaloztoc',
            'state_id' => 29,
            ],
                    
            [
            'city' =>  'Xaltocan',
            'state_id' => 29,
            ],
                    
            [
            'city' =>  'Papalotla de Xicohténcatl',
            'state_id' => 29,
            ],
                    
            [
            'city' =>  'Xicohtzinco',
            'state_id' => 29,
            ],
                    
            [
            'city' =>  'Yauhquemehcan',
            'state_id' => 29,
            ],
                    
            [
            'city' =>  'Zacatelco',
            'state_id' => 29,
            ],
                    
            [
            'city' =>  'Benito Juárez',
            'state_id' => 29,
            ],
                    
            [
            'city' =>  'Emiliano Zapata',
            'state_id' => 29,
            ],
                    
            [
            'city' =>  'Lázaro Cárdenas',
            'state_id' => 29,
            ],
                    
            [
            'city' =>  'La Magdalena Tlaltelulco',
            'state_id' => 29,
            ],
                    
            [
            'city' =>  'San Damián Texóloc',
            'state_id' => 29,
            ],
                    
            [
            'city' =>  'San Francisco Tetlanohcan',
            'state_id' => 29,
            ],
                    
            [
            'city' =>  'San Jerónimo Zacualpan',
            'state_id' => 29,
            ],
                    
            [
            'city' =>  'San José Teacalco',
            'state_id' => 29,
            ],
                    
            [
            'city' =>  'San Juan Huactzinco',
            'state_id' => 29,
            ],
                    
            [
            'city' =>  'San Lorenzo Axocomanitla',
            'state_id' => 29,
            ],
                    
            [
            'city' =>  'San Lucas Tecopilco',
            'state_id' => 29,
            ],
                    
            [
            'city' =>  'Santa Ana Nopalucan',
            'state_id' => 29,
            ],
                    
            [
            'city' =>  'Santa Apolonia Teacalco',
            'state_id' => 29,
            ],
                    
            [
            'city' =>  'Santa Catarina Ayometla',
            'state_id' => 29,
            ],
                    
            [
            'city' =>  'Santa Cruz Quilehtla',
            'state_id' => 29,
            ],
                    
            [
            'city' =>  'Santa Isabel Xiloxoxtla',
            'state_id' => 29,
            ],
                    
            [
            'city' =>  'Acajete',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Acatlán',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Acayucan',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Actopan',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Acula',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Acultzingo',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Camarón de Tejeda',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Alpatláhuac',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Alto Lucero de Gutiérrez Barrios',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Altotonga',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Alvarado',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Amatitlán',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Naranjos Amatlán',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Amatlán de los Reyes',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Angel R. Cabada',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'La Antigua',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Apazapan',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Aquila',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Astacinga',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Atlahuilco',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Atoyac',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Atzacan',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Atzalan',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Tlaltetela',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Ayahualulco',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Banderilla',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Benito Juárez',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Boca del Río',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Calcahualco',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Camerino Z. Mendoza',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Carrillo Puerto',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Catemaco',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Cazones de Herrera',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Cerro Azul',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Citlaltépetl',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Coacoatzintla',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Coahuitlán',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Coatepec',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Coatzacoalcos',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Coatzintla',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Coetzala',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Colipa',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Comapa',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Córdoba',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Cosamaloapan de Carpio',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Cosautlán de Carvajal',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Coscomatepec',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Cosoleacaque',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Cotaxtla',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Coxquihui',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Coyutla',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Cuichapa',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Cuitláhuac',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Chacaltianguis',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Chalma',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Chicocityl',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Chiconquiaco',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Chicontepec',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Chicityca',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Chinampa de Gorostiza',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Las Choapas',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Chocamán',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Chontla',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Chumatlán',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Emiliano Zapata',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Espinal',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Filomeno Mata',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Fortín',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Gutiérrez Zamora',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Hidalgotitlán',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Huatusco',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Huayacocotla',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Hueyapan de Ocampo',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Huiloapan de Cuauhtémoc',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Ignacio de la Llave',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Ilamatlán',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Isla',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Ixcatepec',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Ixhuacán de los Reyes',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Ixhuatlán del Café',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Ixhuatlancillo',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Ixhuatlán del Sureste',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Ixhuatlán de Madero',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Ixmatlahuacan',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Ixtaczoquitlán',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Jalacingo',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Xalapa',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Jalcomulco',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Jáltipan',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Jamapa',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Jesús Carranza',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Xico',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Jilotepec',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Juan Rodríguez Clara',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Juchique de Ferrer',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Landero y Coss',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Lerdo de Tejada',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Magdalena',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Maltrata',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Manlio Fabio Altamirano',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Mariano Escobedo',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Martínez de la Torre',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Mecatlán',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Mecayapan',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Medellín de Bravo',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Miahuatlán',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Las Minas',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Minatitlán',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Misantla',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Mixtla de Altamirano',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Moloacán',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Naolinco',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Naranjal',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Nautla',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Nogales',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Oluta',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Omealca',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Orizaba',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Otatitlán',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Oteapan',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Ozuluama de Mascareñas',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Pajapan',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Pánuco',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Papantla',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Paso del Macho',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Paso de Ovejas',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'La Perla',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Perote',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Platón Sánchez',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Playa Vicente',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Poza Rica de Hidalgo',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Las Vigas de Ramírez',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Pueblo Viejo',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Puente Nacional',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Rafael Delgado',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Rafael Lucio',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Los Reyes',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Río Blanco',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Saltabarranca',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'San Andrés Tenejapan',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'San Andrés Tuxtla',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'San Juan Evangelista',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Santiago Tuxtla',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Sayula de Alemán',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Soconusco',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Sochiapa',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Soledad Atzompa',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Soledad de Doblado',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Soteapan',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Tamalín',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Tamiahua',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Tampico Alto',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Tancoco',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Tantima',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Tantoyuca',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Tatatila',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Castillo de Teayo',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Tecolutla',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Tehuipango',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Álamo Temapache',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Tempoal',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Tenampa',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Tenochtitlán',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Teocelo',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Tepatlaxco',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Tepetlán',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Tepetzintla',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Tequila',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'José Azueta',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Texcatepec',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Texhuacán',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Texistepec',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Tezonapa',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Tierra Blanca',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Tihuatlán',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Tlacojalpan',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Tlacolulan',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Tlacotalpan',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Tlacotepec de Mejía',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Tlachichilco',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Tlalixcoyan',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Tlalnelhuayocan',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Tlapacoyan',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Tlaquilpa',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Tlilapan',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Tomatlán',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Tonayán',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Totutla',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Tuxpan',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Tuxtilla',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Ursulo Galván',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Vega de Alatorre',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Veracruz',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Villa Aldama',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Xoxocotla',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Yanga',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Yecuatla',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Zacualpan',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Zaragoza',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Zentla',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Zongolica',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Zontecomatlán de López y Fuentes',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Zozocolco de Hidalgo',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Agua Dulce',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'El Higo',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Nanchital de Lázaro Cárdenas del Río',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Tres Valles',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Carlos A. Carrillo',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Tatahuicapan de Juárez',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Uxpanapa',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'San Rafael',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Santiago Sochiapan',
            'state_id' => 30,
            ],
                    
            [
            'city' =>  'Abalá',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Acanceh',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Akil',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Baca',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Bokobá',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Buctzotz',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Cacalchén',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Calotmul',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Cansahcab',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Cantamayec',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Celestún',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Cenotillo',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Conkal',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Cuncunul',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Cuzamá',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Chacsinkín',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Chankom',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Chapab',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Chemax',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Chicxulub Pueblo',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Chichimilá',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Chikindzonot',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Chocholá',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Chumayel',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Dzán',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Dzemul',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Dzidzantún',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Dzilam de Bravo',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Dzilam González',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Dzitás',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Dzoncauich',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Espita',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Halachó',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Hocabá',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Hoctún',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Homún',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Huhí',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Hunucmá',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Ixil',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Izamal',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Kanasín',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Kantunil',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Kaua',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Kinchil',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Kopomá',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Mama',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Maní',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Maxcanú',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Mayapán',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Mérida',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Mocochá',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Motul',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Muna',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Muxupip',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Opichén',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Oxkutzcab',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Panabá',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Peto',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Progreso',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Quintana Roo',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Río Lagartos',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Sacalum',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Samahil',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Sanahcat',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'San Felipe',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Santa Elena',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Seyé',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Sinanché',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Sotuta',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Sucilá',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Sudzal',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Suma',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Tahdziú',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Tahmek',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Teabo',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Tecoh',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Tekal de Venegas',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Tekantó',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Tekax',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Tekit',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Tekom',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Telchac Pueblo',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Telchac Puerto',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Temax',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Temozón',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Tepakán',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Tetiz',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Teya',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Ticul',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Timucuy',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Tinum',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Tixcacalcupul',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Tixkokob',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Tixmehuac',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Tixpéhual',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Tizimín',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Tunkás',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Tzucacab',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Uayma',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Ucú',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Umán',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Valladolid',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Xocchel',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Yaxcabá',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Yaxkukul',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Yobaín',
            'state_id' => 31,
            ],
                    
            [
            'city' =>  'Apozol',
            'state_id' => 32,
            ],
                    
            [
            'city' =>  'Apulco',
            'state_id' => 32,
            ],
                    
            [
            'city' =>  'Atolinga',
            'state_id' => 32,
            ],
                    
            [
            'city' =>  'Benito Juárez',
            'state_id' => 32,
            ],
                    
            [
            'city' =>  'Calera',
            'state_id' => 32,
            ],
                    
            [
            'city' =>  'Cañitas de Felipe Pescador',
            'state_id' => 32,
            ],
                    
            [
            'city' =>  'Concepción del Oro',
            'state_id' => 32,
            ],
                    
            [
            'city' =>  'Cuauhtémoc',
            'state_id' => 32,
            ],
                    
            [
            'city' =>  'Chalchihuites',
            'state_id' => 32,
            ],
                    
            [
            'city' =>  'Fresnillo',
            'state_id' => 32,
            ],
                    
            [
            'city' =>  'Trinidad García de la Cadena',
            'state_id' => 32,
            ],
                    
            [
            'city' =>  'Genaro Codina',
            'state_id' => 32,
            ],
                    
            [
            'city' =>  'General Enrique Estrada',
            'state_id' => 32,
            ],
                    
            [
            'city' =>  'General Francisco R. Murguía',
            'state_id' => 32,
            ],
                    
            [
            'city' =>  'El Plateado de Joaquín Amaro',
            'state_id' => 32,
            ],
                    
            [
            'city' =>  'General Pánfilo Natera',
            'state_id' => 32,
            ],
                    
            [
            'city' =>  'Guadalupe',
            'state_id' => 32,
            ],
                    
            [
            'city' =>  'Huanusco',
            'state_id' => 32,
            ],
                    
            [
            'city' =>  'Jalpa',
            'state_id' => 32,
            ],
                    
            [
            'city' =>  'Jerez',
            'state_id' => 32,
            ],
                    
            [
            'city' =>  'Jiménez del Teul',
            'state_id' => 32,
            ],
                    
            [
            'city' =>  'Juan Aldama',
            'state_id' => 32,
            ],
                    
            [
            'city' =>  'Juchipila',
            'state_id' => 32,
            ],
                    
            [
            'city' =>  'Loreto',
            'state_id' => 32,
            ],
                    
            [
            'city' =>  'Luis Moya',
            'state_id' => 32,
            ],
                    
            [
            'city' =>  'Mazapil',
            'state_id' => 32,
            ],
                    
            [
            'city' =>  'Melchor Ocampo',
            'state_id' => 32,
            ],
                    
            [
            'city' =>  'Mezquital del Oro',
            'state_id' => 32,
            ],
                    
            [
            'city' =>  'Miguel Auza',
            'state_id' => 32,
            ],
                    
            [
            'city' =>  'Momax',
            'state_id' => 32,
            ],
                    
            [
            'city' =>  'Monte Escobedo',
            'state_id' => 32,
            ],
                    
            [
            'city' =>  'Morelos',
            'state_id' => 32,
            ],
                    
            [
            'city' =>  'Moyahua de Estrada',
            'state_id' => 32,
            ],
                    
            [
            'city' =>  'Nochistlán de Mejía',
            'state_id' => 32,
            ],
                    
            [
            'city' =>  'Noria de Ángeles',
            'state_id' => 32,
            ],
                    
            [
            'city' =>  'Ojocaliente',
            'state_id' => 32,
            ],
                    
            [
            'city' =>  'Pánuco',
            'state_id' => 32,
            ],
                    
            [
            'city' =>  'Pinos',
            'state_id' => 32,
            ],
                    
            [
            'city' =>  'Río Grande',
            'state_id' => 32,
            ],
                    
            [
            'city' =>  'Sain Alto',
            'state_id' => 32,
            ],
                    
            [
            'city' =>  'El Salvador',
            'state_id' => 32,
            ],
                    
            [
            'city' =>  'Sombrerete',
            'state_id' => 32,
            ],
                    
            [
            'city' =>  'Susticacán',
            'state_id' => 32,
            ],
                    
            [
            'city' =>  'Tabasco',
            'state_id' => 32,
            ],
                    
            [
            'city' =>  'Tepechitlán',
            'state_id' => 32,
            ],
                    
            [
            'city' =>  'Tepetongo',
            'state_id' => 32,
            ],
                    
            [
            'city' =>  'Teúl de González Ortega',
            'state_id' => 32,
            ],
                    
            [
            'city' =>  'Tlaltenango de Sánchez Román',
            'state_id' => 32,
            ],
                    
            [
            'city' =>  'Valparaíso',
            'state_id' => 32,
            ],
                    
            [
            'city' =>  'Vetagrande',
            'state_id' => 32,
            ],
                    
            [
            'city' =>  'Villa de Cos',
            'state_id' => 32,
            ],
                    
            [
            'city' =>  'Villa García',
            'state_id' => 32,
            ],
                    
            [
            'city' =>  'Villa González Ortega',
            'state_id' => 32,
            ],
                    
            [
            'city' =>  'Villa Hidalgo',
            'state_id' => 32,
            ],
                    
            [
            'city' =>  'Villanueva',
            'state_id' => 32,
            ],
                    
            [
            'city' =>  'Zacatecas',
            'state_id' => 32,
            ],
                    
            [
            'city' =>  'Trancoso',
            'state_id' => 32,
            ],
                    
            [
            'city' =>  'Santa María de la Paz',
            'state_id' => 32,
            ]
        ];
        DB::table('cities')->insert($cities);
    }
}