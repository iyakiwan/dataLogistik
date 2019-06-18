<html>
<head>
	<title>Data Logistik Daspro Laboratory</title>
	<script type="text/javascript">
	    function pageRedirect() {
	      window.location.href = "index.php";
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
		table {
		    width: 50%;
		    margin-left: auto;
		    margin-right: auto;
		}
	</style>
</head>

<body align="center">
<img src="dasprologo.jpg" alt="Daspro Logo" width="600" height="150">
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
			$rs = $con->query($sql);
			$result = $rs->fetchAll();

            if(count($result) > 0) {
                foreach($result as $goods) {
                    echo "<tr><td>".$goods['idBarang']."</td><td>".$goods['namaBarang']."</td><td>".$goods['jenisBarang']."</td><td>".$goods['jumlahBarang']."</td></tr>";
                }
            } else {
			    echo '<tr><td colspan="4" align="center">0 results</td></tr>';
			}
			mysqli_close($con);
		} catch(Exception $e) {
	        echo "Error : " . $e;
	    }
	?>
</table>
<button type="button" onclick="pageRedirect()">Back</button>
</body>
</html>

