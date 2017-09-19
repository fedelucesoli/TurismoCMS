
{{-- <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyARNS3mh7oxFuCY3g1g_AxS12W1rU7S3sM">
    </script> --}}
    @push('scripts')
      <script type="text/javascript">var centreGot = false;</script>{!!$map['js']!!}

      {{-- {!! $map['js'] !!} --}}

    @endpush

<div class="form-group ">
 <label class="control-label col-sm-2" for="ubicacion">Ubicacion</label>
 <div class="col-sm-8">
   {!! $map['html'] !!}
   @if (isset($item))
     {{ Form::hidden('lat', $item->lat, array('id' => 'lat' ))}}
     {{ Form::hidden('lng', $item->lng, array('id' => 'lng' ))}}
   @else

     {{ Form::hidden('lat', '-35.1870349', array('id' => 'lat' ))}}
     {{ Form::hidden('lng', '-59.0949762', array('id' => 'lng' ))}}

   @endif
 </div>
</div>
