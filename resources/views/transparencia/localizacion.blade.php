
@extends('layout')

@section('content')
  
<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Mecanismos de contacto</h2>
          <ol>
            <li><a href="{{ url('/')}}">Inicio</a></li>
            <li>Localización</li>
          </ol>
        </div>

      </div>
    </section>
    <!-- End Breadcrumbs Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-innerpage">
      <div class="container" data-aos="fade-up">

        <div class="section-title-innerpage">
          <h2>Localización</h2>
          <p>E.S.E Hospital Departamental San Antonio de Padua, ubicado en el Municipio de La Plata, Departamento del Huila, Colombia, Carrera 2E # 11 - 17, Avenida Libertadores, Salida a Neiva. Codigo Postal 415060</p>
        </div>

      </div>

      <div>
       <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.3383227265676!2d-75.88805618545975!3d2.393217198255934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3ad2b1ac4ea8e5%3A0x8a92e08e885c82b0!2sHospital%20Departamental%20San%20Antonio%20de%20Padua%20La%20Plata%20Huila!5e0!3m2!1ses!2sco!4v1613652735336!5m2!1ses!2sco" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container">

        <div class="row mt-5">

          <div class="col-lg-12">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Nuestra Dirección</h3>
                  <p>Carrera 2E # 11 - 17, La Plata - Huila, Avenida Libertadores, Saliada a Neiva</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Correo Eléctronico</h3>
                  <p>info@esesanantoniodepadua.gov.co<br>contact@esesanantoniodepadua.gov.co</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Llamanos</h3>
                  <p>PBX: +57 60 8 370339<br>Fax: +57 60 8 370122</p>
                </div>
              </div>
            </div>

          </div>

         {{--  <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nombres" data-rule="minlen:4" data-msg="Ingrese al menos 4 caracteres" />
                  <div class="validate"></div>
                </div>
                <div class="col form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Correo Eléctronico" data-rule="email" data-msg="Por favor introduzca una dirección de correo electrónico válida" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" data-rule="minlen:4" data-msg="Ingrese al menos 8 caracteres de asunto" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Por favor escribe el mensaje" placeholder="Mensaje"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Enviar mensaje</button></div>
            </form>
          </div> --}}

        </div>

      </div>
    </section><!-- End Contact Section -->


  </main><!-- End #main -->

@endsection

  