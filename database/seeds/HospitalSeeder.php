<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HospitalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('hospitales')->insert([
            'name' => 'Santiago Echeverry',
            'patients' => 'Cuidados intermedios',
            'status' => 1,
        ]);

        DB::table('hospitales')->insert([
            'name' => 'Andres Garcia',
            'patients' => 'Cuidados Intensivos',
            'status' => 1,
        ]);

        DB::table('hospitales')->insert([
            'name' => 'Sofia Ortega',
            'patients' => 'Cuidados asistenciales',
            'status' => 0,
        ]);

        DB::table('hospitales')->insert([
            'name' => 'Carlos Castañeda',
            'patients' => 'Cuidados intermedios',
            'status' => 1,
        ]);

        DB::table('hospitales')->insert([
            'name' => 'Valentina Martinez',
            'patients' => 'Cuidados Intensivos',
            'status' => 0,
        ]);

        DB::table('hospitales')->insert([
            'name' => 'Sebastian Castaño',
            'patients' => 'Cuidados asistenciales',
            'status' => 0,
        ]);


        // Eliminar Registros
        //DB::table('hospitales')->truncate();

        // Comando para Ejecutar
        // php artisan db:seed
    }
}
