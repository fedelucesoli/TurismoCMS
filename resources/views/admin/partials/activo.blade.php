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

{{-- @if ($item->activo)
  <a href="" data-id="{{$item->id}}" class="btn btn-info btn-xs estado">Publicado</a>
@else
  <a href="" data-id="{{$item->id}}" class="btn btn-success btn-xs estado">Borrador</a>
@endif --}}

@push('scripts')

@endpush
