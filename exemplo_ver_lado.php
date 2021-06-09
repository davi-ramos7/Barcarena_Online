<?php
include_once("conexao.php");
$max = 3; // define a quantidade de linha
if(!$pagina){
$pagina = 1;
}
$inicio = $pagina -1;
$inicio = $inicio * $max;

$consulta = "SELECT * FROM lista_de_empresas";

$query = mysqli_query($con, "$consulta LIMIT $inicio,$max");
$todos = mysqli_query($con, $consulta);
$total = mysqli_num_rows($todos);

$tp = $total / $max;
$regLinha = 5;//VOCE ESCOLHE O NUMERO DE REGISTRO POR LINHA
  $i = ceil($max / $regLinha);
  $j = 1;
  $z = 0;
echo "         
<table id='teste' border=1><tr>
  ";
while($x = mysqli_fetch_array($query)){
echo "<td>".$x['nome']."</td><td>".$x['atividade']."</td>";
    $z++;
    if($z == $regLinha and $j < $i){
      echo "</tr><tr>";
      $z = 0;
      $j++;
    }
    if($z == $regLinha and $j == $i){
      echo "</tr>";
    }
}
  
echo "</table>";
  
$prox = $pagina +1;
$ante = $pagina -1;

if($pagina>0){
echo "<a href='?pagina=$ante'>Anterior </a> ";
}

echo "|";

if($pagina<$tp){
echo "<a href='?pagina=$prox'>Próxima </a>";
}
?>