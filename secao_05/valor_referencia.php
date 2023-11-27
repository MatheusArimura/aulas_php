<div class="titulo">Valor vs. Referência</div>
<?php
    $variavel = 'Valor Inicial';
    echo $variavel;

    $variavelValor = $variavel;
    echo "<br>$variavelValor";
    $variavelValor = 'Novo Valor';
    echo "<br>$variavelValor";

    // Atribuição por referência
    $variavelReferencia = &$variavel;
    $variavelReferencia = 'Mesma Referencia';
    echo "<br>$variavel $variavelReferencia";
?>