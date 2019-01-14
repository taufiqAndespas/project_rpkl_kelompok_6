<?php
    include("login_admin/connection.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>UKM badminton unsyiah</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/landing-page.css" rel="stylesheet">


</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand topnav" href="#">ukmbulutangkisusk@gmail.com</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.php">HOME</a>
                    </li>
                    <li class="dropdown1">
                        <a href="#">ABOUT US</a>
                        <div class="content1">
                            <a href="about_us.php#profil">PROFIL</a>
                            <a href="about_us.php#visi">VISI</a>
                            <a href="about_us.php#misi">MISI</a>
                            <a href="about_us.php#struktur_pengurus">STRUKTUR PENGURUS</a>
                        </div>
                    </li>
                    <li>
                        <a href="documentations.php">DOCUMENTATIONS</a>
                    </li>
                    <li>
                        <a href="training_schedule.php">TRAINING SCHEDULE</a>
                    </li>
                    <li>
                        <a href="achievements.php">ACHIEVEMENTS</a>
                    </li>
                    <li>
                        <a href="login_admin/login.php">LOGIN ADMIN</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <!-- Header -->
    <a name="about"></a>
    <div class="intro-header">
                    <div class="intro-message">
                        <h1>SELAMAT DATANG DI WEBSITE UKM BADMINTON UNSYIAH</h1>
                        <h3>Let's Enhance Your Ability</h3>
                        <hr class="intro-divider">
                         <ul class="list-inline intro-social-buttons">
                            <li>
                                <a href="formulir/formulir.pdf" class="btn btn-default btn-lg" download><i class="fa fa-download fa-fw"></i> <span class="network-name">Download formulir pendaftaran</span></a>
                            </li>
                        </ul>
                    </div>
    </div>
    

    <!-- Footer -->
    <footer>
        <div class="container">
            
                
                    <p class="copyright text-muted small">Copyright &copy; UKM bulu tangkis unsyiah 2019. All Rights Reserved</p>
                
           
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
