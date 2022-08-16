<?php
include "conectar.php";
$id = $_GET['referencia'];
$stmt = $con->prepare("insert into carrinho(idproduto) values (?);");
$stmt->bind_param("i", $id);
$stmt->execute();
echo"adicionado ao carrinho";
header("Location: form.html");
?>