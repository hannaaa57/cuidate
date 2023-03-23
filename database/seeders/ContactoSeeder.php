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
            'nombre'   => 'Yonatan Morales Togo',
            'email'   => 'yonatan.mt@outlook.es',
            'telefono'   => '6673468595'
        ]);

        Contacto::create([
            'usuario_id'   => 1,
            'nombre'   => 'Francisco Amador',
            'email'   => 'hanna.amador@gmail.com',
            'telefono'   => '6671175874'
        ]);

        Contacto::create([
            'usuario_id'   => 3,
            'nombre'   => 'Luis Santillan',
            'email'   => 'santillan.itc@gmail.com',
            'telefono'   => '6671016386'
        ]);
    }
}
