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

<table class="table table-hover" cellspacing="0" width="100%" style="margin-top:25px;">

    <tbody>
      <tr>
        <td>Peña</td>
        <td>Eliminar</td>
      </tr>
      {{-- @foreach ($eventos as $item)
        <tr>
          <td><h4 data-href="{{route('admin.eventos.show', $item->id)}}">{{$item->nombre}} <small>{{$item->categoria}}</small></h4></td>
          <td style="vertical-align: middle">
            @component('admin.partials.activo', ['item' => $item, 'url' => 'eventos'])
            @endcomponent
          </td>
        </tr>
      @endforeach --}}

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
        }
      });
    });

  </script>
@endpush
