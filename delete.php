<?php

include "config.php";
if(isset($_GET['id'])){
    $user_id=$_GET['id'];
     $sql="delete from `user` where `id`='$user_id'";

     $result=$conn->query($sql);

     if($result==true){
        ?>
        <script>
        alert(" deleted successfully");
        </script>
    <?php }
     else{
        echo" failed";
     }
}











?>