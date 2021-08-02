<?php include("../componentes/Options.php"); ?>

<div v-for="(item, index) in representantes" class="mt-5">

    <div class="card animate__animated animate__fadeIn">
        <div class="card-content">

            <div class="columns is-mobile">

                <div class="column is-3">
                    <div class="field">
                        <div class="control is-small">
                            <label for="">Rut Representante Empresa</label>
                            <input class="input is-small" :class=" {'is-danger' : input_rut_representante}" type="text"
                                placeholder="Apellido Paterno" v-model="rut_representante" required>
                        </div>
                    </div>
                </div>

                <div class="column">
                    <div class="field">
                        <div class="control is-small">
                            <label for="">Nombres</label>
                            <input class="input is-small" :class=" {'is-danger' : input_nombres_representante}"
                                type="text" placeholder="Apellido Paterno" v-model="nombres_representante" required>
                        </div>
                    </div>
                </div>

            </div>

            <div class="columns is-mobile">

                <div class="column">
                    <div class="field">
                        <div class="control is-small">
                            <label for="">Apellido Paterno</label>
                            <input class="input is-small" :class=" {'is-danger' : input_apellido_paterno_representante}"
                                type="text" placeholder="Apellido Paterno" v-model="apellido_paterno_representante"
                                required>
                        </div>
                    </div>
                </div>

                <div class="column">
                    <div class="field">
                        <div class="control is-small">
                            <label for="">Apellido Materno</label>
                            <input class="input is-small" :class=" {'is-danger' : input_apellido_materno_representante}"
                                type="text" placeholder="Apellido Materno" v-model="apellido_materno_representante"
                                required>
                        </div>
                    </div>
                </div>

            </div>

            <div class="columns">

                <div class="column">

                    <div class="control mb-2  mt-2">
                        <label class="radio" :class=" {'is-danger' : input_sexo_representante}">
                            <input type="radio" v-model="sexo_representante" v-bind:value="1">
                            Femenino
                        </label>
                        <label class="radio" :class=" {'is-danger' : input_sexo_representante}">
                            <input type="radio" v-model="sexo_representante" v-bind:value="2">
                            Masculino
                        </label>
                    </div>


                </div>

                <div class="column">

                    <div class="field">
                        <label for="">comuna</label>

                        <div>
                            <select class="form-select form-select-sm" v-model="comuna" name="str_comuna"
                                :class=" {'is-danger' : input_comuna_representantes}">
                                <option v-for="item in comunas_arr" v-bind:value="item.idComunas">
                                    {{ item.Nombre_Comuna }}</option>
                            </select>

                        </div>
                    </div>

                </div>

                <div class="column">

                    <div class="field">
                        <label for="">Ciudad</label>

                        <div>
                            <select class="form-select form-select-sm" v-model="ciudad_representante" name="str_comuna"
                                :class=" {'is-danger' : input_ciudad_representante}">
                                <option v-for="item in ciudades_arr" v-bind:value="item.idComunas">
                                    {{ item.Nombre_Ciudades }}</option>
                            </select>

                        </div>
                    </div>

                </div>

            </div>

            <div class="field">
                <div class="control is-small">
                    <label for="">Nacionalidad</label>
                    <input class="input is-small" :class=" {'is-danger' : input_nacionalidad_representante}" type="text"
                        placeholder="Apellido Paterno" v-model="nacionalidad_representante" required>
                </div>
            </div>

            <div class="field">
                <div class="control is-small">
                    <label for="">Telefono</label>
                    <input class="input is-small" :class=" {'is-danger' : input_telefono_contacto_representante}"
                        type="text" placeholder="Apellido Paterno" v-model="telefono_contacto_representante" required>
                </div>
            </div>

            <div class="field">
                <div class="control is-small">
                    <label for="">Profecion</label>
                    <input class="input is-small" :class=" {'is-danger' : input_profecion_representante}" type="text"
                        placeholder="Apellido Paterno" v-model="profecion_representante" required>
                </div>
            </div>

            <div class="columns">

                <div class="column">
                    <div class="field">
                        <div class="control is-small">
                            <label for="">Direccion</label>
                            <input class="input is-small"
                                :class=" {'is-danger' : input_domicilio_particular_representante}" type="text"
                                placeholder="Apellido Paterno" v-model="domicilio_particular_representante" required>
                        </div>
                    </div>
                </div>

                <div class="column">
                    <div class="field">
                        <div class="control is-small">
                            <label for="">Direccion Comercial</label>
                            <input class="input is-small"
                                :class=" {'is-danger' : input_domicilio_comverical_representante}" type="text"
                                placeholder="Apellido Paterno" v-model="domicilio_comverical_representante" required>
                        </div>
                    </div>
                </div>

                <div class="column">
                    <div class="field">
                        <label for="">Estado Civil</label>
                        <div class="control is-small">
                            <div class="select is-small" :class=" {'is-danger' : input_estado_civil}">
                                <select class="form-select form-select-sm" name="str_estado_civil"
                                    v-model="estado_civil">
                                    <option v-for="item in Estado_civil" v-bind:value="item.idEstado_Civil">
                                        {{ item.Nombre_Estado }}
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="field">
                <div class="control is-small">
                    <label for="">Rol</label>
                    <input class="form-control form-control-sm" :class=" {'is-danger' : input_rol_representantes}"
                        type="file" placeholder="Apellido Paterno" name="str_rol" required>
                </div>
            </div>

        </div>
    </div>

    <div class="mt-3 card animate__animated animate__fadeIn">
        <div class="card-content">

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
            <!-- end poderes -->
            <br><br>
            <div class="field">

                <div class="control is-small">
                    <button class="button is-small is-info" @click="checkFormRepresentantes">Guardar</button>
                </div>

            </div>
        </div>
    </div>

</div>












input_profecion_representante