
<?php 

  // criando função para não atualizar o valor recebido do post ao recarregar a página
  $jogada = array("teste1", "teste2");
  function ReceberVarPost() {
    if (isset($_REQUEST["jogador_transicao"]) == 1) {
      $resultado = array($_REQUEST["jogador_transicao"], " ");
      return $resultado;

    } elseif (isset($_REQUEST["jogador_loop"]) == 1) {
      $resultado = array($_REQUEST["jogador_loop"], $_REQUEST["posicao"]);
      return $resultado;
    }
     
  }

  // echo "testando" . ReceberVarPost();
  

?>

<!-- recebendo o valor do post SOMENTE ao CARREGAR a página pela PRIMEIRA vez  -->
<div onload="<?php $jogada = ReceberVarPost() ?>">  
<?php

var_dump($jogada);

  echo "<h1 align=center> Testando Jogador  ".$jogada[0]."</h1>";
  

  // criando a array do jogador
  $array_jogador = array('', '', '');
  for ($i=0; $i < 9; $i++) { 
    $array_jogador[$i] =  $jogada[0];
  }

  // criando a array da máquina

  $array_cpu = array('', '', '');

  if ($jogada[0] == "X") { 
    for ($i=0; $i < 9; $i++) { 
      $array_cpu[$i] =  "O";
    }
  } elseif ($jogada[0] == "O") {
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

<form action="" method="post">
  <input type="hidden" name="jogador_loop" value="<?php echo $jogada[0]; ?>">
  <ul>
    <li><input type="radio" name="posicao" id="a1" value="a1">a1</li>
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

<?php var_dump($v); ?>

</div>