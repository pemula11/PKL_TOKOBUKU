<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>



<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>



<html>
<head>
	<title>Halaman admin - www.malasngoding.com</title>
</head>
<body>
	<?php 
	
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}
 
	?>
	
    
	
		<div class="jumbotron" >
			<h1>selamat datang <?php echo $_SESSION['username']; ?>  </h1>
            	<p>Halo <b><?php echo  $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
	

			<p>
				beli tiket pesawat dan kereta api dengan mudah <br/>
				saldo anda <?php
				
			
				echo $datauser['saldo'] ?><br/>
						<?php echo $leveltingkat ?>	
			</p> 
			<p>
           
				<div class="btn btn-lg btn-primary"><a href="menu.php?menu=saldo">  tambah saldo</a></div>
				<button class="btn btn-lg btn-danger">Demo</button>
			</p>
		</div>
        
        <div class="row">
        	<div class="col-md-4">
            	<div class="panel panel-info">
                <div class="panel-heading"> data pesawat</div>
                <div class="panel-body">
    			<center> 
                <h1> 99</h1>
                </center>
            </div>
         </div>
   </div>
		
         <div class="row">
        	<div class="col-md-4">
            	<div class="panel panel-info">
                <div class="panel-heading"> data pesawat</div>
                <div class="panel-body">
    			<center> 
                <h1> 99</h1>
                </center>
            </div>
         </div>
   </div>
   
    <div class="row">
        	<div class="col-md-4">
            	<div class="panel panel-info">
                <div class="panel-heading"> data pesawat</div>
                <div class="panel-body">
    			<center> 
                <h1> 99</h1>
                </center>
            </div>
         </div>
   </div>
   
    <div class="row">
        	<div class="col-md-4">
            	<div class="panel panel-info">
                <div class="panel-heading"> data pesawat</div>
                <div class="panel-body">
    			<center> 
                <h1> 99</h1>
                </center>
            </div>
         </div>
   </div>
   
    <div class="row">
        	<div class="col-md-4">
            	<div class="panel panel-info">
                <div class="panel-heading"> data pesawat</div>
                <div class="panel-body">
    			<center> 
                <h1> 99</h1>
                </center>
            </div>
         </div>
   </div>
   
    <div class="row">
        	<div class="col-md-4">
            	<div class="panel panel-info">
                <div class="panel-heading"> data pesawat</div>
                <div class="panel-body">
    			<center> 
                <h1> 99</h1>
                </center>
            </div>
         </div>
   </div>
   
    <div class="row">
        	<div class="col-md-4">
            	<div class="panel panel-info">
                <div class="panel-heading"> data pesawat</div>
                <div class="panel-body">
    			<center> 
                <h1> 99</h1>
                </center>
            </div>
         </div>
   </div>
        
	
</div>
</body>
</html>