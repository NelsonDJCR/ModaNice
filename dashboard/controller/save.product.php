<link rel="stylesheet" href="../../plugins/sweetAlert/sweetAlert.css">
<script src="../../plugins/sweetAlert/sweetAlert.js"></script>
<style>
    * {
        font-family: Arial, Helvetica, sans-serif;
    }
    body{
        background-image: url("https://cdn.clinicabaviera.com/blog/wp-content/uploads/2017/11/iStock-678372080.jpg");
        background-size: cover;
    }
</style>

<body>


    <?php
    include "../../controller/connection.php";
    $name = $_POST['name'];
    $price = $_POST['price'];
    $size = $_POST['size'];
    $img = addslashes(file_get_contents($_FILES['img']['tmp_name']));
    $exe = $con->query("INSERT INTO products (name, price, size, img) VALUES ('$name','$price','$size','$img')");
    if ($exe) {
        echo "<script>
    Swal.fire({
        icon: 'success',
        title: 'Datos Guardados',
        text: 'El producto ha sido cuardado',
    }).then(function(){ window.location = '../'; });
</script>";
    }
    ?>
</body>