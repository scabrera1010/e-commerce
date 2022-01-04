$(document).ready(function(){

    var funcion;
    verificar_sesion();

    function verificar_sesion(){
        funcion = 'verificar_sesion';
        $.post('../Controllers/UsuarioController.php',{funcion},(response)=> {
            if(response != ''){
                location.href = "../index.php";
            }
        })
    }



    $('#form-login').submit(e=>{ //callback
        e.preventDefault();//es para que no se recargue la pagina

        funcion = 'login'
        let user = $('#user').val();
        let pass = $('#pass').val();

        $.post('../Controllers/UsuarioController.php',{user,pass,funcion},(response)=>{
            if(response =='logueado'){
                toastr.success('*Logueado');
                location.href = "../index.php";
            } else {
                toastr.error('*User o pass error');
            }
        })
    })
    









})