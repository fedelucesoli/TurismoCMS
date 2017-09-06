@extends('layouts.app')

@section('navbar')
@parent
@endsection

@section('content')
  <header>
       <div class="slider ">
         <ul>
           <li><div class="header-home cultura"><img src="{{ asset('img/senti-cultura.png') }}" alt="Sent&iacute; cultura!"></div></li>
           <li><div class="header-home adrenalina"><img src="{{ asset('img/senti-adrenalina.png') }}" alt="Sent&iacute; adrenalina!"></div></li>
           <li><div class="header-home tradicion"><img src="{{ asset('img/senti-tradicion.png') }}" alt="Sent&iacute; tradicion!"></div></li>
           <li><div class="header-home naturaleza"><img src="{{ asset('img/senti-naturaleza.png') }}" alt="Sent&iacute; naturaleza!"></div></li>
         </ul>
       </div>
    </header>

    {{-- <section>
      <div class="container-fluid text-center">
        <div class="col-md-4">QUE HACER?</div>
        <div class="col-md-4">DÓNDE COMER?</div>
        <div class="col-md-4">DÓNDE DORMIR?</div>
      </div>
    </section> --}}
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <h1>EXPLORE LUGARES PARA VISITAR</h1>
            <p class="">Las opciones para viajar por Australia son tan diversas como el país en sí. Descubra las ciudades, estados y territorios de Australia y sus exclusivos destinos y eventos icónicos.</p>
          </div>
          <div class="col-md-6"></div>
          <div class="col-md-6"></div>
        </div>
      </div>
    </section>

    <section class="promo">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 text-center">
            <h1>Disfrut&aacute; de toda la semana en Lobos</h1>
            <p class="lead">Descubrí la calidez que tiene Lobos en otoño, sentite bien recibido y acelerá tu pulso con la adrenalina de los deportes extremos. </p><h3> Elegí Lobos como tu destino.</h3>
          </div>
        </div>
      </div>
    </section>

  <section class="video text-center" >
  <div class="container">
    <div class="row">
      <div class="col-md-12" style="    height: 500px;">
  <iframe width="100%" height="100%" src="https://www.youtube.com/embed/srsKUMdJ2Is?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>

      </div>
    </div>
  </div>
  </section>

  <section class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1>¿Cómo llegar a Lobos?</h1>
        <div class="top"></div>
      </div>
      </div>
      </section>

  <section class="container">
    <div class="row">
      <div class="col-md-6">
         <p>El Partido de Lobos, se encuentra ubicado a 100 Km de la Ciudad de Buenos Aires en dirección SO.
         </p>
         <p>Se puede acceder por medio de varios medios de transporte: por vía terrestre a través de las Rutas Provincial Nº41 y Nacional Nº205, por ferrocarril, ramales Roca y Sarmiento.
           <br>
           <strong>Vías de circulación terrestre:</strong> Ruta Nacional Nº 205, principal vía caminera, vincula la Ciudad de Lobos con Capital Federal y las Localidades de Roque Pérez y Saladillo. La Ruta Provincial Nº 41 comunica la ciudad cabecera con las localidades de Baradero, San Antonio de Areco, San Andrés de Giles, Mercedes, Navarro, Monte, General Belgrano, Pila y Castelli.
           La Autopista Ezeiza – Cañuelas, contribuye a mejorar las comunicaciones terrestres y a otorgar al distrito una posición estratégica.
            <ul>
            <h4>Líneas de Colectivos a Lobos</h4>

              <li>Línea 88 desde Plaza Once</li>
              <li>El Rápido Argentino desde La Plata</li>
              <li>Pullman General Belgrano desde Retiro</li>
              </ul>

              <ul>
              <h4>Servicio Combis</h4>

              <li>Del Sur desde Palermo</li>
              <li>Lobos Bus desde Congreso</li>
              <li>Buen Bus desde Obelisco</li>
              <li>Zeros Tour desde Congreso</li>
            </ul>
      </div>
      <div class="col-md-6 col-sm-12">
      <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d37976.55303415824!2d-59.091583178718906!3d-35.17839965167222!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sar!4v1490981233067" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </div>
    </section>
  <section class="container" id="mapasdelobos">
    <div class="row">
      <div class="col-md-12">
        <div class="col-md-12 text-center">
          <h1>Mapas Turísticos de Lobos</h1>
          <div class="top"></div>
        </div>
      </div>
  </section>
  <section class="container">
      <div class="col-md-4">
        <a href="{{ asset('img/mapas/Mapa-Partido-de-Lobos.pdf') }}" class="link" target="_blank">
          <img src="{{ asset('img/mapas/Mapa-Partido-de-Lobos-thumb.jpg') }}" class="img-responsive" alt="Mapa Partido de Lobos">
          <span class="middle"><span class="text">VER</span></span>
        </a>
      </div>
      <div class="col-md-4">
        <a href="{{ asset('img/mapas/Mapa-Planta-Urbana-Lobos.pdf') }}" class="link" target="_blank">
          <img src="{{ asset('img/mapas/Mapa-Planta-Urbana-Lobos-thumb.jpg') }}" class="img-responsive" alt="Mapa Planta Urbana de Lobos">
          <span class="middle"><span class="text">VER</span></span>
        </a>
      </div>
      <div class="col-md-4">
        <a href="{{ asset('img/mapas/Mapa-Laguna-de-Lobos.jpg') }}" class="link" target="_blank">
          <img src="{{ asset('img/mapas/Mapa-Laguna-de-Lobos-thumb.jpg') }}" class="img-responsive" alt="Mapa Laguna de Lobos">
          <span class="middle"><span class="text">VER</span></span>
        </a>
      </div>
    </div>
  </section>
@endsection
