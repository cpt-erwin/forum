<?php

require_once "router.php";
require_once "vendor/autoload.php";

route('/', function () {
    $controller = new \TuMiSoft\Forum\Controllers\CategoryController();
    return $controller();
});

$action = $_SERVER['REQUEST_URI'];
dispatch($action);