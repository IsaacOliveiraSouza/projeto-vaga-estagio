<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="stylee.css">
    <title></title>
</head>
<body>

<div class="cep">
<form method="get" action="addcompra.php">
        <label>Cep:
        <input name="cep" type="text" id="cep" value="" size="10" maxlength="9"
               onblur="pesquisacep(this.value);" /></label><br />
        <label>Rua:
        <input name="rua" type="text" id="rua" size="60" /></label><br />
        <label>Bairro:
        <input name="bairro" type="text" id="bairro" size="40" /></label><br />
        <label>Cidade:
        <input name="cidade" type="text" id="cidade" size="40" /></label><br />
        <label>Estado:
        <input name="uf" type="text" id="uf" size="2" /></label><br />
        <input type="submit" value="finalizar">
</form>
</div>

        <br>
        <script src="endereco.js"></script>
</body>
</html>

<?php
include "conectar.php";
include "carrinho.php";
$valorCompra = $valortotal;
 function setvenda($valor){
        global $valorCompra;
        $valor = $valorCompra;
        return $valor;
}
?>