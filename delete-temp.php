

<html>
<head>
<title>MENGHAPUS DATA ANGSURAN KREDIT ... </title>
<META http-equiv="refresh" content="0;URL=index.php"> 
</head>
<body>

<?php 
include('koneksi.php');
$ID = $_GET['ID'];
$query = mysql_query("delete from temp where id='$id'") or die(mysql_error());


?>
<center>
<b> DATA BERHASIL DIHAPUS </b><br />
kembali ke tabel data .....<br/><br/><br/>

</center>
</body>
</html>