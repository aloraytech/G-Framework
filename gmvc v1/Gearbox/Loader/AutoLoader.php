<?php

// Autoload System
spl_autoload_register(function($className){
	require_once 'System/' . $className . '.php';
	});


?>







