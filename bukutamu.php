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
		<h1>Tambah Tamu</h1>
		<?php
			include "koneksi.php";
			$sql="select * from tamu";
			$hasil=mysqli_query($conn, $sql);
		?>
			<a href='addtamu.php' class='btn btn-primary'>Add New</a>
			<table class="table">
				<thead>
					<tr>
						<th scope="col">Id</th>
						<th scope="col">Nama</th>
						<th scope="col">Email</th>
						<th scope="col">Pesan</th>
					</tr>
				</thead>
				<tbody>
					<?php
					while ($r=mysqli_fetch_assoc($hasil)){
						echo "	
						<tr>
							<th scope='row'>".$r['idtamu']."</th>
							<td>".$r['nama']."</td>
							<td>".$r['email']."</td>
							<td>".$r['pesan']."</td>
							<td>
							<a href='#' class='btn btn-primary'>Edit</a>
							<a href='#' class='btn btn-primary'>Delete</a>
							</td>
						</tr>";
					}
					?>
				</tbody>
			</table>
	</div>
	
</body>
</html>