<?php
include('../BackEnd/conexao.php');
$sql = "SELECT caixa.id, fazenda.nome, caixa.data, caixa.hist, caixa.valor, caixa.nat_dc, caixa.regusr, caixa.regsit, caixa.id_faz, fazenda.id FROM fazenda, caixa WHERE fazenda.id = caixa.id_faz;";
$query = $con->query($sql);
$sql2 = "SELECT * FROM fazenda;";
$query2 = $con->query($sql2);
echo '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">';
echo '<nav class="navbar navbar-dark bg-dark">
<a class="navbar-brand" style="color: white;">Caixa</a>
<ul class="navbar-nav mr-auto">
  <li class="nav-item active">
    <a class="nav-link" href="index.php">Fazenda</a>
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
        <form action="../BackEnd/InsertCaixa.php" method= "POST">
          <label>Codigo: </label>
          <input name="codigo" type="text" class="form-control" placeholder="Código" style="width:10%"/><br>
          <div class="form-row">
            <div class="col">
              <label for="inputState">Fazenda</label>
              <select id="inputState" class="form-control">
                <option></option>';
                while ($dados2 = $query2->fetch_array()) {
                  echo '<option>'.$dados2['nome'].'</option>';
                }
        echo '</select>              
            </div>
            <div class="col-2">
              <label>Valor: </label>
              <input name="valor" type="text" class="form-control"/><br>
            </div>
            <div class="col-3">
              <label>Data: </label>
              <input name="date" type="text" class="form-control"/><br>
            </div>
          </div>
          <div class="form-row">
            <div class="col">
              <label>Registro de usuário: </label>
              <input name="ru" type="text" class="form-control"/><br>
            </div>
            <div class="col">
              <label>Registro de sítio: </label>
              <input name="rs" type="text" class="form-control"/> <br>
            </div>
          </div>   
          <div class="form-row">
            <div class="col">
              <label>Historico:</label>
              <input name="hist" type="text" class="form-control"/><br>
            </div>
            <div class="col-1">
              <label>Nat. Dc.</label>
              <input name="nat_dc" type="text" class="form-control"/><br>
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
            <th>Fazenda</th>
            <th>Data</th>
            <th>Historico</th>
            <th>Valor</th>
            <th>Nat. Dc.</th>
            <th>Registro de Usuário</th>
            <th>Registro de Sítio</th>
            <th>Operação</th>
          </thead>';
while ($dados = $query->fetch_array()) {
  $id = $dados['id'];
  echo '<tr>'.
  '<td>'.$dados['nome'].'</td>'.
  '<td>'.$dados['data'].'</td>'.
  '<td>'.$dados['hist'].'</td>'.
  '<td>'.$dados['valor'].'</td>'.
  '<td align="center">'.$dados['nat_dc'].'</td>'.
  '<td align="center">'.$dados['regusr'].'</td>'.
  '<td align="center">'.$dados['regsit'].'</td>'.
  "<td><a href='Edita.php?id=$id'><button type='button' href='Edita.php?id=$id' class='btn btn-primary'>Edit</button></a></td>".
'</tr>';
}
echo '</table>';
echo '<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="../JS/script.js"></script>';
?>