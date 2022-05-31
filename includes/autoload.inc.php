<?php

spl_autoload_register('myAutoLoader');

function myAutoLoader ($className) {
	$path = 'class/';
	$extension = '.class.php';
	$className = strtolower($className);
	$fileName = $path . $className . $extension;

	if (file_exists($fileName)) {
		include_once $fileName;
	}
}