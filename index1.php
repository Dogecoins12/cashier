<?php
session_start();
if(!isset($_SESSION['username'])) {
   header('location:login1.php'); 
} else { 
   $username = $_SESSION['username']; 
}
?>

<title>GOMPAR-Prime-BTX-JE Sukses Login</title>
<div align='center'>
   Selamat Datang, <b><?php echo $username;?></b> <a href="logout.php"><b>Logout</b></a>
</div>
