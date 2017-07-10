@extends('layouts.admin')

@section('content')
<div class="col-md-12">
  <h1>Eventos</h1><hr>
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add-evento">Agregar Evento</button>


@each('partials.evento', $eventos, 'evento')
</div>


<div class="modal fade" tabindex="-1" role="dialog" id="add-evento">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Agregar evento</h4>
      </div>
      <div class="modal-body">
        @component('admin.forms.evento')
        @endcomponent
      </div>

    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

@endsection
