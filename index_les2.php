<?php
	$html = file_get_contents('main_les2.html');

	$date = date('d.m.Y h:i:s');

	$html = str_replace('{DATE}', $date, $html);
	echo $html;