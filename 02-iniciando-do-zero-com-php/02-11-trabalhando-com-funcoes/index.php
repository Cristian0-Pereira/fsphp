<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.11 - Trabalhando com funções");

/*
 * [ functions ] https://php.net/manual/pt_BR/language.functions.php
 */
fullStackPHPClassSession("functions", __LINE__);

require __DIR__."/functions.php";

var_dump(functionName("Pearl Jam", "AC\DC", "Alter Bridge"));
var_dump(functionName("Pedro", "Davi", "Anthony"));

var_dump(optionArgs("Cristiano"));

/*
 * [ global access ] global $var
 */
fullStackPHPClassSession("global access", __LINE__);

$weight = 83;
$height = 1.77;
echo calcImc();

/*
 * [ static arguments ] static $var
 */
fullStackPHPClassSession("static arguments", __LINE__);

$pay = payTotal(200);
$pay = payTotal(150);
$pay = payTotal(500);

echo $pay;

/*
 * [ dinamic arguments ] get_args | num_args
 */
fullStackPHPClassSession("dinamic arguments", __LINE__);

var_dump(myTeam("Cristiano", "Michelle", "Davi", "Pedro", "Anthony", "Mel"));
