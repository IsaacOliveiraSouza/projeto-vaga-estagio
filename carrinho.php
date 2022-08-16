<?php
include "conectar.php";
$stmt = $con->prepare("SELECT * FROM carrinho");
$stmt->execute();
$resultado = $stmt->get_result();
$valortotal = 0;
while($linha = $resultado->fetch_object()){
    $stmt = $con->prepare("SELECT * FROM produtos WHERE referencia=?");
    $stmt->bind_param("i", $linha->idproduto);
    $stmt->execute();
    $resultado2 = $stmt->get_result();
    while($linha2 = $resultado2->fetch_object()){
        $valortotal += $linha2->valor;
        $print = "
            <div class='elementos_buscas'>
            <tr>
            <td><strong>{$linha2->nome}</strong></td>

            <p>R$ $linha2->valor</p>
            <td>Código do produto:</p><p>{$linha2->referencia}</td>
            <td style='text-align: right;'>Fornecedores: $linha2->fornecedor</td>
            <input type='hidden' value='$linha2->referencia' name='id'>
            <a href='remover.php?id=$linha->idcarrinho' class='linkbtn'>Remover</a>
            </tr>
            </div>
        ";
    }
    echo $print;
}
echo "<h3>Valor total: R$ $valortotal</h3>";
echo "<input type='hidden' name='preco' value='$valortotal'>";
?>