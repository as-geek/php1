<?php

$a = $_POST['a'];
$b = $_POST['b'];
$operation = $_POST['operation'];

if (is_numeric($a) && is_numeric($b)) {
    if ($operation === 'addition') {
        $result = $a + $b;
    } elseif ($operation === 'subtraction') {
        $result = $a - $b;
    } elseif ($operation === 'multiplication') {
        $result = $a * $b;
    } elseif ($operation === 'division') {
        $result = $a / $b;
    }
} elseif ($b === 0 && $operation === 'division' ) {
    $result = 'На 0 делить нельзя';
} else {
    $result = 'Введите число';
}

$html = <<<php
<form method="post">
        <input type="text" name="a" placeholder="Первое число">
        <input type="text" name="b" placeholder="Второе число">
        <select name="operation">
            <option value="addition">Сложение</option>
            <option value="subtraction">Вычитание</option>
            <option value="multiplication">Умножение</option>
            <option value="division">Деление</option>
        </select>
        <input type="submit" value="Рассчёт">
    </form>
<h3>Результат: {$result}</h3>
php;
