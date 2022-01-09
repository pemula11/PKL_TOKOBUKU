<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>




<!--awal tambah data-->

<div class="modal fade" id="modaltambah-pesawat" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Tambah Jadwal Pesawat</h4>
				</div>
				<div class="modal-body">
					<form action="prosesdatabarang.php" method="post">
						<div class="form-group">
							<label>keberangkatan pesawat </label>
							<input id="tgl" class="form-control" name="tanggal" autocomplete="off">
						</div>
						<div class="form-group">
							<label>asal pesawat</label>
														
                                                        
                                                        
<div class="input-group">
  <span class="input-group-addon" id="basic-addon1">asal pesawat</span>
 <select class="form-control" name="pesawat-asal">
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


						</div>	
                        
                        <div class="form-group">
							<label>kedatangan pesawat</label>
							<input id="tgl-2" class="form-control" name="pesawat-datang" autocomplete="off">
						</div>	
                        
                         <div class="form-group">
							<label>tujuan</label>
									
                                    
<div class="input-group">
  <span class="input-group-addon" id="basic-addon1">tujuan pesawat</span>
 <select class="form-control" name="pesawat-tujuan">
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
                                    
						</div>	
                        
                          <div class="form-group">
							<label>harga</label>
									<input type="text" class="form-control" name="pesawat-harga">
						</div>	
                        
                        <div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
					<button type="submit" class="btn btn-primary" name="submit">submit</button>
				</div>
                        					
					</form>
				</div>
				
			</div>
		</div>
	</div>
 

<!--akhir tambah data-->

<label class=""> <h1> TAMBAH JADWAL </h1> </label><br>
<button data-toggle="modal" data-target="#modaltambah-kereta" class="btn btn-success"> <span class="glyphicon glyphicon-plus"></span> Tambah Jadwal kereta api </button> 

<button data-toggle="modal" data-target="#modaltambah-pesawat" class="btn btn-success"> <span class="glyphicon glyphicon-plus"></span> Tambah Jadwal pesawat </button>

<button data-toggle="modal" data-target="#modalcari-jadwal" class="btn btn-success"> <span class="glyphicon glyphicon-search"></span> Cari Jadwal </button>

<br>

<table class="table-striped table-bordered">
<tr>
<th class="col-md-2"> no</td>
<th class="col-md-3">nama pesawat</th>
<th class="col-md-4">nama maskapai</th>
<th class="col-md-2">JENIS kelas</th>
<th class="col-md-2">id kelas</th>

<th class="col-md-3">opsi</th>
</tr>
</table>



<script type="text/javascript">
$(document).ready(function(){
$("#tgl").datepicker({dateFormat : 'yy/mm/dd'});
});
</script>



<script type="text/javascript">
$(document).ready(function(){
$("#tgl-2").datepicker({dateFormat : 'yy/mm/dd'});
});
</script>

</body>
</html>