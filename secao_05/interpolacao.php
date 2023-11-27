<div class="titulo">Interpolação</div>
<?php
    $numero = 10;
    echo $numero;
    echo '<br> $numero';
    echo "<br> $numero + 1";

    $texto = "A sua note é: $numero";
    echo "<br> $texto";

    $objeto = 'caneta';
    echo "<br>Eu tenho 5 $objeto";
    echo "<br>Eu tenho 5 {$objeto}s";
    echo "<br>Eu tinha 5 { $objeto}s, mas perdi 3 {$objeto }s"; // Não usar espaço no começo da chave
?>