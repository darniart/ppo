<?php
	$dbServer = 'darniartek.nazwa.pl';
	$dbUser = 'darniartek_projektkino';
	$dbPassword = 'Pwsz2018';
	$dbName = 'darniartek_projektkino';

	$con=$mysqli = new mysqli($dbServer,$dbUser,$dbPassword,$dbName);
	if ( mysqli_connect_errno() ) {
		echo 'Błąd bazy danych';
	}

	mysqli_set_charset($con,"utf8");

?>