$(document).ready(function () {
    $("#btn_productx").click(function () {
       var data =$("#data_product").serialize();
       alert(data);
       return false;
    });
});