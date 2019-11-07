<?php
error_reporting(E_ALL);
$host='webglota.com.br';
$db  ='webgl034_wa';
$us  ='webgl034_recruta';
$pw  ='recrutamento';
$dsn = "mysql:dbname=$db;host=$host";
$con = new PDO($dsn, $us, $pw);

$sql = "select * from fazenda";
$res = $con->prepare($sql);
$res->execute();
echo '<select name=fazenda_id>';
while ($reg = $res->fetch(PDO::FETCH_OBJ)){
	echo "<option value='$reg->id'>$reg->nome</option>";
	// print_r($reg);
}
echo '</select>';