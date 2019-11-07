<?php
include('../BackEnd/conexao.php');
$id = $_GET['id'];
$sql = "SELECT * FROM fazenda WHERE id = $id";
$query = $con->query($sql);
$dados = $query->fetch_array();
echo '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" style="color: white;">Edição de Fazenda</a>
      </nav><br>
      <div class="container-fluid">
        <form action="../BackEnd/Edit.php" method= "POST">
          <label>Codigo: </label>
          <input name="codigo" type="number" class="form-control" value='.$dados['codigo'].' style="width:10%"/><br>
          <div class="form-row">
            <div class="col-9">
              <label>Nome: </label>
              <input name="nome" type="text" value='.$dados['nome'].' class="form-control"/><br>
            </div>
            <div class="col">
              <label>CPF/CNPJ: </label>
              <input name="cpf" type="text" value='.$dados['cpf_cnpj'].' class="form-control"/><br>
            </div>
          </div>
          <div class="form-row">
            <div class="col">
              <label>Registro de usuário: </label>
              <input name="ru" type="text" value='.$dados['regusr'].' class="form-control"/><br>
            </div>
            <div class="col">
              <label>Registro de sítio: </label>
              <input name="rs" type="text" value='.$dados['regsit'].' class="form-control"/> <br>
            </div>
          </div>   
          <div class="form-row">
            <div class="col-2">
              <label>Inscrição Estadual: </label>
              <input name="InsEs" type="text" value='.$dados['inscr_estadual'].' class="form-control"/><br>
            </div>
          </div>
          <div class="form-row">
            <div class="col-1">
              <label>UF: </label>
              <input name="uf" type="text" value='.$dados['uf'].' class="form-control"/><br>
            </div>
            <div class="col">
              <label>Cidade: </label>
              <input name="cidade" type="text" value='.$dados['cidade'].' class="form-control"/><br>
            </div>
          </div>
          <div class="form-row">
            <div class="col-3">
              <label>CEP: </label>
              <input name="cep" type="text" value='.$dados['cep'].' class="form-control"><br>
            </div>
            <div class="col">
              <label>Bairro: </label>
              <input name="bairro" type="text" value='.$dados['bairro'].' class="form-control"/><br>
            </div>
          </div>
          <div class="form-row">
            <div class="col">
              <label>Endereço: </label>
              <input name="endereco" type="text" value='.$dados['endereco'].' class="form-control"/><br>
            </div>
            <div class="col-1">
              <label>Número: </label>
              <input name="numero" type="text" value='.$dados['num'].' class="form-control"/><br>
            </div>
          </div>
          <div class="form-row">
            <div class="col">
              <label>Complemento: </label>
              <textarea name="comple" value='.$dados['compl'].' class="form-control"/></textarea><br>
            </div>
          </div>
          <div class="modal-footer">
            <div class="col-1">
              <input class="form-control" type="text" value='.$dados['id'].' readonly>
            </div>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            <button type="submit" class="btn btn-primary">Editar</button>
          </div>
        </form>
      </div>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <script src="../JS/script.js"></script>
      ';

  