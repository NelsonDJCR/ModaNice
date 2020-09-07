$(document).ready(function () {
  $("#btn_updateUser").click(function () {
    var data = $("#data_updateUser").serialize();
    //    alert(data);
    $.ajax({
      type: "post",
      url: "controller/user.update.php",
      data: data,
      success: function (r) {
        if (r == 1) {
          Swal.fire(
            "Perfecto",
            "Los datos han sido actulaizados",
            "success"
          ).then(function () {
            window.location = "index.php";
          });
        } else {
          Swal.fire("Error", "Error del servidor", "error");
        }
      },
    });
    return false;
  });
});
