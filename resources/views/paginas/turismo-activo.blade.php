@extends('layouts.app')

@section('content')
  <header class="header-activo"></header>

  <section class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 text-center">
        <h1>Turismo Activo en Lobos</h1>
        <div class="top"></div>
      </div>
    </div>
     </section>

      <section class="container">

      <div class="col-md-10 col-md-offset-1">
        <div class="item-turismo">
          <div class="row">
          <div class="mask-r" style="background-image: url({{asset('img/turismo/paracaidismo.jpg')}})"></div>
            <div class="col-md-6 col-md-offset-6 contenido">
              <h2>Paracaidismo</h2>
              <p>Lobos es la Capital Nacional del Paracaidismo. Desde hace más de 35 años es sede del Club Escuela Paracaidistas Argentinos (CEPA), con instructores y aviones habilitados por la Fuerza Aérea Argentina. Se pueden realizar saltos de bautismos, tándem, y realizar cursos para principiantes y avanzados.
</p> <a href="http://www.paracaidismolobos.com/">http://www.paracaidismolobos.com/</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-10 col-md-offset-1">
        <div class="item-turismo">
          <div class="row">
          <div class="mask-r" style="background-image: url({{asset('img/turismo/vuelos-bautismo.jpg')}}"></div>

            <div class="col-md-6 col-md-offset-6 contenido">
              <h2>Vuelo de bautismo</h2>
              <p>Sobrevuele la Ciudad y la Laguna, como así también realizar cursos de piloto privado de avión. Es también sitio para la práctica de aeromodelismo, y cuenta con una cancha de Golf de 18 hoyos.

</p> <a href="http://www.aeroclublobos.com.ar/">http://www.aeroclublobos.com.ar/</a>
            </div>

          </div>
        </div>
      </div>

      <div class="col-md-10 col-md-offset-1">
        <div class="item-turismo">
          <div class="row">
          <div class="mask-r" style="background-image: url({{asset('img/turismo/skate.jpg')}})"></div>

            <div class="col-md-6 col-md-offset-6 contenido">
              <h2>Skate</h2>
              <p>Dentro del Parque Municipal Ing. Hiriart, en la Ciudad de Lobos, se encuentra el SkatePark, sitio privilegiado para quienes practican este deporte, como así también quienes realicen saltos en bicicleta.

            </div>

          </div>
        </div>
      </div>

      <div class="col-md-10 col-md-offset-1">
        <div class="item-turismo">
          <div class="row">
          <div class="mask-r" style="background-image: url({{asset('img/turismo/kitesurf.jpg')}})"></div>

            <div class="col-md-6 col-md-offset-6 contenido">
              <h2>Kitesurf</h2>
              <p>La Laguna de Lobos, es escenario de este deporte, que se realiza durante todo el año en el espejo de Agua. Aficionados y profesionales, eligen esta zona por sus vientos, ideales para la práctica del deporte.

            </div>

          </div>
        </div>
      </div>

      <div class="col-md-10 col-md-offset-1">
        <div class="item-turismo">
          <div class="row">
          <div class="mask-r" style="background-image: url({{asset('img/turismo/polo.jpg')}})"></div>

            <div class="col-md-6 col-md-offset-6 contenido">
              <h2>Polo</h2>
              <p>Zona privilegiada para la práctica de este deporte, Lobos cuenta con una gran cantidad de Clubes de Polo, que se dedican a esta disciplina de renombre internacional.

            </div>

          </div>
        </div>
      </div>

      <div class="col-md-10 col-md-offset-1">
        <div class="item-turismo">
          <div class="row">
          <div class="mask-r" style="background-image: url({{asset('img/turismo/motonautica.jpg')}})"></div>

            <div class="col-md-6 col-md-offset-6 contenido">
              <h2>Motonáutica</h2>
              <p>La Laguna de Lobos, se encuentra zonificada para la realización de diferentes actividades. Uno de estos sectores, está destinada a esta actividad, que tiene su temporada desde el 01/12 hasta Semana Santa de cada año.

            </div>

          </div>
        </div>
      </div>


  </section>
  @endsection
