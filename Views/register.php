<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../Util/css/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../Util/css/adminlte.min.css">
  <link rel="stylesheet" href="../Util/css/toastr.min.css">
</head>

<!-- Modal -->
<div class="modal fade" id="terminos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="card card-success">
        <div class="card-header">
          <h5 class="card-title">Terminos y condiciones</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="card-body">
          *Utilizaremos su identidad para sobornar a personas
          *Utilizaremos su identidad para sobornar a personas
          *Utilizaremos su identidad para sobornar a personas
          *Utilizaremos su identidad para sobornar a personas
          *Utilizaremos su identidad para sobornar a personas
          *Utilizaremos su identidad para sobornar a personas
          *Utilizaremos su identidad para sobornar a personas
          *Utilizaremos su identidad para sobornar a personas
           *Utilizaremos su identidad para sobornar a personas
          *Utilizaremos su identidad para sobornar a personas
          *Utilizaremos su identidad para sobornar a personas
          *Utilizaremos su identidad para sobornar a personas
        
        </div>
        <div class="card-footer">
          <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>

<body class="hold-transition login-page">
<div class="mt-5">
  <div class="login-logo">
      <img src="../Util/img/logo.png" class="profile-user-img img-fluid img-circle"></img>
    <a href="../index.php"><b>Aya</b>Soft</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Registrarse</p>
        <form id="form_register">
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control" id="username" placeholder="Enter user">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="pass">Password</label>
                <input type="password" name="pass" class="form-control" id="pass" placeholder="Enter user">
              </div>
              <div class="form-group">
                <label for="nombre">Nombres</label>
                <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Enter nombre">
              </div>
              <div class="form-group">
                <label for="dni">DNI</label>
                <input type="text" name="dni" class="form-control" id="dni" placeholder="Enter dni">
              </div>
              <div class="form-group">
                <label for="telefono">Telefono</label>
                <input type="text" name="telefono" class="form-control" id="telefono" placeholder="Enter telefono">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="pass_repeat">Repeat Password</label>
                <input type="password" name="pass_repeat" class="form-control" id="pass_repeat" placeholder="Enter password">
              </div>
              <div class="form-group">
                <label for="apellido">Apellido</label>
                <input type="text" name="apellido" class="form-control" id="apellido" placeholder="Enter apellido">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" class="form-control" id="email" placeholder="Enter email">
              </div>
            </div>
              <div class="col-sm-12">
                <div class="form-group mb-0">
                  <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="terms" class="custom-control-input" id="terms">
                      <label class="custom-control-label" for="exampleCheck1">I agree to the <a href="#" data-toggle="modal" data-target="#terminos">terms of service</a>.</label>
                  </div>
                </div>    
              </div>
            </div>
            
            <div class="card-footer text-center">
                <button type="submit" class="btn btn-lg bg-gradient-primary">Registrarme</button>
            </div>
        </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
<!-- jQuery -->
<script src="../Util/js/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../Util/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../Util/js/adminlte.min.js"></script>
<script src="../Util/js/toastr.min.js"></script>
<script src="../Util/js/jquery.validate.min.js"></script>
<script src="../Util/js/additional-methods.min.js"></script>
</body>
</html>

<!-- Page specific script -->
<script>
$(function () {
  $.validator.setDefaults({
    submitHandler: function () {
      alert( "Form successful submitted!" );
    }
  });
  $('#form_register').validate({
    rules: {
      username:{
        required: true,
        minlength: 8,
        maxlength: 20
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
      },
      apellido:{
        required: true,
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
});
</script>
