<?php
include "conectar.php";
include "finalizar.php";
$valor = setvenda($valor);
$data = date('d/m/Y');
$endereco = $_GET['cep'];
$stmt = $con->prepare("insert into vendas(valor, endereco, data) values (?,?,?);");
$stmt->bind_param("sss", $valor, $endereco, $data);
$stmt->execute();
echo"finalizado!";
header("Location: form.html");

$stmt = $con->prepare("TRUNCATE TABLE carrinho;");
$stmt->execute();
?>