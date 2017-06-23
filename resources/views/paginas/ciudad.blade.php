@extends('layouts.app')

@section('content')


  <header class="header-ciudad">
  </header>

  <section class="container">
    <div class="row">
     <!--  <div class="col-md-8 col-md-offset-2">
        <h1>Ciudad de Lobos</h1>
      </div>  -->

      <div class="col-md-12" style="">
      <h4>La Ciudad de Lobos tiene múltiples opciones.</h4>


        <p>Un paseo por las calles lobenses, lo harán conectarse con la historia, la cultura, los sabores y el sentir de un pueblo. </p>

      </div>
      <div class="col-md-4">
        <p><strong>Cultura</strong>, con nuestro Teatro Cine Italiano y Museos, los cuatro Monumentos Históricos Nacionales y una arquitectura digna de destacar, se suman múltiples propuestas artísticas.

      </div>
      <div class="col-md-4">
        <p><strong>Espacios verdes</strong>, con parques y plazas que invitan disfrutar de una tarde con amigos y en familia.</p>

      </div>
      <div class="col-md-4">
        <p><strong>Gastronomía</strong> diversa, con diferentes platos donde se destacan las pastas, las pizzas, la carne y el pescado. </p>

      </div>

    </div>
  </section>

  <section class="container">
    <div class="row">

    <div class="col-md-12"><h2>Edificios destacados</h2></div>

      <div class="col-md-6 col-sm-6 ficha-edificio">
          <div class="lineas-edificio">
        <div class="row">

            <div class="col-md-4 col-sm-4">
              <a href="#">
                <img src="{{asset('img/edificios/nuestrasenoradelcarmen.jpg')}}" class="img-responsive" alt="Nuestra Señora del Carmen">
              </a>
            </div>
            <div class="col-md-6 col-sm-6">
              <span>Nuestra señora del Carmen</span>
              <a href="#" data-toggle="modal" data-target="#nuestra-senora-del-carmen">VER MÁS</a>
            </div>
          </div>
        </div>

      </div>
      <div class="clearfix visible-xs-block"></div>

      <div class="col-md-6 col-sm-6 ficha-edificio">
         <div class="lineas-edificio">
        <div class="row">

            <div class="col-md-4 col-sm-4">
             <a href="#">
               <img src="{{asset('img/edificios/palaciomunicipal.jpg')}}" class="img-responsive" alt="Palacio Municipal">
             </a>
           </div>
           <div class="col-md-6 col-sm-6">
             <span>Palacio Municipal</span>
             <a href="#" data-toggle="modal" data-target="#palacio-municipal">VER MÁS</a>
           </div>
         </div>
        </div>
      </div>
      <div class="clearfix visible-xs-block"></div>

      <div class="col-md-6 col-sm-6 ficha-edificio">

          <div class="lineas-edificio">
           <div class="row">
            <div class="col-md-4 col-sm-4">
              <a href="#">
                <img src="{{asset('img/edificios/clubsocial.jpg')}}" class="img-responsive" alt="Club Social Lobense">
              </a>
            </div>
            <div class="col-md-6 col-sm-6">
              <span>Club Social </span>
              <a href="#" data-toggle="modal" data-target="#club-social">VER MÁS</a>
            </div>
          </div>
        </div>
      </div>
      <div class="clearfix visible-xs-block"></div>

       <div class="col-md-6 col-sm-6 ficha-edificio">
         <div class="lineas-edificio">
        <div class="row">

            <div class="col-md-4 col-sm-4">
             <a href="#">
               <img src="{{asset('img/edificios/plaza1810.jpg')}}" class="img-responsive" alt="Plaza 1810">
             </a>
           </div>
           <div class="col-md-6 col-sm-6">
             <span>Plaza 1810</span>
             <a href="#" data-toggle="modal" data-target="#plaza1810">VER MÁS</a>
           </div>
         </div>
        </div>
      </div>
      <div class="clearfix visible-xs-block"></div>


       <div class="col-md-6 col-sm-6 ficha-edificio">
         <div class="lineas-edificio">
        <div class="row">

            <div class="col-md-4 col-sm-4">
             <a href="#">
               <img src="{{asset('img/edificios/josesalgado.jpg')}}" class="img-responsive" alt="Casa de Jos&eacute; Salgado">
             </a>
           </div>
           <div class="col-md-6 col-sm-6">
             <span>Casa de Jos&eacute; Salgado</span>
             <a href="#" data-toggle="modal" data-target="#casasalgado">VER MÁS</a>
           </div>
         </div>
        </div>
      </div>
      <div class="clearfix visible-xs-block"></div>

       <div class="col-md-6 col-sm-6 ficha-edificio">
         <div class="lineas-edificio">
        <div class="row">

            <div class="col-md-4 col-sm-4">
             <a href="#">
               <img src="{{asset('img/edificios/teatroitaliano.jpg')}}" class="img-responsive" alt="Teatro Cine Italiano">
             </a>
           </div>
           <div class="col-md-6 col-sm-6">
             <span>Teatro Cine Italiano</span>
             <a href="#" data-toggle="modal" data-target="#cineitaliano">VER MÁS</a>
           </div>
         </div>
        </div>
      </div>
      <div class="clearfix visible-xs-block"></div>

       <div class="col-md-6 col-sm-6 ficha-edificio">
         <div class="lineas-edificio">
        <div class="row">

            <div class="col-md-4 col-sm-4">
             <a href="#">
               <img src="{{asset('img/edificios/sociedad-espanola.jpg')}}" class="img-responsive" alt="Sociedad Española De Lobos">
             </a>
           </div>
           <div class="col-md-6 col-sm-6">
             <span>Sociedad Española de Lobos</span>
             <a href="#" data-toggle="modal" data-target="#sociedad-espanola">VER MÁS</a>
           </div>
         </div>
        </div>
      </div>
      <div class="clearfix visible-xs-block"></div>

       <div class="col-md-6 col-sm-6 ficha-edificio">
         <div class="lineas-edificio">
        <div class="row">

            <div class="col-md-4 col-sm-4">
             <a href="#">
               <img src="{{asset('img/edificios/estacion.jpg')}}" class="img-responsive" alt="Estación del Ferrocarril Lobos">
             </a>
           </div>
           <div class="col-md-6 col-sm-6">
             <span>Estación del Ferrocarril Lobos</span>
             <a href="#" data-toggle="modal" data-target="#estacion">VER MÁS</a>
           </div>
         </div>
        </div>
      </div>
      <div class="clearfix visible-xs-block"></div>


    </div>
  </section>

