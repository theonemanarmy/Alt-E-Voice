<!-- Header -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?=url_project?>assets/images/header-principal.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <a href="#">
        <img src="<?=url_project?>assets/images/DescargaApp.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>¡Da click aquí para descargar!</h5>
        </div>
      </a>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!-- About Section -->
<div class="w3-container w3-padding-32" id="about">
  <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Nosotros</h3>
  <p data-aos="fade-up" data-aos-anchor-placement="center-center">
    Alt E-Voice: Alt E es un acrónimo de Alter Ego que es una locución latina que puede traducirse
    como el "otro yo" y voice(voz), por su traducción en español.
  </p>
  <p data-aos="fade-left">
    Al crear Alt E-voice damos esa satisfacción al usuario cumpliendo con
    cada una de las necesidades, para el manejo y control de un equipo
    de cómputo, dond ellos mismos sientan que pueden ser dependientes.
  </p>
  <p data-aos="fade-right">
    Logrando la adaptación en dispositivos computacionales, mediante un sistema que permita
    enlazar dichos dispositivos y poder utilizarlos mediante
    teléfono celular.
  </p>
</div>


<div class="row" id="team"  data-aos="flip-left">
  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
    <div class="card">
      <div class="face face1">
        <div class="content-card">
          <img src="<?= url_project ?>assets/images/avatar.png" alt="">
          <h3>Aldrich Barrera</h3>
        </div>
      </div>
      <div class="face face2">
        <div class="content-card">
          <p>
            Constructor del sistema y SEO de More Apps.
          </p>
          <a href="">Contacto</a>
        </div>
      </div>
    </div>
  </div>

  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
    <div class="card">
      <div class="face face1">
        <div class="content-card">
          <img src="<?= url_project ?>assets/images/avatar.png" alt="">
          <h3>Juan Hernández</h3>
        </div>
      </div>
      <div class="face face2">
        <div class="content-card">
          <p>
            Desarrollador y constructor de la aplicación web.
          </p>
          <a href="">Contacto</a>
        </div>
      </div>
    </div>
  </div>

  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
    <div class="card">
      <div class="face face1">
        <div class="content-card">
          <img src="<?= url_project ?>assets/images/avatar-woman.png" alt="">
          <h3>Fernanda Delgado</h3>
        </div>
      </div>
      <div class="face face2">
        <div class="content-card">
          <p>
            Analista y Documentadora del sistema.
          </p>
          <a href="">Contacto</a>
        </div>
      </div>
    </div>
  </div>

  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
    <div class="card">
      <div class="face face1">
        <div class="content-card">
          <img src="<?= url_project ?>assets/images/avatar.png" alt="">
          <h3>Eric Treviño</h3>
        </div>
      </div>
      <div class="face face2">
        <div class="content-card">
          <p>
            Desarrollador y constructor de la aplicación móvil
          </p>
          <a href="">Contacto</a>
        </div>
      </div>
    </div>
  </div>
</div>


<!--<h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Equipo de trabajo</h3>

  <div class="w3-col l3 m6 w3-margin-bottom" data-aos="flip-left">

    <img src="/w3images/team2.jpg" alt="Aldrich" style="width:100%">
    <h3>Aldrich</h3>
    <p class="w3-opacity">Programador</p>
    <p>Fundador de la empresa y del sistema</p>
    <p><button class="w3-button w3-light-grey w3-block">Contacto</button></p>
  </div>

  <div class="w3-col l3 m6 w3-margin-bottom" data-aos="flip-right">
    <img src="/w3images/team1.jpg" alt="Juan" style="width:100%">
    <h3>Juan</h3>
    <p class="w3-opacity">Desarrollador web</p>
    <p>Programador y Diseñador de la aplicación web</p>
    <p><button class="w3-button w3-light-grey w3-block">Contacto</button></p>
  </div>

  <div class="w3-col l3 m6 w3-margin-bottom" data-aos="flip-up">
    <img src="/w3images/team3.jpg" alt="Fernanda" style="width:100%">
    <h3>Fernanda</h3>
    <p class="w3-opacity">Analista</p>
    <p>Analista y encargada de transformar la información </p>
    <p><button class="w3-button w3-light-grey w3-block">Contacto</button></p>
  </div>

  <div class="w3-col l3 m6 w3-margin-bottom" data-aos="flip-down">
    <img src="/w3images/team4.jpg" alt="Eric" style="width:100%">
    <h3>Eric</h3>
    <p class="w3-opacity">Desarrollador Móvil</p>
    <p>Programador y Diseñador de la aplicación móvil</p>
    <p><button class="w3-button w3-light-grey w3-block">Contacto</button></p>
  </div>--<h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Equipo de trabajo</h3>

  <div class="w3-col l3 m6 w3-margin-bottom" data-aos="flip-left">

    <img src="/w3images/team2.jpg" alt="Aldrich" style="width:100%">
    <h3>Aldrich</h3>
    <p class="w3-opacity">Programador</p>
    <p>Fundador de la empresa y del sistema</p>
    <p><button class="w3-button w3-light-grey w3-block">Contacto</button></p>
  </div>

  <div class="w3-col l3 m6 w3-margin-bottom" data-aos="flip-right">
    <img src="/w3images/team1.jpg" alt="Juan" style="width:100%">
    <h3>Juan</h3>
    <p class="w3-opacity">Desarrollador web</p>
    <p>Programador y Diseñador de la aplicación web</p>
    <p><button class="w3-button w3-light-grey w3-block">Contacto</button></p>
  </div>

  <div class="w3-col l3 m6 w3-margin-bottom" data-aos="flip-up">
    <img src="/w3images/team3.jpg" alt="Fernanda" style="width:100%">
    <h3>Fernanda</h3>
    <p class="w3-opacity">Analista</p>
    <p>Analista y encargada de transformar la información </p>
    <p><button class="w3-button w3-light-grey w3-block">Contacto</button></p>
  </div>

  <div class="w3-col l3 m6 w3-margin-bottom" data-aos="flip-down">
    <img src="/w3images/team4.jpg" alt="Eric" style="width:100%">
    <h3>Eric</h3>
    <p class="w3-opacity">Desarrollador Móvil</p>
    <p>Programador y Diseñador de la aplicación móvil</p>
    <p><button class="w3-button w3-light-grey w3-block">Contacto</button></p>
  </div>-->