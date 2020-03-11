<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\indicadores;
use Faker\Generator as Faker;

$factory->define(indicadores::class, function (Faker $faker) {
    return [


'descripcion_indicador' => $faker->sentence,
'Objetivo_del_Indicador' => $faker->sentence,
'definicion' => $faker->sentence,
'tipo_id' => 1,
'linea_base' => $faker->sentence,
'fuente_recoleccion' => $faker->sentence,
'tiempo_obtencion' => $faker->sentence,
'periocidad' => $faker->sentence,
'reporta_a' => $faker->sentence,
'year' => 2019,
'Porcentaje_maximo' => '100%',
'porcentaje_medio' => '80',
'porcentaje_bajo' => '90%',
       
    ];
});
