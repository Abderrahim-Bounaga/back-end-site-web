<?php include "conect.php"; ?>
<?php ob_start(); ?>


<nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.php">The Perfect Cup</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                <?php 
                        
                        if (isset($_SESSION['id'])) {

                            // echo "<li>";
                            // echo "<a href='admin'>Admin</a>";
                            // echo "</li>";
                            echo "<li>";
                            echo    "<a href='index.php'>Home</a>";
                            echo"</li>";
                            
                            echo"<li>";
                            echo    "<a href='about.php'>About</a>";
                            echo "</li>";

                            echo "<li>";
                            echo    "<a href='blog.php'>Blog</a>";
                            echo "</li>";

                            echo "<li>";
                            echo    "<a href='contact.php'>Contact</a>";
                            echo "</li>";


                            echo "<li>";
                            echo "<a href='logout.php'>Logout</a>";
                            echo "</li>";

                        }else{
                            echo "<li>";
                            echo    "<a href='index.php'>Home</a>";
                            echo"</li>";
                            
                            echo"<li>";
                            echo    "<a href='about.php'>About</a>";
                            echo "</li>";

                            echo "<li>";
                            echo    "<a href='blog.php'>Blog</a>";
                            echo "</li>";

                            echo "<li>";
                            echo    "<a href='contact.php'>Contact</a>";
                            echo "</li>";
                            

                    

                            echo "<li>";
                            echo "<a href='login.php'>Login</a>";
                            echo "</li>";

                            echo "<li>";
                            echo "<a href='config.php'>Sign Up</a>";
                            echo "</li>";

                            echo "<li>";
                            echo "<a href='admin.php'>admin</a>";
                            echo "</li>";
                           
                        }
                    
                    ?>
                   

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>