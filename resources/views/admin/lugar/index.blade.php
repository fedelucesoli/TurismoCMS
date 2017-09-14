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
            <tr>
              <td style="vertical-align: middle"><h6>{{$item->id}}</h6></td>

              <td><h4 data-href="{{route('admin.lugar.show', $item->id)}}">{{$item->nombre}} <small>{{$item->categoria}}</small></h4></td>
              <td style="vertical-align: middle">
                @component('admin.partials.activo', ['item' => $item, 'url' => 'lugar'])
                @endcomponent
              </td>
            </tr>
          @endforeach
       </tbody>
    </table>


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
          url: 'lugar/estado',

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
