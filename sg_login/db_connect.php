<?php
	define("DB_HOST", "localhost");
    define("DB_USER", "root");
    define("DB_PASSWORD", "");
    define("DB_DATABASE", "sampleDB");

	$con = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
		if(!$con){
			die('Connection Failed:' .mysqli_connect_error());
		}else{
			//echo "Connection Success";
		}

?>