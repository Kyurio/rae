var app = new Vue({

  el: '#app',
  data: {

    //--------------------------------------------------------------------------
    // paginadores
    //--------------------------------------------------------------------------
    num_results: 10,
    pag: 1,


    //array de objetos
    ciudades_arr: [],
    regiones_arr: [],
    paises_arr: [],
    comunas_arr: [],
    Estado_civil: [],
    Listado_Clientes_Arr: [],
    Filter_Clientes_Arr: [],
    Poderes_arr: [],
    TipoEmpras_arr: [],
    detalle_cliente_arr: [],

    //

    avales: [{}],
    mandatarios: [{}],
    representantes: [{}],

    //buscadores
    buscar_cliente: '',

    //registro cliente persona natural
    rut_representante: null,
    rut: null,
    apellido_paterno: null,
    apellido_materno: null,
    nombres: null,
    sexo: null,
    carnet_cliente: null,
    fecha_nacimiento: null,
    estado_civil: null,
    direccion_particular: null,
    pais: null,
    region: null,
    comuna: null,
    nacionalidad: null,
    profecion: null,
    telefono_contacto: null,
    telefono_contacto_2: null,
    telefono: null,
    celular: null,
    direccion_comercial: null,
    email: null,
    fecha_creacion: null,
    giro: null,
    mayores_clientes: null,
    ejecutivo: null, // se carga por session
    observaciones: null,
    estado: null, //activo
    sucursal: null,
    razon_social: null,

    // registro aval
    rut_aval: null,
    nombres_aval: null,
    apellido_paterno_aval: null,
    apellido_materno_aval: null,
    sexo_aval: null,
    estado_civil_aval: null,
    direccion_comercial_aval: null,
    comuna_aval: null,
    nacionalidad_aval: null,
    direccion_particular_aval: null,
    telefono_aval: null,

    // error formularios
    errors: [],

    // clase de error que se agrega si hay un campo del formulario incorrecto o incompleto
    input_rut: false,
    input_apellido_paterno: false,
    input_apellido_materno: false,
    input_nombres: false,
    input_sexo: false,
    input_carnet_cliente: false,
    input_fecha_nacimiento: false,
    input_estado_civil: false,
    input_direccion_particular: false,
    input_pais: false,
    input_region: false,
    input_comuna: false,
    input_nacionalidad: false,
    input_profecion: false,
    input_telefono_contacto: false,
    input_telefono_contacto_2: false,
    input_celular: false,
    input_direccion_comercial: false,
    input_email: false,
    input_fecha_creacion: false,
    input_giro: false,
    input_mayores_clientes: false,
    input_ejecutivo: false, // se carga por session
    input_observaciones: false,
    input_estado: false, //activo
    input_sucursal: false,


    //
    // grabar datos empresa 
    //


    rut_empresa: null,
    razon_social_empresa: null,
    tipo_empresa: null,
    fecha_informe_sociedad_empresa: null,
    rol_empresa: null,
    direccion_comerial_empresa: null,
    region_empresa: null,
    pais_empresa: null,
    comuna_empresa: null,
    email_empresa: null,
    telefono_contacto_empresa: null,
    telefono_contacto_2_empresa: null,
    celular_empresa: null,
    mayores_clientes_empresa: null,
    observaciones_empresa: null,

    // estado inputs datos empresa
    input_rut_empresa: false,
    input_razon_social_empresa: false,
    input_tipo_empresa: false,
    input_fecha_informe_sociedad_empresa: false,
    input_rol_empresa: false,
    input_direccion_comerial_empresa: false,
    input_region_empresa: false,
    input_pais_empresa: false,
    input_comuna_empresa: false,
    input_email_empresa: false,
    input_telefono_contacto_empresa: false,
    input_telefono_contacto_2_empresa: false,
    input_celular_empresa: false,
    input_mayores_clientes_empresa: false,
    input_observaciones_empresa: false,


    //
    // grabar datos representantes
    //
    cliente_rut: null,
    rut_representante: null,
    sexo_representante: null,
    apellido_paterno_representante: null,
    apellido_materno_representante: null,
    nombres_representante: null,
    domicilio_particular_representante: null,
    domicilio_comverical_representante: null,
    ciudad_representante: null,
    nacionalidad_representante: null,
    telefono_contacto_representante: null,
    estado_civil_representante: null,
    profecion_representante: null,


    // ipusts representante
    input_rut_representante: false,
    input_sexo_representante: false,
    input_apellido_paterno_representante: false,
    input_apellido_materno_representante: false,
    input_nombres_representante: false,
    input_domicilio_particular_representante: false,
    input_domicilio_comverical_representante: false,
    input_ciudad_representante: false,
    input_nacionalidad_representante: false,
    input_telefono_contacto_representante: false,
    input_estado_civil_representante: false,
    input_profecion_representante: false,


    //inputs empresa
    input_razon_social: false,
    fecha_informe_sociedad: false,
    input_rol: false,
    input_telefono: false,
    input_tipo_empresa: false,
    input_fecha_informe_sociedad: false,


    // formularios
    formPersonaNatural: false,
    formEmpresa: false,

    // titulo de los tabs seleccionados
    title_tabs: null,
    subtitle: null,

    // estados tabs
    tabs_representantes: false,
    tabs_avales: false,
    tabs_mandatarios: false,
    tabs_ingresocliente: false,
    tabs_reseñas: false,

    tipo_empresa: null,
    tipo_persona_natural: null,


    // estado botones
    EmpresaPeronsa: true,

    // opciones agregar quitar
    option_agregar_quitar: true,

    //loader


    // datos para grabar reseña
    reseña: null,
    // input validador
    input_reseña: false,


    //botones option
    botones_ingreso_cliente: false,
    botones_representantes: false,
    botones_avales: false,
    botones_mandatarios: false,
    botones_reseñas: false,


    // activan o descativan los botones de eleccion de formulario entre persona natural o empresa
    option_representante: false,
    option_avales: false,
    option_mandatarios: false,
    option_cliente: false,




    // desactiva o activa el repsentante dependiendo si es persona natural o  empresa
    // si esta en true espor que esta activado 
    tabs_representante_natural: true,


  },

  mounted: function () {

    this.ciudades();
    this.regiones();
    this.comunas();
    this.paises();
    this.EstadoCivil();
    this.ListadoClientes();
    this.Poderes();
    this.TiposEmpresa();

  },

  computed: {

    BuscadorClientes: {
      get() {
        return this.buscar_cliente
      },
      set(value) {
        value = value.toLowerCase();
        this.Filter_Clientes_Arr = this.Listado_Clientes_Arr.filter(item => item.name.toLowerCase().indexOf(value) !== -1)
        this.Filter_Clientes_Arr = this.Listado_Clientes_Arr.filter(item => item.Cliente_Rut.toLowerCase().indexOf(value) !== -1)
        this.buscar_cliente = value;
      }
    }

  },

  methods: {

    // extrae el listado de ciudades
    ciudades: function () {

      capturador = this;

      axios({
        method: 'POST',
        url: '/rae/config/control/ListadoUbicaciones.php',
        data: {

          option: 'ciudad',

        }

      }).then(function (response) {
        // handle success
        capturador.ciudades_arr = response.data;

      }).catch(function (response) {

        console.log(response);

      });

    },

    // extrae el listado  de regiones
    regiones: function () {

      capturador = this;

      axios({
        method: 'POST',
        url: '/rae/config/control/ListadoUbicaciones.php',
        data: {

          option: 'region',

        }

      }).then(function (response) {
        // handle success
        capturador.regiones_arr = response.data;

      }).catch(function (response) {

        console.log(response);

      });

    },

    // extrae el listado de paises
    paises: function () {

      capturador = this;

      axios({
        method: 'POST',
        url: '/rae/config/control/ListadoUbicaciones.php',
        data: {

          option: 'pais',

        }

      }).then(function (response) {
        // handle success
        capturador.paises_arr = response.data;

      }).catch(function (response) {

        console.log(response);

      });

    },

    // extrae el listado de comunas
    comunas: function () {

      capturador = this;

      axios({
        method: 'POST',
        url: '/rae/config/control/ListadoUbicaciones.php',
        data: {

          option: 'comunas',

        }

      }).then(function (response) {
        // handle success
        capturador.comunas_arr = response.data;

      }).catch(function (response) {

        console.log(response);

      });


    },

    // extrae el listado de estado civil 
    EstadoCivil: function () {

      capturador = this;
      axios.get('/rae/config/control/ListadoEstadoCivil.php', {}).then(function (response) {
        capturador.Estado_civil = response.data;
      });

    },

    // extrae el listado de poderes
    Poderes: function () {

      capturador = this;
      axios.get('/rae/config/control/ListadoPoderes.php', {}).then(function (response) {
        capturador.Poderes_arr = response.data;
      });

    },

    // extrae la lista de tipos de empresa
    TiposEmpresa: function () {

      capturador = this;
      axios.get('/rae/config/control/TipoEmpresas.php', {}).then(function (response) {
        capturador.TipoEmpras_arr = response.data;
      });

    },


    /*
     *
     *   
     *  funciones crud grabar registro natural
     *
     *
     */


    // extrae le listado de clientes
    ListadoClientes: function () {

      capturador = this;

      axios.get('/rae/config/control/ListadoClientes.php', {}).then(function (response) {
        capturador.Listado_Clientes_Arr = response.data;
        capturador.Filter_Clientes_Arr = response.data;
      });

    },

    // funcion especial para subir archivos al servidor
    SubirArchivo: function () {


      const InstFormData = new FormData();
      InstFormData.append(
        'files', this.carnet_cliente
      );

      axios.post('/rae/config/control/RegistrarClienteNatural.php', InstFormData, {

        headers: {
          'content-type': 'multipart/form-data'
        }

      }).then(function (response) {

        // selecciona el siguiente tab y cambia el formulario
        app.tabs("Avales");

        console.log(response.data);

        // RESPUESTA DE LA VALIDACION 
        if (response.data == "true") {

          Swal.fire({
            icon: 'success',
            title: 'Datos grabados con exito',
            showConfirmButton: false,
            timer: 1000
          })

        } else {

          Swal.fire({
            icon: 'warning',
            title: 'error',
            showConfirmButton: false,
            timer: 1200
          })

        }

      }).catch(function (response) {
        console.log(response);
      });

    },

    // guarda los registros
    GrabarPersonaNatural: function () {

      axios({
        method: 'POST',
        url: '/rae/config/control/RegistrarClienteNatural.php',
        data: {

          str_rut: this.rut,
          str_apellido_materno: this.apellido_materno,
          str_apellido_paterno: this.apellido_paterno,
          str_nombres: this.nombres,
          int_sexo: this.sexo,
          int_estado_civil: this.estado_civil,
          str_carnet_cliente: this.carnet_cliente,
          str_direccion_particular: this.direccion_particular,
          int_pais: this.pais,
          int_region: this.regione,
          int_comuna: this.comuna,
          str_nacionalidad: this.nacionalidad,
          str_profecion: this.profecion,
          str_telefono_contacto: this.telefono_contacto,
          str_telefono_contacto_2: this.telefono_contacto_2,
          str_celular: this.celular,
          str_direccion_comercial: this.direccion_comercial,
          str_email: this.email,
          str_fecha_creacion: this.fecha_creacion,
          str_giro: this.giro,
          str_mayores_clientes: this.mayores_clientes,
          int_ejecutivo: this.ejecutivo,
          str_observaciones: this.observaciones,
          int_estado: this.estado,
          int_sucursal: this.sucursal,
          str_fecha_nacimiento: this.fecha_nacimiento,

        }

      }).then(function (response) {
        // handle success
        console.log(response.data);
        app.SubirArchivo();

      }).catch(function (response) {
        console.log(response);
      });

      this.rut = null;
      this.apellido_materno = null;
      this.apellido_paterno = null;
      this.nombres = null;
      this.sexo = null;
      this.carnet_client = null;
      this.estado_civil = null;
      this.str_direccion_particular = null;
      this.pais = null;
      this.regione = null;
      this.comuna = null;
      this.nacionalidad = null;
      this.profecion = null;
      this.telefono_contacto = null;
      this.telefono_contacto_2 = null;
      this.celular = null;
      this.direccion_comercial = null;
      this.email = null;
      this.fecha_creacion = null;
      this.giro = null;
      this.mayores_clientes = null;
      this.ejecutivo = null;
      this.observaciones = null;
      this.estado = null;
      this.sucursal = null;



    },

    // captura el valor de el archvo a subir 
    ExtractNombreFile: function () {

      this.carnet_cliente = document.getElementById("files").files[0];

    },

    /*
     *
     *   
     *  crud empresa 
     *
     *
     */

    GrabarClienteEmpresa: function () {

      axios({
        method: 'POST',
        url: '/rae/config/control/RegistrarClienteEmpresa.php',
        data: {

          rut_empresa: this.rut_empresa,
          razon_social_empresa: this.razon_social_empresa,
          tipo_empresa: this.tipo_empresa,
          fecha_informe_sociedad_empresa: this.fecha_informe_sociedad_empresa,
          rol_empresa: this.rol_empresa,
          direccion_comerial_empresa: this.direccion_comerial_empresa,
          region_empresa: this.region_empresa,
          pais_empresa: this.pais_empresa,
          comuna_empresa: this.comuna_empresa,
          email_empresa: this.email_empresa,
          telefono_contacto_empresa: this.telefono_contacto_empresa,
          telefono_contacto_2_empresa: this.telefono_contacto_2_empresa,
          celular_empresa: this.celular_empresa,
          mayores_clientes_empresa: this.mayores_clientes_empresa,
          observaciones_empresa: this.observaciones_empresa,

        }

      }).then(function (response) {
        // handle success
        console.log(response.data);
        app.SubirArchivoEmpresa();

      }).catch(function (response) {
        console.log(response);
      });

      this.rut_empresa = null;
      this.razon_social_empresa = null;
      this.tipo_empresa = null;
      this.fecha_informe_sociedad_empresa = null;
      this.rol_empresa = null;
      this.direccion_comerial_empresa = null;
      this.region_empresa = null;
      this.pais_empresa = null;
      this.comuna_empresa = null;
      this.email_empresa = null;
      this.telefono_contacto_empresa = null;
      this.telefono_contacto_2_empresa = null;
      this.celular_empresa = null;
      this.mayores_clientes_empresa = null;
      this.observaciones_empresa = null;


    },

    SubirArchivoEmpresa: function () {

      const InstFormData = new FormData();
      InstFormData.append(
        'files', this.rol_empresa
      );

      axios.post('/rae/config/control/RegistrarClienteEmpresa.php', InstFormData, {

        headers: {
          'content-type': 'multipart/form-data'
        }

      }).then(function (response) {

        // selecciona el siguiente tab y cambia el formulario
        app.tabs("Avales");

        // RESPUESTA DE LA VALIDACION 
        if (response.data == "true") {

          Swal.fire({
            icon: 'success',
            title: 'Datos grabados con exito',
            showConfirmButton: false,
            timer: 1100
          })

        } else {

          Swal.fire({
            icon: 'warning',
            title: 'error',
            showConfirmButton: false,
            timer: 1200
          })

        }

      }).catch(function (response) {
        console.log(response);
      });

    },

    ExtractNombreFileEmpresa: function () {

      this.rol_empresa = document.getElementById("files_rol").files[0];

    },


    /*
     *
     *   
     *  funciones de validacion
     *
     *
     */


    // funcion para elejir formulario
    FormularioEmpresa: function () {

      this.subtitle = "Empresa";

      if (this.formEmpresa == false) {
        this.formEmpresa = true;
      }

      this.formPersonaNatural = false;

      this.tipo_empresa = true;
      this.tipo_persona_natural = false;


      //habilita el representantes cuando se ingresa un cliente persona natural
      this.tabs_representante_natural = true;

    },

    FormularioPersonaNatural: function () {

      this.subtitle = "Persona Natural";

      if (this.formPersonaNatural == false) {
        this.formPersonaNatural = true;
      }

      this.tipo_empresa = false;
      this.tipo_persona_natural = true;

      this.formEmpresa = false;

      //deshabilita el representantes cuando se ingresa un cliente persona natural
      this.tabs_representante_natural = false;


    },

    /*
     *
     *   
     *  funciones de avales
     *
     *
     */
    // nuevo formulario dinamico avales
    newformAval: function () {

      this.avales.push({

        rut: '',
        apellido_paterno: '',
        apellido_materno: '',
        nombres: '',
        sexo: '',
        carnet_cliente: '',
        fecha_nacimiento: '',
        estado_civil: '',
        direccion_particular: '',
        pais: '',
        region: '',
        comuna: '',
        nacionalidad: '',
        profecion: '',
        telefono_contacto: '',
        telefono_contacto_2: '',
        celular: '',
        direccion_comercial: '',
        email: '',
        fecha_creacion: '',
        giro: '',
        mayores_clientes: '',
        ejecutivo: '',
        observaciones: '',
        estado: '',
        sucursal: '',
        razon_social: '',

      })
    },

    deleteformAval: function () {

      if (this.avales.length > 1) {
        this.avales.pop();
      }

    },


    /*
     *
     *   
     *  funciones de representantes
     *
     *
     */

    GrabarRepresentante: function () {

      alert("qweqwe");

      axios({
        method: 'POST',
        url: '/rae/config/control/RegistrarRepresentante.php',
        data: {

          rut_empresa: this.rut_empresa,
          razon_social_empresa: this.razon_social_empresa,
          tipo_empresa: this.tipo_empresa,
          fecha_informe_sociedad_empresa: this.fecha_informe_sociedad_empresa,
          rol_empresa: this.rol_empresa,
          direccion_comerial_empresa: this.direccion_comerial_empresa,
          region_empresa: this.region_empresa,
          pais_empresa: this.pais_empresa,
          comuna_empresa: this.comuna_empresa,
          email_empresa: this.email_empresa,
          telefono_contacto_empresa: this.telefono_contacto_empresa,
          telefono_contacto_2_empresa: this.telefono_contacto_2_empresa,
          celular_empresa: this.celular_empresa,
          mayores_clientes_empresa: this.mayores_clientes_empresa,
          observaciones_empresa: this.observaciones_empresa,

        }

      }).then(function (response) {
        // handle success
        console.log(response.data);
        app.SubirArchivoEmpresa();

      }).catch(function (response) {
        console.log(response);
      });

    },

    // nuevo formulario dinamico avales
    newformRepresentantes: function () {

      this.representantes.push({

        cliente_rut: '',
        rut_representante: '',
        sexo_representante: '',
        apellido_paterno_representante: '',
        apellido_materno_representante: '',
        nombres_representante: '',
        domicilio_particular_representante: '',
        domicilio_comverical_representante: '',
        ciudad_representante: '',
        nacionalidad_representante: '',
        telefono_contacto_representante: '',
        estado_civil_representante: '',
        profecion_representante: '',

      })
    },

    deleteformAval: function () {

      if (this.avales.length > 1) {
        this.avales.pop();
      }

    },

    // activa el tab y pone el titulo  y establece funcionalidad de botones segun la opcion seleccionada
    tabs: function (title) {

      this.title_tabs = title;

      if (title == 'Representantes') {

        this.tabs_representantes = true;
        this.tabs_avales = false;
        this.tabs_mandatarios = false;
        this.EmpresaPeronsa = true;
        this.tabs_ingresocliente = false;
        this.tabs_reseñas = false;
        this.option_agregar_quitar = true;

        // activa elos botones de agregar - quitar
        this.botones_representantes = true;
        this.botones_ingreso_cliente = false;
        this.botones_avales = false;
        this.botones_mandatarios = false;
        this.botones_reseñas = false;

        // reemplaza los botones persona natural o empresa segun menu 
        this.option_representante = false;
        this.option_avales = false;
        this.option_mandatarios = false;
        this.option_cliente = false;

      } else if (title == "Avales") {

        this.tabs_representantes = false;
        this.tabs_avales = true;
        this.tabs_mandatarios = false;
        this.EmpresaPeronsa = true;
        this.tabs_ingresocliente = false;
        this.tabs_reseñas = false;
        this.option_agregar_quitar = true;

        // activa elos botones de agregar - quitar
        this.botones_representantes = false;
        this.botones_ingreso_cliente = false;
        this.botones_avales = true;
        this.botones_mandatarios = false;
        this.botones_reseñas = false;

        // reemplaza los botones persona natural o empresa segun menu 
        this.option_representante = false;
        this.option_avales = true;
        this.option_mandatarios = false;
        this.option_cliente = false;

        // cambia el tab
        this.alter_tabs('avales');


      } else if (title == "Mandatarios") {

        this.tabs_representantes = false;
        this.tabs_avales = false;
        this.tabs_mandatarios = true;
        this.EmpresaPeronsa = false;
        this.tabs_ingresocliente = false;
        this.tabs_reseñas = false;
        this.option_agregar_quitar = true;

        // activa elos botones de agregar - quitar
        this.botones_representantes = false;
        this.botones_ingreso_cliente = false;
        this.botones_avales = false;
        this.botones_mandatarios = true;
        this.botones_reseñas = false;

        // reemplaza los botones persona natural o empresa segun menu 
        this.option_representante = false;
        this.option_avales = false;
        this.option_mandatarios = true;
        this.option_cliente = false;


      } else if (title == "Ingreso Cliente") {

        // ejecuta el formulario de  persona natural
        this.FormularioPersonaNatural();

        this.tabs_representantes = false;
        this.tabs_avales = false;
        this.tabs_mandatarios = false;
        this.tabs_ingresocliente = true;
        this.EmpresaPeronsa = true;
        this.tabs_reseñas = false;
        this.option_agregar_quitar = false;

        // reemplaza los botones persona natural o empresa segun menu 
        this.option_representante = false;
        this.option_avales = false;
        this.option_mandatarios = false;
        this.option_cliente = true;


      } else if (title == "Reseñas") {

        this.tabs_representantes = false;
        this.tabs_avales = false;
        this.tabs_mandatarios = false;
        this.tabs_ingresocliente = false;
        this.EmpresaPeronsa = false;
        this.tabs_reseñas = true;
        this.option_agregar_quitar = true;


      }

    },

    /*
     *
     *   
     *  funciones de avales
     *
     *
     */
    newformRepresentates: function () {

      this.representantes.push({

        rut: '',
        apellido_paterno: '',
        apellido_materno: '',
        nombres: '',
        sexo: '',
        estado_civil: '',
        nacionalidad: '',
        direccion_comercial: '',
        comuna: '',
        telefono_contacto: '',
        profecion: '',

      })
    },

    deleteformRepresentantes: function () {

      if (this.representantes.length > 1) {
        this.representantes.pop();
      }

    },

    /*
     *
     *   
     *  funciones crud de reseñas
     *
     *
     */
    grabarResena: function () {


      if (!this.reseña) {

        this.input_reseña = true;

      } else {


        axios({
          method: 'POST',
          url: '/rae/config/control/RegistrarReseña.php',
          data: {

            str_reseña: this.reseña,

          }

        }).then(function (response) {
          // handle success
          console.log(response.data);
          if (response.data == "true") {

            Swal.fire({
              icon: 'success',
              title: 'Datos grabados con exito',
              showConfirmButton: false,
              timer: 1000
            })

          } else {

            Swal.fire({
              position: 'top-end',
              icon: 'danger',
              title: 'error',
              showConfirmButton: false,
              timer: 1200
            })

          }

        }).catch(function (response) {
          console.log(response);
        });



      }

    },

    /*
     *
     *   
     *  funcion detalle cliente
     *
     *
     */
    Detallecliente: function (rut) {

      alert(rut);

      axios({
        method: 'POST',
        url: '/rae/config/control/DetalleCliente.php',
        data: {

          str_rut: rut,

        }

      }).then(function (response) {
        // handle success
        if(response.data){

          app.detalle_cliente_arr = response.data
          location.href="/rae/DetalleClientes";

        }

      }).catch(function (response) {
        console.log(response);
      });

    },


    /*
     *
     *   
     *  funciones de validacion
     *
     *
     */

    ValidacionRutEmpresa: function () {

      axios({
        method: 'POST',
        url: '/rae/config/control/ConsultaRutEmpresa.php',
        data: {

          str_rut: this.rut_empresa

        }

      }).then(function (response) {
        // handle success
        var sucursal = response.data;
        var nombre;

        sucursal.forEach(element => {

          nombre = element.Nombre;

          if (response.data != "") {

            Swal.fire({
              icon: 'warning',
              title: 'El cliente ya esta registrado en: ' + nombre,
              showConfirmButton: true,
            });

            // limpia el rut
            app.rut_empresa = null;

          }

        });

      }).catch(function (response) {
        console.log(response);
      });

    },

    ValidarRutCliente: function () {

      axios({
        method: 'POST',
        url: '/rae/config/control/ConsultaRut.php',
        data: {

          str_rut: this.rut

        }

      }).then(function (response) {

        // handle success
        console.log(response.data);

        var sucursal = response.data;
        var nombre;

        sucursal.forEach(element => {

          nombre = element.Nombre;

          if (response.data != "") {

            Swal.fire({
              icon: 'warning',
              title: 'El cliente ya esta registrado en: ' + nombre,
              showConfirmButton: true,
            });

            // limpia el rut
            app.rut = null;

          }

        });



      }).catch(function (response) {
        console.log(response);
      });

    },

    checkFormPersonaNatural: function () {

      this.errors = [];

      if (!this.rut) {

        this.input_rut = true;
        this.errors.push('debe completar el rut');


      }

      if (!this.nombres) {
        this.input_nombres = true;
        this.errors.push('debe completar el nombre');

      }

      if (!this.apellido_paterno) {

        this.input_apellido_paterno = true;
        this.errors.push('debe completar el apellido materno');


      }

      if (!this.apellido_materno) {

        this.input_apellido_materno = true;
        this.errors.push('debe completar el apellido materno');

      }

      if (!this.sexo) {

        this.input_sexo = true;
        this.errors.push('debe completar el sexo');

      }

      if (!this.carnet_cliente) {

        this.input_cliente = true;
        this.errors.push('debe completar el carnet cliente');

      }

      if (!this.fecha_nacimiento) {

        this.input_fecha_nacimiento = true;
        this.errors.push('debe completar fecha nacimiento');

      }

      if (!this.estado_civil) {

        this.input_estado_civil = true;
        this.errors.push('debe completar estado civil');

      }

      if (!this.direccion_particular) {

        this.input_direccion_particular = true;
        this.errors.push('debe completar direccion particular');

      }

      if (!this.pais) {

        this.input_pais = true;
        this.errors.push('debe completar pais');

      }

      if (!this.region) {

        this.input_region = true;
        this.errors.push('debe completar region');

      }

      if (!this.comuna) {

        this.input_comuna = true;
        this.errors.push('debe completar comuna');

      }

      if (!this.nacionalidad) {

        this.input_nacionalidad = true;
        this.errors.push('debe completar nacionalidad');

      }

      if (!this.profecion) {

        this.input_profecion = true;
        this.errors.push('debe completar profecion');

      }

      if (!this.telefono_contacto) {

        this.input_telefono_contacto = true;
        this.errors.push('debe completar telefono contacto');

      }

      if (!this.celular) {

        this.input_celular = true;
        this.errors.push('debe completar celular');


      }

      if (!this.direccion_comercial) {

        this.input_direccion_comercial = true;
        this.errors.push('debe completar direccion comercial');

      }

      if (!this.email) {

        this.input_email = true;
        this.errors.push('debe completar email');

      } else if (!this.validEmail(this.email)) {
        this.errors.push('Valid email required.');
        this.input_email = true;
      }

      if (!this.giro) {

        this.input_giro = true;
        this.errors.push('debe completar giro');

      }

      if (!this.mayores_clientes) {

        this.input_mayores_clientes = true;
        this.errors.push('debe completar mayores clientes');

      }

      if (!this.observaciones) {

        this.input_observaciones = true;
        this.errors.push('debe completar observaciones');

      }

      if (!this.errors.length) {

        this.GrabarPersonaNatural();

      }

    },

    checkFormEmpresa: function (e) {

      this.errors = [];


      if (!this.rut_empresa) {

        this.input_rut_empresa = true;
        this.errors.push('debe completar el rut');

      }

      if (!this.razon_social_empresa) {

        this.input_razon_social_empresa = true;
        this.errors.push('debe completar la razon social');

      }

      if (!this.tipo_empresa) {

        this.input_tipo_empresa = true;
        this.errors.push('debe completar el tipo empresa');

      }

      if (!this.fecha_informe_sociedad_empresa) {

        this.input_fecha_informe_sociedad_empresa = true;
        this.errors.push('debe completar la fecha de informe de sociedad');

      }

      if (!this.rol_empresa) {

        this.input_rol_empresa = true;
        this.errors.push('debe completar el rol');

      }

      if (!this.direccion_comerial_empresa) {

        this.input_direccion_comerial_empresa = true;
        this.errors.push('debe completar la direccion comerciaL');

      }

      if (!this.region_empresa) {

        this.input_region_empresa = true;
        this.errors.push('debe completar la region ');

      }

      if (!this.pais_empresa) {

        this.input_pais_empresa = true;
        this.errors.push('debe completar el pais');

      }

      if (!this.comuna_empresa) {

        this.input_comuna_empresa = true;
        this.errors.push('debe completar comuna empresa');

      }

      if (!this.email_empresa) {

        this.input_email_empresa = true;
        this.errors.push('debe completar el email');

      }

      if (!this.telefono_contacto_empresa) {

        this.input_telefono_contacto_empresa = true;
        this.errors.push('debe completar el telefono');

      }

      if (!this.mayores_clientes_empresa) {

        this.input_mayores_clientes_empresa = true;
        this.errors.push('debe completar el cliente');

      }

      if (!this.observaciones_empresa) {

        this.input_observaciones_empresa = true;
        this.errors.push('debe completar el empresa');

      }

      if (!this.errors.length) {

        this.GrabarClienteEmpresa();

      }


    },

    checkFormRepresentantes: function (e) {

      this.errors = [];

      if (!this.rut_representante) {

        this.input_rut_representante = true;
        this.errors.push('debe completar el rut');

      }

      if (!this.sexo_representante) {

        this.input_sexo_representante = true;
        this.errors.push('debe completar el sexo');

      }

      if (!this.apellido_paterno_representante) {

        this.input_apellido_paterno_representante = true;
        this.errors.push('debe completar el apellido paterno');

      }

      if (!this.apellido_materno_representante) {

        this.input_apellido_materno_representante = true;
        this.errors.push('debe completar apellido materno');

      }

      if (!this.nombres_representante) {

        this.input_nombres_representante = true;
        this.errors.push('debe completar la direccion comerciaL');

      }

      if (!this.domicilio_particular_representante) {

        this.input_domicilio_particular_representante = true;
        this.errors.push('debe completar el domicilio representante ');

      }

      if (!this.domicilio_comverical_representante) {

        this.input_domicilio_comverical_representante = true;
        this.errors.push('debe completar el domicilio comercial');

      }

      if (!this.ciudad_representante) {

        this.input_ciudad_representante = true;
        this.errors.push('debe completar la ciudad');

      }

      if (!this.nacionalidad_representante) {

        this.input_nacionalidad_representante = true;
        this.errors.push('debe completar la nacionalidad');

      }

      if (!this.telefono_contacto_representante) {

        this.input_telefono_contacto_representante = true;
        this.errors.push('debe completar el telefono');

      }

      if (!this.estado_civil_representante) {

        this.input_estado_civil_representante = true;
        this.errors.push('debe completar el estado civil');

      }

      if (!this.profecion_representante) {

        this.input_profecion_representante = true;
        this.errors.push('debe completar laprofecion');

      }

      if (!this.errors.length) {

        this.GrabarRepresentante();

      }




    },

    //validacion de correo
    validEmail: function (email) {
      var re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      return re.test(email);
    },

    // funcion que permite cambiar el tabs a travez de javascript
    alter_tabs: function (id) {

      // remueve la calse anterior 
      tab = document.getElementById('ingresocliente');
      tab.classList.remove('active');
      // agrega clases
      tab = document.getElementById(id);
      tab.classList.add('show');
      tab.classList.add('active');
    }



  }

})