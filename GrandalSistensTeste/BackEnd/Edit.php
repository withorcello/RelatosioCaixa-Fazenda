<?php
include('conexao.php');
$id = $_POST['id'];
$codigo = $_POST['codigo'];
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$cep = $_POST['cep'];
$InsEs = $_POST['InsEs'];
$ende = $_POST['endereco'];
$numero = $_POST['numero'];
$comple = $_POST['comple'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$uf = $_POST['uf'];
$RU = $_POST['ru'];
$RS = $_POST['rs'];
$sql = "UPDATE fazenda SET codigo = '$codigo',nome = '$nome',cpf_cnpj = '$cpf',cep = '$cep',inscr_estadual = '$InsEs',endereco = '$ende',num = '$numero',compl = '$comple',bairro = '$bairro',cidade = '$cidade',uf = '$uf',regusr = '$ru',regsit = '$RS' WHERE id = $id";
if (mysqli_query($con,$sql)) {
    echo "Alterado com sucesso!";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
$con->close();
?>