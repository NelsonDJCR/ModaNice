<?php
include "../../controller/connection.php";

$exe = $con->query("SELECT * FROM users");
while ($row = $exe->fetch_assoc()) {
    $data = $row['id']."||".$row['name']."||".$row['email']."||".$row['phone']."||".$row['address'];
?>
    <tr>
        <td><?php echo $row['id'] ?></td>
        <td><?php echo $row['name'] ?></td>
        <td><?php echo $row['email'] ?></td>
        <td><?php echo $row['phone'] ?></td>
        <td><?php echo $row['address'] ?></td>
        <td><a onclick="editUser('<?php echo $data ?>');">Editar</a></td>
        <td><a onclick="deleteUser('<?php echo $data ?>');">Eliminar</a></td>
        
    </tr>
<?php } ?>

<!-- Button trigger modal -->
