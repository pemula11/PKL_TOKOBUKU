<?php

session_start();

		
		include '../koneksi.php';
        
        if(isset($_POST['isisaldo'])) {
         
          
              $saldo =$_POST['saldo'];
			  $userlogin = @$_SESSION['iduser']; 

			
			  
		$login    = mysqli_query($dbconnect, "select * from tbl_user where id_user='$userlogin'");
		$datauser = mysqli_fetch_array($login);
			
			$saldosekarang = $datauser['saldo'];
			$saldojumlah = $saldosekarang + $saldo;
			
			$query = mysqli_query($dbconnect, "UPDATE `tbl_user` SET `saldo` = $saldojumlah WHERE `tbl_user`.`id_user` = $userlogin;");

			  echo $saldo ;
			  echo "<br>"; 
			  echo $saldosekarang;
			   echo "<br>"; 
			  echo $saldojumlah;
			  
			  $_SESSION['notice'] = $saldo;
			 header("location:../menu.php?menu=saldo");
			  
		}
?>