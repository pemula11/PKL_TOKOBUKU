<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
session_start();

 if(isset($_SESSION['notice'])){
                                    $msg = $_SESSION['notice'];
                                    echo '<div class="alert alert-info" class="alert-warning"><div class="center"><i class="material-icons">error_outline</i> <strong>saldo anda telah ditambah !</strong></div>
                                    '.$msg.'</div>';
                                    unset($_SESSION['notice']);
                                }

echo $datauser['saldo'] ?><br/>
<form action="proses/prosessaldo.php" method="post">
<div class="form-group">
							<label>saldo</label>
							<input type="number" id="tgl-2" class="form-control" name="saldo" autocomplete="off">
						</div>	

<input type="submit" name="isisaldo">
</form>

</body>
</html>