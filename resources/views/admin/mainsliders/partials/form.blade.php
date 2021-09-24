<div class="form-group">
    {!! Form::label('slideTitulo', 'Título:') !!}
    {!! Form::text('slideTitulo', null, ['class' => 'form-control', 'placeholder' => 'Titulo deslizador']) !!}

    @error('slideTitulo')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('slideDescription', 'Descripción:') !!}
    {!! Form::textarea('slideDescription', null, ['class' => 'form-control', 'rows' => '3', 'placeholder' => 'Descripción deslizador']) !!}

    @error('slideDescription')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>
                
<div class="row mb-3">
    <div class="col">
        <div class="image-wrapper">
            <img id="picture" src="https://cdn.pixabay.com/photo/2016/11/08/05/29/surgery-1807541_1280.jpg">
        </div>
    </div>

    <div class="col">
        <div class="form-group">
            {!! Form::label('slideImagen', 'Seleccione una imagen:') !!}
            {!! Form::file('slideImagen', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}

            @error('slideImagen')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maxime maiores, unde, ipsa blanditiis quas fuga omnis et libero quasi nostrum ab, saepe esse obcaecati nulla quidem at veritatis, adipisci debitis.</p>
    </div>
                    
</div>