@extends('layouts.app')

@section('content')
  <section class="container">

    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <h1 class="text-center">Contacto</h1>
        <div class="top"></div>
        <p class="lead"></p>
      </div>
    </div>


    <div class="row">
      <div class="col-md-12">
        <h1>Nuestras oficinas</h1>
        <div class="top-left"></div>
      </div>
      <div class="row">
        <div class="col-md-4 oficinas">
          <h4>Dirección de Turismo</h4>
          <span class="direccion">Terminal de Ómnibus <br>Av. Héroes de Malvinas y Acceso Sur</span>
          <span class="horarios">Lunes a Viernes de 8 a 17 hs.</span>
          <span class="tel">02227-422275</span>
          <span class="mail">
            <a href="mailto:turismo@lobos.gov.ar">turismo@lobos.gov.ar</a>
          </span>
        </div>
        <div class="col-md-4 oficinas">
          <h4>Oficina de Información Turística Lobos</h4>
          <span class="direccion">Teatro Cine Italiano <br> 9 de Julio 142 </span>
          <span class="horarios">Sábados, Domingos y Feriados de 8 a 20 hs</span>
          <span class="tel">02227-431228</span>
        </div>
        <div class="col-md-4 oficinas">
          <h4>Oficina de Información Turística Laguna de Lobos</h4>
          <span class="direccion">Costanera Municipal Laguna de Lobos  <br> Av. Costanera y 35 </span>
          <span class="horarios">Sábados, Domingos y Feriados de 8:30 a 19 hs.</span>
          <span class="tel">02227-494438</span>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <h1>Seguinos en las redes sociales!</h1>
        <div class="top-left"></div>
        <a href="https://facebook.com/turismo.lobos" target="_blank">
          <div class="col-md-3 col-xs-4 redes-sociales">
            <div class="icon-social facebook"></div>
            <h4>Facebook</h4>
          </div>
        </a>

        <a href="https://twitter.com/Turismolobos" target="_blank">
          <div class="col-md-3 col-xs-4 redes-sociales">
            <div class="icon-social twitter"></div>
            <h4>Twitter</h4>
          </div>
        </a>

        <a href="https://www.instagram.com/turismolobos" target="_blank">
          <div class="col-md-3 col-xs-4 redes-sociales">
            <div class="icon-social instagram"></div>
            <h4>Instagram</h4>
          </div>
        </a>
      </div>
      <div class="col-md-6">
        <h1>Contacto</h1>
        <div class="top-left"></div>
        <form class="form-contacto" method="POST">
          <div class="form-group" id="nombre-grupo">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" name="nombre" placeholder="Nombre">
          </div>
          <div class="form-group" id="email-grupo">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" name="email" placeholder="Email">
          </div>
          <div class="form-group" id="consulta-grupo">
            <label for="consulta">Consulta</label>
            <textarea class="form-control" rows="3" id="consulta"></textarea>
          </div>
          <button type="submit" class="btn btn-default">Enviar</button>
        </form>
      </div>
    </div>

  </section>
@endsection
