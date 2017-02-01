<?php

// Instantiate the app
$app = new \Slinky\Slinky\Application(realpath(__DIR__ . '/../'));

// Bind important aliases and interfaces
$app->getContainer()->alias('ExceptionHandler', 'App\Exceptions\Handler');

$app->run();