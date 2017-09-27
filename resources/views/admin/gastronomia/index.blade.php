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
  <h1>Gastronomia</h1>
</div>
<div class="col-md-6 text-right">
  {{-- <button type="button" class="btn btn-default" data-toggle="modal" style="margin-top: 20px;" data-target="#add-evento">Agregar Local Gastronomico</button> --}}
  <a type="button" class="btn btn-default" style="margin-top: 20px;" href="" data-toggle="modal" data-target="#modal">Categorias</a>
  <a type="button" class="btn btn-default" style="margin-top: 20px;" href="{{route('admin.comer.create')}}">Agregar Local Gastronomico</a>
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
          @foreach ($comer as $item)
            <tr>
              <td style="vertical-align: middle"><h6>{{$item->id}}</h6></td>

              <td><h4 data-href="{{route('admin.comer.show', $item->id)}}">{{$item->nombre}} <small>{{$item->categoria}}</small></h4></td>
              <td style="vertical-align: middle">
                <button
                  data-id="{{$item->id}}"
                  data-fede="fede"
                  type="button"
                  onclick="toggleEstado(this)"
                  @if ($item->activo)
                    class="estado btn-xs btn btn-info">
                    Publicado

                  @else
                    class="estado btn-xs btn btn-success">
                    Borrador
                  @endif
                </button>
              </td>
            </tr>
          @endforeach
       </tbody>
    </table>


</div>
@component('admin.partials.modal', [
  'categorias' => $categorias,
  'titulo' => "Categorias",
  'include' => 'admin/forms/categorias',
  'parent' => 'gastronomia',
])

@endcomponent

@endsection
@push('scripts')
<script type="text/javascript">
$('h4[data-href]').on("click", function() {
  document.location = $(this).data('href');
});

  function toggleEstado(self){
    console.log(self.data());
    var id_post = $(this).data('fede');
    console.log( self.data('fede'));
    console.log( self.data('id'));

        $.ajax({
          headers: {
             'X-CSRF-TOKEN':"{{ csrf_token() }}"
         },
          type: "POST",
          method: "POST",
          data: {id: id_post },
          processData: false,
          url: 'comer/estado',

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
