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
    <div class="col-sm-5">
      {{ Form::select('categoria', $categorias, null, ['placeholder' => 'Categoria', 'class' => 'select form-control']) }}
      @if ($errors->has('categoria'))<p class="help-block">{{ $errors->first('categoria') }}</p>@endif
    </div>
    <div class="col-sm-1 text-right">
      <a type="button" class="btn btn-default" href="{{route('admin.eventos.create')}}"  >Agregar Categoria</a>
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

  <div class="form-group @if ($errors->has('direccion')) has-error @endif">
    {{ Form::label('lugar', "Lugar", ['class' => 'control-label col-sm-2']) }}
    <div class="col-sm-8">
      {{ Form::text('lugar', null, array('class' => 'form-control')) }}
      @if ($errors->has('lugar'))<p class="help-block">{{ $errors->first('lugar') }}</p>@endif
    </div>
  </div>
  <div class="form-group @if ($errors->has('direccion')) has-error @endif">
    {{ Form::label('direccion', "Dirección", ['class' => 'control-label col-sm-2']) }}
    <div class="col-sm-8">
      {{ Form::text('direccion', null, array('class' => 'form-control')) }}
      @if ($errors->has('direccion'))<p class="help-block">{{ $errors->first('direccion') }}</p>@endif
    </div>
  </div>
  <div class="form-group @if ($errors->has('localidad')) has-error @endif">
    {{ Form::label('localidad', "Localidad", ['class' => 'control-label col-sm-2']) }}
    <div class="col-sm-8">
      {{ Form::text('localidad', null, array('class' => 'form-control')) }}
      @if ($errors->has('localidad'))<p class="help-block">{{ $errors->first('localidad') }}</p>@endif
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
