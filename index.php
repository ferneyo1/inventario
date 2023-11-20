<?php
require "config.php";
require "util/Auth.php";

spl_autoload_register(function ($class) {
    include "libs/" . $class . ".php";
});
$bootstrap = new Bootstrap();
//$bootstrap->setControllerPath();
//$bootstrap->setModelPath();
//$bootstrap->setDefaultFile();
//$bootstrap->setErrorFile();
$bootstrap->init();
?>
