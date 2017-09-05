<script type="text/javascript">var centreGot = false;</script>{!!$map['js']!!}

<div class="form-group ">
 <label class="control-label col-sm-3" for="ubicacion">Ubicacion</label>
 <div class="col-sm-8">
   {!!$map['html']!!}
   {{ Form::hidden('lat', null, array('id' => 'lat' ))}}
   {{ Form::hidden('lng', null, array('id' => 'lng' ))}}

 </div>
</div>
