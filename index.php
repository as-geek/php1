<?php
include 'config/const.php';
$pages = include CONFIG . 'pages.php';
$p = (int)isset($_GET['p']) ? $_GET['p'] : 1;
$page = isset($pages[$p]) ? $pages[$p] : $pages[1];
$html = '';
$msg = '';
include PAGES . $page;


$html_tmpl = file_get_contents('main.tmpl');
echo str_replace(['{CONTENT}', '{MSG}'], [$html, $msg], $html_tmpl);
