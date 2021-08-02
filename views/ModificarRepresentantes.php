<?php
    require_once("../inc/header.php");
?>

<div id="app">
    <div class="container">
        <section>


            <div class="card">
                <div class="card-content">

                    <h5 class="fw-bolder"><span class="badge rounded-pill success">1</span> Modificar Poderes
                        Representante</h5>
                    <hr>

                    <div class="columns">
                        <div class="column is-2">
                            <div class="field">
                                <div class="control is-small">
                                    <label for="">Rut Cliente</label>
                                    <input class="input is-small" type="text" placeholder="Rut cliente">
                                </div>
                            </div>
                        </div>
                        <div class="column is-6">
                            <div class="field">
                                <div class="control is-small">
                                    <label for="">Nombre Cliente</label>
                                    <input class="input is-small" type="text" placeholder="Nombre Cliente">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="field">
                        <div class="control is-small">
                            <label for="">Sucursal</label>
                            <input class="input is-small" type="text" placeholder="Sucursal">
                        </div>
                    </div>

                    <div class="field">
                        <div class="control is-small">
                            <button class="button is-small is-success">Buscar</button>
                        </div>
                    </div>


                </div>
            </div>

            <div class="card mt-3">
                <div class="card-content">
                    <h5 class="fw-bolder"><span class="badge rounded-pill success">2</span> Informe legal Cliente</h5>
                    <hr>
                    <div class="field">
                        <div class="control is-small">
                            <div class="mb-3">
                                <label for="">Cargar Informe Legal</label>
                                <input class="form-control form-control-sm" id="formFileSm" type="file">
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="columns">
                <div class="column">
                    <div class="card mt-3">
                        <div class="card-content">
                            <h5 class="fw-bolder"><span class="badge rounded-pill success">3</span> Representantes</h5>
                            <hr>

                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Sel.</th>
                                        <th scope="col">Rut</th>
                                        <th scope="col">Nombre</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="card mt-3">
                        <div class="card-content">
                            <h5 class="fw-bolder"><span class="badge rounded-pill success">4</span> Poderes</h5>
                            <hr>

                            <ul class="list-group list-group-flush">
                                <li class="list-group-item" v-for="item in Poderes_arr">

                                    <div class="columns">

                                        <div class="column">
                                            <label class="checkbox">
                                                <input type="checkbox">
                                                {{ item.Descripcion_Poder }}
                                            </label>
                                        </div>
                                        <div class="column is-6">
                                            <div class="control is-small">
                                                <input class="input is-small" type="text" placeholder="descripcion">
                                            </div>
                                        </div>

                                    </div>



                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>
</div>

<?php
    require_once("../inc/footer.php");
?>