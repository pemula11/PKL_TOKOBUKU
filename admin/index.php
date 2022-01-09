<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>TOKO BUKU - ADMIN</title>

    <!-- Bootstrap core CSS -->
    <link href="../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../assets/css/admin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">ADMIN - TOKO BUKU</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php">Dashboard</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>
            </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Pegawai <span class="sr-only">(current)</span></a></li>
            <li><a href="?menu=data_pegawai">Data Pegawai</a></li>
             <li><a href="?menu=tambah_pegawai">Tambah Pegawai</a></li>
          </ul>
          <ul class="nav nav-sidebar">
           <li class="active"><a href="#">Penjualan Buku <span class="sr-only">(current)</span></a></li>
            <li><a href="?menu=data_penjualan">Data Penjualan</a></li>
          </ul>
           <ul class="nav nav-sidebar">
           <li class="active"><a href="#">Distributor <span class="sr-only">(current)</span></a></li>
            <li><a href="?menu=data_distributor">Data Distributor</a></li>
            <li><a href="?menu=tambah_distributor">Tambah Distributor</a></li>
          </ul>
           <ul class="nav nav-sidebar">
           <li class="active"><a href="#">Pemasukan Buku <span class="sr-only">(current)</span></a></li>
            <li><a href="?menu=data_pemasukan">Data Pemasukan</a></li>
          </ul>
          <ul class="nav nav-sidebar">
           <li class="active"><a href="#">Keluar <span class="sr-only">(current)</span></a></li>
          </ul>
        </div>
        <!-- ini adalah pengisian konten yang akan kita buat-->
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <?php
        error_reporting(0);
        switch($_GET['menu']){
        case 'data_pegawai';
		include "menu/data_pegawai.php";
		break;
		
	    case 'tambah_pegawai';
		include "menu/tambah_pegawai.php";
		break;
		
		case 'data_penjualan';
		include "menu/data_penjualan.php";
		break;
		
		case 'data_distributor';
		include "menu/data_distributor.php";
		break;
		
		case 'tambah_distributor';
		include "menu/tambah_distributor.php";
		break;
		
		case 'data_pemasukan';
		include "menu/data_pemasukan.php";
		break;
		
		default:
		include "menu/dasboard.php";
		break;
		}
		?>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
