@extends('layouts.app')

@section('content')
  <header class="header-reuniones"></header>

  <section class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 text-center">
      <h1>Naturaleza, gastronomía, cultura y aventura en un sólo lugar.</h1>
      <div class="top"></div>
      <p class="lead">Lobos, a sólo 100 km de la Ciudad de Buenos Aires, es un destino estratégico para el Turismo de reuniones e incentivos que se destaca por su amplia oferta turística, combinando la naturaleza y la cultura.</p>

      </div>
    </div>
 </section>

<section class="container">
  <div class="row">
    <div class="col-md-4 actividades" style="background-image: url({{asset('img/turismo/reuniones/1.jpg')}})"></div>
    <div class="col-md-8 actividades" style="background-image: url({{asset('img/turismo/reuniones/5.jpg')}})"></div>
  </div>
  <div class="row">
    <div class="col-md-6 actividades" style="background-image: url({{asset('img/turismo/reuniones/7.jpg')}})"></div>
    <div class="col-md-6 actividades" style="background-image: url({{asset('img/turismo/reuniones/9.jpg')}})"></div>
  </div>
</section>
  <section class="container">
      <div class="row">
      <div class="col-md-8 col-md-offset-2"><p>Lobos, es un lugar estratégico para el Turismo de Reuniones, al ofrecer una amplia variedad de espacios; tanto en el casco urbano como en la zona rural para congresos, convenciones, reuniones empresariales, institucionales y eventos corporativos.  Espacios en un entorno natural, donde podrá combinar sus actividades con hotelería y gastronomía de calidad, como de actividades orientadas al disfrute de su estadía en Lobos. </p></div>
    </div>

    <div class="row">
      <div class="col-md-8 actividades" style="background-image: url({{asset('img/turismo/reuniones/4.jpg')}})"></div>
      <div class="col-md-4 actividades" style="background-image: url({{asset('img/turismo/reuniones/3.jpg')}})"></div>
    </div>
    <div class="row">
      <div class="col-md-6 actividades" style="background-image: url({{asset('img/turismo/reuniones/6.jpg')}})"></div>
      <div class="col-md-6 actividades" style="background-image: url({{asset('img/turismo/reuniones/2.jpg')}})"></div>
    </div>
  </section>
     <section class="container">
          <div class="row">
             <div class="col-md-8 col-md-offset-2">
        <p>
       La Ciudad, cuenta con salones totalmente equipados para Eventos y Reuniones. Cuentan con salas de conferencias, climatizadas y con equipos de proyección y sonido. Combine su evento, con las actividades del hotel, destacándose aquellas referidas al Spa y el relax, la gastronomía y la distensión. Las salas, se ambientan según los requerimientos de los organizadores, con equipamiento completo y la opción de trabajar out-door  en los jardines de los hoteles.  </p>
             </div>
           </div>
           <div class="row">
             <div class="col-md-8 actividades" style="background-image: url({{asset('img/turismo/reuniones/10.jpg')}})"></div>
             <div class="col-md-4 actividades" style="background-image: url({{asset('img/turismo/reuniones/8.jpg')}})"></div>
           </div>
     </section>


 <section class="container">
<div class="row">
    <div class="col-md-8 col-md-offset-2" style="text-align: center">

        <h1 >Servicios Locales</h1>
        <p class="p-large">Promovemos la participación de los servicios y productos locales permitiendo el desarrollo de la economía y la cultura de nuestra sociedad. </p>
    </div>
  </div>



        <div class="row">

            <div class="col-md-2 col-md-offset-2 servicio">
              <img src="{{asset('img/turismo/reuniones/salones.jpg')}}" alt="Salones en Lobos">

                  <h5>Salones</h5>

              </div> <!-- Salones -->
            <div class="col-md-2 servicio">
              <img src="{{asset('img/turismo/reuniones/audiovisual.jpg')}}" alt="Servicios audiovisuales en Lobos">

                  <h5>Audiovisual</h5>

              </div> <!-- Audiovisual-->
            <div class="col-md-2 servicio">
              <img src="{{asset('img/turismo/reuniones/catering.jpg')}}" alt="Catering en Lobos">

                  <h5>Catering</h5>

              </div> <!-- Catering-->
            <div class="col-md-2 servicio">
              <img src="{{asset('img/turismo/reuniones/transporte.jpg')}}" alt="Transportes a Lobos">

                  <h5>Transportes</h5>

            </div> <!-- Transpostes-->

        </div>



</section>

@endsection
