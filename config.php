<?php include "conect.php"; ?>
<? session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>The Perfect Cup - Blog</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    
   
    <div class="brand">The Perfect Cup</div>
    <div class="address-bar">3481 Melrose Place | Beverly Hills, CA 90210 | 123.456.7890</div>

    <!-- Navigation -->
    <?php require_once 'nav.php'; ?>
    <?php


if(isset($_POST['submit'])){
    // session_start();
    $firstname      = mysqli_real_escape_string($db,$_POST['firstname']);
    $lastname       = mysqli_real_escape_string($db,$_POST['lastname']);
    $email          = mysqli_real_escape_string($db,$_POST['email']);
    $phonenumber    = mysqli_real_escape_string($db,$_POST['phonenumber']);
    $password       = mysqli_real_escape_string($db,$_POST['password']);
    $password2       = mysqli_real_escape_string($db,$_POST['password2']);

    if($password==$password2){
        //create usre
        // $password = password_hash($password, PASSWORD_DEFAULT);//hash password befor storing for security purposes
        

        $db = mysqli_connect('localhost','root','','useraccounts',);
        $result = $db->query("SELECT 'Bonjour, cher utilisateur de MySQL !' AS_message FROM DUAL");
        $row = $result->fetch_assoc();

        echo'ok';
 
        $tst = $db->prepare ("INSERT INTO admin_users (firstname, lastname, email, phonenumber, password)VALUES('$firstname','$lastname','$email','$phonenumber','$password')");

        $tst->execute();
       
        $_SESSION['message']= "you are now logged in";
        $_SESSION['firstname']= $firstname;
        header("location: login.php");
        
    }else{
        $_SESSION['message']= "the two password do not match";
    }


}


?>
    
<div class="container4">
        <div class="header3">
            <h2>Create account</h2>
        </div>
        <form action="config.php" method="POST" class="form3" id="forme">
            <div class="form3-control">
                <label for="">firstname </label>
                <input type="text" placeholder="firstename" id="firstname" name="firstname">
                <i class="fa fa-check-circle"></i>
                <i class="fa fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <div class="form3-control">
                <label for="">lastname </label>
                <input type="text" placeholder="lastname" id="lastname" name="lastname">
                <i class="fa fa-check-circle"></i>
                <i class="fa fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <div class="form3-control">
                <label for="">email </label>
                <input type="email" placeholder="hello@florin.pop" id="email" name="email">
                <i class="fa fa-check-circle"></i>
                <i class="fa fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <div class="form3-control">
                <label for="">phonenumber </label>
                <input type="text" placeholder="phonenumber" id="phonenumber" name="phonenumber">
                <i class="fa fa-check-circle"></i>
                <i class="fa fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <div class="form3-control">
                <label for="">password </label>
                <input type="password" placeholder="password" id="password" name="password">
                <i class="fa fa-check-circle"></i>
                <i class="fa fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <div class="form3-control">
                <label for="">Confirm password </label>
                <input type="password" placeholder="password two" id="password2" name="password2">
                <i class="fa fa-check-circle"></i>
                <i class="fa fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <div class="btn">
            <input type="submit" name="submit" class="btn2">
            </div>
        </form>

    </div>
    

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; The Perfect Cup 2019</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
    <!-- <script src="js/valid.js"></script> -->

</body>

</html>
