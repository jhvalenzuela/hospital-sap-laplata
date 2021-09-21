z<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Normatividad;

class NormatividadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('Normatividad')->insert([
        //     'tipNormatividad' => 'Acuerdos',
        //     'nomNormatividad' => 'Acuerdo Numero 001 de 2019',
        //     'descripNormatividad' => 'Por el cual se refrenda el informe de la desagragación del presupuesto de ingresos y gastos e inversión para la vigencia 2019',
        //     'fechPublic' => '2019/01/20',
        //     'fechExpedic' => '2019/01/15',
        //     'iconNormatividad' => '',
        //     'pesoArchivoNormatividad' => '15',
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ]);

        Normatividad::create([
            'tipNormatividad' => 'Acuerdos',
            'nomNormatividad' => 'Acuerdo Numero 001 de 2019',
            'descripNormatividad' => 'Acuerdo numero 001 de 2019, por el cual se refrenda el informe de la desagragación del presupuesto de ingresos y gastos e inversión para la vigencia 2019',
            'fechExpedic' => '2019/01/15',
            'fechPublic' => '2019/01/20',
            'iconNormatividad' => 'icofont-file-pdf',
            'nomArchivoNormatividad' => 'acuerdo-001_de_2019.pdf',
            'pesoArchivoNormatividad' => '15',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Normatividad::create([
            'tipNormatividad' => 'Acuerdos',
            'nomNormatividad' => 'Acuerdo Numero 002 de 2019',
            'descripNormatividad' => 'Acuerdo numero 002 de 2019, por medio del cual se evalúa la gestión del gerente de la ESE Hospital SAN ANTONIO DE PADUA DE LA PLATA HUILA a diciembre 31 de 2018',
            'fechExpedic' => '2019/03/18',
            'fechPublic' => '2019/03/25',
            'iconNormatividad' => 'icofont-file-pdf',
            'nomArchivoNormatividad' => 'acuerdo-002_de_2019.pdf',
            'pesoArchivoNormatividad' => '15',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Normatividad::create([
            'tipNormatividad' => 'Acuerdos',
            'nomNormatividad' => 'Acuerdo Numero 003 de 2019',
            'descripNormatividad' => 'Acuerdo numero 003 de 2019, por el cual se fija el incremento salarial para las sistintas categorías de empleos de la E.S.E Hospital Departamental San Antonio de Padua de la Plata Huila.',
            'fechExpedic' => '2019/07/24',
            'fechPublic' => '2019/07/31',
            'iconNormatividad' => 'icofont-file-pdf',
            'nomArchivoNormatividad' => 'acuerdo-003_de_2019.pdf',
            'pesoArchivoNormatividad' => '5',
            'created_at' => now(),
            'updated_at' => now()
        ]);          

        Normatividad::create([
            'tipNormatividad' => 'Resoluciones',
            'nomNormatividad' => 'Resolución No. 119 DE 2021',
            'descripNormatividad' => 'Resolución No. 119 DE 2021, por medio de la cual se adjudica la Convocatoria Pública No. 001 de 2021, cuyo objeto es el contrato para la Construcción de la Unidad de Cuidados Intensivos Polivalente para Pacientes Adultos y Central de Aire y Vacío Medicinal para la ESE Hospital San Antonio de Padua de La Plata',
            'fechExpedic' => '2021/05/03',
            'fechPublic' => '2021/05/07',
            'iconNormatividad' => 'icofont-file-pdf',
            'nomArchivoNormatividad' => 'resolucion-119_de_Mayo_2021-Adjudicacion-UCI-HDSAP.pdf',
            'pesoArchivoNormatividad' => '5',
            'created_at' => now(),
            'updated_at' => now()
        ]);     

        Normatividad::create([
            'tipNormatividad' => 'Resoluciones',
            'nomNormatividad' => 'Resolución No. 020 DE 2021',
            'descripNormatividad' => 'Resolución No. 020 DE 2021, por medio de la cual se adoptan los planes institucionales fijados por el decreto 612 de 2018 para la ESE Hospital San Antonio de Padua de La Plata',
            'fechExpedic' => '2021/01/26',
            'fechPublic' => '2021/01/31',
            'iconNormatividad' => 'icofont-file-pdf',
            'nomArchivoNormatividad' => 'resolucion-020_de_Enero_2021-Planes_Institucionales.pdf',
            'pesoArchivoNormatividad' => '5',
            'created_at' => now(),
            'updated_at' => now()
        ]);     

        Normatividad::create([
            'tipNormatividad' => 'Resoluciones',
            'nomNormatividad' => 'Resolución No 013 DE 2021',
            'descripNormatividad' => 'Resolución No. 013 DE 2021, por medio de la cual se adoptan unos planes para la vigencia 2021 - ESE Hospital San Antonio de Padua de La Plata',
            'fechExpedic' => '2021/01/15',
            'fechPublic' => '2021/01/20',
            'iconNormatividad' => 'icofont-file-pdf',
            'nomArchivoNormatividad' => 'resolucion-013_de_Enero_2021-Planes_de_Talento_Humano.pdf',
            'pesoArchivoNormatividad' => '5',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Normatividad::create([
            'tipNormatividad' => 'Leyes',
            'nomNormatividad' => 'Ley 23 de 1981',
            'descripNormatividad' => 'Ley No. 23 de 1981, Por lo cual se dictan normas en materia de ética médica.',
            'fechExpedic' => '1981/02/18',
            'fechPublic' => '2020/01/20',
            'iconNormatividad' => 'icofont-file-pdf',
            'nomArchivoNormatividad' => 'ley-23_de_1981.pdf',
            'pesoArchivoNormatividad' => '5',
            'created_at' => now(),
            'updated_at' => now()
        ]);          

        Normatividad::create([
            'tipNormatividad' => 'Leyes',
            'nomNormatividad' => 'Ley 80 de 1993',
            'descripNormatividad' => 'Ley 80 de 1993, La presente ley tiene por objeto disponer las reglas y principios que rigen los contratos de las entidades estatales.',
            'fechExpedic' => '1993/10/28',
            'fechPublic' => '2020/01/20',
            'iconNormatividad' => 'icofont-file-pdf',
            'nomArchivoNormatividad' => 'ley-80_de_1993.pdf',
            'pesoArchivoNormatividad' => '5',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Normatividad::create([
            'tipNormatividad' => 'Leyes',
            'nomNormatividad' => 'Ley 100 de 1993',
            'descripNormatividad' => 'Ley No. 100 de 1993, por la cual se crea el sistema de seguridad social integral y se dictan otras disposiciones.',
            'fechExpedic' => '1993/12/23',
            'fechPublic' => '2020/01/20',
            'iconNormatividad' => 'icofont-file-pdf',
            'nomArchivoNormatividad' => 'ley-100_de_1993.pdf',
            'pesoArchivoNormatividad' => '5',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Normatividad::create([
            'tipNormatividad' => 'Leyes',
            'nomNormatividad' => 'Ley 962 de 2005',
            'descripNormatividad' => 'Ley No.962 de 2005, por la cual se dictan disposiciones sobre racionalización de trámites y procedimientos administrativos de los organismos y entidades del Estado y de los particulares que ejercen funciones públicas o prestan servicios públicos.',
            'fechExpedic' => '2005/07/08',
            'fechPublic' => '2020/01/20',
            'iconNormatividad' => 'icofont-file-pdf',
            'nomArchivoNormatividad' => 'ley-962_de_2005.pdf',
            'pesoArchivoNormatividad' => '5',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Normatividad::create([
            'tipNormatividad' => 'Leyes',
            'nomNormatividad' => 'Ley 1122 de 2007',
            'descripNormatividad' => 'Ley No. 1122 de 2007, por la cual se hacen algunas modificaciones en el Sistema General de Seguridad Social en Salud y se dictan otras disposiciones.',
            'fechExpedic' => '2007/01/09',
            'fechPublic' => '2020/01/20',
            'iconNormatividad' => 'icofont-file-pdf',
            'nomArchivoNormatividad' => 'ley-1122_de_2007.pdf',
            'pesoArchivoNormatividad' => '5',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Normatividad::create([
            'tipNormatividad' => 'Leyes',
            'nomNormatividad' => 'Ley 1150 de 2007',
            'descripNormatividad' => 'Ley No. 1150 de 2007, por medio de la cual se introducen medidas para la eficiencia y la transparencia en la ley 80 de 1993 y se dictan otras disposiciones generales sobre la contratación con recursos públicos.',
            'fechExpedic' => '2007/07/16',
            'fechPublic' => '2020/01/20',
            'iconNormatividad' => 'icofont-file-pdf',
            'nomArchivoNormatividad' => 'ley-1150_de_2007.pdf',
            'pesoArchivoNormatividad' => '5',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Normatividad::create([
            'tipNormatividad' => 'Leyes',
            'nomNormatividad' => 'Ley 1438 de 2011',
            'descripNormatividad' => 'Ley No. 1438 de 2011, por medio de la cual se reforma el sistema general de seguridad social en salud y se dictan otras disposiciones.',
            'fechExpedic' => '2007/07/16',
            'fechPublic' => '2020/01/20',
            'iconNormatividad' => 'icofont-file-pdf',
            'nomArchivoNormatividad' => 'ley-1438_de_2011.pdf',
            'pesoArchivoNormatividad' => '5',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
