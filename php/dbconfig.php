<?php

	$DB_NAME = 'paperflux';

	/* Database Host */
	$DB_HOST = 'localhost';

	/* Your Database User Name and Passowrd */
	$DB_USER = 'root';
	$DB_PASS = 'root';


		$mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

		if (mysqli_connect_errno()) {

	    	printf("Connect failed: %s\n", mysqli_connect_error());
	    	exit();
	  	} else {

	    //printf("Connect Successfully");
	  }

?>
