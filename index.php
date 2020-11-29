<?php

require_once "router.php";
require_once "vendor/autoload.php";

route('/', function () {
    return json_encode(['users' => \TuMiSoft\Forum\Models\User::getAll()]);
});

$action = $_SERVER['REQUEST_URI'];
dispatch($action);