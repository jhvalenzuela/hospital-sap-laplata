@extends('layout')

@section('content')
  
<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Información al ciudadano</h2>
          <ol>
            <li><a href="index.html">Inicio</a></li>
            <li>Preguntas y respuestas frecuentes</li>
          </ol>
        </div>

      </div>
    </section>
    <!-- End Breadcrumbs Section -->

<!-- ======= Frequently Asked Questioins Section ======= -->
    <section id="faq" class="faq faq-section">
      <div class="container" data-aos="fade-up">

        <div class="section-title-innerpage">
          <h2>Preguntas y Respuestas Frecuentes</h2>
          {{-- <p>E.S.E. Hospital Departamental San Antonio de Padua, La Plata Huila - Hospital Humanizado y Seguro es Nuestro Compromiso.</p> --}}
        </div>

        <ul class="faq-list" data-aos="fade-up" data-aos-delay="100">

          <li>
            <a data-toggle="collapse" class="" href="#faq1">¿Qué es el Buzón de Quejas y Reclamos o Sugerencias? <i class="icofont-simple-up"></i></a>
            <div id="faq1" class="collapse show" data-parent=".faq-list">
              <p>
                Es un mecanismo de comunicación directa para el seguimiento, control y mejoramiento continuo de los servicios que se prestan en la gestión de los procesos del Sistema de Gestión Integral de Calidad de la E.S.E Hospital Departamental San Antonio de Padua.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq2" class="collapsed">¿Quiénes pueden usarlo? <i class="icofont-simple-up"></i></a>
            <div id="faq2" class="collapse" data-parent=".faq-list">
              <p>
                Cualquier miembro de nuestra comunidad hospitalaria o cualquier ciudadano en general.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq3" class="collapsed">¿Qué se debe tener en cuenta? <i class="icofont-simple-up"></i></a>
            <div id="faq3" class="collapse" data-parent=".faq-list">
              <p>
                No utilizar lenguaje soez, grosero o términos desobligantes. No realizar juicios temerarios. Describir claramente lo ocurrido y puntualizar el caso, si tiene la información del nombre del funcionario infórmelo. Para garantizar que su solicitud tenga la atención adecuada, su solicitud debe incluir los siguientes datos: Objeto de su solicitud, razones que la justifican, relación de documentos adicionales (si aplica), nombres y apellidos completos, una dirección de correo electrónico a la cual se pueda hacer llegar la respuesta a su solicitud y la confirmación de envío de la solicitud, el trámite inicia toda vez que la solicitud sea confirmada.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq4" class="collapsed">¿Cómo registrar una solicitud? <i class="icofont-simple-up"></i></a>
            <div id="faq4" class="collapse" data-parent=".faq-list">
              <p>
                Para registrar una solicitud, debe diligenciar el formulario que se encuentra al hacer clic <a href="{{ url('/informacion-ciudadano/PQR')}}">AQUI</a>
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq5" class="collapsed">¿Es importante la Autorización? <i class="icofont-simple-up"></i></a>
            <div id="faq5" class="collapse" data-parent=".faq-list">
              <p>
                Señor usuario según su EPS-S y para algunos diagnósticos se debe tramitar la autorización correspondiente. El área de autorizaciones es la encargada de validar derechos y verificar el estado de contratación con las EPS, o servicios que el paciente requiera de manera directa. Tramita y orienta a los usuarios que son enviados desde otra institución para continuar con su proceso de atención cuando el servicio no es brindado por el hospital o se encuentra por fuera del Plan Obligatorio de Salud.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq6" class="collapsed">¿Qué es y Cuando pertenezco al Régimen Subsidiado? <i class="icofont-simple-up"></i></a>
            <div id="faq6" class="collapse" data-parent=".faq-list">
              <p>
                Cuando la persona no tiene la oportunidad de laborar ni tiene grandes ingresos, esta puede estar afiliada en una EPS-S (Empresa Promotora de Salud Subsidiada) a través de su encuesta SISBEN. La EPS-S escogida por el usuario será entonces la encargada de autorizar todos los procedimientos que requiera el paciente y de velar por la prestación oportuna de su atención médica.
              </p>
            </div>
          </li>

           <li>
            <a data-toggle="collapse" href="#faq7" class="collapsed">¿Qué es y cuando pertenezco al Régimen Contributivo en Salud? <i class="icofont-simple-up"></i></a>
            <div id="faq7" class="collapse" data-parent=".faq-list">
              <p>
                Cuando la persona tiene un contrato laboral, por ley debe pagar su seguridad social en una de las EPS contributivas de su elección. Las EPS contributivas deben cubrir la salud del afiliado según lo establecido en la ley del Plan Obligatorio de Salud Contributivo.
              </p>
            </div>
          </li>

           <li>
            <a data-toggle="collapse" href="#faq8" class="collapsed">¿Qué son las EPS-S? <i class="icofont-simple-up"></i></a>
            <div id="faq8" class="collapse" data-parent=".faq-list">
              <p>
                Son las entidades promotoras de salud subsidiadas responsables de la afiliación y registro de los afiliados al sistema general de seguridad social en salud en Colombia. Su función básica es organizar y garantizar la prestación del plan obligatorio de salud (POS).
              </p>
            </div>
          </li>

           <li>
            <a data-toggle="collapse" href="#faq9" class="collapsed">¿Qué es el nivel de SISBEN? <i class="icofont-simple-up"></i></a>
            <div id="faq9" class="collapse" data-parent=".faq-list">
              <p>
                Es un sistema de clasificación para la población, la cual brinda acceso a programas sociales del estado tales como: Salud, Educación, Empleo, Vivienda, eventos sociales entre otros.
              </p>
            </div>
          </li>

           <li>
            <a data-toggle="collapse" href="#faq10" class="collapsed">¿Qué es el SISBEN? <i class="icofont-simple-up"></i></a>
            <div id="faq10" class="collapse" data-parent=".faq-list">
              <p>
                El SISBEN es la manera como el Gobierno Colombiano busca garantizar el cumplimiento de los derechos de la población más vulnerable del país. La Sigla SISBEN significa, Sistema de Potenciales Beneficiarios para programas sociales. El mecanismo para identificar los potenciales beneficiarios, es mediante la encuesta SISBEN, la cual muestra de forma real y clara, la población vulnerable. De esta forma, el Estado Colombiano define el nivel socioeconómico en el que se encuentra la persona o el núcleo familiar, otorgando y garantizando los derechos de cada individuo.
              </p>
            </div>
          </li>

           <li>
            <a data-toggle="collapse" href="#faq11" class="collapsed">¿Qué son Hospital de Tercer Nivel? <i class="icofont-simple-up"></i></a>
            <div id="faq11" class="collapse" data-parent=".faq-list">
              <p>
                Se caracteriza por la atención de alta complejidad brindada por médicos y odontólogos especializados, especialistas tales como: Neurólogo, Otorrinolaringólogo, Oftalmólogo, Gastroenterólogo, Endocrinólogo entre otros. También cuenta con algunos sub especialistas como: Neurólogo pediatra, Hematólogo, Oncólogo entre otros.
              </p>
            </div>
          </li>

           <li>
            <a data-toggle="collapse" href="#faq12" class="collapsed">¿Qué son Hospitales de Cuarto Nivel? <i class="icofont-simple-up"></i></a>
            <div id="faq12" class="collapse" data-parent=".faq-list">
              <p>
                Son centros de salud con infraestructura y personal capaz de brindar atenciones complejas a la población. Presta servicios médico – quirúrgicos en hospitalización o de forma ambulatoria a las personas afectadas por enfermedades complejas, que requieren tratamientos especializados sofisticados.
              </p>
            </div>
          </li>

           <li>
            <a data-toggle="collapse" href="#faq13" class="collapsed">¿Qué es un Hospital de Segundo Nivel? <i class="icofont-simple-up"></i></a>
            <div id="faq13" class="collapse" data-parent=".faq-list">
              <p>
                Se caracteriza por la tención intermedia dada por médicos generales y de las especialidades básicas de: Medicina Interna, Cirugía, Gineco-obstetricia, Pediatría, Anestesiología, así como la atención de partos de bajo y mediano riesgo, Urgencias, Consulta Externa, Cirugía Ambulatoria y Hospitalización.
              </p>
            </div>
          </li>

           <li>
            <a data-toggle="collapse" href="#faq14" class="collapsed">¿Qué es un Hospital de Primer Nivel? <i class="icofont-simple-up"></i></a>
            <div id="faq14" class="collapse" data-parent=".faq-list">
              <p>
                Se caracteriza por atención básica prestada por puestos de salud, centros de salud, y hospitales locales, los cuales cuentan con los servicios de: Consulta Externa, Odontología, Urgencias y Hospitalización bajo la atención de médicos generales.
              </p>
            </div>
          </li>

           <li>
            <a data-toggle="collapse" href="#faq15" class="collapsed">¿Es importante la Autorización? <i class="icofont-simple-up"></i></a>
            <div id="faq15" class="collapse" data-parent=".faq-list">
              <p>
                Señor usuario según su EPS-S y para algunos diagnósticos se debe tramitar la autorización correspondiente. El área de autorizaciones es la encargada de validar derechos y verificar el estado de contratación con las EPS, o servicios que el paciente requiera de manera directa. Tramita y orienta a los usuarios que son enviados desde otra institución para continuar con su proceso de atención cuando el servicio no es brindado por el hospital o se encuentra por fuera del Plan Obligatorio de Salud.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq16" class="collapsed">¿Para qué es el servicio de Atención al Usuario? <i class="icofont-simple-up"></i></a>
            <div id="faq16" class="collapse" data-parent=".faq-list">
              <p>
                Los pacientes pueden comunicar sus inquietudes en la prestación de los servicios utilizando algunos de los canales de comunicación los cuales pueden ser: - Los buzones de sugerencia ubicados en todo el Hospital - La oficina de atención al usuario - La página web
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq17" class="collapsed">¿Qué documentos debo traer si mi cita es por primera vez? <i class="icofont-simple-up"></i></a>
            <div id="faq17" class="collapse" data-parent=".faq-list">
              <p>
                Para que un paciente pueda tener una cita en el Hospital Departamental San Antonio de Padua por primera vez debe traer los siguientes documentos:
                Original del documento de identidad del paciente 
                <p> Carné de afiliación de la EPS-S si es Sanidad Militar.</p>
                <p> Remisión original completamente diligenciada de la institución que remite.</p>
                <p> Autorización previa del servicio. Consulte con su EPS-S los detalles del proceso.</p>
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq18" class="collapsed">¿Si necesito citas médicas? <i class="icofont-simple-up"></i></a>
            <div id="faq18" class="collapse" data-parent=".faq-list">
              <p>
                Para que el proceso de asignación de citas sea oportuno y sin contratiempos el usuario debe ser previamente valorado por un médico general de un hospital de primero o segundo nivel el cual según su diagnóstico lo remitirá al Hospital Departamental San Antonio de Padua para la atención especializada. Si Ud. Desea asistir a una consulta particular, será atendido una vez cumpla el proceso de asignación facturación de la consulta.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq19" class="collapsed">¿Dónde obtengo información? <i class="icofont-simple-up"></i></a>
            <div id="faq19" class="collapse" data-parent=".faq-list">
              <p>
                Todas las personas que llegan al Hospital Departamental San Antonio de Padua por consulta externa deben primero, pasar al módulo de atención al usuario, donde se le guiará e informará para continuar con la ruta de su atención.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq20" class="collapsed">¿Qué es la programación de cirugía? <i class="icofont-simple-up"></i></a>
            <div id="faq20" class="collapse" data-parent=".faq-list">
              <p>
                Esta área se encarga de programar los procedimientos quirúrgicos ambulatorios que requieran los pacientes y de explicación personalizada para el proceso que se le va a realizar.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq21" class="collapsed">¿Y si no tengo ninguna afiliación? <i class="icofont-simple-up"></i></a>
            <div id="faq21" class="collapse" data-parent=".faq-list">
              <p>
                En caso de requerir los servicios de salud y no poseer ninguna afiliación se le orientara los pasos a seguir:
                 Debe dirigirse a la Alcaldía a solicitar que le realice la respectiva encuesta del censo 
                 Con el Puntaje del censo (Dependiendo si es Nivel I o II) debe dirigirse a una EPS para realizar el trámite de afiliación.
                 Si el Puntaje del Sisben es nivel III debe cotizar por su propia cuenta una EPS (Afiliación Independiente)
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq22" class="collapsed">¿Dónde se encuentra ubicado el Servicio de Consulta externa? <i class="icofont-simple-up"></i></a>
            <div id="faq22" class="collapse" data-parent=".faq-list">
              <p>
                Este servicio se encuentra ubicado en el Primer piso del Hospital Departamental San Antonio de Padua. En la entrada principal.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq23" class="collapsed">¿Dónde solicito mis medicamentos? <i class="icofont-simple-up"></i></a>
            <div id="faq23" class="collapse" data-parent=".faq-list">
              <p>
                En el caso de los afiliados de Ecoopsos los medicamentos se entregan en la farmacia del Hospital con su previa autorización de la EPS. Para los demás usuarios se le entregaran dependiendo la EPS tenga convenio.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq24" class="collapsed">¿Me puedo quedar acompañando a mi familiar cuando me lo hospitalizan? <i class="icofont-simple-up"></i></a>
            <div id="faq24" class="collapse" data-parent=".faq-list">
              <p>
                Si es menor de edad, la mamá Debe Permanecer con el todo el tiempo. Si es un adulto Depende de La condición clínica del paciente Debe solicitarle a la Enfermera del Servicio en donde se encuentra hospitalizado el paciente Ella Y Hará una evaluación técnica de La necesidad de compañía permanente y si lo amerita, Otorga el permiso por escrito.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq25" class="collapsed">¿Cuántas personas pueden entrar a la hora de visita y que deben llevar? <i class="icofont-simple-up"></i></a>
            <div id="faq25" class="collapse" data-parent=".faq-list">
              <p>
                A la hora de visitar a un paciente solo podrán ingresar a la Institución 3 personas por usuario con su respectiva identidad, donde el vigilante de turno hará un intercambio de documentos (Identificación personal por una tarjeta institucional). 
              </p>
            </div>
          </li>

        </ul>

      </div>
    </section><!-- End Frequently Asked Questioins Section -->


  </main><!-- End #main -->

@endsection