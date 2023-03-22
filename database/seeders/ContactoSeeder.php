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
            'usuario_id'   => 2,
            'nombre'   => 'Yonatan Morales',
            'email'   => 'yonatan.mt@outlook.es',
            'telefono'   => '6677570577'
        ]);

        Contacto::create([ 
            'usuario_id'   => 1,
            'nombre'   => 'Francisco Amador',
            'email'   => 'frank7@gmail.com',
            'telefono'   => '6671175874'
        ]);
    }
}
