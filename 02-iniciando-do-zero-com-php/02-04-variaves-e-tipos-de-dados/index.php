<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.04 - Variáveis e tipos de dados");

/**
 * [tipos de dados] https://php.net/manual/pt_BR/language.types.php
 * [ variáveis ] https://php.net/manual/pt_BR/language.variables.php
 */
fullStackPHPClassSession("variáveis", __LINE__);

$userFisrtName = "Cristiano";
$userLastName = "Pereira";
echo "<h3>{$userFisrtName} {$userLastName}</h3>";
// OU
$user_first_name = $userFisrtName;
$user_last_name = $userLastName;
echo "<h3>{$user_first_name} {$user_last_name}</h3>";

$userAge = "40";
echo "<p>{$userFisrtName} {$userLastName} <span class='tag'>tem {$userAge} anos</span></p>";

// variável variável
$company = "UpInside"; //virou uma variável.
$$company = "Treinamentos";
echo "<h3>{$company} {$UpInside}</h3>";

/**
 * [ tipo boleano ] true | false
 */
fullStackPHPClassSession("tipo boleano", __LINE__);


/**
 * [ tipo callback ] call | closure
 */
fullStackPHPClassSession("tipo callback", __LINE__);


/**
 * [ outros tipos ] string | array | objeto | numérico | null
 */
fullStackPHPClassSession("outros tipos", __LINE__);