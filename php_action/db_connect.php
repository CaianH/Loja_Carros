<?php
//DATABASE CONECTION

$servername = "192.168.200.23:3002";
$username = "root";
$password = "root";
$db_name = "Loja_Carros";

$connect = mysqli_connect($servername,$username,$password,$db_name);
mysqli_set_charset($connect, "utf8");
if(mysqli_connect_error()):
  echo "Erro de conexão".mysqli_connect_error();
endif;
?>
