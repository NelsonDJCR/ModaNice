$(document).ready(function () {
  $("#btn_login").click(function () {
    var data = $("#data_login").serialize();
    $.ajax({
      type: "post",
      url: "controller/login.php",
      data: data,
      success: function (r) {
        if (r == 1) {
            window.location = "customer/";
        }
        else if (r==2) {
          window.location = "dashboard/";
        } 
        
        else {
            Swal.fire(
                'Datos incorrectos',
                'Verifique correo y contraseña',
                'error'
              )
        }
      },
    });
    return false;
  });
});
