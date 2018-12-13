<?php
session_start();
function __autoload($class_name) {
    require_once $class_name . '.php';
}
$controller = new Controller();
$controller->run();


?>
