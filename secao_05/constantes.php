<div class="titulo">Constantes</div>
<?php
    define('TAXA_DE_JUROS', 5.9);
    echo TAXA_DE_JUROS;

    // Outra forma de fazer
    const NOVA_TAXA = 2.5;
    echo '<br>' . NOVA_TAXA;

    $valorVariavel = 2.8;
    define('NOVISSIMA_TAXA', $valorVariavel);
    echo '<br>' . NOVISSIMA_TAXA;
?>