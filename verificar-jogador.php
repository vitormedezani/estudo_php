<div align=center>
  <h1>Verificando Jogador...</h1>

<?php 
  @$jogador_transicao = $_REQUEST["jogador"];
  //verificando se o jogador existe
  if (!isset($_REQUEST["jogador"])) {
    echo "<script>alert('Jogador não foi informado')</script>";
    echo "<script>location.href='?page='</script>";
  } else {
    echo "<form method=\"POST\"><h3>Você escolheu jogar como ".strtoupper($jogador_transicao)." </h3><input type=\"hidden\" name=\"jogador_transicao\" value=\"".strtoupper($jogador_transicao)."\"><br><button type=\"submit\" onclick=\"action='?page=velha'\">OK</button><button onclick=\"action='?page='\">Cancelar</button></form>";
  }
?>



</div>



<!-- // echo "<script>alert('Você escolheu jogar com " . strtoupper($_REQUEST["jogador"]) . "');</script>";
$html = "<form action=\"?page=velha\">";
$html .= "<label>Você escolheu jogar como $jogador_transicao </label>";
$html .= "<input type='hidden' name='jogador' value='$jogador_transicao'>";
$html .= "<buttom type=\"submit\">OK</buttom>";
$html .= "</form>";
echo "<br>";
// echo "<form action=\"?page=velha\">";
// echo "<label>Você escolheu jogar como ".@$jogador_transicao."</label>";
// echo "<input type='hidden' name='jogador' value='".@$jogador_transicao."'/>";
// echo "<buttom type='submit'>OK</buttom>";
// echo "</form>";

echo $html; -->
