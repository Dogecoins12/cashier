
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>


<title>BTX-PRIME-JE-GOMPAR</title>
<style type='text/css'>
.wrapper{
   position: relative;
   float: left;
   left: 0px;
   width: 100%;
   margin-bottom: 10px;
   background-color: #ffffff
}
.left1{
   position: relative;
   float: left;
   left: 5px;
   width: 700px;
   height: 600px;
   background-color: #ffffff
}
.left2{
   position: relative;
   float: left;
   left: 15px;
   width: 300px;
   height: 600px;
   background-color: #ffffff
}
body {
   border-width: 0px;
   padding: 0px;
   margin: 0px;
   font-size: 90%;
   background-color: #e7e7de
}
</style>


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
table.tftable {table-layout:fixed; width:100%; word-break:break-all; font-size:12px;color:#333333;border-width: 1px;border-color: #729ea5;border-collapse: collapse;}
table.tftable th {font-size:12px;background-color:#acc8cc;border-width: 1px;padding: 8px; border-style: solid;border-color: #729ea5;}
table.tftable tr {background-color:#d4e3e5;}
table.tftable td {font-size:12px;border-width: 1px;padding: 4px;border-style: solid;border-color: #729ea5; text-align:right; }
</style>

<script><!-- 
/*
 ______________________________________________________
/¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯\
|          Another JavaScript from Uncle Jim           |
|                                                      |
|   Feel free to copy, use and change this script as   |
|        long as this part remains unchanged.          |
|                                                      |
|      Visit my website at http://www.jdstiles.com     |
|           for more scripts like this one             |
|                                                      |
|                     Created: 1996                    |
|              Last Updated: December, 2005            |
\______________________________________________________/
 ¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯
*/

function startCalc(){
interval = setInterval("calc()",1);}
function calc(){

two = document.autoSumForm.bayar.value; 
three = document.autoSumForm.subtotal.value; 
document.autoSumForm.kembali.value = (two * 1) - (three * 1);}
function stopCalc(){
clearInterval(interval);}
</script>


</head>
<body>
	<div class="wrapper">
	     <div class="left1">


<?php
include "koneksi.php";

	if (isset($_GET['op']))
	{
		if ($_GET['op'] == 'send')
		{
			date_default_timezone_set('Asia/Jakarta');
			$dmy = date('Ymd');
			$time1 = date('H:i:s');
			$stok	= $_POST['stok'] ;
			$laku		= $_POST['laku'] ;
			
			$select = "select nama,harga_jual,harga_beli from barang where stok='$stok' or nama='$stok'";
			$select_query = mysql_query($select);
 

			while($select_result = mysql_fetch_array($select_query))
			{

			$nama		= $select_result ['nama'];
			$harga_jual	= $select_result ['harga_jual'];
			$harga_beli	= $select_result ['harga_beli'];

			$query_insert = "INSERT INTO temp (nama,harga_beli,harga_jual,laku,kasir,tgl,waktu,stok) VALUES ('$nama','$harga_beli','$harga_jual','$laku','$kasir','$dmy','$time1','$stok')";
			$query_update = "UPDATE temp SET sub_total = harga_jual * jumlah WHERE nama='$nama' and laku='$laku'";

			$insert = mysql_query($query_insert);


			if ($insert) 
			{
			$update = mysql_query($query_update);
			}
			else 
			{
			echo "<p>GAGAL DITAMBAHKAN</p>";
			}
			}
		}
	}
	
	?>



<table id='tfhover'  class='tftable' border='1' align='center'> <col width='250'><col width='100'><col width='100'><col width='100'><col width='50'>

<tr>

<th style="text-align:center;">Nama</th>
<th style="text-align:center;">Harga</th>
<th style="text-align:center;">laku</th>
<th style="text-align:center;">Sub Total</th>

<th></th>
</tr>



	
<?php
$select = "SELECT id,sub_total,nama,harga_jual,laku FROM temp";
$select_query = mysql_query($select);


while($select_result = mysql_fetch_array($select_query))
{

$id 					= $select_result['id'] ;
$nama		 			= $select_result['nama'] ;
$harga_jual	 			= $select_result['harga_jual'] ;
$laku		 			= $select_result['laku'] ;
$sub_total	 			= $select_result['sub_total'] ;

echo "
<tr>

<td style='text-align:left;'>$nama</td>
<td style='text-align:right;'>$harga_jual</td>
<td style='text-align:center;'>$laku</td>
<td style='text-align:right;'>$sub_total</td>
<td>
<a href='delete-temp.php?id=$id'><img src='bin.png'></img></a>

</td>

</tr>

";
}

?>
</table>
<?php

$select1 = "SELECT SUM(laku) AS alllaku,SUM(sub_total) AS total FROM temp";
$select_query1 = mysql_query($select1);
while($select_result = mysql_fetch_array($select_query1))
{
$alllaku	 			= $select_result['alllaku'] ;
$total	 				= $select_result['total'] ;
echo"
<table id='tfhover'  class='tftable' border='1' align='center'> <col width='250'><col width='100'><col width='100'><col width='100'><col width='50'>
<tr>

<th style='text-align:center;'><br/></th>
<th style='text-align:center;'></th>
<th style='text-align:center;'>$alllaku</th>
<th style='text-align:right;'>$total</th>

<th><a href='deletetemp.php'><img src='bin.png'></img></a></th>
</tr>
</table>
";}?>

	     </div>
	     <div class="left2">
		 <div class="message warning">
<div class="contact-form">
	<div class="logo">
		<h1>Transaksi Penjualan</h1>
	</div>	
<!--- form --->
<a href='barang.php' target='_blank'>Cari barang</a><br/>

<form class="form" action="index.php?op=send" method="post" name="contact_form">
	<ul>
		<li>
			 <label></label>
			 
			 <input type="text"  name="laku"  placeholder="laku barang" required />	
													 
		 </li>
		<li>
			 <label></label>
			 <input type="text" id  name="stok"  placeholder="stok atau nama barang" required />	
													 
		 </li>
		 <li class="style">
		     <input type="Submit" value="<<< TAMBAHKAN" >
		 </li>
	</ul>	
	<div class="clear"></div>	
</form>

Pembayaran
<form name='autoSumForm' class="form" action="angkut.php" method="post">
<?php
$hitung = "SELECT SUM(sub_total) AS total1 FROM temp";
$select_hitung = mysql_query($hitung);
while($select_result = mysql_fetch_array($select_hitung))
{
$total1	 				= $select_result['total1'] ;
echo"
";}?>

<ul>
	<li>
	 <label></label>
	 <input type='text' name='bayar' required placeholder="Uang Pembayaran ?" style="text-align:right;" value='' size='23' maxlength='300'  onFocus="startCalc();" onBlur="stopCalc();" />
    </li>
<li>
<label></label>
<input type='text' name="subtotal"  style="text-align:right;" readonly value='<?php echo $total1 ;?>' size='23' maxlength='300' onFocus="startCalc();" onBlur="stopCalc();"  />
</li>
<li>
<label></label>
<input readonly type=text value='0' style="text-align:right;" name="kembali" readonly onchange='tryNumberFormat(this.form.thirdBox);'> 
</li>
 <li class="style">
<input type="Submit" value="SIMPAN" >
</li>
</ul>
<div class="clear"></div>	
</form>

   	


</div>

</div>
<div class="clear"></div>

	     </div>
	 </div> 
</body>
</html>
