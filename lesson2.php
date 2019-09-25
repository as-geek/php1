<?php
//Задание 1
	$a = rand(-10, 10);
	$b = rand(-10, 10);
	echo "a=$a, b=$b<br>";
	//если $a и $b положительные, вывести их разность;
	//если $а и $b отрицательные, вывести их произведение;
	//если $а и $b разных знаков, вывести их сумму;
	if ($a >= 0 && $b >= 0) {
		$c = $a - $b;
		echo "Разность = $c";
	} else if ($a < 0 && $b < 0) {
		$c = $a * $b;
		echo "Произведение = $c";
	} else {
		$c = $a * $b;
		echo "Сумма = $c";
	}
	
	echo '<hr>';

//Задание 2
	$a = rand(0, 15);

	switch($a) {
		case 0: echo 0;
		case 1: echo 1;
		case 2: echo 2;
		case 3: echo 3;
		case 4: echo 4;
		case 5: echo 5;
		case 6: echo 6;
		case 7: echo 7;
		case 8: echo 8;
		case 9: echo 9;
		case 10: echo 10;
		case 11: echo 11;
		case 12: echo 12;
		case 13: echo 13;
		case 14: echo 14;
		case 15: echo 15;
	}

	echo '<hr>';

//Задание 3
	$a = rand(1, 10);
	$b = rand(1, 10);
	echo "a=$a, b=$b<br>";

	function addition($a, $b) {
		return $a + $b;
	}

	function subtraction($a, $b) {
		return $a - $b;
	}
	
	function multiplication($a, $b) {
		return $a * $b;
	}
	
	function division($a, $b) {
		return $a / $b;
	}

	$c = addition($a, $b);
	echo "Сумма = $c<br>";

	$c = subtraction($a, $b);
	echo "Разность = $c<br>";

	$c = multiplication($a, $b);
	echo "Умножение = $c<br>";

	$c = division($a, $b);
	echo "Деление = $c<br>";

	echo '<hr>';

//Задание 4
	function mathOperation($arg1, $arg2, $operation) {
    	switch ($operation) {
        	case 'сумма':
        	    $result = addition($arg1, $arg2);
        	    break;
        	case 'разность':
        	    $result = subtraction($arg1, $arg2);
        	    break;
        	case 'произведение':
        	    $result = multiplication($arg1, $arg2);
        	    break;
        	case 'деление':
        	    $result = division($arg1, $arg2);
        	    break;
			default: $result = 'Неизвестная операция';
        }
    	return $operation . ' = ' . $result;
	}
	
	echo mathOperation($a, $b, 'сумма') . '<br>';
	echo mathOperation($a, $b, 'разность') . '<br>';
	echo mathOperation($a, $b, 'произведение') . '<br>';
	echo mathOperation($a, $b, 'деление') . '<br>';
	
	echo '<hr>';

//Задание 6
	$val = rand(1, 10);
	$pow = rand(1, 10);
	
	function power($val, $pow) {
    	if ($pow <= 0) {
        	return 1;
   		}

   		if ($pow === 1) {
   		    return $val;
   		}

   		return $val * power($val, $pow - 1);
	}

	echo <<<php
	Число: $val<br>
	Степень: $pow<br>
php;
	echo 'Результат = ' . power($val, $pow);

