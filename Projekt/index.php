<?php
	include("configs.php");

	(empty($_GET['page'])) ? $url = HOME : $url = $_GET['page'];

	$file  = "pages/".$url.".php";

	$title = $page_name[$url];

include("modules/header.php");

	if(file_exists($file)) {
		include($file);
	}
	else
	{
		include("pages/error.php");
	}

	include("modules/footer.php");



?>