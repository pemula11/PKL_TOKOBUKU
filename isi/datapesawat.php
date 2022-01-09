<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<!------------------------------------------ modal data pesawat ----------------------------->


<div class="modal fade" id="modaltambah-pesawat" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Tambah Jadwal Pesawat</h4>
				</div>
				<div class="modal-body">
					<form action="proses/prosesdatapesawat.php" method="post">
						<div class="form-group">
							<label>nama pesawat </label>
							<input id="tgl" class="form-control" name="pesawat" autocomplete="off">
						</div>
						
                        
                        <div class="form-group">
							<label>nama maskapai</label>
							<input id="tgl-2" class="form-control" name="maskapai" autocomplete="off">
						</div>	
                        
                         <div class="form-group">
							<label>kelas</label>
									
                                    
<div class="input-group">
  <span class="input-group-addon" id="basic-addon1">kelas</span>
 <select class="form-control" name="kelas">
   			<option value="1">ekonomi</option>
            <option value="2">bisnis</option>
            <option value="3">frist class</option>
           
            </select>
</div>
                                    
						</div>	
                        
                        
                        <div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
					<button type="submit" class="btn btn-primary" name="lanjut">submit</button>
				</div>
                        					
					</form>
				</div>
				
			</div>
		</div>
	</div>

<!----------------------------------------- akhir modal -------------------------------------->
<label class=""> <h1> DATA PESAWAT </h1> </label><br>
<button data-toggle="modal" data-target="#modaltambah-pesawat" class="btn btn-success"> <span class="glyphicon glyphicon-plus"></span> Tambah Data </button>

<form action="" method="post" class="nav navbar-form navbar-right" role="search">
<input type="text" placeholder="cari pesawat/maskapai" class="form-control" name="cari"/>
<input type="submit" value="cari" class="btn btn-default"/>
</form>

<br>




<table class="table table-hover table-bordered">
<tr>
<th class="col-md-2"> no</th>
<th class="col-md-3">nama pesawat</th>
<th class="col-md-4">nama maskapai</th>
<th class="col-md-2">JENIS kelas</th>
<th class="col-md-2">id kelas</th>

<th class="col-md-3">opsi</th>
</tr>


<?php 

include('../koneksi.php');

$querytabel = mysqli_query($dbconnect, " SELECT tbl_pesawat.nama_pesawat, tbl_pesawat.maskapai, tbl_kelas_pesawat.jenis_kelas, tbl_kelas_pesawat.id_class FROM tbl_pesawat INNER JOIN tbl_kelas_pesawat ON tbl_pesawat.id_kelas = tbl_kelas_pesawat.id_kelas ");
$no = 1;
while ($datapswt = mysqli_fetch_array($querytabel)) {

?>

<tr>
<td><?php echo $no ?> </td>
<td> <?php echo $datapswt['nama_pesawat'] ?> </td>
<td> <?php echo $datapswt['maskapai'] ?> </td>
<td> <?php echo $datapswt['jenis_kelas'] ?> </td>
<td> <?php echo $datapswt['id_class'] ?> </td>
<td> <div class="btn btn-primary"> tes </div> </td>
</tr>

<?php $no++; } ?>
</table>







</body>
</html>