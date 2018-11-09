<?php
include "koneksi.php"; 
$bayar = $_POST['bayar'] ;
$kembali = $_POST['kembali'] ;
$query_insert ="INSERT INTO belanja (nama,harga_beli,harga_jual,jumlah,sub_total,kasir,tgl,waktu) SELECT nama,harga_beli,harga_jual,jumlah,sub_total,kasir,tgl,waktu FROM temp";




$insert= mysql_query ($query_insert);

$transaksi= mysql_query ($query_transaksi);

if ($insert)
{

	$query = mysql_query("delete from temp ") or die(mysql_error());
	$query2 = mysql_query("delete from temp_bayar ") or die(mysql_error());
	 echo "<META HTTP-EQUIV=Refresh CONTENT='0; URL=index.php'>";
}	
else
{ echo "gagal ..."; }


?>