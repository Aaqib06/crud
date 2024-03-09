<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create page</title>
</head>
<body>
    <form action="" method="POST">
        name:<br>
        <input type="text"name="name" value="name" required><br>
        email:<br>
        <input type="email"name="email" value="email" required><br>
        password:<br>
        <input type="password"name="password" value="password" required><br><br>
        <input type="submit"name="submit"value="submit">


    </form>
</body>
</html>
<?php
include "config.php";
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql="insert into `user`(`name`,`email`,`password`) values('$name','$email','$password')";
    $result=$conn->query($sql);
    if($result==true){
        echo" data inserted into data ";
    }else{
        echo" error";
    }
}


?>