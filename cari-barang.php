<?php include"koneksi.php";?>
<html>
<head>
<style type="text/css"> 
	
	h1 {
		font-family: Verdana;
	}
	
	body {
		font-family: Verdana;
		font-size: 12px;
	}	
	
	td {
		font-size: 12px;
	}
	
	</style> 
<style type="text/css">
table.tftable {table-layout:fixed; width:95%; word-break:break-all; font-size:12px;color:#333333;border-width: 1px;border-color: #729ea5;border-collapse: collapse;}
table.tftable th {font-size:12px;background-color:#acc8cc;border-width: 1px;padding: 8px; border-style: solid;border-color: #729ea5;}
table.tftable tr {background-color:#d4e3e5;}
table.tftable td {font-size:12px;border-width: 1px;padding: 4px;border-style: solid;border-color: #729ea5; text-align:right; }
</style>
</head>
<body>

<br/>
<center><h2>DAFTAR BARANG</h2></center>
<br/>

<form class="form" action="cari-barang.php" method="post" name="contact_form">
<input type="text" name="cari" >
<input type="Submit" value="Cari" >
</form>

<table id='tfhover'  class='tftable' border='1' align='center'><col width='100'> <col width='100'><col width='100'>
<tr><th>Nama</th><th>stok</th><th>Harga Jual</th></tr>
<?php
$cari = $_POST['cari'];
$select = "SELECT * FROM barang where nama like '%$nama%' ORDER BY nama ASC";
$select_query = mysql_query($select);
while($select_result = mysql_fetch_array($select_query))
{

$nama 				= $select_result['nama'] ;
$harga_jual		 	= $select_result['harga_jual'] ;
$stok 			        = $select_result['stok'] ;

echo "
<tr><td style='text-align:left;'><a href='masuk-cart.php?nama=$nama'>$nama</a></td><td style='text-align:left;'>$stok</td><td>$harga_jual</td></tr>
";}
?>

</table>


</body>
</html>