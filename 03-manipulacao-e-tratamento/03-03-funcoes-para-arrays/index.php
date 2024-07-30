<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.03 - Funções para arrays");

/*
 * [ criação ] https://php.net/manual/pt_BR/ref.array.php
 */
fullStackPHPClassSession("manipulação", __LINE__);

$index = [
    "AC/DC",
    "Nirvana",
    "Alter Bridge"
];

$assoc = [
    "band_1" => "AC/DC",
    "band_2" => "Nirvana",
    "band_3" => "Alter Bridge",
];

// Para adicionar itens na lista $index
array_unshift($index, "","Pearl Jam");
$assoc = ["band_4" => "Pearl Jam", "band_5" => ""] + $assoc;

array_push($index, "");
$assoc = $assoc + ["band_6" => ""];

// Para remover o PRIMEIRO item da lista
array_shift($index);
array_shift($assoc);
// Para remover o ÚLTIMO item da lista
array_pop($index);
array_pop($assoc);

// Adicionando valor nulo.
array_unshift($index, "");

// Para eliminar qualquer item q não tiver valor
$index = array_filter($index);
$assoc = array_filter($assoc);

var_dump(
    $index,
    $assoc
);

/*
 * [ ordenação ] reverse | asort | ksort | sort
 */
fullStackPHPClassSession("ordenação", __LINE__);

$index = array_reverse($index);
$assoc = array_reverse($assoc);

// Para ordenar o valor do array, no caso em ordem alfabética
asort($index);
asort($assoc);
// Pela chave(key)
ksort($index);
// Para inverter a ordem
krsort($index);
// Para reindexar e ordenar em ordem alfabética
sort($index);
// E para reindexar e inverter a ordem alfabética
rsort($index);

var_dump(
    $index,
    $assoc
);

/*
 * [ verificação ]  keys | values | in | explode
 */
fullStackPHPClassSession("verificação", __LINE__);

var_dump([
    array_keys($assoc),
    array_values($assoc)
]);

if (in_array("AC/DC", $assoc)) {
    echo "<p>Cause I'm back!</p>";
}

// Convertendo o array numa string
$arrToString = implode(", ", $assoc);
echo "<p>Eu curto {$arrToString} e muitas outras!</p>";
echo "<p>{$arrToString}</p>";

var_dump(explode(", ", $arrToString));

 
/**
 * [ exemplo prático ] um template view | implode
 */
fullStackPHPClassSession("exemplo prático", __LINE__);

$profile = [
    "name" => "Cristiano",
    "company" => "Albatroz",
    "mail" => "cristiano@albatroz.com.br"
];

$template = <<<TPL
    <article>
        <h1>{{name}}</h1>
        <p>{{company}}<br>
        <a href="mailto:{{mail}}"title="Enviar e-mail para {{name}}">Enviar E-mail</a></p>
    </article>
TPL;

echo $template;

echo str_replace(
    array_keys($profile), array_values($profile), $template
);

$replaces = "{{" . implode("}}&{{", array_keys($profile)) . "}}";

// var_dump(explode("&", $replaces));
echo str_replace(
    explode("&+", $replaces),
    array_values($profile),
    $template
);