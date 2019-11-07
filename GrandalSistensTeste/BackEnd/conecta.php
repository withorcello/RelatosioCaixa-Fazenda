<?php
error_reporting(E_ALL);
$host='webglota.com.br';
$db  ='webgl034_wa';
$us  ='webgl034_recruta';
$pw  ='recrutamento';
$dsn = "mysql:dbname=$db;host=$host";
$con = new PDO($dsn, $us, $pw);

$sql = "SELECT * FROM caixa";
$res = $con->prepare($sql);
$res->execute();
echo '<pre>';
while ($reg = $res->fetch(PDO::FETCH_OBJ)){
	print_r($reg);
}
echo '</pre>';