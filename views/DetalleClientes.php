<?php
    require_once("../inc/header.php");
?>

<section class="container">
    <div id="app">

        <div v-for="item in detalle_cliente_arr">
            <div class="columns mt-5 mb-5">

                {{ detalle_cliente_arr }}

                <div class="column is-8">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Nombre: {{ Cliente_Rut }}</li>
                        <li class="list-group-item">A second item</li>
                        <li class="list-group-item">A third item</li>
                        <li class="list-group-item">A fourth item</li>
                        <li class="list-group-item">And a fifth one</li>
                    </ul>
                </div>
                <div class="column is-4">

                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">An item</li>
                        <li class="list-group-item">A second item</li>
                        <li class="list-group-item">A third item</li>
                        <li class="list-group-item">A fourth item</li>
                        <li class="list-group-item">And a fifth one</li>
                    </ul>

                </div>

            </div>

            <ul class="list-group list-group-flush">
                <li class="list-group-item">An item</li>
                <li class="list-group-item">A second item</li>
                <li class="list-group-item">A third item</li>
                <li class="list-group-item">A fourth item</li>
                <li class="list-group-item">And a fifth one</li>
            </ul>

            <div class="mt-4 mb-2">
                <button type="button" class="button is-info"><i class="fas fa-long-arrow-alt-left mr-4"></i> volver al
                    listado de clientes</button>
            </div>

        </div>
    </div>
</section>

<?php
    require_once("../inc/footer.php");
?>