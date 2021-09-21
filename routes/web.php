<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EntidadController;
use App\Http\Controllers\NormatividadController;
use App\Http\Controllers\SliderprincipalController;
use App\Http\Controllers\CitasController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [SliderprincipalController::class, 'index']); //{
    //return view('index');
//});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/entidad', [EntidadController::class, 'index']);
//Route::get('/entidad', 'EntidadController@index');


//Route::get('/normatividad/convocatorias-publicas', function () {
    //$normatividad = DB::table('tblnormatividad')->get();
    //return $normatividad;
    //return view('normatividad.convocatorias-publicas', ['normatividad' => $normatividad]);
    //return view('normatividad/convocatorias-publicas');
//});



/*
|--------------------------------------------------------------------------
| MENU TRANSPARECNIA
|--------------------------------------------------------------------------
*/

Route::get('/transparencia/mecanismos-atencion-ciudadana', function () {
    return view('transparencia/mecanismos-atencion-ciudadana');
});

Route::get('/transparencia/localizacion', function () {
    return view('transparencia/localizacion');
});

Route::get('/transparencia/datos-abiertos', function () {
    return view('transparencia/estudios-investigacion');
});

Route::get('/transparencia/estudios-investigacion', function () {
    return view('transparencia/estudios-investigacion');
});

Route::get('/transparencia/glosario', function () {
    return view('transparencia/glosario');
});

Route::get('/transparencia/noticias', function () {
    return view('transparencia/noticias');
});

Route::get('/transparencia/informacion-ninos-adolecentes', function () {
    return view('transparencia/informacion-ninos-adolecentes');
});

Route::get('/transparencia/informacion-adicional', function () {
    return view('transparencia/informacion-adicional');
});

Route::get('/transparencia/cronograma-actividades', function () {
    return view('transparencia/cronograma-actividades');
});

Route::get('/transparencia/procesos-procedimientos', function () {
    return view('transparencia/procesos-procedimientos');
});

Route::get('/transparencia/directorio-agremiaciones', function () {
    return view('transparencia/directorio-agremiaciones');
});

Route::get('/transparencia/directorio-agremiados', function () {
    return view('transparencia/directorio-agremiados');
});

Route::get('/transparencia/directorio-contratistas', function () {
    return view('transparencia/directorio-contratistas');
});

Route::get('/transparencia/directorio-entidades', function () {
    return view('transparencia/directorio-entidades');
});

Route::get('/transparencia/directorio-servidores', function () {
    return view('transparencia/directorio-servidores');
});

Route::get('/transparencia/ofertas-empleo', function () {
    return view('transparencia/ofertas-empleo');
});

Route::get('/transparencia/resolucion-presupuesto', function () {
    return view('transparencia/resolucion-presupuesto');
});

Route::get('/transparencia/distribucion-presupuesto', function () {
    return view('transparencia/distribucion-presupuesto');
});

Route::get('/transparencia/estados-financieros', function () {
    return view('transparencia/estados-financieros');
});

Route::get('/transparencia/politicas-institucionales', function () {
    return view('transparencia/politicas-institucionales');
});

Route::get('/transparencia/plan-mejoramiento', function () {
    return view('transparencia/plan-mejoramiento');
});

Route::get('/transparencia/plan-mantenimiento', function () {
    return view('transparencia/plan-mantenimiento');
});

Route::get('/transparencia/plan-institucional-archivo', function () {
    return view('transparencia/plan-institucional-archivo');
});

Route::get('/transparencia/plan-accion', function () {
    return view('transparencia/plan-accion');
});

Route::get('/transparencia/plan-tratamiento-informacion', function () {
    return view('transparencia/plan-tratamiento-informacion');
});

Route::get('/transparencia/plan-anticorrupcion', function () {
    return view('transparencia/plan-anticorrupcion');
});

Route::get('/transparencia/plan-antitramites', function () {
    return view('transparencia/plan-antitramites');
});

Route::get('/transparencia/plan-rendicion-cuentas', function () {
    return view('transparencia/plan-rendicion-cuentas');
});

Route::get('/transparencia/plan-estrategico', function () {
    return view('transparencia/plan-estrategico');
});

Route::get('/transparencia/metas-objetivos-indicadores', function () {
    return view('transparencia/metas-objetivos-indicadores');
});

Route::get('/transparencia/informe-empalme', function () {
    return view('transparencia/informe-empalme');
});

