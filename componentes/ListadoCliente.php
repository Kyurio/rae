<div class="card mt-5">
    <div class="card-content">

        <!-- buscador -->
        <div class="mb-2">
            <div class="columns">
                <div class="column is-4">

                    <div class="field">
                        <p class="control">
                            <label for="">Buscar Cliente</label>
                            <input class="input is-small" type="text" placeholder="Buscador..." v-model="BuscadorClientes">
                        </p>
                    </div>

                </div>
            </div>
        </div>
        <!-- end buscador -->

        <table class="table text-center table-borderless table-hover animate__animated animate__fadeIn">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Rut</th>
                    <th scope="col">Fecha Creacion</th>
                    <th scope="col">Accion</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(item, index) in Filter_Clientes_Arr" class="animate__animated animate__fadeIn"
                    v-show="(pag - 1) * num_results <= index  && pag * num_results > index">

                    <td>{{ item.name }}</td>
                    <td>{{ item.Cliente_Rut }}</td>
                    <td>{{ item.Fecha_Creacion }}</td>
                    <td>
                        <button class="button is-info is-small" title="Editar"><i class="fas fa-pen"></i></button>
                        <button class="button is-info is-small" title="Detalle" @click="Detallecliente" ><i class="fas fa-info"></i></button>

                </tr>
            </tbody>
        </table>

        <!-- paginador -->
        <div class="container">
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-end">
                    <li class="page-item">
                        <a class="page-link" href="#" v-show="pag != 1" @click.prevent="pag -= 1"><i
                                class="fas fa-chevron-left"></i></a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next"
                            v-show="pag * num_results / Filter_Clientes_Arr.length < 1" @click.prevent="pag += 1"><i
                                class="fas fa-chevron-right"></i></a>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- end paginador -->

    </div>
</div>