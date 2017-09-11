@extends('layouts.admin')
@push('scripts')
<script type="text/javascript">
$('tr[data-href]').on("click", function() {
  document.location = $(this).data('href');
});
</script>
@endpush
@section('content')
<div class="col-md-6">
  <h1>Lugares</h1>
</div>
<div class="col-md-6 text-right">
  <a type="button" class="btn btn-default" style="margin-top: 20px;" href="{{route('admin.lugar.create')}}"  >Agregar Lugar</a>
</div>
<hr>
<div class="col-md-12">

    <table class="table table-hover" cellspacing="0" width="100%" style="margin-top:25px;">
        <thead>
            <tr>
              <th style="width:7%"><h5>#</h5></th>
              <th><h5>Nombre</h5></th>
              <th style="width:10%"><h5 >Estado</h5></th>
            </tr>
        </thead>
        <tbody>
          @foreach ($lugares as $item)
            <tr data-href="{{route('admin.lugar.show', $item->id)}}">
              <td style="vertical-align: middle"><h6>{{$item->id}}</h6></td>

              <td><h4>{{$item->nombre}} <small>{{$item->categoria}}</small></h4></td>
              <td style="vertical-align: middle">
                @if ($item->activo)
                  <a href="" data-id="{{$item->id}}" class="btn btn-info btn-xs estado">Publicado</a>
                @else
                  <a href="" data-id="{{$item->id}}" class="btn btn-success btn-xs estado">Borrador</a>
                @endif
              </td>
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
        {{-- @component('admin.lugar.form')
        @endcomponent --}}
      </div>

    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

@endsection
