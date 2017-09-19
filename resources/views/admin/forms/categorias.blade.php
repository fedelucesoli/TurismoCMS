{{ Form::open([
  'url' => 'admin/categorias',
  'files' => true,
  'class' => 'form-inline categorias',
  'method' => 'POST'
  ])}}

  {{ Form::hidden ('parent', $parent, array('class' => 'form-control')) }}

<div class="form-group @if ($errors->has('titulo')) has-error @endif">
  {{ Form::label('nombre', "Nombre", ['class' => 'control-label ']) }}
  {{ Form::text('nombre', null, array('class' => 'form-control')) }}
  @if ($errors->has('nombre'))<p class="help-block">{{ $errors->first('nombre') }}</p>@endif
  {{ Form::submit('Guardar', ['class'=>'btn btn-danger'] )}}
</div>

{{ Form::close() }}
<div class="alert hidden alert-danger" style="margin-top: 20px" role="alert">

</div>
<table class="table table-hover" cellspacing="0" width="100%" style="margin-top:25px;">

    <tbody>
      @foreach ($categorias as $item)
        <tr data-id="{{$item->id}}">
          <td style="width:7%" class="text-center"><h6>{{$item->id}}</h6></td>
          <td style="vertical-align: middle">{{$item->nombre}}</td>

          <td style="width:10%" style="vertical-align: middle"><a href="#eliminar" data-id="{{$item->id}}" class="btn btn-default">Eliminar</a></td>
        </tr>
      @endforeach
   </tbody>

</table>


@push('scripts')
  <script type="text/javascript">
    $('.categorias').submit(function(e) {
      e.preventDefault();

      $.ajax({
        headers: {'X-CSRF-TOKEN':"{{ csrf_token() }}"},
        method: "POST",
        type: "POST",
        data: {
          'nombre':  $('input[name="nombre"]').val(),
          'parent': $('input[name="parent"]').val(),
        },
        url: '/admin/categorias',
        success: function(result) {
         console.log('response: '+ result.nombre);
         $('tbody').append('<tr data-id="'+result.id+'"> <td style="width:7%" class="text-center"><h6>'+result.id+'</h6></td> <td style="vertical-align: middle">'+result.nombre+'</td> <td style="width:10%" style="vertical-align: middle"><a href="#eliminar" data-id="'+result.id+'" class="btn btn-default">Eliminar</a></td> </tr>');
         //TODO - Agregar a select
       },
       error: function(result){
         $('.alert').html('No se pudo guardar :( ').removeClass('hidden');
       }
      });
    });
    $('a[href="#eliminar"]').click(function(e) {
      e.preventDefault();
      var element = this;
      $.ajax({
        headers: {'X-CSRF-TOKEN':"{{ csrf_token() }}"},
        method: "DELETE",
        type: "DELETE",
        data: {
          'id':  $(this).data('id')
        },
        url: '/admin/categorias/'+$(this).data('id'),
        success: function(result) {
          element.closest("tr").remove();
          $('.alert').html(result.mensaje).removeClass('hidden');
       },
       error: function(result){
         $('.alert').html(result.mensaje).removeClass('hidden');
       }
      });
    });
  </script>
@endpush
