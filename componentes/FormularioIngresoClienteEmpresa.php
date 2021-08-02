<?php include("../componentes/Options.php"); ?>
<div class="card animate__animated animate__fadeIn">
    <div class="card-content">

            <p v-if="errors.length">
                <b>porfavor corriga los sigueintes error(s):</b>
                <ul>
                    <li v-for="error in errors">{{ error }}</li>
                </ul>
            </p>

            <div class="columns">
                <div class="column is-4">
                    <div class="field">
                        <div class="control is-small">
                            <label for="rut">Rut</label>
                            <input class="input is-small" :class=" {'is-danger' : input_rut_empresa}" type="text"
                                placeholder="RUT" id="rut" v-model="rut_empresa" oninput="checkRut(this)" @blur="ValidacionRutEmpresa"
                                maxlength="10" required>
                        </div>
                    </div>
                </div>
                <div class="column is-8">

                    <div class="field">
                        <div class="control is-small">
                            <label for="">Razon Social</label>
                            <input class="input is-small" :class=" {'is-danger' : input_razon_social_empresa}" type="text"
                                placeholder="Nombres" v-model="razon_social_empresa" required>
                        </div>
                    </div>
                </div>
            </div>

            <div class="field">
                <label for="">Tipo Empresa</label>
                <div class="control is-small">
                    <select class="form-select form-select-sm" :class=" {'is-danger' : input_tipo_empresa}"
                        v-model="tipo_empresa" aria-label=".form-select-sm example" required>
                        <option v-for="item in TipoEmpras_arr" v-bind:value="item.idTipo_Empresa">
                            {{ item.Nombre_Empresa }}</option>
                    </select>
                </div>
            </div>

            <div class="field">
                <div class="control is-small">
                    <label for="">Fecha informe sociedad</label>
                    <input class="input is-small" :class=" {'is-danger' : input_fecha_informe_sociedad_empresa}" type="date"
                        placeholder="Apellido Paterno" v-model="fecha_informe_sociedad_empresa"
                        required>
                </div>
            </div>

            <div class="field">
                <div class="control is-small">
                    <label for="formFileSm" class="form-label">Rol</label>
                    <input class="form-control form-control-sm" :class=" {'is-danger' : input_rol_empresa}"
                    id="files_rol" type="file" @change="ExtractNombreFileEmpresa">
                </div>
            </div>

            <div class="field">
                <div class="control is-small">
                    <label for="">Direccion Comercial</label>
                    <input class="input is-small" :class=" {'is-danger' : input_direccion_comerial_empresa}" type="text"
                        placeholder="Apellido Materno" v-model="direccion_comerial_empresa" required>
                </div>
            </div>

            <div class="columns is-multiline is-mobile mt-2">

                <div class="column column is-one-quarter">
                    <div class="field">

                        <label for="">Region</label>
                        <div class="control is-small">
                            <select class="form-select form-select-sm" :class=" {'is-danger' : input_region_empresa}"
                                v-model="region_empresa" aria-label=".form-select-sm example" required>
                                <option v-for="item in regiones_arr" v-bind:value="item.idRegiones">
                                    {{ item.Nombre_Region }}</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="column">
                    <div class="field">
                        <label for="">Pais</label>
                        <div class="control is-small">
                            <select class="form-select form-select-sm" :class=" {'is-danger' : input_pais_empresa}"
                                v-model="pais_empresa" aria-label=".form-select-sm example" required>
                                <option v-for="item in paises_arr" v-bind:value="item.idPais">
                                    {{ item.Nombre_Pais }}</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="column is-half">
                    <div class="field">
                        <label for="">comuna</label>
                        <div>
                            <select class="form-select form-select-sm" :class=" {'is-danger' : input_comuna_empresa}"
                                v-model="comuna_empresa" aria-label=".form-select-sm example">
                                <option v-for="item in comunas_arr" v-bind:value="item.idComunas">
                                    {{ item.Nombre_Comuna }}</option>
                            </select>
                        </div>
                    </div>
                </div>

            </div>

            <div class="field">
                <div class="control is-small">
                    <label for="">Email</label>
                    <input class="input is-small" :class=" {'is-danger' : input_email_empresa}" name="str_email" type="email"
                        placeholder="email" v-model="email_empresa" required>
                </div>
            </div>

            <div class="columns">
                <div class="column">
                    <div class="field">
                        <div class="control is-small">
                            <label for="">Telefono</label>
                            <input class="input is-small" :class=" {'is-danger' : input_telefono_contacto_empresa}" type="text"
                                placeholder="telefono" v-model="telefono_contacto_empresa">
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="field">
                        <div class="control is-small">
                            <label for="">Telefon 2</label>
                            <input class="input is-small" :class=" {'is-danger' : input_telefono_contacto_2_empresa}"
                                type="text" placeholder="telefono 2"
                                v-model="telefono_contacto_2_empresa">
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="field">
                        <div class="control is-small">
                            <label for="">Celular</label>
                            <input class="input is-small" :class=" {'is-danger' : input_celular_empresa}"
                                type="text" placeholder="celcular" v-model="celular_empresa">
                        </div>
                    </div>
                </div>
            </div>

            <div class="field">
                <div class="control is-small">
                    <label for="">Mayores Clientes</label>
                    <textarea class="textarea" :class=" {'is-danger' : input_mayores_clientes_empresa}"
                        placeholder="mayores clientes" v-model="mayores_clientes_empresa"></textarea>
                </div>
            </div>

            <div class="field">
                <div class="control is-small">
                    <label for="">Observaciones</label>
                    <textarea class="textarea" :class=" {'is-danger' : input_observaciones_empresa}" placeholder="observaciones"
                        v-model="observaciones_empresa"></textarea>
                </div>
            </div>

            <br>

            <div class="field">
                <div class="control is-small">
                    <button class="button is-small is-info" @click="checkFormEmpresa">Guardar</button>
                </div>
            </div>



    </div>

</div>