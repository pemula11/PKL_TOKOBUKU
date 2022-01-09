<!doctype html>
<html>
<head>


<link rel="stylesheet" type="text/css" href="../assets/css/docs.min.css" />
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>




	<div class="container">
		<h1>Lihat jadwal pesawat dan kereta api</h1> 
		<br/>
		<ul class="nav nav-tabs">
			<li class="active"><a data-toggle="tab" href="#home" style="color:#000">Home</a></li>
			<li><a data-toggle="tab" href="#menu1" style="color:#000">pesawat</a></li>
			<li><a data-toggle="tab" href="#menu2" style="color:#000">kereta apo</a></li>
		</ul>
		<div class="tab-content">
			<div id="home" class="tab-pane fade in active">
				<h3>HOME</h3>
				<p>
                
                
    
                
                
                </p>
			</div>

	<!----------------------------pesawat----------------------------------->

			<div id="menu1" class="tab-pane fade">
				<h3>Menu pesawat</h3>
				<p>
                
                            

<div class="panel panel-default">
  <div class="panel-heading">cari pesawat</div>
  <div class="panel-body">
    
    <form action="" method="get">
   
    <div class="form-inline">
    <div class="form-group">
    <label for="exampleInputEmail1">dari</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="jane.doe@example.com">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail2">ke</label>
    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="jane.doe@example.com">
  </div>

    
    <br>
    
   </div> 
    <label> tanggal</label> 
   <input id="tgl" class="form-control" name="tanggal" autocomplete="off">
   
  
   <button type="submit" name="cari" class="btn btn-primary btn-lg btn-block"> <span class=""> </span> cari </button>
    
    
    </form>
  </div>
</div>
 


<div class="panel panel-info">
  <div class="panel-heading">
    <h3 class="panel-title">jadwal pesawat</h3>
  </div>
  <div class="panel-body">
 
 
 
<div class="list-group" >
  <a href="#" class="list-group-item">
    <h4 class="list-group-item-heading">jakarta <span class="glyphicon glyphicon-arrow-right"> </span> semarang</h4>
    <p class="list-group-item-text">senin 5 februari 2018 pukul 17.00 </p> 
    <p class="list-group-item-text" style="color:#F00">RP. 500.000 </p>
   
  </a>
  
   <a href="#" class="list-group-item">
    <h4 class="list-group-item-heading">List group item heading</h4>
    <p class="list-group-item-text">...</p>
   
  </a>
  
   <a href="#" class="list-group-item">
    <h4 class="list-group-item-heading">List group item heading</h4>
    <p class="list-group-item-text">...</p>
   
  </a>
</div>
 </div>
 
</div>
                
                
                </p>
			</div>
            <!----------------------------kereta ---------------------------------->
            
			<div id="menu2" class="tab-pane fade">
				<h3>Menu kereta api</h3>
				<p>
                
                
                
                            

<div class="panel panel-default">
  <div class="panel-heading">cari kereta</div>
  <div class="panel-body">
    
    <form action="" method="get">
   
    <div class="form-inline">
    <div class="form-group">
    <label for="exampleInputEmail1">dari</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="jane.doe@example.com">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail2">ke</label>
    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="jane.doe@example.com">
  </div>

    
    <br>
    
   </div> 
    <label> tanggal</label> 
   <input id="tgl2" class="form-control" name="tanggal" autocomplete="off">
   
  
   <button type="submit" name="cari" class="btn btn-primary btn-lg btn-block"> <span class=""> </span> cari </button>
    
    
    </form>
  </div>
</div>
 


<div class="panel panel-info">
  <div class="panel-heading">
    <h3 class="panel-title">jadwal kereta</h3>
  </div>
  <div class="panel-body">
 
 
 
<div class="list-group" >
  <a href="#" class="list-group-item">
    <h4 class="list-group-item-heading">jakarta <span class="glyphicon glyphicon-arrow-right"> </span> semarang</h4>
    <p class="list-group-item-text">senin 5 februari 2018 pukul 17.00 </p> 
    <p class="list-group-item-text" style="color:#F00">RP. 500.000 </p>
   
  </a>
  
   <a href="#" class="list-group-item">
    <h4 class="list-group-item-heading">List group item heading</h4>
    <p class="list-group-item-text">...</p>
   
  </a>
  
   <a href="#" class="list-group-item">
    <h4 class="list-group-item-heading">List group item heading</h4>
    <p class="list-group-item-text">...</p>
   
  </a>
</div>
 </div>
 
</div>
                
                </p>
			</div>
		</div>
	</div>








<script type="text/javascript">
$(document).ready(function(){
$("#tgl").datepicker({dateFormat : 'yy/mm/dd'});
});
</script>


<script type="text/javascript">
$(document).ready(function(){
$("#tgl2").datepicker({dateFormat : 'yy/mm/dd'});
});
</script>



</body>
</html>