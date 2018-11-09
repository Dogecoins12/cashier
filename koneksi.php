<?php
   $hostname  = "localhost";
   $username  = "Btx";
   $password  = "Rinaldi@11";
   $dbname    = "djioqtvf";
   $db = mysql_connect($hostname, $username, $password) or die 

('Koneksi Gagal! ');
   mysql_select_db($dbname);
?>