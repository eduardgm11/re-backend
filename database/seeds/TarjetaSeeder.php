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
            'PDF' => 'C:\xampp\htdocs\Laravel\re-backend\storage\app\public\PDF\NCD-I-0815 SH5-5.pdf',
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
            'PDF' => 'C:\xampp\htdocs\Laravel\re-backend\storage\app\public\PDF\NCD-I-0815 SH5-5.pdf' ,
            ],
            [
                'id_tarjeta' => 'NCD-E-0001.pdf',
                'gaveta' => '76A',
                'disciplina' => 04,
                'tamano' => 'C',
                'unidad' => 2,
                'tipo_documento' => 'MISCELANEO',
                'imagenes' => 3,
                'observacion' => 'Legible',
                'PDF' => 'C:\xampp\htdocs\Laravel\re-backend\storage\app\public\PDF\NCD-E-0001.pdf',
            ],

            [
                'id_tarjeta' => 'NCD-E-0002.pdf',
                'gaveta' => '76A',
                'disciplina' => 04,
                'tamano' => 'C',
                'unidad' => 2,
                'tipo_documento' => 'MISCELANEO',
                'imagenes' => 4,
                'observacion' => 'Legible',
                'PDF' => 'C:\xampp\htdocs\Laravel\re-backend\storage\app\public\PDF\NCD-E-0002.pdf',
            ],

            [
                'id_tarjeta' => 'NCD-E-0003.pdf',
                'gaveta' => '76A',
                'disciplina' => 04,
                'tamano' => 'C',
                'unidad' => 2,
                'tipo_documento' => 'MISCELANEO',
                'imagenes' => 6,
                'observacion' => 'Legible',
                'PDF' => 'C:\xampp\htdocs\Laravel\re-backend\storage\app\public\PDF\NCD-E-0003.pdf',
            ],

            [
                'id_tarjeta' => 'NCD-E-0004 SH1-3.pdf',
                'gaveta' => '76A',
                'disciplina' => 04,
                'tamano' => 'C',
                'unidad' => 2,
                'tipo_documento' => 'MISCELANEO',
                'imagenes' => 8,
                'observacion' => 'Legible',
                'PDF' => 'C:\xampp\htdocs\Laravel\re-backend\storage\app\public\PDF\NCD-E-0004 SH1-3.pdf' ,
            ],

            [
                'id_tarjeta' => 'NCD-E-0004 SH2-3.pdf',
                'gaveta' => '76A',
                'disciplina' => 04,
                'tamano' => 'C',
                'unidad' => 2,
                'tipo_documento' => 'MISCELANEO',
                'imagenes' => 8,
                'observacion' => 'Legible',
                'PDF' => 'C:\xampp\htdocs\Laravel\re-backend\storage\app\public\PDF\NCD-E-0004 SH2-3.pdf' ,
            ],

            [
                'id_tarjeta' => 'NCD-E-0004 SH3-3.pdf',
                'gaveta' => '76A',
                'disciplina' => 04,
                'tamano' => 'C',
                'unidad' => 2,
                'tipo_documento' => 'MISCELANEO',
                'imgenes' => 6,
                'observacion' => 'Legible',
                'PDF' => 'C:\xampp\htdocs\Laravel\re-backend\storage\app\public\PDF\NCD-E-0004 SH3-3.pdf' ,
            ],
            [
                'id_tarjeta' => 'NCD-E-0005 SH1-3.pdf',
                'gaveta' => '76A',
                'disciplina' => 04,
                'tamano' => 'C',
                'unidad' => 2,
                'tipo_documento' => 'MISCELANEO',
                'imgenes' => 8,
                'observacion' => 'Legible',
                'PDF' => 'C:\xampp\htdocs\Laravel\re-backend\storage\app\public\PDF\NCD-E-0005 SH1-3.pdf' ,
            ],

            [
                'id_tarjeta' => 'NCD-E-0005 SH2-3.pdf',
                'gaveta' => '76A',
                'disciplina' => 04,
                'tamano' => 'C',
                'unidad' => 2,
                'tipo_documento' => 'MISCELANEO',
                'imgenes' => 8,
                'observacion' => 'Legible',
                'PDF' => 'C:\xampp\htdocs\Laravel\re-backend\storage\app\public\PDF\NCD-E-0005 SH2-3.pdf' ,
            ],

            [
                'id_tarjeta' => 'NCD-E-0005 SH3-3.pdf',
                'gaveta' => '76A',
                'disciplina' => 04,
                'tamano' => 'C',
                'unidad' => 2,
                'tipo_documento' => 'MISCELANEO',
                'imgenes' => 5,
                'observacion' => 'Legible',
                'PDF' => 'http://localhost:8000/PDF/NCD-E-0001.pdf' ,
            ],

            [
                'id_tarjeta' => 'NCD-E-0006.pdf',
                'gaveta' => '76A',
                'disciplina' => 04,
                'tamano' => 'C',
                'unidad' => 2,
                'tipo_documento' => 'MISCELANEO',
                'imgenes' => 4,
                'observacion' => 'Legible',
                'PDF' => null ,
            ],
        ]);
    }
}
