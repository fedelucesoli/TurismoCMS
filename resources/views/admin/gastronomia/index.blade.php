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
  <h1>Gastronomia</h1>
</div>
<div class="col-md-6 text-right">
  {{-- <button type="button" class="btn btn-primary" data-toggle="modal" style="margin-top: 20px;" data-target="#add-evento">Agregar Local Gastronomico</button> --}}
  <a type="button" class="btn btn-primary" style="margin-top: 20px;" href="{{route('admin.comer.create')}}"  >Agregar Local Gastronomico</a>
</div>
<hr>
<div class="col-md-12">


    <table id="" class="table table-striped" cellspacing="0" width="100%" style="margin-top:25px;">
        <thead>
            <tr>
              <th style="width:7%"><h5>#</h5></th>
              <th><h5>Nombre</h5></th>
              {{-- <th>Categoria</th> --}}
              <th style="width:10%"><h5 >Estado</h5></th>
            </tr>
        </thead>
        {{-- <tfoot>
            <tr>
              <th>#</th>
              <th>Nombre</th>
              <th>Categoria</th>
              <th>Activo</th>
              <th>Acciones</th>
            </tr>
        </tfoot> --}}
        <tbody>
          @foreach ($comer as $item)
            <tr data-href="{{route('admin.comer.show', $item->id)}}">
              <td style="vertical-align: middle"><h6>{{$item->id}}</h6></td>

              <td><h4>{{$item->nombre}} <small>{{$item->categoria}}</small></h4></td>
              <td style="vertical-align: middle">
                @if ($item->activo)
                  <a href="" data-id ="{{$item->id}}" class="btn btn-info btn-xs estado" >Publicado</a> &nbsp;
                @else
                  <a href="" data-id ="{{$item->id}}" class="btn btn-success btn-xs estado" >Borrador</a> &nbsp;
                @endif
              </td>
            </tr>
          @endforeach


        </tbody>
    </table>
    {{-- <thead>
      <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>Activo</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($comer as $key)
        <tr>
          <td>{{$key->id}}</td>
          <td>{{$key->nombre}}</td>
          <td>{{$key->direccion}}</td>
          <td></td>
        </tr>
      @endforeach
    </tbody> --}}
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
