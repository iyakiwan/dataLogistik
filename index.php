<html>
<head>
	<title>Data Logistik Daspro Laboratory</title>
	<script type="text/javascript">
	    function pageRedirect() {
	      window.location.href = "read.php";
	    }      
	</script> 
</head>

<body>
<h1 align="left">Insert Data Logistik Daspro Laboratory</h1>
<form action="" method="post" enctype="multipart/form-data">
	<table cellpadding="5px">
		<tr>
			<td>Nama Barang</td>
			<td><input name="nama" type="text" src="<?php $nama=$_POST['nama']?>" oninvalid="this.setCustomValidity('Enter User Name Here')" oninput="this.setCustomValidity('')"/></td>
		</tr>
		<tr>
			<td>Jenis Barang</td>
			<td><input name="jenis" type="text" src="<?php $jenis = $_POST['jenis']?>"/></td>
		</tr>
		<tr>
			<td>Jumlah Barang</td>
			<td><input name="jumlah" type="number" src="<?php $jumlah=$_POST['jumlah']?>"/></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input name="daftar" type="submit" value="Tambah" /></td>
		</tr>
		
	</table>
</form>
</body>
</html>
<?php
require_once('dbConnect.php'); 
if(isset($_POST["daftar"])){
	if (empty($nama)||empty($jenis)||empty($jumlah)){
		echo "<script>alert('anda harus mengisi data dengan lengkap.');location.href='insert.php';</script>";
	} else {
		$sql = "INSERT INTO dbo.dataBarang (namaBarang, jenisBarang, jumlahBarang) VALUES ('$nama','$jenis','$jumlah')";
		if(mysqli_query($con,$sql)){
			echo '<script>window.alert("Data berhasil ditambahkan");location.href="read.php";</script>';
		}else{ 
		echo '<script>window.alert("Data gagal ditambahkan");location.href="index.php";</script>'; 
		}
		mysqli_close($con);
	}
}

?>

