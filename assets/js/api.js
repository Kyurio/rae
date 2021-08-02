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
          this.buscar_cliente = value
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
      ListadoClientes: function () {
  
        capturador = this;
  
        axios.get('/rae/config/control/ListadoClientes.php', {}).then(function (response) {
          capturador.Listado_Clientes_Arr = response.data;
          capturador.Filter_Clientes_Arr = response.data;
        });
  
      },
  
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
            str_carnet_cliente: this.carnet_client,
            int_estado_civil: this.estado_civil,
            str_direccion_particular: this.str_direccion_particular,
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
  
          }
  
        }).then(function (response) {
          // handle success
          console.log(response.data);
          if (response.data == "true") {
  
            Swal.fire({
              icon: 'success',
              title: 'Datos grabados con exito',
              showConfirmButton: false,
              timer: 1200
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
  
  
      },
  
      ExtractNombreFile: function () {
  
        var file = document.getElementById("CarnetCliente").value;
        this.carnet_client = file;
  
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
  
      // activa el tab y pone el titulo
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
          this.option_representante = true;
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
  
          this.input_reseña = false;
          this.reseña = "";
  
        }
  
      },
  
  
      /*
       *
       *   
       *  funciones de validacion
       *
       *
       */
      // validacion de formulario
      checkFormPersonaNatural: function () {
  
        this.errors = [];
  
        if (!this.rut) {
  
          this.input_rut = true;
  
        }
  
        if (!this.nombres) {
          this.input_nombres = true;
        }
  
        if (!this.apellido_paterno) {
  
          this.input_apellido_paterno = true;
  
        }
  
        if (!this.apellido_materno) {
          this.input_apellido_materno = true;
        }
  
        if (!this.sexo) {
          this.input_sexo = true;
        }
  
        if (!this.carnet_cliente) {
          this.input_cliente = true;
        }
  
        if (!this.fecha_nacimiento) {
          this.input_fecha_nacimiento = true;
        }
  
        if (!this.estado_civil) {
          this.input_estado_civil = true;
        }
  
        if (!this.direccion_particular) {
          this.input_direccion_particular = true;
        }
  
        if (!this.pais) {
          this.input_pais = true;
        }
  
        if (!this.region) {
          this.input_region = true;
        }
  
        if (!this.comuna) {
          this.input_comuna = true;
        }
  
        if (!this.nacionalidad) {
          this.input_nacionalidad = true;
        }
  
        if (!this.profecion) {
          this.input_profecion = true;
        }
  
        if (!this.telefono_contacto) {
          this.input_telefono_contacto = true;
        }
  
        if (!this.telefono_contacto_2) {
          this.input_telefono_contacto_2 = true;
        }
  
        if (!this.celular) {
          this.input_celular = true;
        }
  
        if (!this.direccion_comercial) {
          this.input_direccion_comercial = true;
        }
  
        if (!this.email) {
          this.input_email = true;
        } else if (!this.validEmail(this.email)) {
          this.errors.push('Valid email required.');
          this.input_email = true;
        }
  
        if (!this.giro) {
          this.input_giro = true;
        }
  
        if (!this.mayores_clientes) {
          this.input_mayores_clientes = true;
        }
  
        if (!this.observaciones) {
          this.input_observaciones = true;
        }
  
        if (!this.errors.length) {
  
          this.GrabarPersonaNatural();
          //return true;
        }
  
  
      },
  
      checkFormEmpresa: function () {
  
        this.errors = [];
  
        if (!this.input_fecha_informe_sociedad || !this.input_rol || !this.input_tipo_empresa || !this.input_razon_social || !this.rut || !this.apellido_paterno || !this.apellido_materno || !this.nombres || !this.sexo ||
          !this.carnet_client || !this.fecha_nacimient || !this.estado_civil || !this.direccion_particular ||
          !this.pais || !this.region || !this.comuna || this.input_nacionalidad || !this.nacionalidad ||
          !this.profecion || !this.profecion || !this.telefono_contacto || !this.celular || !this.direccion_comercial ||
          !this.email || !this.giro || !this.mayores_clientes || !this.observaciones
        ) {
          this.errors.push('debe completar todos los campos');
        }
  
        if (!this.input_fecha_informe_sociedad) {
          this.input_fecha_informe_sociedad = true;
        }
  
        if (!this.input_rol) {
          this.input_rol = true;
        }
  
        if (!this.input_razon_social) {
          this.input_razon_social = true;
        }
  
        if (!this.input_tipo_empresa) {
          this.input_tipo_empresa = true;
        }
  
        if (!this.rut) {
          this.input_rut = true;
        }
  
        if (!this.nombres) {
          this.input_nombres = true;
        }
  
        if (!this.apellido_paterno) {
          this.input_apellido_paterno = true;
        }
  
        if (!this.apellido_materno) {
          this.input_apellido_materno = true;
        }
  
        if (!this.sexo) {
          this.input_sexo = true;
        }
  
        if (!this.carnet_cliente) {
          this.input_cliente = true;
        }
  
        if (!this.fecha_nacimiento) {
          this.input_fecha_nacimiento = true;
        }
  
        if (!this.estado_civil) {
          this.input_estado_civil = true;
        }
  
        if (!this.direccion_particular) {
          this.input_direccion_particular = true;
        }
  
        if (!this.pais) {
          this.input_pais = true;
        }
  
        if (!this.region) {
          this.input_region = true;
        }
  
        if (!this.comuna) {
          this.input_comuna = true;
        }
  
        if (!this.nacionalidad) {
          this.input_nacionalidad = true;
        }
  
        if (!this.profecion) {
          this.input_profecion = true;
        }
  
        if (!this.telefono_contacto) {
          this.input_telefono_contacto = true;
        }
  
        if (!this.telefono_contacto_2) {
          this.input_telefono_contacto_2 = true;
        }
  
        if (!this.celular) {
          this.input_celular = true;
        }
  
        if (!this.direccion_comercial) {
          this.input_direccion_comercial = true;
        }
  
        if (!this.email) {
          this.input_email = true;
        } else if (!this.validEmail(this.email)) {
          this.errors.push('Valid email required.');
          this.input_email = true;
        }
  
        if (!this.giro) {
          this.input_giro = true;
        }
  
        if (!this.mayores_clientes) {
          this.input_mayores_clientes = true;
        }
  
        if (!this.observaciones) {
          this.input_observaciones = true;
        }
  
        if (!this.errors.length) {
  
          return true;
        }
  
      },
  
      //validacion de correo
      validEmail: function (email) {
        var re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
      },
  
      classObjectError: function () {
  
        this.danger = 'text-danger'
      },
  
  
    }
  
  })