<?php
    require_once("../inc/header.php");
?>

<section class="container">
    <div id="app">

        <!-- tabs -->
        <div class="mt-3 mb-5">
            <?php require_once("../componentes/tabs.php");  ?>
        </div>
        <!-- tabs -->

        <!-- contenido -->
        <main class="mt-3 mb-5">
            <!-- import contenido de la web -->
            <div class="mt-2 mb-4">
                <h3 class="fw-bold slim-pagetitle">{{ title_tabs }} {{subtitle}}</h3>
            </div>

            <!-- import formulario -->
            <div class="tab-content" id="myTabContent">

                <div class="tab-pane fade" id="ingresocliente" role="tabpanel" aria-labelledby="ingresocliente-tab">

                    <!-- import section from registers -->
                    <div v-if="formPersonaNatural === true">
                        <?php require_once("../componentes/FormularioIngresoCliente.php");  ?>
                    </div>
                    <div v-else>
                        <?php require_once("../componentes/FormularioIngresoClienteEmpresa.php");  ?>
                    </div>
                    <!-- end imports -->

                </div>

                <div class="tab-pane fade" id="representante" role="tabpanel" aria-labelledby="presentantes-tab">

                    <!-- import section from registers -->
                    <div>
                        <?php require_once("../componentes/FormularioRepresentantesEmpresa.php");  ?>
                    </div>
                    <!-- end imports -->

                </div>

                <div class="tab-pane fade" id="avales" role="tabpanel" aria-labelledby="avales-tab">

                    <!-- formulario avales -->
                    <?php require_once("../componentes/FormularioAvales.php");  ?>
                    <!-- end formularios avales -->

                </div>

                <div class="tab-pane fade" id="mandatarios" role="tabpanel" aria-labelledby="mandatarios-tab">

                    <!-- formularios mandatarios -->
                    <?php require_once("../componentes/FormularioMandatarios.php");  ?>
                    <!-- end formularios mandatarios -->

                </div>

                <div class="tab-pane fade" id="reseñas" role="tabpanel" aria-labelledby="reseña-tab">

                    <!-- formularios reseña -->
                    <?php require_once("../componentes/FormularioReseña.php");  ?>
                    <!-- end formularios reseña -->

                </div>

            </div>
            <!-- end import formulario -->

        </main>
        <!-- end contenido -->

    </div>
</section>

<?php
    require_once("../inc/footer.php");
?>