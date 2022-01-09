<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>


<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="assets/js/jquery-ui/jquery-ui.css" />
<script type="text/javascript" src="assets/js/jquery.js"> </script>
<script type="text/javascript" src="assets/js/bootstrap.js"> </script>
<script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.js"> </script>


<style type="text/css">
.sidenav {
  height: 100%; /* 100% Full-height */
  margin-top:50px;
  width: 0; /* 0 width - change this with JavaScript */
  position: fixed; /* Stay in place */
  z-index: 1; /* Stay on top */
  top: 0; /* Stay at the top */
  left: 0;
  background-color: #111; /* Black*/
  overflow-x: hidden; /* Disable horizontal scroll */
  padding-top: 60px; /* Place content 60px from the top */
  transition: 0.5s; /* 0.5 second transition effect to slide in the sidenav */

  
}

/* The navigation menu links */
.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
  transition: 0.3s;
  color:#9CF;
   border: none;
  line-height: 28px;
  border-bottom: 1px solid #23282e;
  margin-left: 0px;
  font-family:"Comic Sans MS", cursive;
}

.sidenav .brand {
  background-color: #23282e;
  line-height: 40px;
  display: block;
  text-align: center;
  font-size: 23px;
  color:#FFF;
  font-family:"Palatino Linotype", "Book Antiqua", Palatino, serif
}

/* When you mouse over the navigation links, change their color */
.sidenav a:hover {
  color: #F00;
}

/* Position and style the close button (top right corner) */
.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

/* Style page content - use this if you want to push the page content to the right when you open the side navigation */
#main {
  transition: margin-left .5s;
  padding: 20px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
  
  .coba {
	color:#F00;  
  }
  .dropdown a:hover {
	color:#00F  
  }
}
</style>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>menu utama</title>
</head>

<body>

<?php

include 'koneksi.php';
?>
<?php

session_start();

 if(@$_SESSION['level']) { //apabila sessionnya admin
  $userlogin = @$_SESSION['iduser']; 
   $tingkat = @$_SESSION['level'];
   
    }

 else if(@$_SESSION['operator']) { //apabila sessionnya admin
 $userlogin = @$_SESSION['iduser']; 
   $tingkat = @$_SESSION['level']; 
 }
 else if(@$_SESSION['moderator']) { //apabila sessionnya admin
  $userlogin = @$_SESSION['iduser']; 
   $tingkat = @$_SESSION['level']; 
 }
 else if(@$_SESSION['user']) { //apabila sessionnya admin
 $userlogin = @$_SESSION['iduser']; 
   $tingkat = @$_SESSION['level']; 
 }



$login    = mysqli_query($dbconnect, "select * from tbl_user where id_user='$userlogin'");

    $datauser = mysqli_fetch_array($login);


switch($tingkat){
	
	
		case 'admin';
	$leveltingkat = 1;
	break;

	case 'moderator';
	$leveltingkat = 2;
	break;

	case 'user';
	$leveltingkat = 3;
	break;


default;
$leveltingkat = 3;
break;
}

?>



<!-- nav -->

<div class="navbar navbar-default navbar-fixed-top" style="background-color: #0066FF;
">
 <div class="container-fluid ">
	<div class="navbar-header">
     	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
    	<a href="" class="navbar-brand"> TUMBAS</a>
    </div>
    	
        <div class="collapse navbar-collapse" id="navbar-collapse-1">
     <ul class="nav navbar-nav navbar-right" style="color:#FFF">
        <li class="active"> <a href=""> <span class="glyphicon glyphicon-home"></span>Home </a> <span class="sr-only"> (current) </span> </li>
        <li> <a href="#" >harga</a> </li> 
        <li> <a href="#" >kereta api</a> </li> 
        <li> <a href="#" >jadwal</a> </li> 
        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"> pesan tiket <span class="caret"></span> </a>
        <ul class="dropdown-menu">
        <li> <a href="#">pesawat</a> </li>
        <li> <a href="#">kereta api</a> </li>
    
        </ul>
     
        </li>
        <li> <a href="">cek tiket</a></li>
       
        
   
          <li><a href="#"><span class="glyphicon glyphicon-user"></span>   <?php echo $_SESSION['username']  ?></a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-cog"></span> <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Profile</a></li>
              <li><a href="#">Pengaturan Akun</a></li>
              <li><a href="#">About</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="logout.php" onclick="return confirm('anda yakin ingin logout?')">Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
 
        
        </div>
      </div> 
      </div>
       
       
        </div> 
    
 </div>

