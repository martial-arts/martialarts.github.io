<?php

$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'mambers');

extract($_POST);
if(isset($_POST['submit'])){



    $q = " insert into contact ( email,subject,comments) values ('$email' , '$subject' , '$comments')";

    $query = mysqli_query($con,$q);
    header('location:contact.php');






}


 
?>