<?php 
        // mengaktifkan session pada php
session_start();

		
		include 'koneksi.php';
        
        if(isset($_POST['daftar'])) {
         
          
              $nama =$_POST['username'];
			  $email = $_POST['email'];   
			  $password = $_POST['password']; 
        $repassword = $_POST['repassword']; 
       
            
			if($password != $repassword) {
				
				$_SESSION['eror'] = "password berbeda!";
		$_SESSION['error'] = "password berbeda!";
		// alihkan ke halaman login kembali
		header("location:daftar.php?pesan=gagal2");
				
			}
			
			else if($password == $repassword) {
			
            $query = "INSERT INTO tbl_user VALUES ('', '$nama', '$password', '$email', 'user', '0', 'default.jpg')";
            $input = mysqli_query($dbconnect, $query);
				$_SESSION['eror'] = "silahkan login!";
		$_SESSION['masuk'] = "silahkan login!";
			 header("location:index.php");
			}
            if(!$input) {
                die ("query gagal dijalankan: ".mysqli_errno($dbconnect). " - ".mysqli_error($dbconnect));
            }
         
        } 


?>
    