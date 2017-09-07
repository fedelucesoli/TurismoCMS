<script type="text/javascript">var centreGot = false;</script>{!!$map['js']!!}

<div class="form-group ">
 <label class="control-label col-sm-2" for="ubicacion">Ubicacion</label>
 <div class="col-sm-10">
   {!!$map['html']!!}
   @if (isset($item))
     {{ Form::hidden('lat', $item->lat, array('id' => 'lat' ))}}
     {{ Form::hidden('lng', $item->lng, array('id' => 'lng' ))}}
   @else

          {{ Form::hidden('lat', '-35.1870349', array('id' => 'lat' ))}}
          {{ Form::hidden('lng', '-59.0949762', array('id' => 'lng' ))}}

   @endif





 </div>
</div>
