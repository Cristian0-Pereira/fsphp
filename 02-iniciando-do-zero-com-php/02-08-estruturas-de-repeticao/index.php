<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.08 - Estruturas de repetição");

/*
 * [ while ] https://php.net/manual/pt_BR/control-structures.while.php
 * [ do while ] https://php.net/manual/pt_BR/control-structures.do.while.php
 */
fullStackPHPClassSession("while, do while", __LINE__);

$looping = 1;
$while = [];

while($looping <= 10) {
    $while[] = $looping;
    $looping++;
}

echo implode(', ',$while). "<br>";

$looping = 10;
$while = [];

do {
    $while[] = $looping;
    $looping--;
} while ($looping >= 1);
echo implode(', ',$while);



/*
 * [ for ] https://php.net/manual/pt_BR/control-structures.for.php
 */
fullStackPHPClassSession("for", __LINE__);
echo '<div style="display: flex;">';
for($i = 1; $i <= 10; $i++) {
    echo "{$i} \n";
}
echo '</div>';


echo '<div style="display: flex;">';
for($i = 10; $i >= 1; $i--) {
    echo "{$i} ";
}
echo '</div>';

/**
 * [ break ] https://php.net/manual/pt_BR/control-structures.break.php
 * [ continue ] https://php.net/manual/pt_BR/control-structures.continue.php
 */
fullStackPHPClassSession("break, continue", __LINE__);

for($c = 1; $c <= 10; $c++) {
    if ($c % 2 == 1) {
        continue;
    }
    if ($c > 10) {
        break;
    }
    echo "<p>Pulou + 2 :: {$c}</p>";
}

/**
 * [ foreach ] https://php.net/manual/pt_BR/control-structures.foreach.php
 */
fullStackPHPClassSession("foreach", __LINE__);

$array = [];
for($ar = 1; $ar <= 3; $ar++) {
    $array[] = $ar;
}
var_dump($array);

foreach ($array as $item) {
    var_dump($item);
}

foreach ($array as $key => $value) {
    var_dump("Chave {$key} = Valor é {$value}");
}