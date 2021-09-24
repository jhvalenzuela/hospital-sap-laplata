@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    
    <a class="btn btn-secondary btn-sm float-right" href="{{route('admin.mainsliders.create')}}">Nuevo deslizador</a>

    <h1>Mostrar listado deslizador principal</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif
    
     <div class="card">
        <div class="card-body">
            <table class="table table-striped" id="citas">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Titulo</th>
                        <th>Descripción</th>
                        <th>Creación</th>
                        <th>Imagén</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($mainsliders as $mainslider)
                        <tr>
                            <td>{{$mainslider->id}}</td>
                            <td>{{$mainslider->slideTitulo}}</td>
                            <td>{{$mainslider->slideDescription}}</td>
                            <td>{{$mainslider->created_at}}</td>
                            <td>{{$mainslider->slideImagen}}</td>
                            <td width="10px">
                                <a class="btn btn-primary btn-sm" href="{{route('admin.mainsliders.edit', $mainslider)}}">Editar</a>
                            </td>
                            <td width="10px">
                                <form action="{{route('admin.mainsliders.destroy', $mainslider)}}" method="POST">
                                    @csrf
                                    @method('delete')

                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@stop
