$(document).ready(function () {
  $("#btn_updateSecret").click(function () {
    var data = $("#data_updateSecret").serialize();
    $.ajax({
      type: "post",
      url: "controller/user.update.secret.php",
      data: data,
      success: function (r) {
        if (r == 1) {
          Swal.fire({
            icon: "success",
            title: "Perfecto",
            text: "La clave ha sido actualizada",
          }).then(function () {
            window.location = "index.php";
          });
        } else if (r == 2) {
          Swal.fire({
            icon: "error",
            title: "Error",
            text: "La clave es incorrecta",
          });
        } else if (r == 3) {
          Swal.fire({
            icon: "error",
            title: "Error",
            text: "La nueva clave no coincide",
          });
        } else if (r == 4) {
          Swal.fire({
            icon: "error",
            title: "Campos vacios",
            text: "Complete todos los campos para continuar",
          });
        } else {
          Swal.fire({
            icon: "error",
            title: "Error",
            text: "Error en el servidor",
          });
        }
      },
    });
    return false;
  });
});
