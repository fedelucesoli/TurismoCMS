@if ($item->activo)
  <a href="" data-id="{{$item->id}}" class="btn btn-info btn-xs estado">Publicado</a>
@else
  <a href="" data-id="{{$item->id}}" class="btn btn-success btn-xs estado">Borrador</a>
@endif

@push('scripts')
  <script type="text/javascript">
    $('.estado').click(function(event){
      event.preventDefault();
      var this1 = $(this);
      var id = $(this).data('id');
          $.ajax({
            headers: {
               'X-CSRF-TOKEN':"{{ csrf_token() }}"
           },
            type: "POST",
            data: {'id': id },
            url: '{{ $url }}/estado',

            success: function(result) {
              var json = $.parseJSON(result);
              
              if (json.estado) {
                this1.removeClass('btn-info').addClass('btn-success').html('Publicado');
                // this1.children('.fa').removeClass('fa-toggle-off').addClass('fa-toggle-on');
                console.log('on');
              }else{
                this1.removeClass('btn-info').addClass('btn-success').html('Borrador');

                // this1.children('.fa').removeClass('fa-toggle-on').addClass('fa-toggle-off');
                console.log('off');
              }

            }
          });

    });
    </script>
@endpush