<section class="container">
  <div class="row">
    <div class="col-md-12"><h2>Museos</h2></div>
          <div class="col-md-6 col-sm-6 ficha-edificio">
         <div class="lineas-edificio">
        <div class="row">

            <div class="col-md-4 col-sm-4">
             <a href="#museoperon">
               <img src="{{asset('img/edificios/museo-peron.jpg')}}" class="img-responsive" alt="Museo Perón">
             </a>
           </div>
           <div class="col-md-6 col-sm-6">
             <span>Casa Natal de Juan Domingo Perón</span>
             <a href="#" data-toggle="modal" data-target="#museoperon">VER MÁS</a>
           </div>
         </div>
        </div>
      </div>
      <div class="clearfix visible-xs-block"></div>

       <div class="col-md-6 col-sm-6 ficha-edificio">
         <div class="lineas-edificio">
           <div class="col-md-4 col-sm-4">

             <a href="#">
               <img src="{{asset('img/edificios/museo-naturales.jpg')}}" class="img-responsive" alt="Museo Histórico y de Ciencias Naturales “Pago De Los Lobos”">
             </a>
           </div>
           <div class="col-md-6 col-sm-6">
             <span>Museo Histórico y de Ciencias Naturales “Pago De Los Lobos”</span>
             <a href="#" data-toggle="modal" data-target="#museonaturales">VER MÁS</a>
           </div>
         </div>
        </div>
      </div>
      </div>
  </div>
</section>


@endsection
