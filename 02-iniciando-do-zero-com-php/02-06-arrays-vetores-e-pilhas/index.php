<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.06 - Arrays, vetores e pilhas");

/**
 * [ arrays ] https://php.net/manual/pt_BR/language.types.array.php
 */
fullStackPHPClassSession("index array", __LINE__);

$arrA = array(1, 2, 3);
$arrA = [0, 1, 2, 3];

var_dump($arrA);

$arrayIndex = [
    "Brian",
    "Angus",
    "Malcolm"
];
$arrayIndex[] = "Cliff";
$arrayIndex[] = "Phil";

var_dump($arrayIndex);

/**
 * [ associative array ] "key" => "value"
 */
fullStackPHPClassSession("associative array", __LINE__);

$arrayAssoc = [
    "vocal" => "Brian",
    "solo-guitar" => "Angus",
    "base-guitar" => "Malcolm",
    "bass-guitar" => "Cliff",
];
$arrayAssoc["drums"] = "Phil";
$arrayAssoc["rock-band"] = "AC/DC";

var_dump($arrayAssoc);

/**
 * [ multidimensional array ] "key" => ["key" => "value"]
 */
fullStackPHPClassSession("multidimensional array", __LINE__);

$brian = ["Brian", "Mic"];
$angus = ["name" => "Angus", "instrument" => "Guitar"];
$instruments = [
    $brian,
    $angus
];

var_dump($instruments);

var_dump([
    "brian" => $brian,
    "angus" => $angus
]);

/**
 * [ array access ] foreach(array as item) || foreach(array as key => value)
 */
fullStackPHPClassSession("array access", __LINE__);

$acdc = [
    "band" => "AC/DC",
    "vocal" => "Brian",
    "solo-guitar" => "Angus",
    "base-guitar" => "Malcolm",
    "bass-guitar" => "Cliff",
    "drums" => "Phil"
];

echo "<p>O vocal da banda AC/DC é {$acdc['vocal']} e junto com o {$acdc['solo-guitar']} cantam muito.</p>";

$pearlJam = [
    "band" => "Pearl Jam",
    "vocal" => "Eddie",
    "solo-guitar" => "Mike",
    "base-guitar" => "Stone",
    "bass-guitar" => "Jeff",
    "drums" => "Jack"
];

$rockBands = [
    "acdc" => $acdc,
    "pearl_jam" => $pearlJam
];

var_dump($rockBands);

echo "<p>{$rockBands['pearl_jam']['vocal']}</p>";

Foreach ($acdc as $item) {
    echo "<h3>{$item}</h3>";
}

Foreach ($acdc as $key => $value) {
    echo "<p>{$value} is a {$key} of band!</p>";
}

Foreach ($rockBands as $rockBand) {
    $art = "<article><h1>%s</h1><p>%s</p><p>%s</p><p>%s</p><p>%s</p><p>%s</p></article>";
    vprintf($art, $rockBand);
}

Foreach ($rockBands as $rockBand) {
    echo "<article><h1>{$rockBand['band']}</h1>";
    Foreach ($rockBand as $role => $name) {
        if ($role != 'band') {
            echo "<p><strong>$name:</strong> $role</p>";
        }
    }
}
