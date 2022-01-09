
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<h1> pesan pesawat</h1>
<br>

<form action="" method="post" >



<div class="input-group">
  <span class="input-group-addon" id="basic-addon1">maskapai</span>
  <select class="form-control" name="maskapai">
                        <?php
						include 'koneksi.php';
						$query=mysqli_query($dbconnect,"SELECT * FROM tbl_pesawat");
						while($data=mysqli_fetch_array($query)){
						?>
                        <option value="<?php echo $data['maskapai'];?>"><?php echo $data['maskapai']?></option>
                        <?php
						}
						?>
                        </select>
</div>


<div class="input-group">
  <span class="input-group-addon" id="basic-addon1">asal pesawat</span>
 <select class="form-control" name="maskapai">
   			<option value="aceh">aceh</option>
            <option value="banjarmasin">banjarmasin</option>
            <option value="beji lor">beji lor</option>
            <option value="palembang">palembang</option>
            <option value="jakarta">jakarta</option>
            <option value="semarang">semarang</option>
            <option value="surabaya">surabaya</option>
            <option value="makasar">makasar</option>
            </select>
</div>


<div class="input-group">
  <span class="input-group-addon" id="basic-addon1">tujuan</span>
   <select class="form-control" name="maskapai">
   			<option value="aceh">aceh</option>
            <option value="banjarmasin">banjarmasin</option>
            <option value="beji lor">beji lor</option>
            <option value="palembang">palembang</option>
            <option value="jakarta">jakarta</option>
            <option value="semarang">semarang</option>
            <option value="surabaya">surabaya</option>
            <option value="makasar">makasar</option>
            </select>
            
</div>


<div class="input-group">
  <span class="input-group-addon" id="basic-addon1" >harga</span>
  <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
</div>


<div class="input-group">
  <span class="input-group-addon" id="basic-addon1">jml bayar</span>
  <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
</div>


<div class="input-group">
  <span class="input-group-addon" id="basic-addon1">total bayar</span>
  <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
</div>


<input type="submit" value="lanjut" name="lanjut" class="btn btn-primary">
</form>

</body>
</html>