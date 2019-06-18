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
		try {
			require_once('dbConnect.php');
			$sql = "select * from dbo.dataBarang"; 
			$result = $con->query($sql);

			if ($result->num_rows > 0) {
			    while($row = $result->fetch_assoc()) {
			        echo '<tr><td>' . $row["idBarang"]. '</td><td>' . $row["namaBarang"]. '</td><td>' . $row["jenisBarang"]. '</td><td>'. $row["jumlahBarang"].'</td></tr>';
			    }
			} else {
			    echo '<tr><td colspan="4" align="center">0 results</td></tr>';
			}
			mysqli_close($con);
		} catch(Exception $e) {
	        echo "Failed: " . $e;
	    }
	?>
</table>
</body>
</html>

