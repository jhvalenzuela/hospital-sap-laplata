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
            <li>Convocatorias Públicas</li>
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

<!-- ======= Convocatorias-Publicas Section ======= -->
    
    <section id="departments" class="normatividad">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Convocatorias Publicas</h2>
         {{--  <p>E.S.E. Hospital Departamental San Antonio de Padua, La Plata Huila - Hospital Humanizado y Seguro es Nuestro Compromiso.</p> --}}
        </div>

        @forelse($normatividad as $normas)
            <div class="card card-small">
                <div class="card-body">
                    <h4>{{ $normas->id }}</h4>
                    <p>
                        {!! $normas->nomNormatividad !!} {{-- @todo: Purify HTML or use Markdown instead! --}}
                    </p>
                </div>
                <footer class="card-footer">
                    {{--    <a href="{{ route('notes.edit', ['id' => $normas->id]) }}" class="action-link action-edit">
                            <i class="icon icon-pen"></i>
                        </a> --}}
                    <a class="action-link action-delete">
                        <i class="icon icon-trash"></i>
                    </a>
                </footer>
            </div>
            @empty
                <p>No hay notas disponibles en este momento <a href="#">Agrega una?</a></p>
        @endforelse
      </div>
    </section><!-- End Convocatorias-Publicas Section -->

  </main><!-- End #main -->

@endsection