Route::get('/transparencia/planes-mejoramiento', function () {
    return view('transparencia/planes-mejoramiento');
});

Route::get('/transparencia/plan-servicio-ciudadano', function () {
    return view('transparencia/plan-servicio-ciudadano');
});

Route::get('/transparencia/plan-seguridad-informacion', function () {
    return view('transparencia/plan-seguridad-informacion');
});

Route::get('/transparencia/plan-estrategico-tics', function () {
    return view('transparencia/plan-estrategico-tics');
});

Route::get('/transparencia/informes-gestion', function () {
    return view('transparencia/informes-gestion');
});

Route::get('/transparencia/informes-control-interno', function () {
    return view('transparencia/informes-control-interno');
});

Route::get('/transparencia/programa-auditoria', function () {
    return view('transparencia/programa-auditoria');
});

Route::get('/transparencia/informes-rendicion-cuentas', function () {
    return view('transparencia/informes-rendicion-cuentas');
});

Route::get('/transparencia/informes-poblacion-vulnerable', function () {
    return view('transparencia/informes-poblacion-vulnerable');
});

Route::get('/transparencia/defensa-judicial', function () {
    return view('transparencia/defensa-judicial');
});

Route::get('/transparencia/matriz-cumplimiento', function () {
    return view('transparencia/matriz-cumplimiento');
});

Route::get('/transparencia/informes-pqr', function () {
    return view('transparencia/informes-pqr');
});

Route::get('/transparencia/reglamento-interno-gestion-pqr', function () {
    return view('transparencia/reglamento-interno-gestion-pqr');
});

Route::get('/transparencia/recepcion-solicitudes', function () {
    return view('transparencia/recepcion-solicitudes');
});

Route::get('/transparencia/canales-sociales', function () {
    return view('transparencia/canales-sociales');
});

Route::get('/transparencia/habeas-data', function () {
    return view('transparencia/habeas-data');
});

/*
|--------------------------------------------------------------------------
| MENU NORMATIVIDAD
|--------------------------------------------------------------------------
*/

Route::get('/normatividad/acuerdos-leyes-resoluciones', [NormatividadController::class, 'index']);

Route::get('/normatividad/contratacion/secop-I', function () {
    return view('normatividad/secop-I');
});

Route::get('/normatividad/contratacion/convocatorias-publicas', [NormatividadController::class, 'ConvocatoriasPublicas']);

Route::get('/normatividad/contratacion/gaceta-contratacion', function () {
    return view('normatividad/gaceta-contratacion');
});

Route::get('/normatividad/contratacion/manual-contratacion', function () {
    return view('normatividad/manual-contratacion');
});

Route::get('/normatividad/contratacion/invitacion-cotizar', function () {
    return view('normatividad/invitacion-cotizar');
});

Route::get('/normatividad/contratacion/ofertas-empleo', function () {
    return view('normatividad/ofertas-empleo');
});

Route::get('/normatividad/contratacion/plan-anual-adquisiciones', function () {
    return view('normatividad/plan-anual-adquisiciones');
});

Route::get('/normatividad/contratacion/convocatoria-revisor-fiscal', function () {
    return view('normatividad/convocatoria-revisor-fiscal');
});


/*
|--------------------------------------------------------------------------
| Información al Ciudadano
|--------------------------------------------------------------------------
*/

Route::get('/informacion-ciudadano/asociacion-de-usuarios', function () {
    return view('informacion/siau');
});

Route::get('/informacion-ciudadano/', function () {
    return view('informacion/');
});

Route::get('/informacion-ciudadano/derechos-y-deberes', function () {
    return view('informacion/derechos-deberes');
});

Route::get('/informacion-ciudadano/PQR', function () {
    return view('informacion/form-pqr');
});

Route::get('/informacion-ciudadano/preguntas-y-respuestas', function () {
    return view('informacion/preguntas');
});

Route::get('/informacion-ciudadano/mapa-de-riesgos', function () {
    return view('informacion/mapa-riesgos');
});

Route::get('/informacion-ciudadano/seguridad-del-paciente', function () {
    return view('informacion/seguridad-paciente');
});

Route::get('informacion-ciudadano/citas', function () {
    return view('informacion/citas');
})->name('citas.create');

Route::post('/informacion-ciudadano', [CitasController::class, 'create']);

Route::get('/informacion-ciudadano/glosario-de-terminos', function () {
    return view('informacion/glosario');
});