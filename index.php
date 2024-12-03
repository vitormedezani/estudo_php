
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <div id="paginas">
    <a aria-current="page" href="index.php"></a>
  </div>

  <!-- <div align="center">
    <form action="?page=verificar-jogador" method="post">
    <label>Teste</label>
    <input type="text" name="jogador">
    <button type="submit">Enviar</button>
  </form>
  </div> -->



  <pre align=center>

  <?php
  //declarando principais variaveis/array


  $array_jogador = array('', '', '');;

  $array_cpu = array('', '', '');

  $array_posicao = array('a1', 'a2', 'a3', 'b1', 'b2', 'b3', 'c1', 'c2', 'c3');

  $array_jogo = array('-', '-', '-', '-', '-', '-', '-', '-', '-');

  $jogada = '';

  //jg = jogo
  function ViewVelha($jg = array()) {
    echo "<h2 align=center>    A   B   C";
    echo "\n   +---+---+---+";
    echo "\n 1 |"; 

    for ($i=0; $i < 9; $i++) {
      
      echo " ".$jg[$i]." |";
      if ($i == 2) {
        echo "\n   |---+---+---|";
        echo "\n 2 |";
      } elseif ($i == 5) {
        echo "\n   |---+---+---|";
        echo "\n 3 |";
      } 
      }
    echo "\n   +---+---+---+</h2>";

    return;
  }



  function VerificarVencedor($v1 = array()) {

    switch (true) {
      case ($v1['a1'] == $v1['a2'] and $v1['a2'] == $v1['a3']):
        if (strtoupper($v1['a1']) == "X") {
          echo "<script>alert('Você ganhou!!')</script>";
          break;
        } elseif (strtoupper($v1['a1']) == "O") {
          echo "<script>alert('Você perdeu!!')</script>";
          break;
        }
      case ($v1['b1'] == $v1['b2'] and $v1['b2'] == $v1['b3']):
        if (strtoupper($v1['b1']) == "X") {
          echo "<script>alert('Você ganhou!!')</script>";
          break;
        } elseif (strtoupper($v1['b1']) == "O") {
          echo "<script>alert('Você perdeu!!')</script>";
          break;
        }
      case ($v1['c1'] == $v1['c2'] and $v1['c2'] == $v1['c3']):
        if (strtoupper($v1['c1']) == "X") {
          echo "<script>alert('Você ganhou!!')</script>";
          break;
        } elseif (strtoupper($v1['c1']) == "O") {
          echo "<script>alert('Você perdeu!!')</script>";
          break;
        }
        break;
      case ($v1['a1'] == $v1['b1'] and $v1['b1'] == $v1['c1']):
        if (strtoupper($v1['a1']) == "X") {
          echo "<script>alert('Você ganhou!!')</script>";
          break;
        } elseif (strtoupper($v1['a1']) == "O") {
          echo "<script>alert('Você perdeu!!')</script>";
          break;
        }
      case ($v1['a2'] == $v1['b2'] and $v1['b2'] == $v1['c2']):
        if (strtoupper($v1['a2']) == "X") {
          echo "<script>alert('Você ganhou!!')</script>";
          break;
        } elseif (strtoupper($v1['a2']) == "O") {
          echo "<script>alert('Você perdeu!!')</script>";
          break;
        }
      case ($v1['a3'] == $v1['b3'] and $v1['b3'] == $v1['c3']):
        if (strtoupper($v1['a3']) == "X") {
          echo "<script>alert('Você ganhou!!')</script>";
          break;
        } elseif (strtoupper($v1['a3']) == "O") {
          echo "<script>alert('Você perdeu!!')</script>";
          break;
        }
      case ($v1['a1'] == $v1['b2'] and $v1['b2'] == $v1['c3']):
        if (strtoupper($v1['a1']) == "X") {
          echo "<script>alert('Você ganhou!!')</script>";
          break;
        } elseif (strtoupper($v1['a1']) == "O") {
          echo "<script>alert('Você perdeu!!')</script>";
          break;
        }
      case ($v1['c1'] == $v1['b2'] and $v1['b2'] == $v1['a3']):
        if (strtoupper($v1['c1']) == "X") {
          echo "<script>alert('Você ganhou!!')</script>";
          break;
        } elseif (strtoupper($v1['c1']) == "O") {
          echo "<script>alert('Você perdeu!!')</script>";
          break;
        }
      case ($v1 != " "):
        echo "<script>alert('Empate!!')</script>";
        break;
      
    }
  }

  
  // call_user_func('VerificarVencedor', $array_jogo);


  switch (@$_REQUEST["page"]) {
    case 'verificar-jogador':
      include("verificar-jogador.php");
      break;
    case 'velha':
      include("velha.php");
      break;
    default:

      // call_user_func('ViewVelha', $array_jogo);

      echo "<div align=\"center\"><form action=\"?page=verificar-jogador\" method=\"post\"><h1>Como deseja jogar?</h1><br><button type=\"submit\" name=\"jogador\" value=\"X\">X</button><button type=\"submit\" name=\"jogador\" value=\"O\">O</button></form></div>";
      break;
  }
  



  ?>
  </pre>
</body>
</html>


