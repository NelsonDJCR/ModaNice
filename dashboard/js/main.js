$(document).ready(function () {
  $("#table_products").load("tables/table.products.php");
  $("#table_users").load("tables/table.users.php");
  $("#table_orders").load("tables/table.orders.php");
  $("#table_messages").load("tables/table.messages.php");
  $(".xxxx").click(function () {
    $("#modalxx").css("display", "none");
    $("#modalxxx").css("display", "none");
    $("#modalxxxx").css("display", "none");
    console.log("Click en X");
  });
  $("#btn_updateProduct").click(function () {
    var data = $("#form_updateProduct").serialize();
    $.ajax({
      type: "post",
      url: "controller/product.update.php",
      data: data,
      success: function (r) {
        $("#table_products").load("tables/table.products.php");

        if (r == 1) {
          Swal.fire({
            icon: "success",
            title: "Perfecto",
            text: "Los datos han sido actualizado",
          });
        } else {
          Swal.fire({
            icon: "error",
            title: "Error",
            text: "Error del servidor",
          });
        }
      },
    });
    return false;
  });
//   EDITAR USER TOP
  $("#btn_updateUser").click(function () {
    var data = $("#form_updateUser").serialize();

    $.ajax({
      type: "post",
      url: "controller/user.update.php",
      data: data,
      success: function (r) {

        $("#table_users").load("tables/table.users.php");

        if (r == 1) {
          Swal.fire({
            icon: "success",
            title: "Perfecto",
            text: "Los datos han sido actualizado",
          });
        } else {
          Swal.fire({
            icon: "error",
            title: "Error",
            text: "Error del servidor",
          });
        }
      },
    });
    return false;
  });
  // EDITAR USER END
  //   EDITAR ORDER TOP
  $("#btn_updateOrder").click(function () {
    var data = $("#form_updateOrder").serialize();

    $.ajax({
      type: "post",
      url: "controller/order.update.php",
      data: data,
      success: function (r) {
        $("#table_orders").load("tables/table.orders.php");

        if (r == 1) {
          Swal.fire({
            icon: "success",
            title: "Perfecto",
            text: "Los datos han sido actualizado",
          });
        } else {
          Swal.fire({
            icon: "error",
            title: "Error",
            text: "Error del servidor",
          });
        }
      },
    });
    return false;
  });
  // EDITAR ORDER END
  
});








function editProduct(data) {
  $("#modalxx").css("display", "block");
  d = data.split("||");
  $("#idModal").val(d[0]);
  $("#nameModal").val(d[1]);
  $("#priceModal").val(d[2]);
  $("#sizeModal").val(d[3]);
}
function editUser(data) {
  $("#modalxxx").css("display", "block");
  d = data.split("||");
  $("#id_userModal").val(d[0]);
  $("#name_userModal").val(d[1]);
  $("#email_userModal").val(d[2]);
  $("#phone_userModal").val(d[3]);
  $("#address_userModal").val(d[4]);
}
function editOrder(data) {
  $("#modalxxxx").css("display", "block");
  d = data.split("||");
  $("#id_orderModal").val(d[0]);
  $("#state_orderModal").val(d[1]);
}






function deleteProduct(data) {
  d = data.split("||");
  var id = "id=" + d[0];
  Swal.fire({
    title: "Eliminar Registro",
    text: "Esta acción no se puede deshacer",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Si, eliminar",
    cancelButtonText: "Cancelar",
  }).then((result) => {
    if (result.value) {
      $.ajax({
        type: "post",
        url: "controller/product.delete.php",
        data: id,
        success: function (r) {
          if (r == 1) {
            $("#table_products").load("tables/table.products.php");
            Swal.fire({
              icon: "success",
              title: "Perfecto",
              text: "El producto ha sido eliminado",
            });
          } else {
            Swal.fire({
              icon: "error",
              title: "Error",
              text: "Fallo del servidor",
            });
          }
        },
      });
      return false;
    }
  });
}




// DELETE USER

function deleteUser(data) {
  d = data.split("||");
  var id = "id=" + d[0];
  Swal.fire({
    title: "Eliminar Registro",
    text: "Esta acción no se puede deshacer",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Si, eliminar",
    cancelButtonText: "Cancelar",
  }).then((result) => {
    if (result.value) {
      $.ajax({
        type: "post",
        url: "controller/user.delete.php",
        data: id,
        success: function (r) {
          if (r == 1) {
            $("#table_users").load("tables/table.users.php");
            Swal.fire({
              icon: "success",
              title: "Perfecto",
              text: "El usuario ha sido eliminado",
            });
          } else {
            Swal.fire({
              icon: "error",
              title: "Error",
              text: "Fallo del servidor",
            });
          }
        },
      });
      return false;
    }
  });
}




function deleteOrder(data) {
    d = data.split("||");
    var id = "id=" + d[0];
    Swal.fire({
      title: "Eliminar Registro",
      text: "Esta acción no se puede deshacer",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Si, eliminar",
      cancelButtonText: "Cancelar",
    }).then((result) => {
      if (result.value) {
        $.ajax({
          type: "post",
          url: "controller/order.delete.php",
          data: id,
          success: function (r) {
            if (r == 1) {
              $("#table_orders").load("tables/table.orders.php");
              Swal.fire({
                icon: "success",
                title: "Perfecto",
                text: "El usuario ha sido eliminado",
              });
            } else {
              Swal.fire({
                icon: "error",
                title: "Error",
                text: "Fallo del servidor",
              });
            }
          },
        });
        return false;
      }
    });
  }
  
function deleteMessage(data) {
    d = data.split("||");
    var id = "id=" + d[0];
    Swal.fire({
      title: "Eliminar Registro",
      text: "Esta acción no se puede deshacer",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Si, eliminar",
      cancelButtonText: "Cancelar",
    }).then((result) => {
      if (result.value) {
        $.ajax({
          type: "post",
          url: "controller/message.delete.php",
          data: id,
          success: function (r) {
            if (r == 1) {
                $("#table_messages").load("tables/table.messages.php");
              Swal.fire({
                icon: "success",
                title: "Perfecto",
                text: "El producto ha sido eliminado",
              });
            } else {
              Swal.fire({
                icon: "error",
                title: "Error",
                text: "Fallo del servidor",
              });
            }
          },
        });
        return false;
      }
    });
  }