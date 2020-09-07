$(document).ready(function () {
    $("#btn_register").click(function () {
        var data = $("#data_register").serialize();
        $.ajax({
            type: "post",
            url:  "controller/save.user.php",
            data: data,
            success:function (r) {
                
                if (r==1) {
                    Swal.fire(
                        'Registro exitoso!',
                        'Ahora puede iniciar Sesión',
                        'success'
                      ).then(function(){ window.location = "login.php"; });
                }else{
                    Swal.fire(
                        'Error',
                        'Fallo del servidor',
                        'error'
                      )
                }
            }
        });
        return false;
    });
});