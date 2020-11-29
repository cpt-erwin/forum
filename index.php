<?php

require_once "router.php";

route('/', function () {
    return "Hello World!";
});

$action = $_SERVER['REQUEST_URI'];
dispatch($action);