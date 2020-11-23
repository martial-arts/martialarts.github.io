  <!DOCTYPE html>
<html>
    <head>
        <title>Sign up</title>



      
    <?php include 'style/links.php';    
   ?>

</head>
<body>




<?php

include 'dbcon.php';

if(isset($_POST['submit']))
{
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);

    $pass = password_hash($password, PASSWORD_BCRYPT);
    $cpass = password_hash($cpassword, PASSWORD_BCRYPT);

    $emailquery = " select * from registration where email='$email' ";
    $query = mysqli_query($con,$emailquery);
    
    $emailcount = mysqli_num_rows($query);

    if($emailcount>0){
        echo "email already exist";
    }else{
        if($password === $cpassword){
            $insertquery =  "insert into registration( username, email, mobile, Password, cpassword) values('$username','$email','$mobile','$pass','$cpass')";
            $iquery = mysqli_query($con, $insertquery);
            if($iquery){
                ?>
                <script>
                alert("inserted Successful");
                </script>
                <?php
            }else{
                ?>
                <script>
                alert("insert not Successful");
                </script>
                <?php
            }
        }else{
            echo "password are not matching";
        }
    }

}




?>


    <div class="card bg-light">
        <article class="card-body mx-auto" style="max-width: 400px;">
        <h4 class="card-title mt-3 text-center">Create Account</h4>       
        <form action="" method="POST">
    <div class="from-group input-group">
        <div class="input-group-pretend">
            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
</div>
<input name="username" class="form-control" placeholder="full name" type="text" required>
</div>
<div class="form-group input-group">
    <div class="inpput-group-pretend">
        <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
</div>
<input name="email" class="form-control" placeholder="Email address" type="email" required>
</div>
<div class="from-group input-group">
        <div class="input-group-pretend">
        <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
</div>
<input name="mobile" class="form-control" placeholder="phone number" type="number" required>
</div>
<div class="form-group input-group">
    <div class="inpput-group-pretend">
        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
</div>
<input class="form-control" placeholder="Create password" type="password" name="password" value="" required>
</div>
<div class="form-group input-group">
    <div class="inpput-group-pretend">
        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
</div>
<input class="form-control" placeholder="Repeat Password" type="password"name="cpassword"  required>
</div>            
<div class="form-group">
    <button type="submit" name="submit" class="btn btn-primary btn-block"> Create Account </button>
</div>
<p class="text-center">Have an account? <a href="login.php">Log In</a> </p>
</form>
</article>
<div>
</div>
</div>
</div>
</body>
</html>


