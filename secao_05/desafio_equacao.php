<div class="titulo">Desafio Equação</div>
<?php 
    $blocoA = ((6 * (3 + 2)) ** 2) / (3 * 2);
    $blocoB = (((1 - 5) * (2 - 7)) / 2) ** 2;
    $base = 10 ** 3;
    $resultado = ($blocoA - $blocoB) ** 3 / $base;
    echo 'O resultado é ' . $resultado; 
?>