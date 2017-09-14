@extends('layouts.admin')

@section('content')
<div class="col-md-2" style="margin-bottom: 15px;">
  <a type="button" class="btn btn-default" style="" href="{{route('admin.comer.index')}}"  >Volver</a>
</div>
<div class="col-md-10">
  <h6>CREADO</h6>
  <H6 class="text-muted">{{date_format($item->created_at,"d/m/Y - H:i") }}</H6>
</div>
<div class="col-md-12">
  <hr>
</div>
<div class="col-md-10 col-md-offset-2">

  <h4 class="text-muted">{{$item->categoria}}</h4>
  <h1>{{$item->nombre}}</h1>
  <hr>
</div>
<div class="col-md-12">
  
</div>
@endsection
