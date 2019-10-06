<?php

$a = $_POST['a'];
$b = $_POST['b'];
$operation = $_POST['operation'];

if (is_numeric($a) && is_numeric($b)) {
    if ($operation === '+') {
        $result = $a + $b;
    } elseif ($operation === '-') {
        $result = $a - $b;
    } elseif ($operation === '*') {
        $result = $a * $b;
    } elseif ($operation === '/') {
        $result = $a / $b;
    }
} elseif ($b === 0 && $operation === '/' ) {
    $result = 'На 0 делить нельзя';
} else {
    $result = 'Введите число';
}

$html = <<<php
<form method="post">
    <input type="text" name="a" placeholder="Первое число">
    <input type="text" name="b" placeholder="Второе число">
    <input type="submit" name="operation" value="+">
    <input type="submit" name="operation" value="-">
    <input type="submit" name="operation" value="*">
    <input type="submit" name="operation" value="/">
</form>
<h3>Результат: {$result}</h3>
php;
