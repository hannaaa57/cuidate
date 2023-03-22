<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Usuario;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Usuario::create([
            'name'  => 'Hanna Amador',
            'email' => 'hanna.amador@gmail.com',
            'password' => bcrypt('hanna123'),
            'telefono' => '6677570578',
            'fecNacimiento' => '2005-05-07',
            'genero' => 'Femenino',
            'CURP' => 'AASH050507MGTMNNA7',
            'altura' => '1.60',
            'peso' => '54',
            'tSangre' => 'O+',
            'residencia' => 'Culiacán',
            'enfermedad' => 'No',
            'discapacidad' => 'No',
            'alergias' => 'No',
            'medicamentos' => 'No',
            'embarazo' => 'No',
            'DoA' => 'No',
            'donar' => 'No',
            'file_path' => 'NULL'
        ]);

        Usuario::create([
            'name'  => 'Ilse Marianne Castillo Pimienta',
            'email' => 'ilse.amarianne@gmail.com',
            'password' => bcrypt('ilse123'),
            'telefono' => '6671548796',
            'fecNacimiento' => '2005-03-12',
            'genero' => 'Femenino',
            'CURP' => 'CAPI050312MSLSMLA1',
            'altura' => '1.60',
            'peso' => '54',
            'tSangre' => 'ORH+',
            'residencia' => 'Culiacán',
            'enfermedad' => 'No',
            'discapacidad' => 'No',
            'alergias' => 'No',
            'medicamentos' => 'No',
            'embarazo' => 'No',
            'DoA' => 'No',
            'donar' => 'No',
            'file_path' => 'NULL'
        ]);

        Usuario::create([
            'name'  => 'Luis Carlos Santillan',
            'email' => 'lcsh09@gmail.com',
            'password' => bcrypt('carlos123'),
            'telefono' => '6671016386',
            'fecNacimiento' => '1985-02-20',
            'genero' => 'Masculino',
            'CURP' => 'SAHL850220HSLNRS03',
            'altura' => '1.75',
            'peso' => '80',
            'tSangre' => 'ARH+',
            'residencia' => 'Culiacán',
            'enfermedad' => 'No',
            'discapacidad' => 'No',
            'alergias' => 'No',
            'medicamentos' => 'No',
            'embarazo' => 'No',
            'DoA' => 'No',
            'donar' => 'No',
            'file_path' => 'NULL'
        ]);
    }
}
