@extends('layouts.admin')

@section('content')
<div class="col-md-6">
  <h1>Alojamiento</h1>
</div>
<div class="col-md-6 text-right">
  <a type="button" class="btn btn-default" style="margin-top: 20px;" href="{{route('admin.dormir.create')}}"  >Agregar Alojamiento</a>
</div>
<hr>
<div class="col-md-12">
@empty ($alojamientos)
  <h3 class="text-center">No hay Alojamientos cargados</h3>
@endempty
  @isset ($alojamientos)
    <table class="table table-striped" cellspacing="0" width="100%" style="margin-top:25px;">
        <thead>
            <tr>
              <th style="width:7%"><h5>#</h5></th>
              <th><h5>Nombre</h5></th>
              <th style="width:10%"><h5 >Estado</h5></th>
            </tr>
        </thead>
        <tbody>
          @foreach ($alojamientos as $item)
            <tr>
              <td style="vertical-align: middle"><h6>{{$item->id}}</h6></td>

              <td><h4 data-href="{{route('admin.dormir.show', $item->id)}}">{{$item->nombre}} <small>{{$item->categoria}}</small></h4></td>
              <td style="vertical-align: middle">
                @component('admin.partials.activo', ['item' => $item, 'url' => 'dormir'])
                @endcomponent
              </td>
            </tr>
          @endforeach
       </tbody>
    </table>
  @endisset

</div>
@endsection

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
          url: 'dormir/estado',

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
