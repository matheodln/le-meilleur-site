<?php
define('PROGRAMMATION', dirname(__FILE__));
define('BASE', dirname(PROGRAMMATION));
define('RACINE', BASE.DIRECTORY_SEPARATOR.'racine');
define('BASE_URL', dirname(dirname($_SERVER['SCRIPT_NAME'])));

require RACINE.DIRECTORY_SEPARATOR.'includes.php';
new Dispatcher();

