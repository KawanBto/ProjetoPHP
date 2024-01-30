<?php
include_once("header.php");



require_once("../Model/conexao.php");
require_once("../Model/bancodeconexao.php");
include_once("../View/header.php");
?>


<!-- inicio formulario -->
<div class="row g-3 align-items-center">
  <form class="row g-3" method="POST" action="#">
  <div class="col-auto" >
    <label for="inputcodigo" class="col-form-label">Digite o Nome do Cliente</label>
  </div>
  <div class="col-auto">
    <input type="text" id="inputcodigo" class="form-control" name="nomeContato" aria-describedby="passwordHelpInline">
  </div>
  <div class="col-auto" >
  <button type="submit" class="btn btn-primary">Buscar</button>
  </div>
</div>
</form>
 
<table class="table">
  <thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Nome</th>
      <th scope="col">Fone</th>
      <th scope="col">Alterar</th>
    </tr>
  </thead>
   
  </thead>
  <tbody>
    <?php

      extract($_REQUEST,EXTR_OVERWRITE);
      $nomeContato = isset($nomeContato)?$nomeContato : "";
      if($nomeContato){
        $dados = buscarContato($conexao,$nomeContato);
        foreach($dados as $contatos) :
    ?>
    <tr>
      <th scope="row"><?php echo($contatos["idContato"]);?></th>
      <td> <?php echo($contatos["nomeContato"])?> </td>
      <td><?=$contatos["foneContato"]?></td>
      <td><a class="btn btn-primary" href="funcAlterarCliente.php?idContato=<?=$contatos["idContato"]?>">Alterar</td>
    </tr>
    <?php endforeach;
    }
    ?>
  </tbody>
</table>
</div>
<!-- Fim da Tabela-->
 
<?php
include_once("footer.php");
?>