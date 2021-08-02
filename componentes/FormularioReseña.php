
<div class="card animate__animated animate__fadeIn">
    <div class="card-content">

        <label for="">Reseña</label>
        <textarea class="textarea" placeholder="reseña de el cliente" v-model="reseña" :class=" {'is-danger' : input_reseña}"></textarea>
        <br>
        <button class="button is-info is-small" @click="grabarResena">Grabar</button>

    </div>
</div>