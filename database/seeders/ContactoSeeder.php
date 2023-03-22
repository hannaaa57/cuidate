<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contacto;

class ContactoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contacto::create([ 
            'usuario_id'   => 1,
            'nombre'   => 'Yonatan',
            'email'   => 'yonatan.mt@outlook.es',
            'telefono'   => '6677570577'
        ]);
    }
}
