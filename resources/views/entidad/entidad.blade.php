
@extends('layout')

@section('content')
  
<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Entidad</h2>
          <ol>
            <li><a href="index.html">Inicio</a></li>
            <li>Entidad</li>
          </ol>
        </div>

      </div>
    </section>
    <!-- End Breadcrumbs Section -->

   {{--  <section class="inner-page">
      <div class="container">
        <p>
          Example inner page template
        </p>
      </div>
    </section> --}}


    <!-- ======= Departments Section ======= -->
   <section id="departments" class="departments section-innerpage">
      <div class="container" data-aos="fade-up">

        <div class="section-title-innerpage">
          <h2>Entidad</h2>
          <p>E.S.E. Hospital Departamental San Antonio de Padua, La Plata Huila - Hospital Humanizado y Seguro es Nuestro Compromiso.</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-4 mb-5 mb-lg-0">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-toggle="tab" href="#tab-1">
                  <h4>Historia</h4>
                 {{--  <p>Hospital Humanizado y Seguro es Nuestro Compromiso</p> --}}
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-toggle="tab" href="#tab-2">
                  <h4>Organigrama</h4>
                {{--   <p>Voluptas vel esse repudiandae quo excepturi.</p> --}}
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-toggle="tab" href="#tab-3">
                  <h4>Misión y Visión</h4>
                {{--   <p>Velit veniam ipsa sit nihil blanditiis mollitia natus.</p> --}}
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-toggle="tab" href="#tab-4">
                  <h4>Funciones</h4>
                  {{-- <p>Ratione hic sapiente nostrum doloremque illum nulla praesentium id</p> --}}
                </a>
              </li>
            </ul>
          </div>
          <div class="col-lg-8">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <h3>Historia</h3>
                <p class="text-justify">El municipio de La Plata fue fundado por el capitán DIEGO DE OSPINA, el cinco (5) de junio de 1651 con el nombre de SAN SEBASTIAN DE LA PLATA, y un siglo después se le antepuso el de villa quedando oficialmente con el nombre de la VILA DE SAN SEBASTIAN DE LA PLATA.

                En 1912, el padre Manuel Antonio Ortiz inicia gestiones para la adquisición de un terreno que hacia parte de la finca las museñas o manga del Guaqueño. Esta gestión se cristalizo mediante la firma de la escritura pública ciento ochenta (180) en la notaria del circuito de la plata en el año de 1912, en la cual queda registrado la venta de este pedido a la iglesia de la parroquia de LA VILLA DE SAN SEBASTIAN DE LA PLATA para la construcción de un hospital de caridad.
                </p>
                <img src="{{ asset('img/departments-1.jpg') }}" alt="" class="img-fluid">
                <p class="text-justify">Con la colaboración del mayordomo de una fabrica se construyen la primera edificación en bloque; quedando habilitados varios salones para la prestación de los servicios médicos; se nombra el señor ANTONIO MARIA FALLA CANTILLO como la persona encargada de administrarlo y ponerlo en funcionamiento. Los primeros servicios médicos fueron prestados por el doctor BRAULIO RAMIREZ HERNANDEZ, iniciándose de esta manera el funcionamiento del hospital San Antonio de Padua, posteriormente el señor Falla Cantillo realiza gestiones ante el gobierno departamental y nacional para la consecución de recursos que le permitieron continuar con la construcción de los demás pabellones los cuales aún existen. Después de un tiempo de funcionamiento, se logra la colaboración de la hermanas Vicentinas quienes realizan labores de enfermaría, también se crea una junta directiva conformada por el Doctor Camilo Llanos, señores Ignacio Montealegre, Rafael Caupaz y Misael Falla y su presidente el cura párroco de la iglesia de San Sebastián.
                En el año 1963, siendo administrador el señor Acisclo Embuz se obtiene la personería jurídica del Hospital San Antonio de Padua, mediante la resolución 025 de Julio 31, emanada en la dirección de Justicia de Gobernación del Huila. Desde este mismo año y hasta 1969 el hospital presenta una mejor organización tanto en la parte administrativa como en la parte médica, se contrata personal capacitado y se nombra el primer director, destacándose el médico Julio López.
                Parte de la edificación es demolida, construyendo la nueva planta física en ladrillo, también se destaca en este año el nombramiento del pagador Misael Falla quien prestó los servicios al Hospital durante 22 años, la Almacenista Blanca Embuz y el administrador Alfredo Castillo.
                Mediante la resolución 005690 de 1973 el Ministerio de Salud Publica aprobó el Acuerdo 145 de 1973 de la Junta Directiva del Hospital San Antonio de Padua de la Plata Huila, por el cual se expidieron los Estatutos que regirían la institución.
                A partir del año 1974 se incrementaron los servicios médicos prestados por el Hospital debido a la adquisición de equipos de Laboratorios, Radiografías, Odontología, entre otros.
                El Decreto No 730 del primero de agosto de 1994 definió el Hospital Departamental San Antonio de Padua, de la Plata Huila como Empresa Social del Estado. En este acto administrativo se contempla: creación, naturaleza jurídica, objeto, objetivos, funciones, órganos de dirección, administración y organización.
                Mediante la resolución No 2469 del 22 de noviembre de 1994 se concedió la licencia sanitaria de funcionamiento y registro especial No 0085 al Hospital Regional San Antonio de Padua, por el termino de cinco (5) años.
                La gobernación del Departamento Mediante Decreto No 228 del 28 de febrero de 1995 nombro al Doctor Jorge Iván Cocunubo Castellanos como Director del Hospital.
                El Decreto 0367 del 13 de Diciembre de 1995, modificatoria de la Ordenanza No 048, definió la estructura orgánica del Hospital. Básicamente la estructura contempla dos grandes aéreas: Clínica y Administrativa.
                La junta Directiva mediante Acuerdo 001 de enero de 1997 fijo la planta de cargos y asignaciones de la Empresa Social del Estado San Antonio de Padua.
                Por esta gran historia que enmarca la creación de la E.S.E. Hospital san Antonio de Padua de La Plata, podemos decir con orgullos que somos y seremos: “Patrimonio del Sur Occidente Del Huila”
                </p>
              </div>

              <div class="tab-pane" id="tab-2">
                <h3>Organigrama</h3>
                <p>GERENCIA</p><p class="text-justify">Integra con la Junta Directiva la Dirección de la Empresa, con el encargo de mantener la unidad de objetivos e intereses de la organización entorno a la misión y objetivo empresariales, le corresponde así mismo identificar las necesidades y expectativas de los usuarios, determinar los mercados a atender, definir la estrategia del servicio, asignar recursos, adoptar y adaptar normas de eficiencia y calidad, controlando su aplicación en la gestión institucional y las demás funciones de dirección que exija el normal desenvolvimiento de la empresa. Ejecutará en coordinación con la Subgerencia Asistencial, los procesos de planeación, adquisición, manejo, utilización de los recursos financieros, físicos y de información, indispensables para alcanzar y desarrollar los objetivos de la empresa.</p>
                <p>SUBGERENCIA ADMINISTRATIVA Y FINANCIERA</p>
                <p class="text-justify">Encargada de ejecutar en coordinación con las demás áreas, los procesos de planeación, adquisición, manejo, utilización, optimización y control de los recursos humanos, financieros, físicos y de información; así como de realizar el mantenimiento de la planta física y su dotación. Procesos que son indispensables para alcanzar y desarrollar los objetivos de la empresa.</p>
                <p>SUBGERENCIA TECNICO CIENTIFICA</p>
                <p class="text-justify">Encargada del proceso producción y prestación de servicios de salud, con sus respectivos procedimientos y actividades, propiciando la utilización de los medios y tecnologías mas adecuada para el servicio. Le compete a demás definir políticas institucionales de atención, el tipo de recursos necesarios para el efecto, las formas y características de la atención y la dirección y prestación del servicio</p>
                <p>OFICINA DE CONTROL INTERNO</p>
                <p class="text-justify">Encargada de medir y evaluar la eficiencia, eficacia y economía de los demás controles, asesorando a la Gerencia en la continuidad del proceso administrativo, la reevaluación de los planes establecidos y en la introducción de los correctivos necesarios para el cumplimiento de las metas u objetivos previstos.</p>
                <img src="{{ asset('img/organigrama.png') }}" alt="" class="img-fluid">
                <p class="font-italic">Conoce el organigrama de la E.S.E. Hospital Departamental San Antonio de Padua 2020.</p>
              </div>
              <div class="tab-pane" id="tab-3">
                <h3>Misión</h3>
                <p class="text-justify">La Misión de la E.S.E. Hospital Departamental San Antonio de Padua queda definida de la siguiente manera: “Somos una Empresa Social del Estado que presta servicios de salud de mediana complejidad para proteger la vida de forma segura, con calidad y calidez, talento humano idóneo y competente, contando con tecnología adecuada, enfocados siempre en la satisfacción plena de nuestros usuarios y su familia”.</p>
                <h3>Visión</h3>
                <p class="text-justify"">La Visión de la E.S.E. Hospital Departamental San Antonio de Padua queda definida de la siguiente manera: “En el año 2020, la E.S.E Hospital San Antonio de Padua será reconocida en la región como una Institución centrada en el Ser Humano, con servicios de salud óptimos, enmarcados bajo las Políticas de Seguridad y Calidad, comprometida con el desarrollo de sus colaboradores y fortalecida en su Gestión Empresarial”.</p>
                {{-- <img src="{{ asset('img/departments-3.jpg') }}" alt="" class="img-fluid">
                <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p> --}}
              </div>
              <div class="tab-pane" id="tab-4">
                <h3>Funciones y Deberes</h3>
                <p class="text-justify">La Junta Directiva de la Empresa Social del Estado Departamental San Antonio de Padua, en ejercicio de sus atribuciones legales y en especial las conferidas por la Ordenanza 064 de 1.995; Decreto Ordenanzal número 730 del 1 de Agosto de 1.994, proferida por el Gobierno Departamental y en el marco del Decreto 1030 de 1.968, la Ley 3 de 1.986 y sus Decretos Reglamentarios 1221 y 1222 de 1.986.
                <ul>
                  <li>CAPITULO I NATURALEZA, DENOMINACIÓN, OBJETO, PRINCIPIOS BASICOS Y OBJETIVOS.</li>
                  <li>CAPITULO II    DOMICILIO, ORIGEN, PATRIMONIO.</li>
                  <li>CAPITULO III  ESTRUCUTRA ORGANICA Y DIRECIÓN.</li>
                  <li>CAPITULO IV DEBERES, DERECHOS Y PROHIBICIONES.</li>
                  <li>CAPITULO V REGIMEN DE IMPEDIMENTOS E INHABILIDADES.</li>
                  <li>CAPITULO VI SANCIONES.</li>
                  <li>CAPITULO VII PERSONAL.</li>
                  <li>CAPITULO VIII DESCONCENTRACIÓN Y DELEGACIÓN DE FUNCIONES ESPECIALES.CAPITULO IX ADMINISTRACIÓN PRESUPUESTAL.</li>
                  <li>CAPITULO X CONTABILIDAD Y COSTOS.</li>
                  <li>CAPITULO XI REGIMEN CONTRACTUAL Y PRESUPUESTARIO.</li>
                  <li>CAPITULO XII REGIMEN JURIDICO.</li>
                  <li>CAPITULO XIII SISTEMA DE PLANEACIÓN.</li>
                  <li>CAPITULO XIV VIGILANCIA Y CONTROL.</li>
                  <li>CAPITULO XV DISPOSICIONES FINALES.</li>
                  <li>CAPITULO XVI APROBACION, VIGENCIA Y MODIFICACIONES ESTATUTARIAS.</li>
                </ul>
                </p>
              {{--   <img src="{{ asset('img/departments-4.jpg') }}" alt="" class="img-fluid">
                <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p> --}}
              </div>
            </div>
          </div>
        </div>

      </div>
    </section> <!-- End Departments Section -->


  </main><!-- End #main -->

@endsection

  