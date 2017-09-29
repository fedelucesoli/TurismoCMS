@extends('layouts.admin')

@section('content')
<div class="col-md-4" style="margin-bottom: 15px;">
  <a type="button" class="btn btn-default" style="" href="{{route('admin.comer.index')}}"> <span class="fa fa-arrow-left"></span> Volver</a>
  <button
    data-id="{{$item->id}}"
    type="button"
    onclick="toggleEstado(this)"
    @if ($item->activo)
      class="estado btn btn-info">
      No publicar

    @else
      class="estado btn btn-success">
      Publicar
    @endif
  </button>
</div>
<div class="col-md-8 text-right">
  <ul class="list-inline">
  <li class="text-left">
    <h6>CREADO</h6>
    <h5 class="text-muted">{{date_format($item->created_at,"d/m/Y - H:i") }}</h5>
  </li>
  <li class="text-left">
    <h6>CREADO POR</h6>
    <h5 class="text-muted">{{ Auth::user()->name }}</h5>
  </li>
  <li class="text-left">
    <h6>ESTADO</h6>
    <h5 class="text-muted">@if ($item->activo)Publicado @else Borrador @endif</h5>
  </li>
  </ul>
</div>

<div class="col-md-12">
  <hr>

  <h4 class="text-muted">{{$item->categoria}}</h4>
  <h1>{{$item->nombre}}</h1>
  <hr>
</div>
<div class="col-md-6">
  <strong>Imagenes</strong>

</div>
<div class="col-md-6">

  <dl class="dl-horizontal" style:"">
    <dt><strong>Nombre:</strong></dt>
    <dd>{{ $item->nombre}}</dd><br>
    <dt><strong>Categoria:</strong></dt>
    <dd>{{ $item->categoria}}</dd><br>
    <dt><strong>Direccion:</strong></dt>
    <dd>{{ $item->direccion}}</dd><br>
    <dt><strong>Localidad:</strong></dt>
    <dd>{{ $item->localidad}}</dd><br>
    <dt><strong>Horarios:</strong></dt>
    <dd>{{ $item->horarios}}</dd><br>
    <dt><strong>Telefono:</strong></dt>
    <dd>{{ $item->telefono}}</dd><br>
    <dt><strong>Web:</strong></dt>
    <dd>{{ $item->web}} </dd><br>
    <dt><strong>Email:</strong></dt>
    <dd>{{ $item->email}}</dd><br>
  </dl>


</div>


@endsection
