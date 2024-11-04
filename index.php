
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
<pre>

<?php


$message = "<h1 align=center>Fazendo um jogo da velha!!</h1>";
echo $message;
//declarando array da tabela/velha
$v = array(
  'a1' => "x",
  'a2' => " ",
  'a3' => " ",
  'b1' => " ",
  'b2' => " ",
  'b3' => " ",
  'c1' => " ",
  'c2' => " ",
  'c3' => " ",);

$jogador = "X";

echo "<script>alert('Você escolheu jogar com " . strtoupper($jogador) . "');</script>";

function ViewVelha($v1, $v2, $v3, $v4, $v5, $v6, $v7, $v8, $v9) {
  echo "<h2 align=center>     A   B   C";
  echo "\n   +---+--+----+";
  echo "\n 1 | $v1 | $v4 | $v7 |";
  echo "\n   |---+--+----|";
  echo "\n 2 | $v2 | $v5 | $v8 |";
  echo "\n   |---+--+----|";
  echo "\n 3 | $v3 | $v6 | $v9 |";
  echo "\n   +---+--+----+</h2>";

  return;
}


echo ViewVelha($v['a1'], $v['a2'], $v['a3'], $v['b1'], $v['b2'], $v['b3'], $v['c1'], $v['c2'], $v['c3']);





?>
</pre>
</body>
</html>


