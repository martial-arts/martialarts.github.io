<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
     <?php include 'style\links.php'
     ?> 
</head>
<body>

<?php
include 'dbcon.php';

if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    $email_search = " select * from registration where email='$email' ";
    $query = mysqli_query($con, $email_search);

    $email_count = mysqli_num_rows($query);

    if($email_count)
    {
        $email_pass = mysqli_fetch_assoc($query);
        
        $db_pass = $email_pass['password'];

        $pass_decode = password_verify($password, $db_pass);

        if($pass_decode)
        {
            echo "login successful";
            ?>

         <script>
         location.replace("home.php");
         </script> 
           
            <?php

        }else{
        echo "password is not matching";
        }
    }else 
    {
        echo "invalid email";


    }



}




?>




<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
<h4 class="card-title mt-3 text-center">Log in account</h4>
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">

<div class="from-group input-group">
        <div class="input-group-pretend">
            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
</div>
<input name="email" class="form-control" placeholder="Email" type="email" required>
</div>

<div class="from-group input-group">
        <div class="input-group-pretend">
            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
</div>
<input name="password" class="form-control" placeholder="Password" type="password" value="" required>
</div>

<div class="form-group">
    <button type="submit" name="submit" class="btn btn-primary btn-block"> Log In </button>
</div>
<p class="text-center">Not have an account? <a href="index.php">Sign up</a> </p>

</form>
</article>
</div>
</div>
</body>
</html>
