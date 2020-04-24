<?php

	$con = mysqli_connect("localhost", "root", "", "mychat")
	or die("Conexão não foi estabelecida");
	mysqli_set_charset($con, 'utf8');
 