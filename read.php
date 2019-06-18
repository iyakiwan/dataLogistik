<html>
<head>
	<title>Data Logistik Daspro Laboratory</title>
	<script type="text/javascript">
	    function pageRedirect() {
	      window.location.href = "index.php";
	    }      
	</script> 
</head>

<body>
<button type="button" onclick="pageRedirect()">Back</button>
<h1 align="left">Data Logistik Daspro Laboratory</h1>
<table border="1" cellpadding="8">
	<tr>
		<th>Id Barang</th>
		<th>Nama Barang</th>
		<th>Jenis Barang</th>
		<th>Jumlah Barang</th>
	</tr>
	<?php
		require_once('dbConnect.php');
		$sql = "SELECT * FROM dbo.dataBarang"; 
		//result 
		$result = mysqli_query($con,$sql); 

		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		        echo '<tr><td>' . $row["idBarang"]. '</td><td>' . $row["namaBarang"]. '</td><td>' . $row["jenisBarang"]. '</td><td>'. $row["jumlahBarang"].'</td></tr>';
		    }
		} else {
		    echo '<tr><td colspan="4" align="center">0 results</td></tr>';
		}
		mysqli_close($con);
	?>
</table>
</body>
</html>

