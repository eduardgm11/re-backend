<?php

use Illuminate\Database\Seeder;

class TarjetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Dos ejemplos
       

        DB::table('tarjetas')-> insert([
            [
            'id_tarjeta' => 'NCD-I-0815 SH5/5',
            'gaveta' => '3F',
            'disciplina' => 03,
            'tamano' => 'C',
            'unidad' => 2,
            'tipo_documento' => 'Misceleanos',
            'imagenes' => 5,
            'observacion' => 'Legible',
            'PDF' => null,
            ],

            [
            'id_tarjeta' => 'NCE-I-0816 SH1/3',
            'gaveta' => '3F',
            'disciplina' => 03,
            'tamano' => 'C',
            'unidad' => 2,
            'tipo_documento' => 'Misceleanos',
            'imagenes' => 5,
            'observacion' => 'Legible',
            'PDF' => null ,
            ],
        ]);
    }
}
