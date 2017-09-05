@extends('layouts.admin')

@section('content')
<div class="col-md-6">
  <h1>Gastronomia</h1>
</div>
<div class="col-md-6 text-right">
  {{-- <button type="button" class="btn btn-primary" data-toggle="modal" style="margin-top: 20px;" data-target="#add-evento">Agregar Local Gastronomico</button> --}}
  <a type="button" class="btn btn-primary" style="margin-top: 20px;" href="{{route('admin.comer.create')}}"  >Agregar Local Gastronomico</a>
</div>
<hr>
<div class="col-md-12">
  <table class="table">
  <thead>
    <tr>
      <th>#</th>
      <th>Nombre</th>
      <th>Activo</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($comer as $key)
      <tr>
        <th>{{$key->id}}</th>
        <th>{{$key->nombre}}</th>
        <th>{{$key->direccion}}</th>
      </tr>
    @endforeach
  </tbody>
</table>
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
