@extends('layouts.admin')

@section('content')
  <div class="col-md-12">
    <h1>Nuevo Restaurant</h1><hr>
  </div>
<div class="col-md-12">
  {{ Form::open([
    'url' => 'admin/comer',
    'files' => true,
    'class' => 'form-horizontal',
    'method' => 'POST'
    ])}}

  <div class="form-group @if ($errors->has('nombre')) has-error @endif">
    {{ Form::label('nombre', "Nombre", ['class' => 'control-label col-sm-2']) }}
    <div class="col-sm-8">
      {{ Form::text('nombre', null, array('class' => 'form-control')) }}
      @if ($errors->has('nombre'))<p class="help-block">{{ $errors->first('nombre') }}</p>@endif
    </div>
  </div>
  <div class="form-group @if ($errors->has('categoria')) has-error @endif">
    {{ Form::label('categoria', "Categoria", ['class' => 'control-label col-sm-2']) }}
    <div class="col-sm-8">
      {{ Form::select('categoria', $categorias->pluck('nombre'), null, ['placeholder' => 'Categoria', 'class' => 'select form-control']) }}

      @if ($errors->has('categoria'))<p class="help-block">{{ $errors->first('categoria') }}</p>@endif
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

@include('admin.forms.mapa')

  <div class="form-group @if ($errors->has('horarios')) has-error @endif">
    {{ Form::label('horarios', "Horarios", ['class' => 'control-label col-sm-2']) }}
    <div class="col-sm-8">
      {{ Form::text('horarios', null, array('class' => 'form-control')) }}
      @if ($errors->has('horarios'))<p class="help-block">{{ $errors->first('horarios') }}</p>@endif
    </div>
  </div>
  <div class="form-group @if ($errors->has('telefono')) has-error @endif">
    {{ Form::label('telefono', "Teléfono", ['class' => 'control-label col-sm-2']) }}
    <div class="col-sm-8">
      {{ Form::text('telefono', null, array('class' => 'form-control')) }}
      @if ($errors->has('telefono'))<p class="help-block">{{ $errors->first('telefono') }}</p>@endif
    </div>
  </div>

  <div class="form-group @if ($errors->has('web')) has-error @endif">
    {{ Form::label('web', "Web", ['class' => 'control-label col-sm-2']) }}
    <div class="col-sm-8">
      {{ Form::text('web', null, array('class' => 'form-control')) }}
      @if ($errors->has('web'))<p class="help-block">{{ $errors->first('web') }}</p>@endif
    </div>
  </div>
  <div class="form-group @if ($errors->has('email')) has-error @endif">
    {{ Form::label('email', "Email", ['class' => 'control-label col-sm-2']) }}
    <div class="col-sm-8">
      {{ Form::text('email', null, array('class' => 'form-control')) }}
      @if ($errors->has('email'))<p class="help-block">{{ $errors->first('email') }}</p>@endif
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