</div></div>

<!-- tutup nav -->

<!--side bar -->
<br />
<div class="brand" style="margin-top:30px;"><span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; DAFTAR MENU</span></div>
  
  <div id="mySidenav" class="sidenav ">
  
	<div class="brand"> DAFTAR MENU </div>
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  
  
  <ul class="nav " >
  <li >
  
  <a href="?" > <span class="glyphicon glyphicon-home"></span>DASHBOARD</a>
  </li>
 
 <?php
 if($leveltingkat=="1") {
 
 
 ?>
  <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">  PANEL ADMIN <span class="caret"></span> </a>
        <ul class="dropdown-menu" style="position:relative">
         <li class="active"><a href="?menu=datapesawat">data pesawat</a></li>
                  
                    <li><a href="?menu=datakereta">data kereta api</a></li>
              
                      <li><a href="?menu=datauser">data user</a></li>
    
        </ul>
     
        </li>
        
        
     <?php 
 }
 ?>
 
  <?php
 if($leveltingkat=="2" or $leveltingkat=="1") {
 
 
 ?>
 
  <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"> PANEL OPERATOR <span class="caret"></span> </a>
        <ul class="dropdown-menu" style="position:relative">
       <li><a href="?menu=tambahjadwal">tambah jadwal</a></li>
                  <li><a href="?menu=tambahjalur">tambah jalur</a></li>
                  <li><a href="?menu=konfirmasitiket">konfirmasi tiket</a></li>
                    <li><a href="?menu=stoktiket">stok&daftar tiket</a></li>
    
        </ul>
     
        </li>
        
       
       <?php 
 }
 ?>
 
         <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"> pesan tiket <span class="caret"></span> </a>        <ul class="dropdown-menu" style="position:relative">

        <li> <a href="#">pesawat</a> </li>
        <li> <a href="#">kereta api</a> </li>
    
        </ul>
     
        </li>
        
  
  <li>
                  <a href="?menu=jadwal">
                  <i class="fa fa-user fa-lg"></i>jadwal
                  </a>
                  </li>
                  
           <li>
  <a href="#">Servicesa</a>
  </li>        
 
  </ul>
 
 
 
 
 
 
 
 
 
 
 
</div>

<!-- Use any element to open the sidenav -->
<!-- tutup side bar-->

<div class="col-sm-9 col-sm-offset-1 col-md-11 col-md-offset main">

<?php

error_reporting(0);
switch($_GET['menu']){
	case 'datapesawat';
	include "isi/datapesawat.php";
	break;
	
	case 'tambahpesawat';
	include "isi/tambahpesawat.php";
	break;
	
	case 'datakereta';
	include "isi/datakereta.php";
	break;
	
	case 'tambahkereta';
	include "isi/tambahkereta.php";
	break;
	
		case 'tambahkereta';
	include "isi/tambahkereta.php";
	break;

	case 'tambahkereta';
	include "isi/tambahkereta.php";
	break;

	case 'tambahkereta';
	include "isi/tambahkereta.php";
	break;

	case 'datauser';
	include "isi/datauser.php";
	break;

	case 'tambahjadwal';
	include "isi/tambahjadwal.php";
	break;

	case 'tambahjalur';
	include "isi/tambahjalur.php";
	break;

	case 'konfirmasitiket';
	include "isi/konfirmasitiket.php";
	break;

	case 'stoktiket';
	include "isi/stoktiket.php";
	break;

	case 'pesanpesawat';
	include "isi/pesanpesawat.php";
	break;

	case 'pesankereta';
	include "isi/pesankereta.php";
	break;

	case 'jadwal';
	include "isi/jadwal.php";
	break;

	case 'profile';
	include "isi/profile.php";
	break;
	
	case 'saldo';
	include "profile/saldo.php";
	break;

	
default;
include "isi/dasboard.php";	
break;
}

?>
</div> 
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

/* Set the width of the side navigation to 0 */
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
} 
</script>

</body>
</html>

