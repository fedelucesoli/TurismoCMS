@extends('layouts.admin')
@push('scripts')
<script type="text/javascript">
$('h4[data-href]').on("click", function() {
  document.location = $(this).data('href');
});
</script>
@endpush
@section('content')
<div class="col-md-6">
  <h1>Eventos</h1>
</div>
<div class="col-md-6 text-right">
  <a type="button" class="btn btn-default" style="margin-top: 20px;" href="" data-toggle="modal" data-target="#modal">Categorias</a>
  <a type="button" class="btn btn-default" style="margin-top: 20px;" href="{{route('admin.eventos.create')}}"  >Agregar Evento</a>
</div>
<hr>
@if (count($eventos) < 1)

<div class="col-md-12 text-center">
  <hr>
    <h2>No hay eventos cargados</h2>

</div>
@else


<div class="col-md-12">
  <hr>
    <table class="table table-hover" cellspacing="0" width="100%" style="margin-top:25px;">
        <thead>
            <tr>
              <th style="width:7%"><h5>#</h5></th>
              <th><h5>Nombre</h5></th>
              <th style="width:10%"><h5 >Estado</h5></th>
            </tr>
        </thead>
        <tbody>
          @foreach ($eventos as $item)
            <tr>
              <td style="vertical-align: middle"><h6>{{$item->id}}</h6></td>

              <td><h4 data-href="{{route('admin.eventos.show', $item->id)}}">{{$item->nombre}} <small>{{$item->categoria}}</small></h4></td>
              <td style="vertical-align: middle">
                @component('admin.partials.activo', ['item' => $item, 'url' => 'eventos'])
                @endcomponent
              </td>
            </tr>
          @endforeach
       </tbody>
    </table>
</div>
@endif

@endsection

@component('admin.partials.modal', [
  'categorias' => $categorias,
  'titulo' => "Categorias",
  'include' => 'admin/forms/categorias',
  'parent' => 'evento',
])

@endcomponent

@push('scripts')
<script type="text/javascript">
$('h4[data-href]').on("click", function() {
  document.location = $(this).data('href');
});

  function toggleEstado(){
    console.log('toggleEstado');
    var self = $(this);
    var id = $(this).data('id');
        $.ajax({
          headers: {
             'X-CSRF-TOKEN':"{{ csrf_token() }}"
         },
          type: "POST",
          method: "POST",
          data: {'id': id },
          url: 'eventos/estado',

          success: function(result) {
            var json = $.parseJSON(result);
            console.log(json);
            if (json.estado === 1) {
              self.removeClass('btn-success').addClass('btn-info').html('Publicado');
              // this1.children('.fa').removeClass('fa-toggle-off').addClass('fa-toggle-on');
              console.log('on');
            }
            if(json.estado === 0){
              self.removeClass('btn-success').addClass('btn-info').html('Borrador');
              // this1.children('.fa').removeClass('fa-toggle-on').addClass('fa-toggle-off');
              console.log('off');
            }
          }
        });
  }


</script>
@endpush
