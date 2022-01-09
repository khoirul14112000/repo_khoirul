<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta charset="viewport" content="width=device-width, initial-scale=1">
	<title>Toko Online Ku</title>
<style>
*{
	padding: 0;
	margin: 0;
	font-family: sans-serif;
}
a{
	color: #570530;
	text-decoration: none;
}
.medsos{
	padding: 5px 0;
	background-color: #548CFF;
}
.medsos ul li{
	display: inline-block;
	color: #fff;
	margin-right: 10px;
}
.container{
	width: 80%;
	margin: 0;
}
.container:after{
	content: '';
	display: block;
	clear: both;
}
header h1{
	float: left;
	padding: 15px 0;
	color: #072227;
}
header ul li{
	display: inline-block;
}
header ul li a{
	padding: 25px 20px;
	display: inline-block;
	transition: 0.5s;
}
header ul li a:hover{
	background-color: #D3DEDC;
	color: #fff;
	transform: scale(0.98);
}
.active{
	background-color: #980F5A;
	color: #fff;
}
.table {
	width: 100%;
	padding: 10px; 0;
	border-collapse: collapse;
}
.table tr th{
	padding: 10px; 0;
	border: 1px solid black;
}
.div h5{
	background-color: blue;
	padding: 10px; 0;
	border: 1px solid black;
}
</style>
</head>
<body>
	<!--loader-->
	<div class="bg-loader">
		<div class="loader"></div>
	</div>
	
	<!--header-->
	<div class="medsos">
		<div class="container">
			<ul>
				<li><a href="#"><i class="fab fa-facebook"></i></a></li>
				<li><a href="#"><i class="fab fa-instagram"></i></a></li>
				<li><a href="#"><i class="fab fa-twitter"></i></a></li>
			</ul>
		</div>
	</div>
	<header>
		<div class="container">
			<h1><a href="index.html">Toko Online Ku</a></h1>
			<ul>
				<li><a href="index.html">HOME</a></li>
				<li><a href="belanja.html">BELANJA</a></li>
				<li class="active"><a href="bukutamu.php">BUKU TAMU</a></li>
				<li><a href="about.html">ABOUT</a></li>
			</ul>
		</div>
	</header>
	
	<div class="container">
		<div class="card" style="width: 38rem;">
			<div class="card-body">
				<h5 class="card-title">Add Data Tamu</h5>
				<form action="ins_tamu.php" method="post">
					<div class="mb-3">
						<label class="form-label">Nama Tamu</label>
						<input type="text" name="nama" class="form-control" placeholder="Nama Tamu">
					</div>
					<div class="mb-3">
						<label class="form-label">Email</label>
						<input type="text" name="email" class="form-control" placeholder="name@example.com">
					</div>
					<div class="mb-3">
						<label class="form-label">Example textarea</label>
						<textarea class="form-control" name="pesan" rows="3"></textarea>
					</div>
					<div class="mb-3">
						<input type="submit" value="simpan">
					</div>
				</form>
				<a href="bukutamu.php" class="btn btn-primary">Buku Tamu</a>
			</div>
		</div>
	</div>
</body>
</html>