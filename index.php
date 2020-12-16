<?php
	$URL = explode("/", $_SERVER['QUERY_STRING']);
	$language = 'ru';
	$page = "404.php";
	$script = '';
	global $style;

	function setStyle($style2){
		$style = $style2;
	}

	// function getStyle(){
	// 	return $this->style;
	// }

	if (file_exists("lang/".$URL[0].".php")) $language = $URL[0];

	require_once "lang/ru.php";
	require_once 'header.php';
	require_once 'sidebar.php';

	if (isset($URL[1]))
		if (file_exists("pages/".$URL[1].".php")) $page = "pages/".$URL[1].".php";
	
	
	
	require_once $page;
	require_once 'footer.php';
?>