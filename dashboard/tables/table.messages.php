<?php
include "../../controller/connection.php";

$exe = $con->query("SELECT * FROM messages");
while ($row = $exe->fetch_assoc()) {
    $data = $row['id'];
?>
    <tr>
        <td><?php echo $row['id'] ?></td>
        <td><?php echo $row['name'] ?></td>
        <td><?php echo $row['email'] ?></td>
        <td><?php echo $row['phone'] ?></td>
        <td><?php echo $row['affair'] ?></td>
        <td><?php echo $row['message'] ?></td>
        <td><a onclick="deleteMessage('<?php echo $data ?>');">Eliminar</a></td>
        
    </tr>
<?php } ?>

<!-- Button trigger modal -->