<div class="titulo">Tipo String</div>
<?php 
    echo 'Eu sou uma string';
    echo '<br>';
    var_dump('Eu também');
    echo '<br>';

    // Concatenação
    echo 'Nós também ' . 'somos';
    echo '<br>';
    echo 'Também aceito', 'vírgulas';
    echo '<br>';
    echo "'Teste '" . '"Teste" ' . "\"Teste\"";
    echo '<br>';
    print('Também existe a função print!');

    // Algumas funções
    echo '<br>' . strtoupper('Maximizado');
    echo '<br>' . strtolower('MINIMIZADO');
    echo '<br>' . ucfirst('só a primeira letra');
    echo '<br>' . ucwords('todas as palavras');
    echo '<br>' . strlen('Quantas letras?');
    echo '<br>' . mb_strlen('Eu também vejo quantas letras', 'utf-8');
    echo '<br>' . substr('Só uma parte mesmo', 7, 6); // pegar apenas uma parte da string
    echo '<br>' . str_replace('isso', 'aquilo', 'Trocar isso isso'); // procura uma palavra na frase e troca por outra que você desejar
?>