<!DOCTYPE html>
<html lang="es-ES">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Hospital - ESE San Antonio de Padua</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('img/favicon.png') }}" rel="icon">
  <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  {{-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"> --}}

  <!-- Vendor CSS Files -->
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/icofont/icofont.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/venobox/venobox.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
      <div class="d-flex align-items-center">
        <i class="icofont-clock-time"></i> Lunes - Viernes, 8AM a 5PM
      </div>
      <div class="d-flex align-items-center">
        <i class="icofont-phone"></i> Telefonos: 60 8370149 - 60 8370163
      </div>
        <div class="social-links-top">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <a href="{{ url('/')}}" class="logo mr-auto"><img src="{{ asset('img/logo.png')}}" alt=""></a>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <h1 class="logo mr-auto"><a href="index.html">Medicio</a></h1> -->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <!-- <li class="active"><a href="index.html">inicio</a></li> -->
          <li class="drop-down"><a href="#">Entidad</a>
            <ul>
              <li><a href="{{ url('/entidad')}}">Historia</a></li>
              <li><a href="{{ url('/entidad')}}">Organigrama</a></li>
              <li><a href="{{ url('/entidad')}}">Misión y Visión</a></li>
              <li><a href="{{ url('/entidad')}}">Funciones y Deberes</a></li>
              <!-- <li class="drop-down"><a href="#">Programa Talento Humano</a>
                <ul>
                  <li><a href="#">Directorio Servidores Públicos</a>
                    <li><a href="#">Documentos</a></li>
                    <li><a href="#">Circulares</a></li>
                    <li><a href="#">Seguridad y salud en el trabajo</a></li>
                </ul> 
              </li> -->
            </ul>
          </li>
          {{-- <li><a href="#">Servicios</a>
            <ul>
              <li><a href="#">Estrategía IAMI Integral</a></li>
            </ul>
          </li> --}}
          <!-- <li><a href="#">Tramites</a></li> -->
          <li class="drop-down"><a href="#">Transparencia y acceso a la información</a>
            <ul>
              <li class="drop-down"><a href="#">Mecanismos de Contacto</a>
                <ul>
                  <li><a href="{{ url('/transparencia/mecanismos-atencion-ciudadana')}}">Mecanismos de Atención al Ciudadano</a></li>
                    <li><a href="{{ url('/transparencia/localizacion')}}">Localización</a></li>
                </ul>
              </li>
                <li class="drop-down"><a href="#">Información de Interes</a>
                  <ul>
                    <li><a href="{{ url('/transparencia/datos-abiertos') }}">Datos Abiertos</a></li>
                    <li><a href="{{ url('/transparencia/estudios-investigacion') }}">Estudios Investigación y Otras Publicaciones</a></li>
                    <li><a href="{{ url('/transparencia/glosario') }}">Glosario de Términos</a></li>
                    <li><a href="{{ url('/transparencia/noticias') }}">Blog - Noticias</a></li>
                    <li><a href="{{ url('/transparencia/informacion-ninos-adolecentes') }}">Información Para Niñas, Niños y Adolescentes</a></li>
                    <li><a href="{{ url('/transparencia/informacion-adicional') }}">Información Adicional</a></li>
                    <li><a href="{{ url('/transparencia/cronograma-actividades') }}">Cronograma de Actividades</a></li>
                </ul>
                </li>
                <li class="drop-down"><a href="#">Estructura Orgánica y Talento Humano</a>
                  <ul>
                    {{-- <li><a href="#">Resolucicón 57b de 2019</a></li> --}}
                    <li><a href="{{ url('/entidad')}}">Misión y Visión</a></li>
                    <li><a href="{{ url('/entidad')}}">Funciones y Deberes</a></li>
                    <li><a href="{{ url('/transparencia/procesos-procedimientos')}}">Procesos y Procedimientos</a></li>
                    <li><a href="{{ url('/entidad')}}">Organigrama</a></li>
                    <li class="drop-down"><a href="#">Directorio de Funcionarios</a>
                      <ul>
                        <li><a href="{{ url('/transparencia/directorio-servidores-publicos')}}">Directorio Servidores Públicos</a></li>
                        <li><a href="{{ url('/transparencia/directorio-agremiados') }}">Directorios Agremiados</a></li>
                        <li><a href="{{ url('/transparencia/directorio-contratistas') }}">Directorio Contratistas</a></li>
                        <li><a href="{{ url('/transparencia/directorio-entidades') }}">Directorio Entidades</a></li>
                        <li><a href="{{ url('/transparencia/directorio-agremiaciones') }}">Directorio Agremiaciones</a></li>
                      </ul>
                    </li>
                    <li><a href="{{ url('/transparencia/ofertas-empleo') }}">Ofertas de Empleo</a></li>
                </ul>
                </li>
                <li class="drop-down"><a href="#">Presupuesto</a>
                  <ul>
                    <li><a href="{{ url('/transparencia/resolucion-presupuesto') }}">Resolución de Presupuesto General Asignado</a></li>
                    <li><a href="{{ url('/transparencia/distribucion-presupuesto') }}">Distribución Presupuesto</a></li>
                    <li><a href="{{ url('/transparencia/estados-financieros') }}">Estados Financieros</a></li>
                </ul>
                </li>
                <li class="drop-down"><a href="#">Planeación</a>
                  <ul>
                    <li><a href="{{ url('/transparencia/politicas-institucionales') }}">Políticas Institucionales</a></li>
                    <li><a href="{{ url('/transparencia/plan-mejoramiento') }}">Plan De Mejoramiento</a></li>
                    <li><a href="{{ url('/transparencia/plan-mantenimiento') }}">Plan De Mantenimiento</a></li>
                    <li><a href="{{ url('/transparencia/plan-institucional-archivo') }}">Plan Institucional de Archivo</a></li>
                    <li><a href="{{ url('/transparencia/plan-accion') }}">Plan de Acción</a></li>
                    <li><a href="{{ url('/transparencia/plan-tratamiento-informacion') }}">Plan Tratamiento de Riesgos de Seguridad y Privacidad de la Información</a></li>
                    <li><a href="{{ url('/transparencia/plan-anticorrupcion') }}">Plan Anticorrupción</a></li>
                    <li><a href="{{ url('/transparencia/plan-antitramites') }}">Plan Antitrámites</a></li>
                    <li><a href="{{ url('/transparencia/plan-rendicion-cuentas') }}">Plan de Rendición de Cuentas</a></li>
                    <li><a href="{{ url('/transparencia/plan-estrategico') }}">Plan Estratégico</a></li>
                    <li><a href="{{ url('/transparencia/metas-objetivos-indicadores') }}">Metas, Objetivos e Indicadores de Gestión</a></li>
                    <li><a href="{{ url('/transparencia/informe-empalme') }}">Informe de Empalme</a></li>
                    <li><a href="{{ url('/transparencia/planes-mejoramiento') }}">Planes de Mejoramiento</a></li>
                    <li><a href="{{ url('/transparencia/plan-servicio-ciudadano') }}">Plan del Servicio al Ciudadano</a></li>
                    <li><a href="{{ url('/transparencia/plan-seguridad-informacion') }}">Plan de seguridad y Privacidad de la Información</a></li>
                    <li><a href="{{ url('/transparencia/plan-estrategico-tics') }}">Plan Estratégico de Tecnologías de la Información y las Comunicaciones</a></li>
                </ul>
                </li>
                <li class="drop-down"><a href="#">Control</a>
                  <ul>
                    <li><a href="{{ url('/transparencia/informes-gestion') }}">Informes De Gestión</a></li>
                    <li><a href="{{ url('/transparencia/informes-control-interno') }}">Informes De Control Interno</a></li>
                    <li><a href="{{ url('/transparencia/programa-auditoria') }}">Programa de Auditoria</a></li>
                    <li><a href="{{ url('/transparencia/informes-rendicion-cuentas') }}">Informes de Rendición de Cuentas</a></li>
                    <li><a href="{{ url('/transparencia/informes-poblacion-vulnerable') }}">Información para Población Vulnerable</a></li>
                    <li><a href="{{ url('/transparencia/defensa-judicial') }}">Defensa Judicial</a></li>
                </ul>
                </li>
                <li class="drop-down"><a href="#">Instrumentos de gestión de información pública</a>
                  <ul>
                    <li><a href="{{ url('/transparencia/matriz-cumplimiento') }}">Matriz de Cumplimiento Ley 1712</a></li>
                    <li><a href="{{ url('/transparencia/informes-pqr') }}">Informe PQR 2019</a></li>
                    <li><a href="{{ url('/transparencia/reglamento-interno-gestion-pqr') }}">Reglamento Interno de Gestión de PQR</a></li>
                </ul>
                </li>
                <li class="drop-down"><a href="#">Transparencia Pasiva</a>
                  <ul>
                    <li><a href="{{ url('/transparencia/mecanismos-atencion-ciudadana') }}">Mecanismos de Atención al Ciudadano</a></li>
                    <li><a href="{{ url('/transparencia/recepcion-solicitudes') }}">Recepción de Solicitudes de Información Pública</a></li>
                    <li><a href="{{ url('/transparencia/canales-sociales') }}">Canal Social Facebook</a></li>
                </ul>
                </li>
                <li><a href="{{ url('/transparencia/habeas-data') }}">Habeas Data</a></li>
            </ul> 
          </li>   
          <li class="drop-down"><a href="#">Normatividad</a>
            <ul>
              <li><a href="{{ url('/normatividad/acuerdos-leyes-resoluciones')}}">Acuerdos, Leyes y Resoluciones</a></li>
             {{--  <li><a href="{{ url('/normatividad/acuerdos-leyes-resoluciones')}}">Resoluciones Institucionales</a></li> --}}
              <li class="drop-down"><a href="#">Contratación</a>
                  <ul>
                    <li><a href="{{ url('/normatividad/contratacion/secop-I')}}">Secop I</a></li>
                    <li><a href="{{ url('/normatividad/contratacion/convocatorias-publicas')}}">Convocatorias Publicas</a>
                    </li>
                    <li><a href="{{ url('/normatividad/contratacion/gaceta-contratacion')}}">Gaceta De Contratación</a></li>
                    <li><a href="{{ url('/normatividad/contratacion/manual-contratacion')}}">Manual de Contratación</a></li>
                    <li><a href="{{ url('/normatividad/contratacion/invitacion-cotizar')}}">Invitación a Cotizar</a></li>
                    <li><a href="{{ url('/normatividad/contratacion/ofertas-empleo')}}">Ofertas de Empleo</a></li>
                    <li><a href="{{ url('/normatividad/contratacion/plan-anual-adquisiciones')}}">Plan Anual de Adquisiciones</a></li>
                    <li><a href="{{ url('/normatividad/contratacion/convocatoria-revisor-fiscal')}}">Convocatoria revisor fiscal</a></li>
                </ul>
                </li>
            </ul>
          </li>
          <li class="drop-down"><a href="#">Información al Ciudadano</a>
            <ul>
              <li><a href="{{ url('/informacion-ciudadano/asociacion-de-usuarios')}}">SIAU</a></li>
              <li class="drop-down"><a href="#">Guías y Capacitaciones a Personal</a>
                <ul>
                  <li><a href="{{ url('/informacion-ciudadana/')}}">Socializacion y Evaluación de Guías Según Circular 000016 De 2017</a></li>
                </ul>
              </li>
              <li><a href="{{ url('/informacion-ciudadano/derechos-y-deberes')}}">Derechos y deberes</a></li>
              <li><a href="{{ url('/informacion-ciudadano/PQR')}}">PQR</a></li>
              <li><a href="{{ url('/informacion-ciudadano/preguntas-y-respuestas')}}">Preguntas y Respuestas Frecuentes</a></li>
              <li><a href="{{ url('/informacion-ciudadano/mapa-de-riesgos')}}">Mapa de Riesgos</a></li>
              <li><a href="{{ url('/informacion-ciudadano/seguridad-del-paciente')}}">Seguridad Del Paciente</a></li>
              <li><a href="{{ url('/informacion-ciudadano/citas')}}">Tramites</a></li>
              <!-- <li><a href="#">¿ Qué hacer en caso de una grabación no consentida?</a></li> -->
              <li><a href="{{ url('/informacion-ciudadano/glosario-de-terminos')}}">Glosario de Términos</a></li>
            </ul>
          </li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->


  @yield('content')


<!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>E.S.E Hospital Departamental San Antonio de Padua</h3>
              <p>
                Carrera 2E # 1 - 17 <br>
                La Plata - Huila, Colombia<br><br>
                <strong>PBX:</strong> +57 60 8 370339<br>
                <strong>Email:</strong> info@esesanantoniodepadua.gov.co<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Enlaces</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Inicio</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          {{-- <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div> --}}

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>E.S.E Hospital Departamental- San Antonio de Padua</span></strong>. Todos los derechos reservados
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medicio-free-bootstrap-theme/ -->
        Diseñada por <a href="#">Creaciones-Web</a> 2021
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/jquery.easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('vendor/waypoints/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('vendor/counterup/counterup.min.js') }}"></script>
  <script src="{{ asset('vendor/owl.carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('vendor/venobox/venobox.min.js') }}"></script>
  <script src="{{ asset('vendor/aos/aos.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('js/main.js')}}"></script>

</body>

</html>