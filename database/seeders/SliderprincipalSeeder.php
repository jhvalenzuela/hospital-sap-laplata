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
            'slideTitulo' => 'E.S.E Hospital Departamental San Antonio de Padua',
            'slideDescription' => 'Hospital humanizado y seguro es nuestro compromiso',
            'slideImagen' => '/storage/sliders/slide1-hospital.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Sliderprincipal::create([
            'slideTitulo' => 'E.S.E Hospital Departamental San Antonio de Padua',
            'slideDescription' => 'Hospital humanizado y seguro es nuestro compromiso',
            'slideImagen' => '/storage/sliders/slide2-uci.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Sliderprincipal::create([
            'slideTitulo' => 'E.S.E Hospital Departamental San Antonio de Padua',
            'slideDescription' => 'Hospital humanizado y seguro es nuestro compromiso',
            'slideImagen' => '/storage/sliders/slide3-uci.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Sliderprincipal::create([
            'slideTitulo' => 'E.S.E Hospital Departamental San Antonio de Padua',
            'slideDescription' => 'Hospital humanizado y seguro es nuestro compromiso',
            'slideImagen' => '/storage/sliders/slide4-cirugia.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Sliderprincipal::create([
            'slideTitulo' => 'E.S.E Hospital Departamental San Antonio de Padua',
            'slideDescription' => 'Hospital humanizado y seguro es nuestro compromiso',
            'slideImagen' => '/storage/sliders/slide5-pediatria.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Sliderprincipal::create([
            'slideTitulo' => 'E.S.E Hospital Departamental San Antonio de Padua',
            'slideDescription' => 'Hospital humanizado y seguro es nuestro compromiso',
            'slideImagen' => '/storage/sliders/slide6-procedimientos.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Sliderprincipal::create([
            'slideTitulo' => 'E.S.E Hospital Departamental San Antonio de Padua',
            'slideDescription' => 'Hospital humanizado y seguro es nuestro compromiso',
            'slideImagen' => '/storage/sliders/slide7-autorizaciones_citas.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Sliderprincipal::create([
            'slideTitulo' => 'E.S.E Hospital Departamental San Antonio de Padua',
            'slideDescription' => 'Hospital humanizado y seguro es nuestro compromiso',
            'slideImagen' => '/storage/sliders/slide8-verde_esperanza.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Sliderprincipal::create([
            'slideTitulo' => 'E.S.E Hospital Departamental San Antonio de Padua',
            'slideDescription' => 'Hospital humanizado y seguro es nuestro compromiso',
            'slideImagen' => '/storage/sliders/slide9-partos2.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Sliderprincipal::create([
            'slideTitulo' => 'E.S.E Hospital Departamental San Antonio de Padua',
            'slideDescription' => 'Hospital humanizado y seguro es nuestro compromiso',
            'slideImagen' => '/storage/sliders/slide10-referencia.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Sliderprincipal::create([
            'slideTitulo' => 'E.S.E Hospital Departamental San Antonio de Padua',
            'slideDescription' => 'Atención materna - Hospital humanizado y seguro es nuestro compromiso',
            'slideImagen' => '/storage/sliders/slide11-atencion_materna.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Sliderprincipal::create([
            'slideTitulo' => 'E.S.E Hospital Departamental San Antonio de Padua',
            'slideDescription' => 'Administrativos - Hospital humanizado y seguro es nuestro compromiso',
            'slideImagen' => '/storage/sliders/slide12-administrativos.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Sliderprincipal::create([
            'slideTitulo' => 'E.S.E Hospital Departamental San Antonio de Padua',
            'slideDescription' => 'Consulta externa - Hospital humanizado y seguro es nuestro compromiso',
            'slideImagen' => '/storage/sliders/slide13-consulta_externa.jp',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Sliderprincipal::create([
            'slideTitulo' => 'E.S.E Hospital Departamental San Antonio de Padua',
            'slideDescription' => 'Farmacia - Hospital humanizado y seguro es nuestro compromiso',
            'slideImagen' => '/storage/sliders/slide14-farmacia.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Sliderprincipal::create([
            'slideTitulo' => 'E.S.E Hospital Departamental San Antonio de Padua',
            'slideDescription' => 'Urgencias - Hospital humanizado y seguro es nuestro compromiso',
            'slideImagen' => '/storage/sliders/slide15-urgencias.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Sliderprincipal::create([
            'slideTitulo' => 'E.S.E Hospital Departamental San Antonio de Padua',
            'slideDescription' => 'Radiología - Hospital humanizado y seguro es nuestro compromiso',
            'slideImagen' => '/storage/sliders/slide16-radiologia.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Sliderprincipal::create([
            'slideTitulo' => 'E.S.E Hospital Departamental San Antonio de Padua',
            'slideDescription' => 'Servicios generales - Hospital humanizado y seguro es nuestro compromiso',
            'slideImagen' => '/storage/sliders/slide17-servicios_generales.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);


    }
}
