<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.03 - Comandos de saída");

/**
 * [ echo ] https://php.net/manual/pt_BR/function.echo.php
 */
fullStackPHPClassSession("echo", __LINE__);

echo "<p>Olá Mundo!", " ", "<span class= 'tag'>#BoraProgramar!</span>", "</p>";

$hello = "Olá Mundo!";
$code = "<span class= 'tag'>#BoraProgramar!</span>";

echo "<p>$hello</p>";

# para proteger a variável.
$day = "dia";
echo "<p>Falta 1 $day para o evento!</p>";
echo "<p>Fatam 2 {$day}s para o evento!</p>";

echo "<h3>{$hello}</h3>";
echo "<h4>{$hello} {$code}</h4>";

?>
<h4><?= $hello; ?> <?= $code; ?></h4>
<?php

/**
 * [ print ] https://php.net/manual/pt_BR/function.print.php
 */
fullStackPHPClassSession("print", __LINE__);

print $hello;

print "<h3>{$hello} {$code}</h3>";

/**
 * [ print_r ] https://php.net/manual/pt_BR/function.print-r.php
 */
fullStackPHPClassSession("print_r", __LINE__);

//não funciona o echo e nem o print, é o print_r
$array = [
    "company" => "UpInside",
    "course" => "FSPHP",
    "class" => "Comandos de saída"
];

//print $array;
// método de código
// o return tira o 1 do final
echo "<pre>", print_r($array, True), "</pre>";

/**
 * [ printf ] https://php.net/manual/pt_BR/function.printf.php
 */
fullStackPHPClassSession("printf", __LINE__);

$article = "<article><h1>%s</h1><p>%s</p></article>";
$title = "{$hello} {$code}";
$subtitle = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus sunt inventore mollitia quam ullam dolorum architecto sit natus deserunt quos fuga suscipit pariatur, impedit ea enim blanditiis dolores quia rem vitae sapiente id vero ad? Libero, reprehenderit pariatur tempore porro excepturi quae earum quo, repellat facere nemo amet nulla tenetur doloremque error? Earum dolore labore incidunt placeat, illo, ab voluptas voluptatibus ea velit neque ullam? Quasi quod similique mollitia tenetur? Saepe laboriosam eos natus dolor ipsum nobis, quas fugiat doloribus incidunt mollitia doloremque delectus recusandae fugit libero harum placeat nostrum veniam. Nihil aliquam iste dignissimos earum optio velit adipisci dolorum.";

printf($article, $title, $subtitle);

/**
 * [ vprintf ] https://php.net/manual/pt_BR/function.vprintf.php
 */
fullStackPHPClassSession("vprintf", __LINE__);

$company = "<article><h1>Escola %s</h1><p>Curso <b>%s</b>, Aula <b>%s</b></p></article>";
vprintf($company, $array);

/**
 * [ var_dump ] https://php.net/manual/pt_BR/function.var-dump.php
 */
fullStackPHPClassSession("var_dump", __LINE__);

// serve pra ver o tamanho da variável.
var_dump($array);