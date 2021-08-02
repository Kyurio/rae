<?php include("../componentes/Options.php"); ?>
<div class="card animate__animated animate__fadeIn">
    <div class="card-content">

        <div class="mt-5 mb-2" v-for="(item, index) in mandatarios">

            <div class="columns">

                <div class="column is-3">
                    <div class="field">
                        <div class="control is-small">
                            <label for="">Rut Mandatario</label>
                            <input class="input is-small" :class=" {'is-danger' : input_rut}" type="text"
                                placeholder="Rut Mandatario" v-model="rut" name="str_rut" required>
                        </div>
                    </div>
                </div>

                <div class="column is-9">
                    <div class="field">
                        <div class="control is-small">
                            <label for="">Nombres</label>
                            <input class="input is-small" :class=" {'is-danger' : input_nombres}" type="text"
                                placeholder="Nombres" v-model="nombres" name="str_nombres" required>
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
                                placeholder="Apellido Materno" v-model="apellido_paterno" name="str_apellido_paterno"
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

            <div class="field">
                <div class="control is-small" :class=" {'is-danger' : input_sexo}">
                    <label for="">Sexo</label>
                    <div class="control">
                        <label class="radio">
                            <input type="radio" name="answer" v-model="sexo" name="str_sexo" required>
                            Yes
                        </label>
                        <label class="radio">
                            <input type="radio" name="answer" v-model="sexo" name="str_sexo" required>
                            No
                        </label>
                    </div>
                </div>
            </div>

            <div class="field">
                <div class="control is-small">
                    <label for="">Estado Civil</label>
                    <input class="input is-small" :class=" {'is-danger' : input_estado_civil}" type="text"
                        placeholder="Nombres" v-model="estado_civil" name="str_estado_civil" required>
                </div>
            </div>

            <div class="columns">
                <div class="column">
                    <div class="field">
                        <div class="control is-small">
                            <label for="">Direccion Comercial</label>
                            <input class="input is-small" :class=" {'is-danger' : input_nombres}" type="text"
                                placeholder="Nombres" v-model="nombres" name="str_nombres" required>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="field">
                        <div class="control is-small">
                            <label for="">Direccion Particular</label>
                            <input class="input is-small" :class=" {'is-danger' : input_nombres}" type="text"
                                placeholder="Nombres" v-model="nombres" name="str_nombres" required>
                        </div>
                    </div>
                </div>
            </div>


            <div class="columns">
                <div class="column">
                    <div class="field">
                        <div class="control is-small">
                            <label for="">Comuna</label>
                            <input class="input is-small" :class=" {'is-danger' : input_nombres}" type="text"
                                placeholder="Nombres" v-model="nombres" name="str_nombres" required>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="field">
                        <div class="control is-small">
                            <label for="">Nacionalidad</label>
                            <input class="input is-small" :class=" {'is-danger' : input_nombres}" type="text"
                                placeholder="Nombres" v-model="nombres" name="str_nombres" required>
                        </div>
                    </div>
                </div>
            </div>

            <div class="field">
                <div class="control is-small">
                    <label for="">Telefono</label>
                    <input class="input is-small" :class=" {'is-danger' : input_nombres}" type="text"
                        placeholder="Nombres" v-model="nombres" name="str_nombres" required>
                </div>
            </div>

            <div class="field">
                <div class="control is-small">
                    <label for="">Nacionalidad</label>
                    <textarea class="textarea" placeholder="e.g. Hello world"></textarea>
                </div>
            </div>

        </div>

        <div class="field">
            <button class="button is-info is-small">Guardar</button>
        </div>

    </div>
</div>