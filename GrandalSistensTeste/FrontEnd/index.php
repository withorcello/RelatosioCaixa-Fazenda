<?php
include('../BackEnd/conexao.php');
$sql = "SELECT * FROM fazenda";
$query = $con->query($sql);
echo '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">';
echo '<nav class="navbar navbar-dark bg-dark">
<a class="navbar-brand" style="color: white;">Fazenda</a>
  <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
      <a class="nav-link" href="CaixaIndex.php">Caixa</a>
    </li>
  </ul>
<button class="btn btn-light my-2 my-sm-0" data-toggle="modal" type="button" data-target="#Insert">New</button>
</nav>
<div class="modal fade " id="Insert" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Inserir novo registro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="../BackEnd/Insert.php" method= "POST">
          <label>Codigo: </label>
          <input name="codigo" type="text" class="form-control" placeholder="Código" style="width:10%"/><br>
          <div class="form-row">
            <div class="col-9">
              <label>Nome: </label>
              <input name="nome" type="text" class="form-control" placeholder="Insira um nome"/><br>
            </div>
            <div class="col">
              <label>CPF/CNPJ: </label>
              <input name="cpf" type="text" class="form-control" placeholder="Insira um CPF"/><br>
            </div>
          </div>
          <div class="form-row">
            <div class="col">
              <label>Registro de usuário: </label>
              <input name="ru" type="text" class="form-control" placeholder="Insira o registro de usuário"/><br>
            </div>
            <div class="col">
              <label>Registro de sítio: </label>
              <input name="rs" type="text" class="form-control" placeholder="Insira o registro do sítio"/> <br>
            </div>
          </div>   
          <div class="form-row">
            <div class="col-2">
              <label>Inscrição Estadual: </label>
              <input name="InsEs" type="text" class="form-control" placeholder="Insira a inscrição"/><br>
            </div>
          </div>
          <div class="form-row">
            <div class="col-1">
              <label>UF: </label>
              <input name="uf" type="text" class="form-control"/><br>
            </div>
            <div class="col">
              <label>Cidade: </label>
              <input name="cidade" type="text" class="form-control" placeholder="Insira a cidade"/><br>
            </div>
          </div>
          <div class="form-row">
            <div class="col-3">
              <label>CEP: </label>
              <input name="cep" type="text" class="form-control" placeholder="Insira o CEP"/><br>
            </div>
            <div class="col">
              <label>Bairro: </label>
              <input name="bairro" type="text" class="form-control" placeholder="Insira o bairro"/><br>
            </div>
          </div>
          <div class="form-row">
            <div class="col">
              <label>Endereço: </label>
              <input name="endereco" type="text" class="form-control" placeholder="Insira o endereço"/><br>
            </div>
            <div class="col-1">
              <label>Número: </label>
              <input name="numero" type="text" class="form-control"/><br>
            </div>
          </div>
          <div class="form-row">
            <div class="col">
              <label>Complemento: </label>
              <textarea name="comple" class="form-control"/></textarea><br>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            <button type="submit" class="btn btn-primary" id="save">Salvar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>';
echo '<table class="table table-striped" style="font-size:80%">
          <thead class="thead-dark" align="center">
            <th>Código</th>
            <th>Nome</th>
            <th>CPF/CNPJ</th>
            <th>Insc. Estad.</th>
            <th>CEP</th>
            <th>Endereço</th>
            <th>Número</th>
            <th>Complemento</th>
            <th>Bairro</th>
            <th>Cidade</th>
            <th>UF</th>
            <th>Reg. de usuário</th>
            <th>Data de Regi.</th>
            <th>Regi. de sítio</th>
            <th>Operação</th>
          </thead>';
while ($dados = $query->fetch_array()) {
  $id = $dados['id'];
  echo '<tr>'.
  '<td>'.$dados['codigo'].'</td>'.
  '<td>'.$dados['nome'].'</td>'.
  '<td>'.$dados['cpf_cnpj'].'</td>'.
  '<td>'.$dados['inscr_estadual'].'</td>'.
  '<td>'.$dados['cep'].'</td>'.
  '<td>'.$dados['endereco'].'</td>'.
  '<td>'.$dados['num'].'</td>'.
  '<td>'.$dados['compl'].'</td>'.
  '<td>'.$dados['bairro'].'</td>'.
  '<td>'.$dados['cidade'].'</td>'.
  '<td>'.$dados['uf'].'</td>'.
  '<td>'.$dados['regusr'].'</td>'.
  '<td>'.$dados['regdta'].'</td>'.
  '<td>'.$dados['regsit'].'</td>'.
  "<td><a href='Edita.php?id=$id'><button type='button' href='Edita.php?id=$id' class='btn btn-primary'>Edit</button></a></td>".
'</tr>';
}
echo '</table>';
echo '<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="../JS/script.js"></script>';
?>