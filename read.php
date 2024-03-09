<?php

include "config.php";

$sql="select * from `user`";
$result=$conn->query($sql);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
    <h2> users page </h2>
    <table class="table">
<thead>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>password</th>
        <th>action</th>
    </tr>
</thead>
<?Php
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
    ?>
       <tbody>
        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['name']?></td>
            <td><?php echo $row['email']?></td>
            <td><?php echo $row['password']?></td>
            <td><a class="btn btn-info" href=" update.php?id=<?php echo $row['id']?>"> edit </a> </td>
            <td><a class="btn btn-danger" href=" delete.php?id=<?php echo $row['id']?>"> delete </a> </td>
        </tr>
       </tbody>



    <?php


    }
}

?>

    </table>
</body>
</html>