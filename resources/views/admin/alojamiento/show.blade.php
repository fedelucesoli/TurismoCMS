@extends('layouts.admin')
@push('scripts')

@endpush
@section('content')
<div class="col-md-2" style="margin-bottom: 25px;">
  <a type="button" class="btn btn-default" style="" href="{{route('admin.dormir.index')}}"  >Volver</a>
</div>
<div class="col-md-10 text-right">
  CREADO: <bold>{{date_format($item->created_at,"d/m/Y - H:i") }}</bold>

</div>

<div class="col-md-10 col-md-offset-2">

  <h4 class="text-muted">{{$item->categoria}}</h4>
  <h1>{{$item->nombre}}</h1>
  <hr>
</div>
<div class="col-md-12">
  {{ Form::open([
    'route' => ["admin.dormir.update", $item->id],
    'files' => true,
    'class' => 'form-horizontal',
    'method' => 'PUT'
    ])}}
    {{ Form::hidden('_method', 'PUT')}}
  <div class="form-group @if ($errors->has('nombre')) has-error @endif">
    {{ Form::label('nombre', "Nombre", ['class' => 'control-label col-sm-2']) }}
    <div class="col-sm-10">
      {{ Form::text('nombre', $item->nombre, array('class' => 'form-control')) }}
      @if ($errors->has('nombre'))<p class="help-block">{{ $errors->first('nombre') }}</p>@endif
    </div>
  </div>
  <div class="form-group @if ($errors->has('categoria')) has-error @endif">
    {{ Form::label('categoria', "Categoria", ['class' => 'control-label col-sm-2']) }}
    <div class="col-sm-10">
      {{ Form::text('categoria', $item->categoria, array('class' => 'form-control')) }}
      @if ($errors->has('categoria'))<p class="help-block">{{ $errors->first('categoria') }}</p>@endif
    </div>
  </div>

  <div class="form-group @if ($errors->has('direccion')) has-error @endif">
    {{ Form::label('direccion', "Dirección", ['class' => 'control-label col-sm-2']) }}
    <div class="col-sm-10">
      {{ Form::text('direccion', $item->direccion, array('class' => 'form-control')) }}
      @if ($errors->has('direccion'))<p class="help-block">{{ $errors->first('direccion') }}</p>@endif
    </div>
  </div>
  <div class="form-group @if ($errors->has('localidad')) has-error @endif">
    {{ Form::label('localidad', "Localidad", ['class' => 'control-label col-sm-2']) }}
    <div class="col-sm-10">
      {{ Form::text('localidad', $item->localidad, array('class' => 'form-control')) }}
      @if ($errors->has('localidad'))<p class="help-block">{{ $errors->first('localidad') }}</p>@endif
    </div>
  </div>

@include('admin.forms.mapa')

  <div class="form-group @if ($errors->has('telefono')) has-error @endif">
    {{ Form::label('telefono', "Teléfono", ['class' => 'control-label col-sm-2']) }}
    <div class="col-sm-10">
      {{ Form::text('telefono', $item->telefono, array('class' => 'form-control')) }}
      @if ($errors->has('telefono'))<p class="help-block">{{ $errors->first('telefono') }}</p>@endif
    </div>
  </div>

  <div class="form-group @if ($errors->has('web')) has-error @endif">
    {{ Form::label('web', "Web", ['class' => 'control-label col-sm-2']) }}
    <div class="col-sm-10">
      {{ Form::text('web', $item->web, array('class' => 'form-control')) }}
      @if ($errors->has('web'))<p class="help-block">{{ $errors->first('web') }}</p>@endif
    </div>
  </div>
  <div class="form-group @if ($errors->has('email')) has-error @endif">
    {{ Form::label('email', "Email", ['class' => 'control-label col-sm-2']) }}
    <div class="col-sm-10">
      {{ Form::text('email', $item->email, array('class' => 'form-control')) }}
      @if ($errors->has('email'))<p class="help-block">{{ $errors->first('email') }}</p>@endif
    </div>
  </div>



  <hr>

  <div class="form-group">
   <div class="col-sm-10 col-sm-offset-2 text-right">
    <a href="{{url()->previous()}}" class="btn btn-primary">Cancelar</a>
    {{ Form::submit('Guardar', ['class'=>'btn btn-danger'] )}}
   </div>
  </div>


  {{ Form::close() }}

</div>


<div class="modal fade" tabindex="-1" role="dialog" id="add-evento">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Nuevo</h4>
      </div>
      <div class="modal-body">
        {{-- @component('admin.gastronomia.form')
        @endcomponent --}}
      </div>

    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

@endsection
