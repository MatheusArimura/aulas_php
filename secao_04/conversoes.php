<div class="titulo">Conversões</div>
<?php

use function PHPSTORM_META\map;

    echo is_int(PHP_INT_MAX);

    // int para float
    echo '<p>Int para Float</p>';
    echo var_dump(PHP_INT_MAX + 1);
    echo '<br>', var_dump(1 + 1.0);
    echo '<br>', var_dump((float) 3);

    // float para int
    echo '<p>Float para Int</p>';
    echo var_dump((int) 6.8);
    echo '<br>', var_dump(intval(2.99));
    echo '<br>', var_dump((int) round(2.8));

    //operações com string
    echo '<p>String</p>';
    echo var_dump(3 + '2');
    echo '<br>', var_dump('3' + 2);
    echo '<br>', var_dump('3' . 2);
    echo '<br>', is_string('3' . 2);
    echo '<br>', is_string('3' + 2);
    // echo '<br>', var_dump(1 + 'cinco'); // Erro
    // echo '<br>', var_dump(1 + '5 cinco'); // Erro
    // echo '<br>', var_dump(1 + 'cinco 5'); // Erro
    // echo '<br>', var_dump(1 + '2 + 5'); // Ele vai ler somente o primeiro número da string
    echo '<br>', var_dump(1 + '3.2');
    echo '<br>', var_dump(1 + '-3.2e2');
    echo '<br>', var_dump((int) '10.5');
    echo '<br>', var_dump((float) '10.5');
?>