<?php	
	header("Content-type: text/html;charset=utf-8");
	$controller =isset($_GET['c']) ? $_GET['c'] :'User';
	$action = isset($_GET['a']) ? $_GET['a'] :  'Lists';	
	session_start();
	function __autoload($class) {	
		if (strpos($class, "Controller" )!== false) {
			$dir = 'controller';
		} else if (strpos($class, "Model")!== false) {
			$dir = 'model';
		} else {
			die($class."not exist");
		}
		include "./{$dir}/{$class}.class.php";
	}
	
	$className = "{$controller}Controller";
	
	$con = new $className();
	$con->$action();