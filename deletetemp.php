

<html>
<head>
<title>MENGHAPUS DATA ANGSURAN KREDIT ... </title>
<META http-equiv="refresh" content="0;URL=index.php"> 

</head>
<body>

<?php 
include('koneksi.php');

$query = mysql_query("delete from temp ") or die(mysql_error());
$query2 = mysql_query("delete from temp_bayar ") or die(mysql_error());

?>
<center>
<b> </b><br />
kembali ke tabel data .....<br/><br/><br/>

</center>
</body>
</html>