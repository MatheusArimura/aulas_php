<div class="titulo">Variáveis</div>
<?php
    $numeroA = 13;
    echo $numeroA;
    echo '<br>', var_dump($numeroA);

    $a = 3;
    $b = 16;
    $soma = $a + $b;
    echo '<br>', $soma;
    echo '<br>', isset($soma);

    $variavel = 10;
    echo '<br>', $variavel;

    $variavel = 'Agora sou uma string!';
    echo '<br>', $variavel;

    // Nomes de variáveis
    $var = 'válido';
    $var2 = 'válido';
    $VAR3 = 'válido';
    $_var_4 = 'válido';
    $vár5 = 'válido'; // Evitar
    // $6var = 'inválido';
    // $%var7 = 'inválido';
    // $var8% = 'inválido';
?>