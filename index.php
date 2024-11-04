
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


$message = "<h2 align=center>Fazendo um jogo da velha!!</h2>";
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

printf("Você escolheu jogar com " . strtoupper($jogador));

function ViewVelha($v1) {
  echo "<p>     A   B   C";
  echo "\n   +---+--+----+";
  echo "\n 1 | $v1 | $v1 | $v1 |";
  echo "\n   |---+--+----|";
  echo "\n 2 | $v1 | $v1 | $v1 |";
  echo "\n   |---+--+----|";
  echo "\n 3 | $v1 | $v1 | $v1 |";
  echo "\n   +---+--+----+</p>";

  return;
}


echo array_map('ViewVelha', $v);

// echo ViewVelha($v['a1'], $v['a2'], $v['a3'], $v['b1'], $v['b2'], $v['b3'], $v['c1'], $v['c2'], $v['c3']);





?>
</pre>
</body>
</html>


