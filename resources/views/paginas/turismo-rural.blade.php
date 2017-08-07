@extends('layouts.app')

@section('content')

  <header class="header-rural"></header>

  <section class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <h1 class="text-center">Turismo Rural en Lobos</h1>
        <div class="top"></div>
        <p class="lead">Una forma diferente de revivir nuestras costumbres, es hacerlo en contacto con la naturaleza, los animales y las actividades de campo. Lobos tiene sus tranqueras abiertas, para disfrutar de un paseo a caballo, la gastronomía típica, de las costumbres de los pueblos rurales y sus pintorescas calles.
</p><p class="lead">La oferta se conforma por estancias, complejos para pasar un día de campo, actividades tradicionales en localidades rurales, recorrida por los caminos reales que unen a nuestros pueblos y sus típicos almacenes de campo aún vigentes. </p>
      </div>
    </div>

    <section class="container">
      <div class="row">
        <div class="col-md-4 actividades" style="background-image: url({{asset('img/turismo/rural/2.jpg')}}"></div>
        <div class="col-md-8 actividades" style="background-image: url({{asset('img/turismo/rural/1.jpg')}}"></div>
      </div>
      <div class="row">
        <div class="col-md-6 actividades" style="background-image: url({{asset('img/turismo/rural/3.jpg')}}"></div>
        <div class="col-md-6 actividades" style="background-image: url({{asset('img/turismo/rural/4.jpg')}}"></div>
      </div>
       <div class="row">
      <div class="col-md-8 actividades" style="background-image: url({{asset('img/turismo/rural/5.jpg')}}"></div>
      <div class="col-md-4 actividades" style="background-image: url({{asset('img/turismo/rural/6.jpg')}}"></div>
    </div>
    <div class="row">
      <div class="col-md-6 actividades" style="background-image: url({{asset('img/turismo/rural/7.jpg')}}"></div>
      <div class="col-md-6 actividades" style="background-image: url({{asset('img/turismo/rural/8.jpg')}}"></div>
    </div>
    </section>



  </section>

  @endsection
