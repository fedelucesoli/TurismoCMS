<button
  data-id="{{$item->id}}"
  data-fede="fede"
  type="button"
  onclick="toggleEstado()"
  @if ($item->activo)
    class="estado btn-xs btn btn-info">
    Publicado

  @else
    class="estado btn-xs btn btn-success">
    Borrador
  @endif
</button>
