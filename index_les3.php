<?php
	$html = file_get_contents('index_les3.html');

	$arrNav = [
		'Главная',
		'Новости' => ['Новости о спорте', 'Новости о политеке', 'Новости о мире'],
		'Контакты',
		'Справка',
	];

		foreach ($arrNav as $key => $value) {
			$navItem = <<<php
				<div>
					<a><span>$value</span></a>
				</div>
php;
//			if (is_array($value)) {
//				foreach ($value as $sub) {
//					$subItem = <<<php
//						<div>
//							<a>$sub</a>
//						</div>
//php;
//					$subNav .= $subItem;
//				}
//			}
			$nav .= $navItem;
		}
		


	$html = str_replace('{NAV}', $nav, $html);
	echo $html;

/*С подменю не получилось*/