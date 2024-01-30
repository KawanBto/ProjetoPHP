<?php
include_once("header.php");



require_once("../model/conexao.php");
require_once("../model/bancodeconexao.php");
include_once("../view/header.php");
?>


<!-- inicio formulario -->
<div class="row g-3 align-items-center">
  <form class="row g-3" method="POST" action="#">
  <div class="col-auto" >
    <label for="inputEntrega" class="col-form-label">Digite o Nome</label>
  </div>
  <div class="col-auto">
    <input type="text" id="inputEntrega" class="form-control" name="numEntrega" aria-describedby="passwordHelpInline">
  </div>
  <div class="col-auto" >
  <button type="submit" class="btn btn-primary">Buscar</button>
  </div>
</div>
</form>
 
<table class="table">
  <thead>
    <tr>
      <th scope="col">Numeração da Entrega</th>
      <th scope="col">Cep do Cliente</th>
      <th scope="col">Produto</th>
    </tr>
  </thead>
   
  </thead>
  <tbody>
    <?php

      extract($_REQUEST,EXTR_OVERWRITE);
      $numEntrega = isset($numEntrega)?$numEntrega : "";
      if($numEntrega){
        $dados = buscarEntrega($conexao,$numEntrega);
        foreach($dados as $entrega) :
?>
<tr>
<th scope="row"><?php echo($entrega["numEntrega"]);?></th>
      <td><?=$entrega["cepContato"]?></td>
      <td><?=$entrega["nomeProduto"]?></td>
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