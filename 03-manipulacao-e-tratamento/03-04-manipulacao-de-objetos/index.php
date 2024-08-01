<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.04 - Manipulação de objetos");

/*
 * [ manipulação ] http://php.net/manual/pt_BR/language.types.object.php
 */
fullStackPHPClassSession("manipulação", __LINE__);

$arrProfile = [
    "name" => "Cristiano",
    "company" => "UpInside",
    "mail" => "cristiano@upinside.com"
];
$objProfile = (object)$arrProfile;
// var_dump($arrProfile, $objProfile);

echo "<p>{$arrProfile['name']} trabalha na {$arrProfile['company']}</p>";
echo "<p>{$objProfile->name} trabalha na {$objProfile->company}</p>";

$ceo = $objProfile;
unset($ceo->company);
var_dump($ceo);

$company = new stdClass();
$company->company = "UpInside";
$company->ceo = $ceo;
$company->manager = new stdClass();
$company->manager->name = "Kaue";
$company->manager->mail = "cursos@upinside.com";
var_dump($company);


/**
 * [ análise ] class | objetcs | instances
 */
fullStackPHPClassSession("análise", __LINE__);

$date = new DateTime();
$timezone = $date->getTimezone();

$info = [
    "class" => get_class($date),
    "methods" => get_class_methods($date),
    "vars" => get_object_vars($date),
    "parent" => get_parent_class($date),
    "date" => $date->format('Y-m-d H:i:s'),
    "timezone_type" => $date->getTimezone()->getName(),
    "timezone" => $date->getTimezone()->getName()
];
var_dump($info);

$expetion = new PDOException();

var_dump([
    "class" => get_class($expetion),
    "methods" => get_class_methods($expetion),
    "vars" => get_object_vars($expetion),
    "parent" => get_parent_class($expetion),
    "subclass" => is_subclass_of($expetion, "Exception")
]);
