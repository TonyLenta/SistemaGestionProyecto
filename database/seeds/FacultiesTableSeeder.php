<?php

use App\Models\Faculty;
use Illuminate\Database\Seeder;

class FacultiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Faculty::truncate();

        $faculty = New Faculty;
        $faculty->name = 'Ingenieria en Sistemas y Computacion';
        $faculty->save();

        $faculty = New Faculty;
        $faculty->name = 'Administracion de Empresas';
        $faculty->save();

        $faculty = New Faculty;
        $faculty->name = 'Negocios Internacionales';
        $faculty->save();

        $faculty = New Faculty;
        $faculty->name = 'Enfermeria';
        $faculty->save();
    }
}
