<?php
    if(!isset($_COOKIE["username"]))
    {
        header ("location: login.php");
    }
?>


<?php
    include("connection.php");
?>

<?php
    //chek that user have submit/login
    if(isset($_POST["submit1"]))
    { 
        //take data from form
        $nama_latihan = $_POST["nama_latihan"];
        $tanggal      = $_POST["tanggal"];
        $jam          = $_POST["jam"];
        $tempat       = $_POST["tempat"];

        //make a variable to show error message
        $error_msg1 ="";
        
        //check wheter username and password haved inputed
        if(empty($nama_latihan) || $tanggal==="" || empty($jam) || empty($tempat))
        {   $error_msg1="Isikan Seluruh Data!";
        }
        
        //check username and password
        else
        {   
            //check avaibility user on database;
            $hasil_query = mysqli_query($link, "insert into training_schedule (nama_latihan, tanggal, jam, tempat)
            values ('$nama_latihan', '$tanggal', '$jam', '$tempat')");
            
            if($hasil_query)
            {
                $error_msg1="Jadwal Latihan Berhasil Ditambahkan";
            }
            else
            {
                $error_msg1="unknown error occured when inserting data";
            }
        }
              
    }
    
    //not yet submit or first time open page
    else
    {
        $error_msg1="";
    }
?>

<?php
    
    if(isset($_POST["submit2"]))
    {
        //take information
        $nomor_latihan = $_POST["nomor_latihan"];

        //error message variable
        $error_msg2="";

        //delete item on database
        $hasil_query = mysqli_query($link,"delete from training_schedule where nomor=$nomor_latihan");
        
        if($hasil_query)
        {
            $error_msg2="Jadwal Berhasil Dihapus";
        }
        else
        {
            $error_msg2="Jadwal Gagal Dihapus";
        }
    }

    else
    {
        $error_msg2="";
    }

?>

<?php
    //chek that user have submit/login
    if(isset($_POST["submit3"]))
    { 
        //take data from form
        $nama_kejuaraan = $_POST["nama_kejuaraan"];
        $peringkat      = $_POST["peringkat"];
        $tahun          = $_POST["tahun"];
        $peraih         = $_POST["peraih"];

        //make a variable to show error message
        $error_msg3 ="";
        
        //check wheter username and password haved inputed
        if(empty($nama_kejuaraan) || $peringkat==="" || empty($tahun) || empty($peraih))
        {   $error_msg3="Isikan Seluruh Data!";
        }
        
        //check username and password
        else
        {   
            //check avaibility user on database;
            $hasil_query = mysqli_query($link, "insert into achievements (nama_kejuaraan, peringkat, tahun, peraih)
            values ('$nama_kejuaraan', '$peringkat', '$tahun', '$peraih')");
            
            if($hasil_query)
            {
                $error_msg3="Pecapaian Berhasil Ditambahkan";
            }
            else
            {
                $error_msg3="unknown error occured when inserting data";
            }
        }
              
    }
    
    //not yet submit or first time open page
    else
    {
        $error_msg3="";
    }
?>

<?php
    
    if(isset($_POST["submit4"]))
    {
        //take information
        $nomor_pecapaian = $_POST["nomor_pecapaian"];

        //error message variable
        $error_msg4="";

        //delete item on database
        $hasil_query = mysqli_query($link,"delete from achievements where nomor=$nomor_pecapaian");
        
        
        if($hasil_query)
        {
            $error_msg4="Pecapaian Berhasil Dihapus";
        }
        else
        {
            $error_msg4="Pecapaian Gagal Dihapus";
        }
    }

    else
    {
        $error_msg4="";
    }

?>

<?php
    //chek that user have submit/login
    if(isset($_POST["submit5"]))
    { 

        //file upload process
        $error = $_FILES["file_upload"]["error"];
        if($error === 0)
        {
            $error="Berhasil Upload File";
            $nama_folder="../documentations/image";
            $tmp = $_FILES["file_upload"]["tmp_name"];
            $nama_file = $_FILES["file_upload"]["name"];
            move_uploaded_file($tmp, "$nama_folder/$nama_file");
        }

        //take data from form
        $nama_kegiatan   = $_POST["nama_kegiatan"];
        $berita_kegiatan = htmlspecialchars($_POST["berita_kegiatan"]);
        $nama_photo      = $_FILES["file_upload"]["name"];

        //make a variable to show error message
        $error_msg5 ="";
        
        //check wheter username and password haved inputed
        if(empty($nama_kegiatan) || $berita_kegiatan==="" || empty($nama_photo))
        {   $error_msg5="Isikan Seluruh Form!";
        }
        
        //check username and password
        else
        {   
            //check avaibility user on database;
            $hasil_query = mysqli_query($link, "insert into kegiatan (nama_kegiatan, berita_kegiatan, nama_photo)
            values ('$nama_kegiatan', '$berita_kegiatan', '$nama_photo')");
            
            if($hasil_query)
            {
                $error_msg5="Dokumen Kegiatan Berhasil Ditambahkan";
            }
            else
            {
                $error_msg5="failed when inserting data";
            }
        }
              
    }
    
    //not yet submit or first time open page
    else
    {
        $error_msg5="";
    }
?>


<?php
    
    if(isset($_POST["submit6"]))
    {
        //take information
        $nomor_kegiatan = $_POST["nomor_kegiatan"];

        //error message variable
        $error_msg6="";

        //delete item on database
        $hasil_query = mysqli_query($link,"delete from kegiatan where nomor=$nomor_kegiatan");
        
        
        if($hasil_query)
        {
            $error_msg6="Kegiatan Berhasil Dihapus";
        }
        else
        {
            $error_msg6="Kegiatan Gagal Dihapus";
        }
    }

    else
    {
        $error_msg6="";
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
    <link rel="stylesheet" type="text/css" href="edit.css">


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
                        <a href="logout.php">LOGOUT</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <br><br><br><br><br>

    
        
        <h3>Form Update Informasi</h3>
        <br>
        
  <div class="satu">
        <fieldset>

        <form action="admin_edit.php" method="post">
            <legend align="">Update Jadwal Latihan</legend>

            <!--error messege display -->
            <?php
                if($error_msg1!=="")
                {
                   echo "<p class='pesan'>$error_msg1</p>";
                }
             ?>

            <p>Tambahkan Jadwal Latihan</p>
            <label>Nama Latihan</label>
            <input type="text" name="nama_latihan"/>
            <br>
            <label>Tanggal</label>
            <input type="text" name="tanggal"/>
            <br>
            <label>Jam</label>
            <input type="text" name="jam">
            <br>
            <label>Tempat</label>
            <input type="text" name="tempat">
            <br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="submit" name="submit1" value="Tambahkan Data">
        </form>
        <form action="admin_edit.php" method="post">
            <br>

            <!--error messege display -->
            <?php
                if($error_msg2!=="")
                {
                   echo "<p class='pesan'>$error_msg2</p>";
                }
             ?>

            <p>Hapus Jadwal Latihan</p>
            <label>Masukan Nomor Jadwal</label>
            <input type="text" name="nomor_latihan"/>
            <br>
            &nbsp;
            <input type="submit" name="submit2" value="Hapus Data">
        </form>

        </fieldset>
    </div>

    <br><br>
    <div clas="dua">
        <fieldset>
        
        <form action="admin_edit.php" method="post">
            <legend align="">Update Pencapaian</legend>

            <!--error messege display -->
            <?php
                if($error_msg3!=="")
                {
                   echo "<p class='pesan'>$error_msg3</p>";
                }
             ?>

            <p>Tambahkan Pencapaian</p>
            <label>Nama Kejuaraan</label>
            <input type="text" name="nama_kejuaraan"/>
            <br>
            <label>Peringkat</label>
            <input type="text" name="peringkat"/>
            <br>
            <label>Tahun</label>
            <input type="text" name="tahun">
            <br>
            <label>Peraih</label>
            <input type="text" name="peraih"/>
            <br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="submit" name="submit3" value="Tambahkan Data">
        </form>
        <form action="admin_edit.php" method="post">
            <br>

            <!--error messege display -->
            <?php
                if($error_msg4!=="")
                {
                   echo "<p class='pesan'>$error_msg4</p>";
                }
             ?>

            <p>Hapus Pencapaian</p>
            <label>Masukan Nomor Pecapaian</label>
            <input type="text" name="nomor_pecapaian"/>
            <br>
            &nbsp;
            <input type="submit" name="submit4" value="Hapus Data">
        </form>

        </fieldset>
    </div>
    
    
    <br><br>
    <div clas="tiga">
        <fieldset>
        
        <form action="admin_edit.php" method="post" enctype="multipart/form-data">
            <legend align="">Update Kegiatan</legend>

            <!--error messege display -->
            <?php
                if($error_msg5!=="")
                {
                   echo "<p class='pesan'>$error_msg5</p>";
                }
             ?>

            <p>Tambahkan Kegiatan</p>
            <label>Nama Kegiatan</label>
            <input type="text" name="nama_kegiatan"/>
            <br>
            <label>Masukan Berita Kegiatan</label>
            <textarea name="berita_kegiatan" rows="30" cols="150"></textarea>
            <br>
            <label>Upload photo kegiatan</label>
            <input type="file" name="file_upload"/>
            <br>
            
            <input type="submit" name="submit5" value="Tambahkan Data Kegiatan">
        </form>
        <form action="admin_edit.php" method="post">
            <br>

            <!--error messege display -->
            <?php
                if($error_msg6!=="")
                {
                   echo "<p class='pesan'>$error_msg6</p>";
                }
             ?>

            <p>Hapus Kegiatan</p>
            <label>Masukan Nomor Kegiatan</label>
            <input type="text" name="nomor_kegiatan"/>
            <br>
            &nbsp;
            <input type="submit" name="submit6" value="Hapus Kegiatan">
        </form>

        </fieldset>
    </div>
    

    <br><br><br>
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
