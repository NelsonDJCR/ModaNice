$(document).ready(function () {
  $("#btn_buy").click(function () {
    var data = $("#form_buy").serialize();
    $.ajax({
      type: "post",
      url: "controller/buy.php",
      data: data,
      success: function (r) {
        if (r == 1) {
          Swal.fire({
            icon: "success",
            title: "Perfecto",
            text:
              "Tu pedido ha sido realizado, verifica la información en tu perfil",
          }).then(function () {
            window.location = "customer/";
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
