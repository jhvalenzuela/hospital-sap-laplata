<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Sliderprincipal;

class SliderprincipalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sliderprincipal::create([
            'slideImagen' => 'slide1-hospital.jpg',
            'slideTitulo' => 'E.S.E Hospital Departamental San Antonio de Padua',
            'slideDescription' => 'Hospital humanizado y seguro es nuestro compromiso',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Sliderprincipal::create([
            'slideImagen' => 'slide2-uci.jpg',
            'slideTitulo' => 'E.S.E Hospital Departamental San Antonio de Padua',
            'slideDescription' => 'Hospital humanizado y seguro es nuestro compromiso',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Sliderprincipal::create([
            'slideImagen' => 'slide3-uci.jpg',
            'slideTitulo' => 'E.S.E Hospital Departamental San Antonio de Padua',
            'slideDescription' => 'Hospital humanizado y seguro es nuestro compromiso',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Sliderprincipal::create([
            'slideImagen' => 'slide4-cirugia.jpg',
            'slideTitulo' => 'E.S.E Hospital Departamental San Antonio de Padua',
            'slideDescription' => 'Hospital humanizado y seguro es nuestro compromiso',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Sliderprincipal::create([
            'slideImagen' => 'slide5-pediatria.jpg',
            'slideTitulo' => 'E.S.E Hospital Departamental San Antonio de Padua',
            'slideDescription' => 'Hospital humanizado y seguro es nuestro compromiso',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Sliderprincipal::create([
            'slideImagen' => 'slide6-procedimientos.jpg',
            'slideTitulo' => 'E.S.E Hospital Departamental San Antonio de Padua',
            'slideDescription' => 'Hospital humanizado y seguro es nuestro compromiso',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Sliderprincipal::create([
            'slideImagen' => 'slide7-autorizaciones_citas.jpg',
            'slideTitulo' => 'E.S.E Hospital Departamental San Antonio de Padua',
            'slideDescription' => 'Hospital humanizado y seguro es nuestro compromiso',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Sliderprincipal::create([
            'slideImagen' => 'slide8-verde_esperanza.jpg',
            'slideTitulo' => 'E.S.E Hospital Departamental San Antonio de Padua',
            'slideDescription' => 'Hospital humanizado y seguro es nuestro compromiso',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Sliderprincipal::create([
            'slideImagen' => 'slide9-partos2.jpg',
            'slideTitulo' => 'E.S.E Hospital Departamental San Antonio de Padua',
            'slideDescription' => 'Hospital humanizado y seguro es nuestro compromiso',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Sliderprincipal::create([
            'slideImagen' => 'slide10-referencia.jpg',
            'slideTitulo' => 'E.S.E Hospital Departamental San Antonio de Padua',
            'slideDescription' => 'Hospital humanizado y seguro es nuestro compromiso',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Sliderprincipal::create([
            'slideImagen' => 'slide11-atencion_materna.jpg',
            'slideTitulo' => 'E.S.E Hospital Departamental San Antonio de Padua',
            'slideDescription' => 'Atención materna - Hospital humanizado y seguro es nuestro compromiso',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Sliderprincipal::create([
            'slideImagen' => 'slide12-administrativos.jpg',
            'slideTitulo' => 'E.S.E Hospital Departamental San Antonio de Padua',
            'slideDescription' => 'Administrativos - Hospital humanizado y seguro es nuestro compromiso',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Sliderprincipal::create([
            'slideImagen' => 'slide13-consulta_externa.jpg',
            'slideTitulo' => 'E.S.E Hospital Departamental San Antonio de Padua',
            'slideDescription' => 'Consulta externa - Hospital humanizado y seguro es nuestro compromiso',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Sliderprincipal::create([
            'slideImagen' => 'slide14-farmacia.jpg',
            'slideTitulo' => 'E.S.E Hospital Departamental San Antonio de Padua',
            'slideDescription' => 'Farmacia - Hospital humanizado y seguro es nuestro compromiso',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Sliderprincipal::create([
            'slideImagen' => 'slide15-urgencias.jpg',
            'slideTitulo' => 'E.S.E Hospital Departamental San Antonio de Padua',
            'slideDescription' => 'Urgencias - Hospital humanizado y seguro es nuestro compromiso',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Sliderprincipal::create([
            'slideImagen' => 'slide16-radiologia.jpg',
            'slideTitulo' => 'E.S.E Hospital Departamental San Antonio de Padua',
            'slideDescription' => 'Radiología - Hospital humanizado y seguro es nuestro compromiso',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Sliderprincipal::create([
            'slideImagen' => 'slide17-servicios_generales.jpg',
            'slideTitulo' => 'E.S.E Hospital Departamental San Antonio de Padua',
            'slideDescription' => 'Servicios generales - Hospital humanizado y seguro es nuestro compromiso',
            'created_at' => now(),
            'updated_at' => now()
        ]);


    }
}
