<div class="tabs is-toggle is-fullwidth ">
  <ul class="nav" id="myTab" role="tablist">

    <li :class=" {'is-active' : tabs_ingresocliente}">
      <a class="slim-navbar is-info mr-1  animate__animated animate__fadeIn" @click="tabs('Ingreso Cliente')"
        id="ingresocliente-tab" data-bs-toggle="tab" data-bs-target="#ingresocliente" role="tab"
        aria-controls="ingresocliente" aria-selected="true">
        <span class="icon is-small"><i class="fas fa-user"></i></span>
        <span>Ingreso Cliente</span>
      </a>
    </li>

    <li :class=" {'is-active' : tabs_representantes}" v-if="tabs_representante_natural == true">
      <a class="slim-navbar is-info mr-1  animate__animated animate__fadeIn" @click="tabs('Representantes')"
        id="representantes-tab" data-bs-toggle="tab" data-bs-target="#representante" role="tab"
        aria-controls="representante" aria-selected="true">
        <span class="icon is-small"><i class="fas fa-user-tag"></i></span>
        <span>Representantes</span>
      </a>
    </li>

    <li :class=" {'is-active' : tabs_avales}">
      <a class="slim-navbar is-info mr-1  animate__animated animate__fadeIn" @click="tabs('Avales')"
        id="avales-tab" data-bs-toggle="tab" data-bs-target="#avales" role="tab" aria-controls="Avales"
        aria-selected="true">
        <span class="icon is-small"><i class="fas fa-handshake"></i></span>
        <span>Avales</span>
      </a>
    </li>

    <li :class=" {'is-active' : tabs_mandatarios}">
      <a class="slim-navbar is-info mr-1  animate__animated animate__fadeIn" @click="tabs('Mandatarios')"
        id="mandatarios-tab" data-bs-toggle="tab" data-bs-target="#mandatarios" role="tab" aria-controls="mandatarios"
        aria-selected="true">
        <span class="icon is-small"><i class="fas fa-users"></i></span>
        <span>Mandatarios</span>
      </a>
    </li>

    <li :class=" {'is-active' : tabs_reseñas}">
      <a class="slim-navbar is-info mr-1  animate__animated animate__fadeIn" @click="tabs('Reseñas')"
        id="mandatarios-tab" data-bs-toggle="tab" data-bs-target="#reseñas" role="tab" aria-controls="mandatarios"
        aria-selected="true">
        <span class="icon is-small"><i class="far fa-file-alt" aria-hidden="true"></i></span>
        <span>Reseñas</span>
      </a>
    </li>

  </ul>
</div>