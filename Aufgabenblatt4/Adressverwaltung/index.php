<?php
session_start();
function __autoload($class_name) {
    require_once $class_name . '.php';
}

if (!isset($_SESSION['controller'])) {
	$controller = new Controller();
	$_SESSION['controller'] = $controller;
	$_SESSION['adressenDAO'] = new AdressenDAO();
} else {
    $controller = $_SESSION['controller'];
}
$controller->run();
?>
