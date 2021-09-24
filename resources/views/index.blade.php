
@extends('layout')

@section('content')
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide --> 
        @forelse($sliderprincipal as $sliderp)
        <div class="carousel-item {{ $sliderp->id == 1 ? 'active' :'' }}" style="background-image: url('{{ asset($sliderp->slideImagen)}}')">
          <div class="container">
            <h2>{{ $sliderp->slideTitulo }}</h2>
            <p>{{ $sliderp->slideDescription }}</p>
           <!--  <a href="#about" class="btn-get-started scrollto">Leer mas</a> -->
          </div>
        </div>
        @empty
          <p>No hay Imagenes para mostrar</p>
        @endforelse

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
        <span class="sr-only">Siguiente</span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i><img src="{{ asset('img/icon/urgencias-01.png') }}" class="img-fluid" alt=""></i></div>
              <h4 class="title"><a href="">Urgencias</a></h4>
              <p class="description">Ofrecemos servicio de urgencias todos los días del año las 24 horas del día.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i><img src="{{ asset('img/icon/farmacia-01.png') }}" class="img-fluid" alt=""></i></div>
              <h4 class="title"><a href="">Farmacia</a></h4>
              <p class="description">Mejoramos la gestión de medicamentos y la atención farmacéutica.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i><img src="{{ asset('img/icon/laboratorio-01.png') }}" class="img-fluid" alt=""></i></div>
              <h4 class="title"><a href="">Laboratorio</a></h4>
              <p class="description">Datos de análisis cualitativos y cuantitativos a muestras biológicas.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i><img src="{{ asset('img/icon/cirugia-01.png') }}" class="img-fluid" alt=""></i></div>
              <h4 class="title"><a href="">Cirugía</a></h4>
              <p class="description">Procedimientos quirúrgicos o potencialmente quirúrgicos.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>Espacio por asignar</h3>
          <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <a class="cta-btn scrollto" href="#appointment">Por asignar</a>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= About Us Section ======= -->
   {{--  <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Sobre Nosotros o Noticias</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right">
            <img src="{{ asset('img/about.jpg') }}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
            <p class="font-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class="icofont-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="icofont-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
              <li><i class="icofont-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
            </ul>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
            </p>
          </div>
        </div>

      </div>
    </section> --}}<!-- End About Us Section -->

    <!-- ======= Counts Section ======= -->
   {{--  <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="icofont-doctor-alt"></i>
              <span data-toggle="counter-up">85</span>
              <p><strong>Doctors</strong> consequuntur quae qui deca rode</p>
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="icofont-patient-bed"></i>
              <span data-toggle="counter-up">18</span>
              <p><strong>Departments</strong> adipisci atque cum quia aut numquam delectus</p>
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="icofont-laboratory"></i>
              <span data-toggle="counter-up">8</span>
              <p><strong>Research Lab</strong> aut commodi quaerat. Aliquam ratione</p>
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="icofont-award"></i>
              <span data-toggle="counter-up">150</span>
              <p><strong>Awards</strong> rerum asperiores dolor molestiae doloribu</p>
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

        </div>

      </div>
    </section> --}}<!-- End Counts Section -->

    <!-- ======= Features Section ======= -->
    {{-- <section id="features" class="features">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-2 order-lg-1" data-aos="fade-right">
            <div class="icon-box mt-5 mt-lg-0">
              <i class="bx bx-receipt"></i>
              <h4>Est labore ad</h4>
              <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
            </div>
            <div class="icon-box mt-5">
              <i class="bx bx-cube-alt"></i>
              <h4>Harum esse qui</h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
            </div>
            <div class="icon-box mt-5">
              <i class="bx bx-images"></i>
              <h4>Aut occaecati</h4>
              <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
            </div>
            <div class="icon-box mt-5">
              <i class="bx bx-shield"></i>
              <h4>Beatae veritatis</h4>
              <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
            </div>
          </div>
          <div class="image col-lg-6 order-1 order-lg-2" style="background-image: url('{{ asset('img/features.jpg')}}' );" data-aos="zoom-in"></div>
        </div>

      </div>
    </section> --}}<!-- End Features Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Nuestros Servicios</h2>
          <p>Constituyen un sistema de atención orientado al mantenimiento, la restauración y la promoción de la salud de las personas por medio de personal médico, enfermería, personal auxiliar y de servicios técnicos durante 24 horas, 365 días del año</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon"><i><img src="{{ asset('img/icon/urgencias-01.png') }}" class="img-fluid" alt=""></i><!-- <i class="icofont-heart-beat"></i> --></div>
            <h4 class="title"><a href="">Urgencias</a></h4>
            <p class="description">Ofrecemos servicio de urgencias 24/7 cuan función es valorar al paciente para, posteriormente, diagnosticarlo, tratarlo, evaluarlo y así decidir si el paciente se ingresa o se da un tratamiento domiciliario.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon"><i><img src="{{ asset('img/icon/farmacia-01.png') }}" class="img-fluid" alt=""></i></div>
            <h4 class="title"><a href="">Farmacia</a></h4>
            <p class="description">Contamos con farmacia la cual brinda el servicio de elegir, preparar, almacenar, combinar y dispensar medicamentos y productos sanitarios, asesorando a profesionales de la salud y pacientes sobre su uso seguro, efectivo y eficiente.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon"><i><img src="{{ asset('img/icon/cirugia-01.png') }}" class="img-fluid" alt=""></i></div>
            <h4 class="title"><a href="">Cirugía</a></h4>
            <p class="description">Contamos con un equipo multidisciplinario; capacitados y comprometidos en brindar una atención integral de salud, con calidad y calidez   llevamos a cargo del tratamiento de las patologías que se resuelvan mediante procedimientos quirúrgicos o potencialmente quirúrgicos, tanto electivos como de urgencia de origen benigno, inflamatorio, traumático o neoplásico</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon"><i><img src="{{ asset('img/icon/uci-01.png') }}" class="img-fluid" alt=""></i></div>
            <h4 class="title"><a href="">UCI</a></h4>
            <p class="description">En la Unidad de Cuidados Intensivos (UCI) contamos con un servicio sumamente especializado y necesario que ofrece a nuestro municipio y alrededores una utilidad vital, equipada con todo lo necesario para atender a pacientes con pronóstico grave o con alto riesgo de presentar complicaciones. Por su estado, requieren monitorización continua, vigilancia y tratamiento específico.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon"><i><img src="{{ asset('img/icon/consulta-01.png') }}" class="img-fluid" alt=""></i></div>
            <h4 class="title"><a href="">Consulta Externa</a></h4>
            <p class="description">En nuestra entidad también contamos con el área de Consulta Externa que es un servicio ambulatorio para pacientes con una cita asignada previamente que acceden a atenciones médicas para diferentes tipos de diagnósticos, con un amplio lugar y un orden para poder agilizar nuestros servicios.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon"><i><img src="{{ asset('img/icon/tomografia-01.png') }}" class="img-fluid" alt=""></i></div>
            <h4 class="title"><a href="">Tomografía</a></h4>
            <p class="description">Obtener imágenes del cuerpo desde diferentes ángulos y ver de forma clara los diferentes tipos de tejidos teniendo en cuenta que es muy útil porque muestra de forma clara diferentes tipos de tejidos como los pulmones, huesos, tejidos blandos y vasos sanguíneos. Permite diagnosticar problemas como las enfermedades cardiovasculares, infecciones, traumatismos, trastornos musculo-esqueléticos y cáncer, así como realizar un seguimiento y planificar el tipo de tratamiento médico o quirúrgico y su respuesta.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon"><i><img src="{{ asset('img/icon/laboratorio-01.png') }}" class="img-fluid" alt=""></i></div>
            <h4 class="title"><a href="">Laboratorio</a></h4>
            <p class="description">En el servicio de Laboratorio Clínico se constituye una unidad funcional y personal profesional altamente calificado dedicados a proporcionar datos de análisis cualitativos y cuantitativos realizados a muestras biológicas, con fines de contribuir a la prevención, diagnóstico y tratamiento de las enfermedades humanas..</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon"><i><img src="{{ asset('img/icon/pediatria-01.png') }}" class="img-fluid" alt=""></i></div>
            <h4 class="title"><a href="">Pediatría</a></h4>
            <p class="description">En Nuestra Área de Pediatría nos encargamos del cuidado y seguimiento médico de los niños y sus enfermedades, pero con un objetivo mucho mayor que es la curación de las enfermedades ya que la pediatría estudia tanto al niño normal como al enfermo. Esta especialidad abarca desde el nacimiento hasta la adolescencia con el fin de lograr un resultado mejor al infante.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon"><i><img src="{{ asset('img/icon/iami-01.png') }}" class="img-fluid" alt=""></i></div>
            <h4 class="title"><a href="">IAMI</a></h4>
            <p class="description">El Servicio IAMI INTEGRAL buscamos la humanización del beneficio a favor de la salud y nutrición materna e infantil, con enfoque de derechos y perspectiva de género, que garantice la calidad, calidez e integralidad de los servicios y programas dirigidos a la mujer y a la infancia.</p>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Testimonials Section ======= -->
   {{--  <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Testimonios</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="owl-carousel testimonials-carousel" data-aos="fade-up" data-aos-delay="100">

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="{{ asset('img/testimonials/testimonials-1.jpg') }}" class="testimonial-img" alt="">
            <h3>Saul Goodman</h3>
            <h4>Ceo &amp; Founder</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="{{ asset('img/testimonials/testimonials-2.jpg') }}" class="testimonial-img" alt="">
            <h3>Sara Wilsson</h3>
            <h4>Designer</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="{{ asset('img/testimonials/testimonials-3.jpg') }}" class="testimonial-img" alt="">
            <h3>Jena Karlis</h3>
            <h4>Store Owner</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="{{ asset('img/testimonials/testimonials-4.jpg') }}" class="testimonial-img" alt="">
            <h3>Matt Brandon</h3>
            <h4>Freelancer</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="{{ asset('img/testimonials/testimonials-5.jpg') }}" class="testimonial-img" alt="">
            <h3>John Larson</h3>
            <h4>Entrepreneur</h4>
          </div>

        </div>

      </div>
    </section> --}}<!-- End Testimonials Section -->

    <!-- ======= Doctors Section ======= -->
    <section id="doctors" class="doctors section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Doctores</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="{{ asset('img/doctors/doctors-1.jpg') }}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Especialidad</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="member-img">
                <img src="{{ asset('img/doctors/doctors-2.jpg') }}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Walter Jhonson</h4>
                <span>Especialidad</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="member-img">
                <img src="{{ asset('img/doctors/doctors-3.jpg') }}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Walter Jhonson</h4>
                <span>Especialidad</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="400">
              <div class="member-img">
                <img src="{{ asset('img/doctors/doctors-4.jpg') }}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Walter Jhonson</h4>
                <span>Especialidad</span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Doctors Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Galeria</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="owl-carousel gallery-carousel" data-aos="fade-up" data-aos-delay="100">
          <a href="{{ asset('img/gallery/gallery-1.jpg') }}" class="venobox" data-gall="gallery-carousel"><img src="{{ asset('img/gallery/gallery-1.jpg') }}" alt=""></a>
          <a href="{{ asset('img/gallery/gallery-2.jpg') }}" class="venobox" data-gall="gallery-carousel"><img src="{{ asset('img/gallery/gallery-2.jpg') }}" alt=""></a>
          <a href="{{ asset('img/gallery/gallery-3.jpg') }}" class="venobox" data-gall="gallery-carousel"><img src="{{ asset('img/gallery/gallery-3.jpg') }}" alt=""></a>
          <a href="{{ asset('img/gallery/gallery-4.jpg') }}" class="venobox" data-gall="gallery-carousel"><img src="{{ asset('img/gallery/gallery-4.jpg') }}" alt=""></a>
          <a href="{{ asset('img/gallery/gallery-5.jpg') }}" class="venobox" data-gall="gallery-carousel"><img src="{{ asset('img/gallery/gallery-5.jpg') }}" alt=""></a>
          <a href="{{ asset('img/gallery/gallery-6.jpg') }}" class="venobox" data-gall="gallery-carousel"><img src="{{ asset('img/gallery/gallery-6.jpg') }}" alt=""></a>
          <a href="{{ asset('img/gallery/gallery-7.jpg') }}" class="venobox" data-gall="gallery-carousel"><img src="{{ asset('img/gallery/gallery-7.jpg') }}" alt=""></a>
          <a href="{{ asset('img/gallery/gallery-8.jpg') }}" class="venobox" data-gall="gallery-carousel"><img src="{{ asset('img/gallery/gallery-8.jpg') }}" alt=""></a>
          <a href="{{ asset('img/gallery/gallery-9.jpg') }}" class="venobox" data-gall="gallery-carousel"><img src="{{ asset('img/gallery/gallery-9.jpg') }}" alt=""></a>
          <a href="{{ asset('img/gallery/gallery-10.jpg') }}" class="venobox" data-gall="gallery-carousel"><img src="{{ asset('img/gallery/gallery-10.jpg') }}" alt=""></a>
          <a href="{{ asset('img/gallery/gallery-11.jpg') }}" class="venobox" data-gall="gallery-carousel"><img src="{{ asset('img/gallery/gallery-11.jpg') }}" alt=""></a>
          <a href="{{ asset('img/gallery/gallery-12.jpg') }}" class="venobox" data-gall="gallery-carousel"><img src="{{ asset('img/gallery/gallery-12.jpg') }}" alt=""></a>
          <a href="{{ asset('img/gallery/gallery-13.jpg') }}" class="venobox" data-gall="gallery-carousel"><img src="{{ asset('img/gallery/gallery-13.jpg') }}" alt=""></a>
          <a href="{{ asset('img/gallery/gallery-14.jpg') }}" class="venobox" data-gall="gallery-carousel"><img src="{{ asset('img/gallery/gallery-14.jpg') }}" alt=""></a>
          <a href="{{ asset('img/gallery/gallery-15.jpg') }}" class="venobox" data-gall="gallery-carousel"><img src="{{ asset('img/gallery/gallery-15.jpg') }}" alt=""></a>
          <a href="{{ asset('img/gallery/gallery-16.jpg') }}" class="venobox" data-gall="gallery-carousel"><img src="{{ asset('img/gallery/gallery-16.jpg') }}" alt=""></a>
          <a href="{{ asset('img/gallery/gallery-17.jpg') }}" class="venobox" data-gall="gallery-carousel"><img src="{{ asset('img/gallery/gallery-17.jpg') }}" alt=""></a>
        </div>

      </div>
    </section><!-- End Gallery Section -->
    

    

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contacto</h2>
          <p>E.S.E Hospital Departamental San Antonio de Padua, ubicado en el Municipio de La Plata, Departamento del Huila, Colombia, Carrera 2E # 11 - 17, Avenida Libertadores, Salida a Neiva. Codigo Postal 415060</p>
        </div>

      </div>

      <div>
       <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.3383227265676!2d-75.88805618545975!3d2.393217198255934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3ad2b1ac4ea8e5%3A0x8a92e08e885c82b0!2sHospital%20Departamental%20San%20Antonio%20de%20Padua%20La%20Plata%20Huila!5e0!3m2!1ses!2sco!4v1613652735336!5m2!1ses!2sco" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container">

        <div class="row mt-5">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Nuestra Dirección</h3>
                  <p>Carrera 2E # 11 - 17, La Plata - Huila, Avenida Libertadores, Salida a Neiva</p>
                </div>
              </div>
              <div class="col-md-7">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Correo Eléctronico</h3>
                  <p>info@esesanantoniodepadua.gov.co<br>contac@esesanantoniodepadua.gov.co</p>
                </div>
              </div>
              <div class="col-md-5">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Llamanos</h3>
                  <p>PBX: +57 60 8 370339<br>Fax: +57 60 8 370122</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
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
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->


@endsection

  