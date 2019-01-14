<?php
    if(isset($_COOKIE["username"]))
    {
        header ("location: admin_edit.php");
    }
?>


<?php
    include("connection.php");
?>

<?php
	//chek that user have submit/login
	if(isset($_POST["submit"]))
	{ 
		//take password and username
		$username = $_POST["username"];
		$password = $_POST["password"];
		
		//make a variable to show error message
		$error_msg ="";
		
		//check wheter username and password haved inputed
		if(empty($username) || $password==="")
		{	$error_msg="please input username and password!";
		}
		
		//check username and password
		else
		{	
			//check avaibility user on database;
			$hasil_query = mysqli_query($link, "select * from user where username=\"$username\" && password=\"$password\"");
			$data        = mysqli_num_rows($hasil_query);
			
			//chek result query
			if($data !=1)
			{	$error_msg="username or password incorrect";
			}
			
			//get information of username and password
			$admin = mysqli_fetch_row($hasil_query);
		}
		
		//validation's successfull
		if($error_msg==="")
		{
			//create cookies
			setcookie("username","$admin[0]",time() + 3600,"/");
			
			//redirect to header
			header("location:admin_edit.php");
			
		}
			  
	}
	
	//not yet submit or first time open page
	else
	{
		$error_msg="";
		$username="";
		$password="";
	}
?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>UKM badminton unsyiah</title>

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/landing-page.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="login.css">


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
                        <a href="../index.php">HOME</a>
                    </li>
                    <li class="dropdown1">
                        <a href="#">ABOUT US</a>
                        <div class="content1">
                            <a href="../about_us.php#profil">PROFIL</a>
                            <a href="../about_us.php#visi">VISI</a>
                            <a href="../about_us.php#misi">MISI</a>
                            <a href="../about_us.php#struktur_pengurus">STRUKTUR PENGURUS</a>
                        </div>
                    </li>
                    <li>
                        <a href="../documentations.php">DOCUMENTATIONS</a>
                    </li>
                    <li>
                        <a href="../training_schedule.php">TRAINING SCHEDULE</a>
                    </li>
                    <li>
                        <a href="../achievements.php">ACHIEVEMENTS</a>
                    </li>
                    <li>
                        <a href="login.php">LOGIN ADMIN</a>
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
    	<br><br><br><br><br><br><br><br><br><br><br><br><br>
        <div class="intro-message">
            <div class="loginbox">
						<img src="avatar.png" class="avatar">
						<h1> login Here</h1>
						<form action="login.php" method="post">
							<input type="text" name="username" placeholder="Enter Username">
							<input type="password" name="password" placeholder="Enter Password">
							<input type="submit" name="submit" value="Login">
							<!--<a href="#">Forget Password</a>-->
						</form>
			</div>
        </div>
        <br><br>
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
