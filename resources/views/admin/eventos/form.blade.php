@extends('layouts.admin')

@section('content')
  <div class="col-md-12 text-center">
    <h1>Nuevo Evento</h1><hr>
  </div>
<div class="col-md-12">
  {{ Form::open([
    'url' => 'admin/eventos',
    'files' => true,
    'class' => 'form-horizontal',
    'method' => 'POST'
    ])}}

  <div class="form-group @if ($errors->has('titulo')) has-error @endif">
    {{ Form::label('titulo', "Titulo", ['class' => 'control-label col-sm-2']) }}
    <div class="col-sm-8">
      {{ Form::text('titulo', null, array('class' => 'form-control')) }}
      @if ($errors->has('titulo'))<p class="help-block">{{ $errors->first('titulo') }}</p>@endif
    </div>
  </div>

  <div class="form-group @if ($errors->has('categoria')) has-error @endif">
    {{ Form::label('categoria', "Categoria", ['class' => 'control-label col-sm-2']) }}
    <div class="col-sm-8">
      {{ Form::select('categoria', $categorias->pluck('nombre'), null, ['placeholder' => 'Categoria', 'class' => 'select form-control']) }}
      @if ($errors->has('categoria'))<p class="help-block">{{ $errors->first('categoria') }}</p>@endif
    </div>

  </div>

  <div class="form-group ">
    {{ Form::label('fecha', "Fecha", ['class' => 'control-label col-sm-2']) }}
    <div class="col-sm-3">
      {{ Form::date('fecha', null, array('class' => 'form-control')) }}
      @if ($errors->has('fecha'))<p class="help-block">{{ $errors->first('fecha') }}</p>@endif
    </div>

    {{ Form::label('hora', "Hora", ['class' => 'control-label col-sm-2']) }}
    <div class="col-sm-3">
      {{ Form::time('hora', null, array('class' => 'form-control')) }}
      @if ($errors->has('hora'))<p class="help-block">{{ $errors->first('hora') }}</p>@endif
    </div>
  </div>

  <div class="form-group @if ($errors->has('lugar')) has-error @endif">
    {{ Form::label('lugar', "Lugar", ['class' => 'control-label col-sm-2']) }}
    <div class="col-sm-8">
      {{ Form::select('lugar', $lugares->pluck('nombre'), null, ['placeholder' => 'Lugar', 'class' => 'select form-control']) }}
      @if ($errors->has('lugar'))<p class="help-block">{{ $errors->first('categoria') }}</p>@endif
    </div>

  </div>

  <div class="form-group @if ($errors->has('descripcion')) has-error @endif">
    {{ Form::label('descripcion', "Descripción", ['class' => 'control-label col-sm-2']) }}
    <div class="col-sm-8">
      {{ Form::textarea('descripcion', null, array('class' => 'form-control')) }}
      @if ($errors->has('descripcion'))<p class="help-block">{{ $errors->first('descripcion') }}</p>@endif
    </div>
  </div>

  <hr>

  <div class="form-group">
   <div class="col-sm-8 col-sm-offset-2 text-right">
    <a href="{{url()->previous()}}" class="btn btn-primary">Cancelar</a>
    {{ Form::submit('Guardar', ['class'=>'btn btn-danger'] )}}
   </div>
  </div>


  {{ Form::close() }}

</div>


@endsection
