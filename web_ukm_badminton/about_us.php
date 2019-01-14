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
                            <a href="#profil">PROFIL</a>
                            <a href="#visi">VISI</a>
                            <a href="#misi">MISI</a>
                            <a href="#struktur_pengurus">STRUKTUR PENGURUS</a>
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


    <!-- Page Content -->
    <br><br>
	<a  name="profil"></a>
    <div class="content-section-a">

        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">PROFIL</h2>
                    <p class="lead">Ukm Badminton merupakan salah satu ukm olahraga yang berpengaruh di unsyiah, ukm ini memiliki fungsi untuk mencari atlet sekaligus mengembangkan bidang minat olahraga badminton di Unsyiah</p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="img/ipad.jpg" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->


    <a  name="visi"></a>
    <div class="content-section-b">
        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">VISI</h2>
                    <p class="lead">Menjadi wadah tempat pengembangan olahraga dan bakat bulu tangkis yang kompeten dan berkualitas
                    dengan menjunjung tinggi nilai sportivitas</p>
                </div>
                <div class="col-lg-5 col-sm-pull-6  col-sm-6">
                    <img class="img-responsive" src="img/dog.jpg" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-b -->


    <a  name="misi"></a>
    <div class="content-section-a">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">MISI</h2>
                    <p class="lead">
                        1. Mengembangkan bibit-bibit dan bakat badminton yang kompeten<br>
                        2. Menghasilkan pebulu tangkis yang menjunjung tinggi nilai sportivitas<br>
                        3. Ikut serta dalam memajukan dunia olahraga bulu tangkis nasional<br>
                        4. Mengembangkan pebulu tangkis yang pantang menyerah dan tangguh<br>
                    </p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="img/phones.jpg" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->


    <a  name="struktur_pengurus"></a>
    <div class="content-section-b">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">STRUKTUR PENGURUS</h2>
                    <p class="lead">struktur pengurus UKM badminton unsyiah</p>
                </div>
                <div class="col-lg-5 col-sm-pull-6  col-sm-6">
                    <img class="img-responsive" src="img/struksture-organisasi-ukm.png" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-b -->


    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="copyright text-muted small">Copyright &copy; UKM bulu tangkis unsyiah 2019. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
