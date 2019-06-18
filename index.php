<html>
<head>
	<title>Data Logistik Daspro Laboratory</title>
	<script type="text/javascript">
	    function pageRedirect() {
	      window.location.href = "read.php";
	    }      
	</script> 
	<link rel="icon" href="dasprologo.png">
	<style type="text/css">
		body {
		    margin: 0;
		    padding: 0;
		}
		h1 {
		    color : #000000;
		    text-align : center;
		    font-family: "SIMPSON";
		}
		form {
		    width: 300px;
		    margin: 0 auto;
		}
	</style>
</head>

<body align="center">
<img src="dasprologo.jpg" alt="Daspro Logo" width="600" height="150">
<h1 align="left">Insert Data Logistik Daspro Laboratory</h1>
<form action="" method="post" enctype="multipart/form-data" align="center">
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
try {
	require_once('dbConnect.php'); 
	if(isset($_POST["daftar"])){		
		if (empty($nama)||empty($jenis)||empty($jumlah)){
			echo "<script>alert('anda harus mengisi data dengan lengkap.');location.href='index.php';</script>";
		} else {
			$sql = "INSERT INTO dbo.dataBarang (namaBarang, jenisBarang, jumlahBarang) VALUES ('$nama','$jenis',$jumlah)";
			$statement = $con->prepare($sql);
			if($statement->execute()){
				echo '<script>window.alert("Data berhasil ditambahkan");location.href="read.php";</script>';
			}else{ 
				echo '<script>window.alert("Data gagal ditambahkan");location.href="index.php";</script>'; 
			}
		}
	}
} catch(Exception $e) {
        echo "Error : " . $e;
}

?>

