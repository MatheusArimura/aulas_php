<div class="titulo">Tipo Booleano</div>
<?php 
    echo TRUE;
    echo '<br>';
    echo FALSE;
    echo '<br>', var_dump(true);
    echo '<br>', var_dump(False);
    echo '<br>', var_dump('False'); 
    echo '<br>', is_bool(false);
    echo '<br>', is_bool('true');

    // fazer as regras de conversão
    echo '<p>Regras:</p>';
    echo '<br>', var_dump((bool) 0); // Apenas o 0 é convertido para False
    echo '<br>', var_dump((bool) 20);
    echo '<br>', var_dump((bool) 0.0); // Mesmo no tipo Float ele se mantém False
    echo '<br>', var_dump((bool) ""); // Se deixar uma string vazia também é False
?>