<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>


<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="assets/js/jquery-ui/jquery-ui.css" />
<script type="text/javascript" src="assets/js/jquery.js"> </script>
<script type="text/javascript" src="assets/js/bootstrap.js"> </script>
<script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.js"> </script>


<style type="text/css">
.nav-side-menu {
  overflow: auto;
  font-family: verdana;
  font-size: 12px;
  font-weight: 200;
  background-color: #2e353d;
  position: fixed;
  top: 0px;
  width: 250px;
  height: 100%;
  color: #e1ffff;
  margin-top:50px;
}
.nav-side-menu .brand {
  background-color: #23282e;
  line-height: 50px;
  display: block;
  text-align: center;
  font-size: 14px;
}
.nav-side-menu .toggle-btn {
  display: none;
}
.nav-side-menu ul,
.nav-side-menu li {
  list-style: none;
  padding: 0px;
  margin: 0px;
  line-height: 35px;
  cursor: pointer;
  /*    
    .collapsed{
       .arrow:before{
                 font-family: FontAwesome;
                 content: "\f053";
                 display: inline-block;
                 padding-left:10px;
                 padding-right: 10px;
                 vertical-align: middle;
                 float:right;
            }
     }
*/
}
.nav-side-menu ul :not(collapsed) .arrow:before,
.nav-side-menu li :not(collapsed) .arrow:before {
  font-family: FontAwesome;
  content: "\f078";
  display: inline-block;
  padding-left: 10px;
  padding-right: 10px;
  vertical-align: middle;
  float: right;
}
.nav-side-menu ul .active,
.nav-side-menu li .active {
  border-left: 3px solid #d19b3d;
  background-color: #4f5b69;
}
.nav-side-menu ul .sub-menu li.active,
.nav-side-menu li .sub-menu li.active {
  color: #d19b3d;
}

.nav-side-menu ul .sub-menu li.active a,
.nav-side-menu li .sub-menu li.active a {
  color: #d19b3d;
}
.nav-side-menu ul .sub-menu li,
.nav-side-menu li .sub-menu li {
  background-color: #181c20;
  border: none;
  line-height: 28px;
  border-bottom: 1px solid #23282e;
  margin-left: 0px;
}
.nav-side-menu ul .sub-menu li:hover,
.nav-side-menu li .sub-menu li:hover {
  background-color: #020203;
}
.nav-side-menu ul .sub-menu li:before,
.nav-side-menu li .sub-menu li:before {
  font-family: Fontawesome;
  content: "\f105";
  display: inline-block;
  padding-left: 20px;
  padding-right: 10px;
  vertical-align: middle;
}
.nav-side-menu li {
  padding-left: 0px;
  border-left: 3px solid #2e353d;
  border-bottom: 1px solid #23282e;
}
.nav-side-menu li a {
  text-decoration: none;
  color: #e1ffff;
}
.nav-side-menu li a i {
  padding-left: 10px;
  width: 20px;
  padding-right: 20px;
}
.nav-side-menu li:hover {
  border-left: 3px solid #d19b3d;
  background-color: #4f5b69;
  -webkit-transition: all 1s ease;
  -moz-transition: all 1s ease;
  -o-transition: all 1s ease;
  -ms-transition: all 1s ease;
  transition: all 1s ease;
}
@media (max-width: 767px) {
  .nav-side-menu {
    position: relative;
    width: 100%;
    margin-bottom: 10px;
  }
  .nav-side-menu .toggle-btn {
    display: block;
    cursor: pointer;
    position: absolute;
    right: 10px;
    top: 10px;
    z-index: 10 !important;
    padding: 3px;
    background-color: #ffffff;
    color: #000;
    width: 40px;
    text-align: center;
  }
  .brand {
    text-align: left !important;
    font-size: 22px;
    padding-left: 20px;
    line-height: 50px !important;
  }
}
@media (min-width: 767px) {
  .nav-side-menu .menu-list .menu-content {
    display: block;
  }
}
body {
  margin: 0px;
  padding: 0px;
}

.nav-side-menu ul .sub-menu ul .sub-line li.active,
.nav-side-menu li .sub-menu li .sub-line li.active {
  color: #d19b3d;
}

.nav-side-menu ul .sub-menu li .sub-line li.active a,
.nav-side-menu li .sub-menu li .sub-line li.active a {
  color: #d19b3d;
}
.nav-side-menu ul .sub-menu li .sub-line li,
.nav-side-menu li .sub-menu li .sub-line li {
  background-color: #181c20;
  border: none;
  line-height: 28px;
  border-bottom: 1px solid #23282e;
  margin-left: 0px;
}
.nav-side-menu ul .sub-menu li .sub-line li:hover,
.nav-side-menu li .sub-menu li .sub-line li:hover {
  background-color: #020203;
}
.nav-side-menu ul .sub-menu li .sub-line li:before,
.nav-side-menu li .sub-menu li .sub-line li:before {
  font-family: FontAwesome;
  content: "\f105";
  display: inline-block;
  padding-left: 100px;
  padding-right: 10px;
  vertical-align: middle;
}

