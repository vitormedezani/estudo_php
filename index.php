
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


  $jogador = "X";

  $cpu = "O";

  $v = array(
    'a1' => "$jogador",
    'a2' => " ",
    'a3' => " ",
    'b1' => " ",
    'b2' => "$jogador",
    'b3' => " ",
    'c1' => " ",
    'c2' => " ",
    'c3' => "$jogador");

  function ViewVelha($v1 = array()) {
    echo "<h2 align=center>    A   B   C";
    echo "\n   +---+---+---+";
    echo "\n 1 | ".$v1['a1']." | ".$v1['b1']." | ".$v1['c1']." |";
    echo "\n   |---+---+---|";
    echo "\n 2 | ".$v1['a2']." | ".$v1['b2']." | ".$v1['c2']." |";
    echo "\n   |---+---+---|";
    echo "\n 3 | ".$v1['a3']." | ".$v1['b3']." | ".$v1['c3']." |";
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

  //echo ViewVelha($v['a1'], $v['a2'], $v['a3'], $v['b1'], $v['b2'], $v['b3'], $v['c1'], $v['c2'], $v['c3']);
  call_user_func('ViewVelha', $v);
  call_user_func('VerificarVencedor', $v);


  switch (@$_REQUEST["page"]) {
    case 'verificar-jogador':
      include_once("verificar-jogador.php");
      break;
    case 'velha':
      include_once("velha.php");
      break;
    default:
      echo "<div align=\"center\"><form action=\"?page=verificar-jogador\" method=\"post\"><h1>Como deseja jogar?</h1><br><button type=\"submit\" name=\"jogador\" value=\"X\">X</button><button type=\"submit\" name=\"jogador\" value=\"O\">O</button></form></div>";
      break;
  }
  



  ?>
  </pre>
</body>
</html>


