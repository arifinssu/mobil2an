<?php ini_set('display_error', FALSE);
    $host="localhost";
    $user="root";
    $pass="";
    $db="mobil2an";
    error_reporting(E_ALL ^ E_DEPRECATED ^ E_NOTICE);
    $koneksi=mysql_connect($host, $user, $pass);
    $db=mysql_select_db($db);
?>