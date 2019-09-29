<?php
	//Задание 1
	$i = 0;
	while ($i <= 100) {
		if ($i % 3 === 0) {
			echo $i . ' ';
		}
		$i++;
	}
	echo '<hr>';

	//Задание 2
	$i = 0;
	do {
		if ($i === 0) {
			echo "$i - ноль.<br>";
		} elseif ($i % 2 === 0) {
			echo "$i - чётное число.<br>";
		} else {
			echo "$i - нечётное число.<br>";
		}
		$i++;
	} while ($i <= 10);
	echo '<hr>';

	//Задание 3
	$region = [
		'Московская область' => ['Москва', 'Зеленоград', 'Клин'],
		'Ленинградская область' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'],
		'Рязанская область' => ['Рязань', 'Касимов'],
	];

	foreach ($region as $key => $value) {
		echo $key . ':<br>';
		if (is_array($value)) {
			foreach ($value as $city) {
				echo $city . ', ';
			}
		}
		echo '<br>';
	}
	echo '<hr>';

	//Задание 4
	$translateRus = [
		'а' => 'a',
		'б' => 'b',
		'в' => 'v',
		'г' => 'g',
		'д' => 'd',
		'е' => 'e',
		'ё' => 'e',
		'ж' => 'j',
		'з' => 'z',
		'и' => 'i',
		'й' => 'i',
		'к' => 'k',
		'л' => 'l',
		'м' => 'm',
		'н' => 'n',
		'о' => 'o',
		'п' => 'p',
		'р' => 'r',
		'с' => 's',
		'т' => 't',
		'у' => 'u',
		'ф' => 'f',
		'х' => 'h',
		'ц' => 'c',
		'ч' => 'ch',
		'ш' => 'sh',
		'щ' => 'sh',
		'ъ' => '`',
		'ы' => 'i',
		'ь' => '`',
		'э' => 'e',
		'ю' => 'yu',
		'я' => 'ya',
	];

	$string = 'privet: как дела?';
	/*В конце выведет "привет: kak dla?"
	Не пойму, куда буква "е" пропадаеть*/

	$arrStr = preg_split('//u', $string);
	$arrResult = [];
	$translateEng = array_flip($translateRus);

	for ($i = 0; $i < count($arrStr); $i++) {
		if (preg_match('/[a-z]/', $arrStr[$i])) {
			foreach ($translateRus as $key => $value) {
				if ($arrStr[$i] === $value) {
					array_push($arrResult, $key);
					break;
				}
			}
		} elseif (preg_match('/[а-я]/', $arrStr[$i])) {
			foreach ($translateEng as $key => $value) {
				if ($arrStr[$i] === $value) {
					array_push($arrResult, $key);
					break;
				}
			}
		} elseif (preg_match('/[[:punct:]]|\s/', $arrStr[$i])) {
			array_push($arrResult, $arrStr[$i]);
		}
	}
	$strResult = implode('', $arrResult);
	
	echo $string . ' => ' . $strResult;
	echo '<hr>';

	//Задание 5
	function replacement($value) {
		return preg_replace('/\s/', '_', $value);
	}
	
	echo replacement($string);
	echo '<hr>';
	
	//Задание 7
	for ($i = 0; $i <= 9; print $i++) {}
	echo '<hr>';

	//Задание 8
	$region = [
		'Московская область' => ['Москва', 'Зеленоград', 'Клин'],
		'Ленинградская область' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'],
		'Рязанская область' => ['Рязань', 'Касимов'],
	];

	foreach ($region as $key => $value) {
		echo $key . ':<br>';
		if (is_array($value)) {
			foreach ($value as $city) {
				if (preg_match('/^К/', $city)) {
					echo $city;
				}
			}
		}
		echo '<br>';
	}
	echo '<hr>';

	//Задание 9
	$arrResultUrl = [];
	for ($i = 0; $i < count($arrStr); $i++) {
		if (preg_match('/[а-я]/', $arrStr[$i])) {
			foreach ($translateEng as $key => $value) {
				if ($arrStr[$i] === $value) {
					array_push($arrResultUrl, $key);
					break;
				}
			}
		} elseif (preg_match('/[a-z]|[[:punct:]]/', $arrStr[$i])) {
			array_push($arrResultUrl, $arrStr[$i]);
		} elseif (preg_match('/\s/', $arrStr[$i])) {
			array_push($arrResultUrl, replacement($arrStr[$i]));
		}
	}
	$strResultUrl = implode('', $arrResultUrl);
	
	echo $string . ' => ' . $strResultUrl;
	echo '<hr>';

	//Задание 10
	for ($i = 0, $z = 0; $i <= 3; $i++) {
		echo $z++ . ' ';
		for ($j = 1; $j <= 3; $j++) {
			$factor = ($i == 0) ? 1 : $i;
			echo ($factor * $j) . ' ';
		}
		echo "<br>";
	}
	



