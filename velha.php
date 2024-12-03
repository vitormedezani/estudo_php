
<?php 

  // criando função para não atualizar o valor recebido do post ao recarregar a página
  // $jogador = array("teste1", "teste2");
  function ReceberJogadorLoop() {
    if (isset($_REQUEST["jogador_transicao"])) {
      // definindo a array do jogador
      $resultado = array('', '', '');
      for ($i=0; $i < 9; $i++) { 
        $resultado[$i] =  ($_REQUEST["jogador_transicao"]);
      }
      return $resultado;

    } elseif (!isset($_REQUEST["jogador_transicao"])) {
      $array = array($_REQUEST["jogador_loop"]);
      $resultado = explode(" ", $array[0]);
      return $resultado;
    }
  }

  function ReceberJogoLoop($array = array()) {
    if (!isset($_REQUEST["jogo_loop"])) {
      $resultado = $array;
    }
    if (isset($_REQUEST["jogo_loop"])) {
      $array2 = $_REQUEST["jogo_loop"];
      $resultado = explode(" ", $array2);
      $resultado = "TESTE";
    }
    return $resultado;
  }

  // echo "testando" . ReceberVarPost();
  

?>

<!-- recebendo o valor do post SOMENTE ao CARREGAR a página pela PRIMEIRA vez  -->
<div onload="<?php $array_jogador = ReceberJogadorLoop(); $array_jogo = ReceberJogoLoop($array_jogo); if(@isset($_REQUEST["jogada"])) { $jogada = $_REQUEST["jogada"]; } ?>">  
<?php

var_dump($array_jogador);

  echo "<h1 align=center> Testando Jogador  ".$array_jogador[0]."</h1>";

  if ($jogada != '' ) {
    $array_jogo = @call_user_func('RealizarJogada', $array_posicao, $jogada, $array_jogador);
  }
  
  // include __DIR__.'/ver-velha.php';
  
  
  // echo "<h2 align=center>    A   B   C";
  //   echo "\n   +---+---+---+";
  //   echo "\n 1 | ".$array_jogo[0]." | ".$array_jogo[3]." | ".$array_jogo[6]." |";
  //   echo "\n   |---+---+---|";
  //   echo "\n 2 | ".$array_jogo[1]." | ".$array_jogo[4]." | ".$array_jogo[7]." |";
  //   echo "\n   |---+---+---|";
  //   echo "\n 3 | ".$array_jogo[2]." | ".$array_jogo[5]." | ".$array_jogo[8]." |";
  //   echo "\n   +---+---+---+</h2>";
  
  
  call_user_func('ViewVelha', $array_jogo);
  
  // definindo a array da máquina
  
  if ($array_jogador[0] == "X") { 
    for ($i=0; $i < 9; $i++) { 
      $array_cpu[$i] =  "O";
    }
  } elseif ($array_jogador[0] == "O") {
    for ($i=0; $i < 9; $i++) { 
      $array_cpu[$i] =  "X";
    }
  }
  
  echo "<h2>Jogador</h2>";
  var_dump($array_jogador);
  echo "<h2>Máquina</h2>";
  var_dump($array_cpu);
  echo "<h2>JOGO DA VELHA</h2>";
  var_dump($array_jogo);
  // call_user_func('ViewVelha', $v);

  //arr_psc = ARRAY da posição jogada = posição passada no POST pelo usuário jgdr = jogador
  function RealizarJogada($arr_psc = array(), $jogada, $jgdr = array()) {

    for ($i=0; $i < 9; $i++) { 
      if ($arr_psc[$i] == $jogada) {
        $resultado = [ $jgdr[$i] ];
      }
    }
    return $resultado;
  }
?>

<form action="" method="POST">
  <input type="hidden" name="jogador_loop" value= "<?php for ($i=0;  $i < 9 ; $i++)  { 
    if ($i == 8) {
      echo $array_jogador[$i];
    } else {
      echo $array_jogador[$i] . " ";
    }
  } ?>" />
  <input type="hidden" name="jogo_loop" value= "<?php for ($i=0;  $i < 9 ; $i++)  { 
    if ($i == 8) {
      echo $array_jogo[$i];
    } else {
      echo $array_jogo[$i] . " ";
    }
  } ?>" />
  <ul>
    <li><input type="radio" name="jogada" id="a1" value="a1">a1</li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
  </ul>
  <button type="submit">OK</button>
</form>

<?php
  
?>

</div>