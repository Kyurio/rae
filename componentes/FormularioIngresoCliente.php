<?php include("../componentes/Options.php"); ?>

<div class="card animate__animated animate__fadeIn">
    <div class="card-content">

        <div v-if="errors.length"
            class="alert alert-warning alert-dismissible fade show animate__animated animate__fadeIn" role="alert">
            <p><strong>Se deben completar todos los campos.</strong></p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        <div class="columns">

            <div class="column is-3">
                <div class="control is-small">

                    <div class="field">
                        <label for="rut">Rut</label>
                        <input class="input is-small" :class=" {'is-danger' : input_rut}" type="text" placeholder="RUT"
                            id="rut" v-model="rut" name="str_rut" oninput="checkRut(this)" maxlength="10"
                            @blur="ValidarRutCliente" required>

                    </div>

                </div>
            </div>

            <div class="column">

                <div class="field">
                    <div class="control is-small">
                        <label for="">Nombres</label>
                        <input class="input is-small" :class=" {'is-danger' : input_nombres}" type="text"
                            placeholder="Nombres" v-model="nombres" name="str_nombres" required>
                    </div>
                </div>

            </div>
            
        </div>

        <div class="columns is-mobile">

            <div class="column">
                <div class="field">
                    <div class="control is-small">
                        <label for="">Apellido Paterno</label>
                        <input class="input is-small" :class=" {'is-danger' : input_apellido_paterno}" type="text"
                            placeholder="Apellido Paterno" v-model="apellido_paterno" name="str_apellido_paterno"
                            required>
                    </div>
                </div>
            </div>

            <div class="column">
                <div class="field">
                    <div class="control is-small">
                        <label for="">Apellido Materno</label>
                        <input class="input is-small" :class=" {'is-danger' : input_apellido_materno}" type="text"
                            placeholder="Apellido Materno" v-model="apellido_materno" name="str_apellido_materno"
                            required>
                    </div>
                </div>
            </div>

        </div>

        <div class="control mb-2  mt-2">
            <label class="radio" :class=" {'is-danger' : input_sexo}">
                <input type="radio" name="str_sexo" v-model="sexo" v-bind:value="1">
                Femenino
            </label>
            <label class="radio" :class=" {'is-danger' : input_sexo}">
                <input type="radio" name="str_sexo" v-model="sexo" v-bind:value="2">
                Masculino
            </label>
        </div>

        <div class="field">
            <div class="control is-small">
                <label for="">fecha nacimiento</label>
                <input class="input is-small" :class=" {'is-danger' : input_fecha_nacimiento}" type="date"
                    placeholder="fecha nacimiento" name="str_fecha_nacimiento" v-model="fecha_nacimiento" required>
            </div>
        </div>

        <div class="columns is-mobile">

            <div class="column  is-6">
                <div class="field">
                    <div class="control is-small">
                        <label for="CarnetCliente" class="form-label">Carnet Cliente</label>
                        <input class="form-control form-control-sm" type="file" id="files" ref="files"
                            @change="ExtractNombreFile" name="str_carnet_cliente" required>
                    </div>
                </div>
            </div>

            <div class="column">
                <div class="field">
                    <label for="">Estado Civil</label>
                    <div class="control is-small">
                        <div class="select is-small mt-2" :class=" {'is-danger' : input_estado_civil}">
                            <select class="form-select form-select-sm" name="str_estado_civil" v-model="estado_civil">
                                <option v-for="item in Estado_civil" v-bind:value="item.idEstado_Civil">
                                    {{ item.Nombre_Estado }}
                                </option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="column">
                <div class="field">
                    <label for="">Profesion</label>
                    <div class="control is-small mt-2">
                        <input class="input is-small" :class=" {'is-danger' : input_profecion}" type="text"
                            placeholder="profesion" v-model="profecion" name="str_profecion" required>
                    </div>
                </div>
            </div>

        </div>

        <div class="field">
            <div class="control is-small">
                <label for="">giro</label>
                <input class="input is-small" :class=" {'is-danger' : input_giro}" type="text" placeholder="giro"
                    v-model="giro" name="str_giro" required>
            </div>
        </div>

        <div class="field">
            <div class="control is-small">
                <label for="">Direccion comercial</label>
                <input class="input is-small" :class=" {'is-danger' : input_direccion_comercial}" type="text"
                    placeholder="Direccion comercial" v-model="direccion_comercial" name="str_direccion_comercial">
            </div>
        </div>

        <div class="field">
            <div class="control is-small">
                <label for="">Direccion Particular</label>
                <input class="input is-small" :class=" {'is-danger' : input_direccion_particular}" type="text"
                    placeholder="Direccion Particular" v-model="direccion_particular" name="str_direccion_particular">
            </div>
        </div>

        <div class="columns is-multiline is-mobile mt-2">

            <div class="column">
                <div class="field">
                    <label for="">Pais</label>
                    <div class="control is-small" :class=" {'is-danger' : input_pais}">
                        <select class="form-select form-select-sm" v-model="pais" name="str_pais"
                            aria-label=".form-select-sm example">
                            <option v-for="item in paises_arr" v-bind:value="item.idPais">
                                {{ item.Nombre_Pais }}</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="column column is-one-quarter">

                <div class="field">
                    <label for="">Region</label>
                    <div class="control is-small" :class=" {'is-danger' : input_region}">
                        <select class="form-select form-select-sm" v-model="region"
                            aria-label=".form-select-sm example">
                            <option v-for="item in regiones_arr" v-bind:value="item.idRegiones" required>
                                {{ item.Nombre_Region }}</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="column is-half">
                <div class="field">
                    <label for="">comuna</label>
                    <div :class=" {'is-danger' : input_comuna}">
                        <select class="form-select form-select-sm" v-model="comuna" name="str_comuna"
                            aria-label=".form-select-sm example">
                            <option v-for="item in comunas_arr" v-bind:value="item.idComunas">
                                {{ item.Nombre_Comuna }}</option>
                        </select>
                    </div>
                </div>
            </div>

        </div>

        <div class="field">
            <div class="control is-small">
                <label for="">Nacionalidad</label>
                <input class="input is-small" :class=" {'is-danger' : input_nacionalidad}" name="str_nacionalidad"
                    type="email" placeholder="email" v-model="nacionalidad" required>
            </div>
        </div>

        <div class="field">
            <div class="control is-small">
                <label for="">Email</label>
                <input class="input is-small" :class=" {'is-danger' : input_email}" name="str_email" type="email"
                    placeholder="email" v-model="email" required>
            </div>
        </div>

        <div class="columns">

            <div class="column">
                <div class="field">
                    <div class="control is-small">
                        <label for="">Telefono</label>
                        <input class="input is-small" :class=" {'is-danger' : input_telefono_contacto}" type="text"
                            placeholder="telefono" name="str_telefono_contacto" v-model="telefono_contacto">
                    </div>
                </div>
            </div>

            <div class="column">
                <div class="field">
                    <div class="control is-small">
                        <label for="">Telefon 2</label>
                        <input class="input is-small" :class=" {'is-danger' : input_telefono_contacto_2}"
                            name="str_telefono_contacto_2" type="text" placeholder="telefono 2"
                            v-model="telefono_contacto_2">
                    </div>
                </div>
            </div>

            <div class="column">
                <div class="field">
                    <div class="control is-small">
                        <label for="">Celular</label>
                        <input class="input is-small" :class=" {'is-danger' : input_celular}" name="str_celular"
                            type="text" placeholder="celcular" v-model="celular">
                    </div>
                </div>
            </div>

        </div>

        <div class="field">
            <div class="control is-small">
                <label for="">Mayores Clientes</label>
                <textarea class="textarea" :class=" {'is-danger' : input_mayores_clientes}"
                    placeholder="mayores clientes" v-model="mayores_clientes" name="str_mayores_clientes"></textarea>
            </div>
        </div>

        <div class="field">
            <div class="control is-small">
                <label for="">Observaciones</label>
                <textarea class="textarea" :class=" {'is-danger' : input_observaciones}" placeholder="observaciones"
                    v-model="observaciones" name="str_observaciones"></textarea>
            </div>
        </div>

        <br>

        <div class="field">
            <div class="control is-small">
                <button @click="checkFormPersonaNatural" class="button is-small is-info">Guardar</button>
            </div>
        </div>


    </div>
</div>