.nav-side-menu .sub-menu li {
  padding-left: 20px;
  border-left: 3px solid #2e353d;
  border-bottom: 1px solid #23282e;
}
.nav-side-menu .sub-menu li a {
  text-decoration: none;
  color: #e1ffff;
}
.sub-menu li a i {
  padding-left: 10px;
  width: 20px;
  padding-right: 20px;
}
.nav-side-menu li .sub-menu li:hover {
  border-left: 3px solid #d19b3d;
  background-color: #4f5b69;
  -webkit-transition: all 1s ease;
  -moz-transition: all 1s ease;
  -o-transition: all 1s ease;
  -ms-transition: all 1s ease;
  transition: all 1s ease;
}
@media (max-width: 767px) {
 .nav-side-menu .sub-menu {
    position: relative;
    width: 100%;
    margin-bottom: 10px;
  }
.nav-side-menu  .sub-menu .toggle-btn {
    display: block;
    cursor: pointer;
    position: absolute;
    right: 10px;
    top: 10px;
    z-index: 10 !important;
    padding: 3px;
    background-color: #ffffff;
    color: #000;
    width: 40px;
    text-align: center;
  }
  
  .sub-line ul .sub-press li.active,
.sub-line li .sub-press li.active {
  color: #d19b3d;
}

.sub-line ul .sub-press li.active a,
.sub-line li .sub-press li.active a {
  color: #d19b3d;
}
.sub-line ul .sub-press li,
.sub-line li .sub-press li {
  background-color: #181c20;
  border: none;
  line-height: 28px;
  border-bottom: 1px solid #23282e;
  margin-left: 0px;
}
.sub-line ul .sub-press li:hover,
.sub-line li .sub-press li:hover {
  background-color: #020203;
}
.sub-line ul .sub-press li:before,
.sub-line li .sub-press li:before {
  font-family: Arial;
  content: "\f105";
  display: inline-block;
  padding-left: 50px;
  padding-right: 10px;
  vertical-align: middle;
}

.sub-line li {
  padding-left: 20px;
  border-left: 3px solid #2e353d;
  border-bottom: 1px solid #23282e;
}
.sub-line li a {
  text-decoration: none;
  color: #e1ffff;
}
.sub-line li a i {
  padding-left: 50px;
  width: 20px;
  padding-right: 20px;
}
.sub-line li:hover {
  border-left: 3px solid #d19b3d;
  background-color: #4f5b69;
  -webkit-transition: all 1s ease;
  -moz-transition: all 1s ease;
  -o-transition: all 1s ease;
  -ms-transition: all 1s ease;
  transition: all 1s ease;
}
@media (max-width: 767px) {
  .sub-line {
    position: relative;
    width: 100%;
    margin-bottom: 10px;
  }
  .sub-line .toggle-btn {
    display: block;
    cursor: pointer;
    position: absolute;
    right: 10px;
    top: 10px;
    z-index: 10 !important;
    padding: 3px;
    background-color: #ffffff;
    color: #000;
    width: 40px;
    text-align: center;
  }
</style>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>menu utama</title>
</head>

<body>

<!-- nav -->

<div class="navbar navbar-default" style="background-color: #0066FF;
">
 <div class="container-fluid">
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
        <li> <a href="#" >pesawat</a> </li> 
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
       
        
   
          <li><a href="#"><span class="glyphicon glyphicon-user"></span>User Login</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-cog"></span> <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Profile</a></li>
              <li><a href="#">Akun</a></li>
              <li><a href="#">About</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Logout</a></li>
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

</div>

<!-- tutup nav -->

<!--side bar -->


 
<div class="nav-side-menu">
    <div class="brand">Press Curing Control</div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
  
        <div class="menu-list">
  
            <ul id="menu-content" class="menu-content collapse out">
                <li>
                  <a href="?">
                  <i class="fa fa-dashboard fa-lg"></i> Dashboard
                  </a>
                </li>

                <li  data-toggle="collapse" data-target="#products" class="collapsed active">
                  <a href="#"><i class="fa fa-gift fa-lg"></i> admin panel <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="products">
                    <li class="active"><a href="?menu=datapesawat">data pesawat</a></li>
                  
                    <li><a href="?menu=datakereta">data kereta api</a></li>
              
                      <li><a href="?menu=datauser">data user</a></li>
                      
                </ul>


                <li data-toggle="collapse" data-target="#service" class="collapsed">
                  <a href="#"><i class="fa fa-globe fa-lg"></i> panel operator <span class="arrow"></span></a>
                </li>  
                <ul class="sub-menu collapse" id="service">
                  <li><a href="?menu=tambahjadwal">tambah jadwal</a></li>
                  <li><a href="?menu=tambahjalur">tambah jalur</a></li>
                  <li><a href="?menu=konfirmasitiket">konfirmasi tiket</a></li>
                    <li><a href="?menu=stoktiket">stok&daftar tiket</a></li>
                </ul>


                <li data-toggle="collapse" data-target="#new" class="collapsed">
                  <a href="#"><i class="fa fa-car fa-lg"></i> pesan tiket<span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="new">
                  <li><a href="?menu=pesanpesawat">pesawat</a></li>
                  <li><a href="?menu=pesankereta">kereta api</a></li>
                </ul>


                 <li>
                  <a href="?menu=jadwal">
                  <i class="fa fa-user fa-lg"></i>jadwal
                  </a>
                  </li>

					<li>
                  <a href="?menu=profile">
                  <i class="fa fa-user fa-lg"></i>profile
                  </a>
                  </li>
				
                 <li data-toggle="collapse" data-target="#new" class="collapsed">
                  <a href="#"><i class="fa fa-car fa-lg"></i> Service <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="new">
                  <li>Sensorkonfiguration</li>
                  <li>Betriebsarten</li>
                </ul>

            </ul>
     </div>
</div>
<!-- tutup side bar-->

<div class="col-sm-9 col-sm-offset-3 col-md-7 col-md-offset main">

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

	
default;
include "isi/dasboard.php";	
break;
}

?>
</div> 


</body>
</html>

