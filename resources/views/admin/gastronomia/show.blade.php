@extends('layouts.admin')
@push('scripts')
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
  <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js" charset="utf-8"></script>
  <script type="text/javascript">
  $(document).ready(function() {
    $('#tabla').DataTable();
  } );
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


    <table id="" class="table table-striped" cellspacing="0" width="100%">
        <thead>
            <tr>
              <th>#</th>
              <th>Nombre</th>
              <th>Categoria</th>
              <th>Activo</th>
              <th>Acciones</th>
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
            <tr>
              <td scope="row">{{$item->id}}</td>
              <td><a href="#">{{$item->nombre}}</a></td>
              <td class="">{{$item->categoria}}</td>
              <td>
                @if ($item->activo)
                  <a href="" data-id ="{{$item->id}}" class="btn btn-success btn-xs estado" style="color: green"><span class="fa fa-toggle-on fa-lg"></span></a> &nbsp;
                @else
                  <a href="" data-id ="{{$item->id}}" class="btn btn-success btn-xs estado" style="color: green"><span class="fa fa-toggle-off fa-lg"></span></a> &nbsp;
                @endif
              </td>
              <td class="text-center">

                <a href="{{route('admin.comer.edit', $item)}}" class="btn btn-warning btn-xs"><span class="fa fa-pencil fa-lg"></span></a> &nbsp;
                <a href="eliminar" data-id="{{$item->id}}" class="btn btn-danger btn-xs eliminar"><span class="fa fa-trash fa-lg "></span></a>
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
