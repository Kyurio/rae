<div class="card mb-2 animate__animated animate__fadeIn">
    <div class="card-content">
        <div class="d-flex bd-highlight">

            <div class="me-auto p-2 bd-highlight">
                
                <button class="button is-small mr-1" :class="{'is-info' : tipo_persona_natural}"
                    v-on:click="FormularioPersonaNatural" v-if="option_representante == true">
                    Persona Natural
                </button>

                <button class="button is-small mr-1" :class="{'is-info' : tipo_empresa}"
                    v-on:click="FormularioEmpresa" v-if="option_representante == true">
                    Empresa
                </button>

                <button class="button is-small mr-1" :class="{'is-info' : tipo_persona_natural}"
                    v-on:click="FormularioPersonaNatural" v-if="option_avales == true">
                    Persona Natural
                </button>

                <button class="button is-small mr-1" :class="{'is-info' : tipo_empresa}"
                    v-on:click="FormularioEmpresa" v-if="option_avales == true">
                    Empresa
                </button>

                <button class="button is-small mr-1" :class="{'is-info' : tipo_persona_natural}"
                    v-on:click="FormularioPersonaNatural" v-if="option_mandatarios == true">
                    Persona Natural
                </button>

                <button class="button is-small mr-1" :class="{'is-info' : tipo_empresa}"
                    v-on:click="FormularioEmpresa" v-if="option_mandatarios == true">
                    Empresa
                </button>

                <button class="button is-small mr-1" :class="{'is-info' : tipo_persona_natural}"
                    v-on:click="FormularioPersonaNatural" v-if="option_cliente == true">
                    Persona Natural
                </button>

                <button class="button is-small mr-1" :class="{'is-info' : tipo_empresa}"
                    v-on:click="FormularioEmpresa" v-if="option_cliente == true">
                    Empresa
                </button>

          

            </div>

            <div class="p-2 bd-highlight" v-if="option_agregar_quitar == true">

                <button class="button is-info is-small mr-1" @click="newformRepresentates" v-if="botones_representantes == true">
                    <i class="fas fa-plus"></i>
                </button>
                
                <button class="button is-info is-small" @click="deleteformRepresentantes" v-if="botones_representantes == true">
                    <i class="fas fa-trash"></i>
                </button>

                <button class="button is-info is-small mr-1" @click="newformAval" v-if="botones_avales == true">
                    <i class="fas fa-plus"></i>
                </button>
                
                <button class="button is-info is-small" @click="deleteformAval" v-if="botones_avales == true">
                    <i class="fas fa-trash"></i>
                </button>

                <button class="button is-info is-small mr-1" @click="newformAval" v-if="botones_mandatarios == true">
                    <i class="fas fa-plus"></i>
                </button>
                
                <button class="button is-info is-small" @click="deleteformAval" v-if="botones_mandatarios == true">
                    <i class="fas fa-trash"></i>
                </button>

            </div>

        </div>
    </div>
</div>