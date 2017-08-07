@extends('layouts.app')

@section('content')
  <header class="header-laguna"></header>

  <section class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1 text-center">
        <h1>Laguna de Lobos</h1>
        <div class="top"></div>
        <p class="lead"> Es un lugar ideal para la práctica de actividades acuáticas. Al estar ubicada en una zona de abundante vegetación se pueden apreciar una gran variedad de aves silvestres. La fauna ictícola compuesta por pejerreyes, carpas, dientudos, tarariras,  bagres y mojarras permiten inolvidables jornadas para el aficionado a la pesca.</p>
      </div>
    </div>
    </section>

<section class="container">
<div class="row">

  <div class="col-md-10 col-md-offset-1">
        <div class="item-turismo">
          <div class="row">
          <div class="mask-r" style="background-image: url({{asset('img/turismo/avistaje.jpg')}})"></div>
            <div class="col-md-6 col-md-offset-6 contenido">
              <h2>Avistaje de Flora y Fauna</h2>
              <p>A partir de la Av. Costanera y Calle 30, donde el movimiento de vehículos es más tranquilo, podrá caminar por la costa y ver gran variedad de aves como bigüas, garzas, espátulas rosadas y patos. Eligen los sectores de juncos, donde nidifican y buscan alimento. </p>
            </div>
          </div>
        </div>
      </div>

</div>
<div class="row">

  <div class="col-md-10 col-md-offset-1">
        <div class="item-turismo">
          <div class="row">
          <div class="mask-r" style="background-image: url({{asset('img/turismo/kayaks.jpg')}})"></div>
            <div class="col-md-6 col-md-offset-6 contenido">
              <h2>Alquiler de botes y kayaks</h2>
              <p>En la Costanera o Campings habilitados, encontrará  sitios para el alquiler de botes y kayaks para realizar un paseo por la Laguna.</p>
            </div>
          </div>
        </div>
      </div>

</div>
<div class="row">

  <div class="col-md-10 col-md-offset-1">
        <div class="item-turismo">
          <div class="row">
          <div class="mask-r" style="background-image: url({{asset('img/turismo/pesca.jpg')}})"></div>
            <div class="col-md-6 col-md-offset-6 contenido">
              <h2>Pesca Deportiva</h2>
              <p>Desde la Costanera puede realizar pesca deportiva, recuerde que desde 01/09 al 01/12 de cada año, es la fecha de Veda del Pejerrey. Durante esa fecha, se pueden pescar hasta 15 piezas por persona con una medida mínima de 25cm, durante sábado, domingo y feriados. </p>
            </div>
          </div>
        </div>
      </div>

</div>
<div class="row">

  <div class="col-md-10 col-md-offset-1">
        <div class="item-turismo">
          <div class="row">
          <div class="mask-r" style="background-image: url({{asset('img/turismo/costanera.jpg')}})"></div>
            <div class="col-md-6 col-md-offset-6 contenido">
              <h2>Costanera Municipal</h2>
              <p>La Costanera Municipal es un paseo público sobre la costa de la Laguna de Lobos. Su recorrido comienza por la Av. Costanera y calle 38 (Los Flamencos) hasta el Arroyo las Garzas. Encontrará  un sector de juegos para niños, mesas y bancos, baños públicos. Es un sitio ideal para disfrutar de la naturaleza, la tranquilidad respetando el entorno natural que deseamos preservar. En Costanera se encuentra la Oficina de Turismo que brinda información a los visitantes, la oficina de Recursos Naturales que bregan por el cuidado del patrimonio natural. También contamos con la presencia de policías que recorren la Costanera brindando información y prevención a los visitantes. </p>
            </div>
          </div>
        </div>
      </div>

</div>
<div class="row">

  <div class="col-md-10 col-md-offset-1">
        <div class="item-turismo">
          <div class="row">
          <div class="mask-r" style="background-image: url({{asset('img/turismo/loguercio.jpg')}})"></div>
            <div class="col-md-6 col-md-offset-6 contenido">
              <h2>Sitios de Interés</h2>
              <p>Puede recorrer las tranquilas calles de Villa Logüercio,  arboladas y pobladas de pájaros. Una comunidad que fue concebida originalmente como un barrio de casas quintas, sigue manteniendo la tranquilidad. Visite la Plaza Dr. Vicente Logüercio, la modesta Capilla Santa Isabel, y la parada del Ferrocarril, llamada “Fortín Lobos”. </p>
            </div>
          </div>
        </div>
      </div>

</div>


  </section>

  @endsection
