<html>
<head>
	<title>Membuat Menu Responsive Dengan CSS Dan JQuery | www.malasngoding.com</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">	
	<script type="text/javascript" src="assets/js/jquery.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.js"></script>
</head>
<body>	
	<!-- membuat menu navigasi -->
	<nav class="navbar navbar-default">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="https://www.malasngoding.com">Malas Ngoding</a>
			</div>
			
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="#">Profil <span class="sr-only">(current)</span></a></li>
					<li><a href="#">Portofolio</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tutorial <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">HTML</a></li>
							<li><a href="#">CSS</a></li>
							<li><a href="#">Javascript</a></li>							
							<li><a href="#">JQuery</a></li>							
							<li><a href="#">CodeIgniter</a></li>
						</ul>
					</li>
				</ul>
				
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#" data-toggle="modal" data-target="#modal-login">Login</a></li>					
					<li><button type="button" class="btn btn-primary navbar-btn" data-toggle="modal" data-target="#modal-daftar">Daftar</button></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>	
 
	<!-- Modal -->
	<div class="modal fade" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Modal Login</h4>
				</div>
				<div class="modal-body">
					<form>
						<div class="form-group">
							<label>Email</label>
							<input type="text" class="form-control">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" class="form-control">
						</div>						
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
					<button type="button" class="btn btn-primary">Login</button>
				</div>
			</div>
		</div>
	</div>
 
	<div class="modal fade" id="modal-daftar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Modal Daftar</h4>
				</div>
				<div class="modal-body">
					<form>
						<div class="form-group">
							<label>Nama</label>
							<input type="text" class="form-control">
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="text" class="form-control">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" class="form-control">
						</div>						
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
					<button type="button" class="btn btn-primary">Daftar</button>
				</div>
			</div>
		</div>
	</div>
	<!-- akhir modal -->
 
	<!-- akhir menu navigasi -->
 
	<div class="container">	
		<div class="col-md-12" style="padding: 0">
			<ol class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li><a href="#">Tutorial</a></li>
				<li class="active">Tutorial Bootstrap : Membuat Template Sederhana Dengan Bootstrap</li>
			</ol>
		</div>
 
		<div class="col-md-12" style="padding: 0">
			<h2 style="margin-top: 0">Tutorial Membuat Template Sederhana Dengan Bootstrap</h2>
			<br/>
			<div class="thumbnail">
				<img src="gambar/bootstrap.png">
			</div>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				lorem
			</p>
 
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				lorem
			</p>
			<table class="table table-bordered table-hover">
				<tr>
					<th class="col-md-1">No</th>
					<th>Nama</th>
					<th>Alamat</th>
					<th class="col-md-1">Usia</th>
				</tr>
				<tr>
					<td>1</td>
					<td>Diki Alfarabi Hadi</td>
					<td>Aceh</td>
					<td>23</td>
				</tr>
				<tr>
					<td>2</td>
					<td>Diki Alfarabi Hadi</td>
					<td>Aceh</td>
					<td>23</td>
				</tr>
				<tr>
					<td>3</td>
					<td>Diki Alfarabi Hadi</td>
					<td>Aceh</td>
					<td>23</td>
				</tr>
			</table>
			
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				lorem
			</p>
				
 
			<br/>	
			<h3>Related Posts</h3><br/>
 
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail">
					<img src="gambar/codeigniter.png" alt="...">
					<div class="caption">
						<h3><a href="#">Tutorial CodeIgniter</a></h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua.</p>								
					</div>
				</div>
			</div>
 
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail">
					<img src="gambar/bootstrap.png" alt="...">
					<div class="caption">
						<h3><a href="#">Tutorial Bootstrap</a></h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua.s</p>								
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail">
					<img src="gambar/codeigniter.png" alt="...">
					<div class="caption">
						<h3><a href="#">Tutorial CodeIgniter</a></h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua.</p>								
					</div>
				</div>
			</div>
		</div>
	
	</div>
	<br/>
	
	
	<div class="clearfix"></div>
		
	<nav class="navbar navbar-default" style="bottom: 0;margin: 0">
		<div class="container">			
			<ul class="nav navbar-nav">
				<li><a href="#">Copyright @ 2015 Malas Ngoding. All rights reserved.</a></li>				
			</ul>
 
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#">Develop by www.malasngoding.com</a></li>									
			</ul>
		</div>
	</nav>
	
</body>
</html>