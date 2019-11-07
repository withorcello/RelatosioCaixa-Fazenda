<?php
include('conexao.php');
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

$sql = "INSERT INTO fazenda (codigo,nome,cpf_cnpj,cep,inscr_estadual,endereco,num,compl,bairro,cidade,uf,regusr,regsit) VALUES('$codigo','$nome','$cpf','$InsEs','$cep','$ende','$numero','$comple','$bairro','$cidade','$uf','$RU','$RS')";
if (mysqli_query($con,$sql)) {
    echo "Inserido com sucesso!";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
$con->close();
header('Location: ../FrontEnd/index.php');

?>