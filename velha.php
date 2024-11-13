
<?php 

  // criando função para não atualizar o valor recebido do post ao recarregar a página
  function ReceberVarPost() {
     $jogador_verificado = $_REQUEST["jogador_transicao"];
     return $jogador_verificado;
  }

  // echo "testando" . ReceberVarPost();
  

?>

<!-- recebendo o valor do post SOMENTE ao CARREGAR a página pela PRIMEIRA vez  -->
<div onload="<?php $jogador = ReceberVarPost(); ?>">  
<?php

  echo "<h1 align=center> Testando Jogador  ".$jogador."</h1>";

  // criando a array do jogador
  $array_jogador = array('', '', '');
  for ($i=0; $i < 9; $i++) { 
    $array_jogador[$i] =  $jogador;
  }

  // criando a array da máquina

  $array_cpu = array('', '', '');

  if ($jogador == "X") { 
    for ($i=0; $i < 9; $i++) { 
      $array_cpu[$i] =  "O";
    }
  } elseif ($jogador == "O") {
    for ($i=0; $i < 9; $i++) { 
      $array_cpu[$i] =  "X";
    }
  }

  echo "Jogador";
  var_dump($array_jogador);
  echo "Máquina";
  var_dump($array_cpu);
  // call_user_func('ViewVelha', $v);

  function Teste($array1 = array(), $array2 = array()) {
    $array1['a1'] = $array2[0];
  }
?>

<form method="post">
  <ul>
    <li><input type="radio" name="a1" id="a1" value="a1">a1</li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
  </ul>
  <button type="submit" onclick="<?php call_user_func('Teste', $v, $array_jogador); ?>">OK</button>
</form>

</div>