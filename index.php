 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-theme.css"
<link rel="stylesheet" type="text/css" href="assets/js/jquery-ui/jquery-ui.css" />
<script type="text/javascript" src="assets/js/jquery.js"> </script>
<script type="text/javascript" src="assets/js/bootstrap.js"> </script>
<script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.js"> </script>



			<style type="text/css">

	.form-log {

  width: 70%;
  height: 34px;
  padding: 6px 12px;
  font-size: 14px;
  line-height: 1.42857143;
  color: #555;
  background-color: #fff;
  background-image: none;
  border: 1px solid #ccc;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
          box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
  -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
       -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
          transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
}
.form-control:focus {
  border-color: #66afe9;
  outline: 0;
  -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, .6);
          box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, .6);
}
.form-control::-moz-placeholder {
  color: #777;
  opacity: 1;
}
.form-control:-ms-input-placeholder {
  color: #777;
}
.form-control::-webkit-input-placeholder {
  color: #777;
}

   #alert-message {
            border-radius: 3px;
            color: #f44336 ;
            font-size: 1.15rem;
            margin: 15px 15px -15px;
        }
        .error {
            padding: 10px;
        }
        .upss {
            font-size: 1.2rem;
            margin-left: 20px;
        }
        .pace {
            -webkit-pointer-events: none;
            pointer-events: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            -webkit-transform: translate3d(0, -50px, 0);
            -ms-transform: translate3d(0, -50px, 0);
            transform: translate3d(0, -50px, 0);
            -webkit-transition: -webkit-transform .5s ease-out;
            -ms-transition: -webkit-transform .5s ease-out;
            transition: transform .5s ease-out;
        }
        .pace.pace-active {
            -webkit-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }
        .pace .pace-progress {
            display: block;
            position: fixed;
            z-index: 2000;
            top: 0;
            right: 100%;
            width: 100%;
            height: 3px;
            background: #2196f3;
            pointer-events: none;
        }
		</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LOgin Menu</title>
</head>


<body background="50046976_325933671462845_7656454635971936256_n.jpg">


<?php

?>

<form action="proseslogin.php" method="post" class="form-group">
 	
    <div class="col-md-5 col-md-offset-3" style="alignment-adjust:middle">
		<div class="panel panel-primary" >
			<div class="panel-heading">
            	<div class="panel-title"> <center>
                  <h3> <span class="glyphicon glyphicon-book" aria-hidden="true"></span> TOKO BUKU SAYA
                  </h3>
                  <h4>LOGIN SYSTEM</h4>
                  <p>
                   <span class="glyphicon glyphicon-home" aria-hidden="true"></span> Rekesan, Beji Lor
                  
                  </p>
                </center>
                 
               
                </div>
			</div>
	
  
    
    		<div class="panel-body">
            
            
              
     <?php
     
                                if(isset($_SESSION['error'])){
                                    $errLog = $_SESSION['error'];
                                    echo '<div class="alert alert-danger" class="alert-warning"><div class="center"><i class="material-icons">error_outline</i> <strong>LOGIN GAGAL!</strong></div>
                                    '.$errLog.'</div>';
                                    unset($_SESSION['error']);
                                }
								
								 if(isset($_SESSION['masuk'])){
                                    $msg = $_SESSION['masuk'];
                                    echo '<div class="alert alert-info" class="alert-warning"><div class="center"><i class="material-icons">error_outline</i> <strong>SILAHKAN LOGIN !</strong></div>
                                    '.$msg.'</div>';
                                    unset($_SESSION['masuk']);
                                }
								
                                if(isset($_SESSION['error'])){
                                    $err = $_SESSION['error'];
                                    echo '<div id="alert-message" class="alert alert-warning"><div class="center"><i class="material-icons">error_outline</i> <strong>ERROR!</strong></div>
                                    '.$err.'</div>';
                                    unset($_SESSION['err']);
                                } 
								
								?>



	<label for="user"> username : </label>
	<input type="text" id="user" name="user" class="form-log" placeholder="username"/> 
<br />
	<label for="pass"> password :  </label>
	 <input type="password" name="pass" id="pass" placeholder="password" class="form-log"/>
<br />
<input type="checkbox" id="remember" /> <label> remember me</label>
	

	<input type="submit" name="login" value="login" class="btn btn-lg btn-primary btn-block"/>
    		
            </div>
            
             <div class="text-center forget">
                    <p><a href="daftar.php">belum punya akun ? daftar </a></p>
</div>
            
             <div class="panel-footer">
    ANDRI ADITYA </div>   
		</div>
    </div>
   
        
        
  
  	   
</form>
</div>


 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

  <script type="text/javascript">
        $("#alert-message").alert().delay(3000).slideUp('slow');
    </script>
    <!-- Javascript END -->

    <noscript>
        <meta http-equiv="refresh" content="0;URL='./enable-javascript.html'" />
    </noscript>

</body>
</html>