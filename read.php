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

			$registrants = $result->fetchAll(); 
            if(count($registrants) > 0) {
                // echo "<h2>People who are registered:</h2>";
                // echo "<table>";
                // echo "<tr><th>Name</th>";
                // echo "<th>Email</th>";
                // echo "<th>Job</th>";
                // echo "<th>Date</th></tr>";
                foreach($registrants as $registrant) {
                    echo "<tr><td>".$registrant['idBarang']."</td>";
                    echo "<td>".$registrant['namaBarang']."</td>";
                    echo "<td>".$registrant['jenisBarang']."</td>";
                    echo "<td>".$registrant['jumlahBarang']."</td></tr>";
                }
                // echo "</table>";
            } else {
                echo "<h3>No one is currently registered.</h3>";
            }

			// if ($result->num_rows > 0) {
			//     while($row = $result->fetch_assoc()) {
			//         echo '<tr><td>' . $row["idBarang"]. '</td><td>' . $row["namaBarang"]. '</td><td>' . $row["jenisBarang"]. '</td><td>'. $row["jumlahBarang"].'</td></tr>';
			//     }
			// } else {
			//     echo '<tr><td colspan="4" align="center">0 results</td></tr>';
			// }
			mysqli_close($con);
		} catch(Exception $e) {
	        echo "Failed: " . $e;
	    }
	?>
</table>
</body>
</html>

