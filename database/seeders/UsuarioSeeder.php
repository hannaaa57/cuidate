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
    }
}
