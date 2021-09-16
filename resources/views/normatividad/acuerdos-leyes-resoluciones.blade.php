
@extends('layout')

@section('content')
  
<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Normatividad</h2>
          <ol>
            <li><a href="{{ url('/')}}">Inicio</a></li>
            <li>Acuerdos, Leyes y Resoluciones</li>
          </ol>
        </div>

      </div>
    </section>
    <!-- End Breadcrumbs Section -->

    <!-- ======= Normatividad Section ======= -->
    
    <section class="inner-page section-innerpage">
      <div class="container normatividad" data-aos="fade-up">

        <div class="section-title-innerpage">
          <h2>Normatividad</h2>
        </div>

      <!-- Nav tabs -->
      <div class="card">
        <div class="card-header">
          <ul class="nav nav-tabs justify-content-center" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#home" role="tab">
               <i class="icofont-file-document"></i> Acuerdos
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#profile" role="tab">
                <i class="icofont-file-document"></i> Circulares
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#messages" role="tab">
                <i class="icofont-file-document"></i> Decretos
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#settings" role="tab">
                <i class="icofont-file-document"></i> Leyes
              </a>
            </li>
             <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#resoluciones" role="tab">
                <i class="icofont-file-document"></i> Resoluciones
              </a>
            </li>
             <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#otras" role="tab">
                <i class="icofont-file-document"></i> Otras
              </a>
            </li>
          </ul>
        </div>
        <div class="card-body">
          <!-- Tab panes -->
          <div class="tab-content text-left">
            <div class="container tab-pane active" id="home" role="tabpanel">
              @forelse($normatividad as $normas)
                <div class="row">
                  <div>
                        <i class="{{ $normas->iconNormatividad }} icofont-3x"></i><p class="text-center"><small>{{ $normas->pesoArchivoNormatividad }} Mb</small></p>    
                  </div>
                  <div class="col">
                    <h6>{{ $normas->tipNormatividad }}</h6>
                    <p><a href="{{ asset('documents/'.$normas->tipNormatividad.'/'.$normas->nomArchivoNormatividad) }}" target="_blank">{!! $normas->nomNormatividad !!}</a><br>
                    {!! $normas->descripNormatividad !!}</p>
                    <p><small>Publicación: {{ $normas->fechPublic }} | Expedición: {{ $normas->fechExpedic }}</small></p>
                    <hr>
                  </div>
                </div>
                @empty
                  <p>No hay archivos disponibles en este momento</p>
              @endforelse

            </div>
            <div class="container tab-pane fade" id="profile" role="tabpanel">
              <p> Circulares </p>
            </div>
            <div class="tab-pane fade" id="messages" role="tabpanel">
              <p>Decretos</p>
            </div>
            <div class="tab-pane fade" id="settings" role="tabpanel">
              <p>Leyes</p>
            </div>
            <div class="tab-pane fade" id="resoluciones" role="tabpanel">
              <p>Resoluciones</p>
            </div>
            <div class="tab-pane fade" id="otras" role="tabpanel">
              <p>Otras</p>
            </div>
          </div>
        </div>
      </div>
    
  
      </div>
    </section><!-- End Normatividad Section -->

  </main><!-- End #main -->

@endsection

  