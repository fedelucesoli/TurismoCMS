<nav id="mainNav" class="navbar yamm navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                    <span class="sr-only">Menu</span> Menu <i class="fa fa-bars"></i>
                </button>
                <div class="logo-menu">
                  <a href="/">
                    <img src="{{asset('img/logo-municipiodelobos_blanco.png')}}" class="img-responsive" alt="Municipio de Lobos">
                  </a>
                </div>
            </div>
            {{-- TODO - navbar mobile -sidebar  --}}
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden-md {{ Request::is('/') ? 'active' : '' }}">
                        <a href="/">INICIO</a>
                    </li>
                    <li class="{{ Request::is('ciudad') ? 'active' : '' }}">
                        <a href="/ciudad">CIUDAD</a>
                    </li>

                    <li class="dropdown yamm-fw ">
                      <a href="#" data-toggle="dropdown" class="dropdown-toggle <?php echo (isset($seccion) && $seccion == 'hacer') ? 'active' : '';   ?>" aria-expanded="true">QUÉ HACER?<b class="caret"></b></a>

                         <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-md-3 col-xs-12 item">
                                            <a href="/turismo/laguna">
                                            <img src="{{asset('img/menu/laguna1.jpg')}}" class="img-responsive hidden-xs " alt="Laguna De Lobos">
                                            <span>LAGUNA DE LOBOS</span></a>
                                        </div>
                                        <div class="col-md-3 col-xs-12 item">
                                            <a href="/turismo/rural">
                                            <img src="{{asset('img/menu/rural.jpg')}}" class="img-responsive hidden-xs" alt="Turismo Rural">
                                            <span>TURISMO RURAL</span></a>
                                        </div>
                                       <!--  <div class="col-md-3 col-xs-12 item">
                                            <a href="/turismo/religioso">
                                            <img src="{{asset('img/menu/religioso.jpg')}}" class="img-responsive hidden-xs" alt="Turismo Religioso">
                                            <span>TURISMO RELIGIOSO</span></a>
                                        </div> -->
                                        <div class="col-md-3 col-xs-12 item">
                                            <a href="/turismo/activo">
                                            <img src="{{asset('img/menu/activo.jpg')}}" class="img-responsive hidden-xs" alt="Turismo Activo">
                                            <span>TURISMO ACTIVO</span></a>
                                        </div>
                                        <div class="col-md-3 col-xs-12 item">
                                            <a href="/turismo/reuniones">
                                            <img src="{{asset('img/menu/reuniones.jpg')}}" class="img-responsive hidden-xs" alt="Turismo De Reuniones">
                                            <span>TURISMO DE REUNIONES</span></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="{{ Request::is('donde/comer') ? 'active' : '' }}">
                        <a class="<?php echo (isset($seccion) && $seccion == 'comer') ? 'active' : '';   ?>" href="/donde/comer">DÓNDE COMER?</a>
                    </li>
                    <li class="{{ Request::is('donde/dormir') ? 'active' : '' }}">
                        <a href="/donde/dormir">DÓNDE DORMIR?</a>
                    </li>
                    <li class="{{ Request::is('eventos') ? 'active' : '' }}">
                        <a class="<?php echo (isset($seccion) && $seccion == 'eventos') ? 'active' : '';   ?>" href="/eventos">EVENTOS</a>
                    </li>
                    <li class="{{ Request::is('contacto') ? 'active' : '' }}" >
                        <a class="<?php echo (isset($seccion) && $seccion == 'contacto') ? 'active' : '';   ?>" href="/contacto">CONTACTO</a>
                    </li>

                </ul>
            </div>


            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->

    </div>

</nav>
