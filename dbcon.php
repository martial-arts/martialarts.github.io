<?php
$servername = "localhost";
$user = "root";
$password = "";
$db = "signup";

$con = mysqli_connect($servername, $user, $password, $db);

if($con){
    ?>
    <script>
    alert("Connection Successful");
    </script>
    <?php
}else{
    ?>
    <script>
    alert("Connection not Successful");
    </script>
    <?php

}




?>