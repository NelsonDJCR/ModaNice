<?php
include "../../controller/connection.php";

$exe = $con->query("SELECT * FROM products");
while ($row = $exe->fetch_assoc()) {
    $data = $row['id']."||".$row['name']."||".$row['price']."||".$row['size'];
?>
    <tr>
        <td><?php echo $row['id'] ?></td>
        <td><?php echo $row['name'] ?></td>
        <td><?php echo $row['price'] ?></td>
        <td><?php echo $row['size'] ?></td>
        <td><a onclick="editProduct('<?php echo $data ?>');">Editar</a></td>
        <td><a onclick="deleteProduct('<?php echo $data ?>');">Eliminar</a></td>
        
    </tr>
<?php } ?>

<!-- Button trigger modal -->

