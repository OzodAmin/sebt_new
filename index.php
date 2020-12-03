<?php
	$URL = explode("/", $_SERVER['QUERY_STRING']);
	$language = 'ru';
	$page = "404.php";
	$script = '';

	if (file_exists("lang/".$URL[0].".php")) $language = $URL[0];

	require_once "lang/".$language.".php";
	require_once 'header.php';
	require_once 'sidebar.php';

	if (file_exists("pages/".$URL[1].".php")) $page = "pages/".$URL[1].".php";
	
	require_once $page;
	require_once 'footer.php';
?>