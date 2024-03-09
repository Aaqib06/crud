<?php
include "config.php";
if(isset($_POST['update'])){
    $user_id=$_POST['user_id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql="update `user` set `name`='$name',`email`='$email',`password`='$password' where `id`='$user_id'";

    $result= $conn->query($sql);
    if  ($result==true){
        echo" data updated successfully";
    }else{
        echo"updated failed";
    }
}
if(isset($_GET['id'])){
    $user_id=$_GET['id'];

    $sql="select * from `user` where `id`= '$user_id'";

    $result= $conn->query($sql);

    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
            $name=$row['name'];
            $email=$row['email'];
            $password=$row['password'];
            $id=$row['id'];
        }
        ?>
        
  <form action="" method="POST">
  name:<br>
  <input type="text"name="name"  value="<?php echo $name ; ?>"><br>
  <input type="hidden"name="user_id" value="<?php echo $id ;?>">
  email:<br>
  <input type="email"name="email"value="<?php  echo $email ; ?>"><br>
  password:<br>
  <input type="password"name="password"value="<?php echo  $password;  ?>" ><br><br>
  <input type="submit"name="update"value="update">


</form>


<?php
    }
}

?>