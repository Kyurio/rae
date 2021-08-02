

<?php include("../componentes/Options.php"); ?>

<div class="card mb-5 animate__animated animate__fadeIn"  v-for="(item, index) in avales">
    <div class="card-content">

        <div class="mt-3">
            <div class="columns">

                <div class="column is-3">
                    <div class="field">
                        <div class="control is-small">
                            <label for="">Rut Aval</label>
                            <input class="input is-small" :class=" {'is-danger' : input_rut}" type="text"
                                placeholder="Nombres" v-model="rut_aval" name="str_rut" required>
                        </div>
                    </div>
                </div>

                <div class="column is-9">
                    <div class="field">
                        <div class="control is-small">
                            <label for="">Nombres</label>
                            <input class="input is-small" :class=" {'is-danger' : input_nombres}" type="text"
                                placeholder="Nombres" v-model="nombres_aval" name="str_nombres" required>
                        </div>
                    </div>
                </div>

            </div>

            <div class="columns">

                <div class="column">
                    <div class="field">
                        <div class="control is-small">
                            <label for="">Apellido Paterno</label>
                            <input class="input is-small" :class=" {'is-danger' : input_apellido_paterno}" type="text"
                                placeholder="Apellido Materno" v-model="apellido_paterno_aval" name="str_apellido_paterno"
                                required>
                        </div>
                    </div>
                </div>

                <div class="column">
                    <div class="field">
                        <div class="control is-small">
                            <label for="">Apellido Materno</label>
                            <input class="input is-small" :class=" {'is-danger' : input_apellido_materno}" type="text"
                                placeholder="Apellido Materno" v-model="apellido_materno_aval" name="str_apellido_materno"
                                required>
                        </div>
                    </div>
                </div>

            </div>

            <div class="field">
                <div class="control is-small" :class=" {'is-danger' : input_sexo}">
                    <label for="">Sexo</label>
                    <div class="control">
                        <label class="radio">
                            <input type="radio" name="answer" v-model="sexo_aval" name="str_sexo" required>
                            Yes
                        </label>
                        <label class="radio">
                            <input type="radio" name="answer" v-model="sexo_aval" name="str_sexo" required>
                            No
                        </label>
                    </div>
                </div>
            </div>

            <div class="field">
                <div class="control is-small">
                    <label for="">Estado Civil</label>
                    <input class="input is-small" :class=" {'is-danger' : input_estado_civil}" type="text"
                        placeholder="Nombres" v-model="estado_civil_aval" name="str_estado_civil" required>
                </div>
            </div>

            <div class="field">
                <div class="control is-small">
                    <label for="">Direccion Comercial</label>
                    <input class="input is-small" :class=" {'is-danger' : input_nombres}" type="text"
                        placeholder="Nombres" v-model="direccion_comercial_aval" name="str_nombres" required>
                </div>
            </div>

            <div class="columns">
                <div class="column">
                    <div class="field">
                        <div class="control is-small">
                            <label for="">Comuna</label>
                            <input class="input is-small" :class=" {'is-danger' : input_nombres}" type="text"
                                placeholder="Nombres" v-model="comuna_aval" name="str_nombres" required>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="field">
                        <div class="control is-small">
                            <label for="">Nacionalidad</label>
                            <input class="input is-small" :class=" {'is-danger' : input_nacionalidad}" type="text"
                                placeholder="Nombres" v-model="nacionalidad_aval" name="str_nacionalidad_aval" required>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="field">
                        <div class="control is-small">
                            <label for="">Direccion Particular</label>
                            <input class="input is-small" :class=" {'is-danger' : input_nombres_aval}" type="text"
                                placeholder="Nombres" v-model="direccion_particular_aval" name="str_direccion_particula_aval" required>
                        </div>
                    </div>
                </div>
            </div>

            <div class="field">
                <div class="control is-small">
                    <label for="">Telefono</label>
                    <input class="input is-small" :class=" {'is-danger' : input_nombres_aval}" type="text"
                        placeholder="Nombres" v-model="telefono_aval" name="str_telefono_aval" required>
                </div>
            </div>

            <div class="field">
                <button class="button is-info is-small">Guardar</button>
            </div>
        </div>

    </div>
</div>