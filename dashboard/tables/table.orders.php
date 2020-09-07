<?php
include "../../controller/connection.php";

$exe = $con->query("SELECT * FROM orders");
while ($row = $exe->fetch_assoc()) {
    $data = $row['id']."||".$row['state'];
?>
    <tr>
        <td><?php echo $row['id'] ?></td>
        <td><?php echo $row['user_id'] ?></td>
        <td><?php echo $row['product_id'] ?></td>
        <td>$ <?php echo number_format($row['product_price']) ?></td>
        <td><?php echo $row['state'] ?></td>
        <td><a onclick="editOrder('<?php echo $data ?>');">Editar</a></td>
        <td><a onclick="deleteOrder('<?php echo $data ?>');">Eliminar</a></td>
        
    </tr>
<?php } ?>

<!-- Button trigger modal -->