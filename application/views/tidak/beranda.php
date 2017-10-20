
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Selamat Datang di Layanan laundry kami!</h1>
	<p>Silahkan mengisi Form ini untuk memesan jasa kami</p>
	<form method="post" action="pesan.php">
		<h3>Pesan</h3> 
	<div>
		<label>Username</label><br>
		<input type="text" name="username" value="" ></input> 
	</div>
	<div>
		<label>Jenis Pesanan</label><br>
		<select name="pesanan">  
			 <option value="ck">Cuci Kering</option>  
			 <option value="cks">Cuci Kering Setrika</option>  
			 <option value="cb">Cuci Basah</option>  
			 <option value="kilat">Cuci Kilat</option>  
		</select>  
	</div>
	<div>
		<label>Alamat Pengambilan</label><br>
		<input type="text" name="alamat"></input>
		<br>
		<label style="float: rights">Nomor HP</label><br>
		<input type="text"	name="phone"> </input>
	</div>
	<div >
		<button type="submit">PESAN</button>
	</div>

</form>

	<a href="logout.php">Log Out</a>

</body>
</html>
