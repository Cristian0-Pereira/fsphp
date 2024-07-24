<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.09 - Closures e generators");

/*
 * [ closures ] https://php.net/manual/pt_BR/functions.anonymous.php
 */
fullStackPHPClassSession("closures", __LINE__);

$myAge = function($year) {
    $age = date( "Y") - $year;
    return "<h5>Você tem {$age} anos!</h5>";
};
echo $myAge(1983);

$priceBrl = function($price){
    return "R$" .number_format($price, 2, ",", ".");
};

echo "<p>O projeto custa " .$priceBrl(3600). ". Vamos fechar?</p>";

$myCart = [];
$myCart["totalPrice"] = 0;
$cardAdd = function($item, $qtd, $price) use (&$myCart) {
    $myCart[$item] = $qtd * $price;
    $myCart["totalPrice"] += $myCart[$item];
};

$cardAdd("HTML", 1, 497);
$cardAdd("jQuery", 2, 497);

var_dump($myCart);

/*
 * [ generators ] https://php.net/manual/pt_BR/language.generators.overview.php
 */
fullStackPHPClassSession("generators", __LINE__);

$iterator = 10;
$year = 2024;
$startDate = '07/08/2024'; // Data de início das férias

// Função para gerar todas as datas do ano
function generateYearDates($year) {
    $saveDate = [];
    $startDate = "{$year}-01-01";
    $endDate = "{$year}-12-31";

    for ($date = strtotime($startDate); $date <= strtotime($endDate); $date = strtotime("+1 day", $date)) {
        $saveDate[] = date("d/m/Y", $date);
    }

    return $saveDate;
}

// Função para gerar datas de férias
function showDates($days, $startDate) {
    $saveDate = [];
    $startDateUs = date('Y-m-d', strtotime(str_replace('/', '-', $startDate)));

    for ($day = 0; $day < $days; $day++) {
        $saveDate[] = date("d/m/Y", strtotime("{$startDateUs} +{$day} days"));
    }

    return $saveDate;
}

// Gera todas as datas do ano
$yearDates = generateYearDates($year);

// Gera as datas de férias
$holidayDates = showDates(30, $startDate);

echo "<div style='text-align: center'>";

// Exibe todas as datas do ano e destaca os dias de férias
foreach ($yearDates as $date) {
    if (in_array($date, $holidayDates)) {
        echo "<small class='tag' style='color: #FF6347; font-weight: bold;'>{$date} - Férias</small>" . PHP_EOL; // Destaca os dias de férias com cor laranja
    } else {
        echo "<small class='tag';'>{$date}</small>" . PHP_EOL; // Cor padrão para outros dias
    }
}

echo "</div>";


