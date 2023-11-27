<div class="titulo">Atribuições</div>
<?php 
    $title = 'Atribuições';
    $numero = 10;
    echo '<br>' . $numero;
    $numero = $numero - 3;
    echo '<br>' . $numero;
    $numero = $numero + 1.5;
    echo '<br>' . $numero;
    $numero--;
    echo '<br>' . $numero;
    --$numero;
    echo '<br>' . $numero;
    $numero++;
    echo '<br>' . $numero;
    ++$numero;
    echo '<br>' . $numero;
    $numero -=5;
    echo '<br>' . $numero;
    $numero += 5;
    echo '<br>' . $numero;
    $numero *= 2;
    echo '<br>' . $numero;
    $numero /=4;
    echo '<br>' . $numero;
    $numero .= 3; // Apenas para concatenar!
    echo '<br>' . $numero;

    $texto = 'Texto';
    $texto = $texto . ' qualquer';
    echo '<br>' . $texto;
?>