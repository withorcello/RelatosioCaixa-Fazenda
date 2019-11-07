<?php
$host = "webglota.com.br";
$BDname = "webgl034_wa";
$user = "webgl034_recruta";
$password = "recrutamento";
$con = mysqli_connect($host,$user,$password,$BDname);
if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());
?>