$(document).ready(function(){

    $.validator.setDefaults({
        submitHandler: function () {
          alert( "Form successful submitted!" );
        }
      });
      //***recibe 3 parametros
      //**1)Nombre para ser llamado
      //**2)function
      //**3)msj  */
      jQuery.validator.addMethod('user_exist',
        function(value, element){
          let funcion = "user_warn"
        }
      ,"*User already exists. Please put another");

      jQuery.validator.addMethod('letters',
        function(value){
          return /^[A-Za-z]+$/.test(value);    
        }
      ,"*Solo letras");

      $('#form_register').validate({
        rules: {
          username:{
            required: true,
            minlength: 8,
            maxlength: 20,
            user_exist: true
          },
          pass:{
            required: true,
            minlength: 8,
            maxlength: 20
          },
          pass_repeat:{
            required: true,
            equalTo: "#pass"  //compara dos imputs, ya que tiene que ser = que el pass
          },
          nombre:{
            required: true,
            letters: true,
          },
          apellido:{
            required: true,
            letters: true,
          },
          dni:{
            required: true,
            digits: true,
            minlength: 8,
            maxlength: 8
          },
          email: {
            required: true,
            email: true,
          },
          terms: {
            required: true
          },
          telefono:{
            required: true,
            digits: true,
            minlength: 8,
            maxlength: 11
          },
        },
        messages: {
          username: {
            required: "El campo es obligatorio",
            minlength: "El username debe ingresar mas de 8 caracteres",
            maxlength:  "Menos de 22 caracteres"
          },
          pass: {
            required: "El campo es obligatorio",
           
          },
          pass_repeat: {
            required: "El campo es obligatorio",
            equalTo: "El password no es igual al ingresado"
          },
          nombre: {
            required: "Please enter tu nombre",
          },
          apellido: {
            required: "Please enter a apellido address",
          },
          dni: {
            required: "Es obligatorio",
            minlength: "Es de 8 caracteres",
            maxlength:  "Es de 8 caracteres",
            digits: "SOlo esta compuesto por numeros"
          },
          email: {
            required: "El mail es obligatorio",
            email: "No es formato email"
          },
          telefono: {
            required: "El telefono es obligatorio",
            minlength: "Es de 8 caracteres",
            maxlength:  "Es de 12 caracteres",
            digits: "El telefono solo se usan nros"
          },
          
          terms: "Please accept our terms"
        },
        errorElement: 'span',
        errorPlacement: function (error, element) {
          error.addClass('invalid-feedback');
          element.closest('.form-group').append(error);
        },
        highlight: function (element, errorClass, validClass) {
          $(element).addClass('is-invalid');
          $(element).removeClass('is-valid');
        },
        unhighlight: function (element, errorClass, validClass) {
          $(element).removeClass('is-invalid');
          $(element).addClass('is-valid');
        }
      });

})