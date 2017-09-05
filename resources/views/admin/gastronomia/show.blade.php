@extends('layouts.admin')

@section('content')
<div class="col-md-6">
  <h1>Gastronomia</h1><hr>
</div>
<div class="col-md-6 text-right">
  <button type="button" class="btn btn-primary" data-toggle="modal" style="margin-top: 20px;" data-target="#add-evento">Agregar Local Gastronomico</button>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="add-evento">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Nuevo</h4>
      </div>
      <div class="modal-body">
        @component('admin.gastronomia.form')
        @endcomponent
      </div>

    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

@endsection
