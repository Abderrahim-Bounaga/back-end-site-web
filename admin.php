
<?php include "conect.php"; ?>


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
    session_start();
    $messageL = "";
if (isset($_POST['submit'])) {
  

    
    $email = $_POST['email'];
    $password = $_POST['password'];

    // $email = mysqli_real_escape_string($db,$email);
    // $password = mysqli_real_escape_string($db,$password);
   
    $query = "SELECT * FROM admin_users WHERE email = '{$email}'";
    $login_query = mysqli_query($db,$query);


    if (!$login_query) {
        die("QUERY FAILED" . mysqli_error($db));
    }

    while($row = mysqli_fetch_assoc($login_query)){
        $db_id = $row['id_admin'];
        $db_email = $row['email'];
        $hash = $row['password'];
        $db_fname = $row['firstname'];
        $db_lname = $row['lastname'];
       
    } 
    // $password = md5($password);
    $row_count = mysqli_num_rows($login_query);
    if ($row_count < 1) {
        $messageL = "<div class='alert alert-danger'>this email does not exist, try again or <a href='register.php'>register</a> </div>";
    }else {
        if ($password=== $hash) {
            $messageL = "<div class='alert alert-success'>Welcome $db_fname </div>";
            $_SESSION['id_admin'] = $db_id;
            $_SESSION['firstname'] = $db_fname;
            $_SESSION['lastname'] = $db_lname;
            $messageL =  "<div class='alert alert-danger'>correct</div>";



           header('Location: admin/index.php');
        } else{
            $messageL =  "<div class='alert alert-danger'>$hash your password $password in incorrect id :$db_id</div>";
        }
    }
    

}
?>   
<div class="container4">
        <div class="header3">
            <h2>Create account</h2>
        </div>
        <form action="admin.php" method="POST" class="form3" id="forme">
            <div class="form3-control">
                <label for="">email </label>
                <input type="email" placeholder="hello@florin.pop" name="email" id="email">
                <i class="fa fa-check-circle"></i>
                <i class="fa fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            
            <div class="form3-control">
                <label for="">password </label>
                <input type="password" placeholder="password" name="password" id="password">
                <i class="fa fa-check-circle"></i>
                <i class="fa fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <div class="btn">
            <input type="submit" name="submit" class="btn2" >
            </div>
            <div id="add_err2"><?php echo $messageL ?></div>
        </form>
        <div class="btnn">
        <a href="config.php"><button class="btn1" id="btn1">Sing up</button></a>
        </div>
    </div>
    <!-- <script src="js/valid2.js"></script> -->
    
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
    <!-- <script src="js/script.js"></script> -->
    

</body>

</html>