
<?php
error_reporting(0); 
date_default_timezone_set("America/Sao_Paulo");
setlocale(LC_ALL, 'pt_BR');

$host  = "localhost";
$login = "root";
$senha = "7586";
$banco = "cadastro";

$conn = new mysqli($host, $login, $senha, $banco);
mysqli_set_charset($conn,"utf8");
if ($conn->connect_error) {
  die("Sem acesso ao banco de dados !");
}
?>
