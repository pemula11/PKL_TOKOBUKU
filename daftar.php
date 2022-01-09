<!doctype html>
<html>
<head>


<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-theme.css"
<link rel="stylesheet" type="text/css" href="assets/js/jquery-ui/jquery-ui.css" />
<script type="text/javascript" src="assets/js/jquery.js"> </script>
<script type="text/javascript" src="assets/js/bootstrap.js"> </script>
<script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.js"> </script>

<style type="text/css">
* { font: 11px/20px Verdana, sans-serif; }
h4 { font-size: 18px; }
input { padding: 3px; border: 1px solid #999; }
input.error, select.error { border: 1px solid red; }
label.error { color:red; margin-left: 10px; }
td { padding: 5px; 
.pesan {
	display: none;
	color: white;	
	margin: 10px;
}
}
</style>
<script type="text/javascript" src="assets/js/jquery-1.2.3.pack.js"></script>
<script type="text/javascript" src="assets/js/jquery.validate.pack.js"></script>


<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>


 	<div class="col-md-7 col-md-offset-3">
		<div class="panel panel-primary">
			<div class="panel-heading">
            	<div class="panel-title"> <center>
                  <h2>APLIKASI ONLINE SHOP
                  </h2>
                  <h1>"TUMBAS"</h1>
                </center>  
                <center>	<p> MENU DAFTAR</p> </center>
    
                </div>
                
			</div>
	
    	
    		<div class="panel-body">


<form action="prosesdaftar.php" method="post" id="forms" class="forms" onClick="validasi()">



 <?php
        session_start();
                                if(isset($_SESSION['error'])) {
                                    $errLog = $_SESSION['error'];
                                    echo '<div class="alert alert-danger" class="alert-warning"><div class="center"><i class="material-icons">error_outline</i> <strong>daftar GAGAL!</strong></div>
                                    '.$errLog.'</div>';
                                    unset($_SESSION['error']);
                                }
                                if(isset($_SESSION['error'])){
                                    $err = $_SESSION['error'];
                                    echo '<div id="alert-message" class="alert alert-warning"><div class="center"><i class="material-icons">error_outline</i> <strong>ERROR!</strong></div>
                                    '.$err.'</div>';
                                    unset($_SESSION['err']);
                               
							   } 
								
							
								?>


<div class="input-group">
  <span class="input-group-addon" id="basic-addon1" >username</span>
  <input type="text" class="form-control" placeholder="Username" name="username" aria-describedby="basic-addon1" required>
</div>


<div class="input-group">
  <span class="input-group-addon" id="basic-addon2">password</span>
  <input type="password" class="form-control" placeholder="password" name="password" aria-describedby="basic-addon2" required>
</div>


<div class="input-group">
  <span class="input-group-addon" id="basic-addon3">repassword</span>
  <input type="password" class="form-control" placeholder="password" name="repassword"  aria-describedby="basic-addon3" required>
</div>
			
 


<div class="input-group">
  <span class="input-group-addon" id="basic-addon4">email</span>
  <input type="email" class="form-control" placeholder="Username" name="email" aria-describedby="basic-addon4">
</div>


<input type="submit" value="daftar" name="daftar" id="daftar" class="btn btn-primary">

</form>


  
 


    <script>
	function validasi() {
	
	
	
    //inisialisasi warna didalam variabel
    var warnabenar = "#66cc66";
    var warnasalah = "#ff6666";
    //membandingkan 2 variabel
    if (pass1 !=  pass2) {
		alert('coba')
	}
	
	
	
	}
	</script>
  

</div>
</body>
</html>