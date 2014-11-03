<?php

	# Include the database credentials
	include_once "../sys/config/db_credit.php";

	// define constraints
	foreach ( $db_arr as $name=>$val){
		define($name, $val);
	}

	// create pdo object
	$dsn = "mysql:host=".DB_HOST.";dbname=".DB_NAME;
	$dbo = new PDO($dsn,DB_USER,DB_PASS);

	// autoload all the classes
	function __autoload($class){
		$filename = "../sys/class/class.". $class .".inc.php";
		if(file_exists($filename)){
			include_once $filename;
		}
	}
?>
