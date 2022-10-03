<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

$app = new \Symfony\Component\Console\Application('first application');
$app->add(new \App\WhatTimeCommand());
<<<<<<< HEAD
$app->add(new \App\SayHello());
$app->add(new \App\PrintStringMultiple());
=======
$app->add(new \App\HandleUserData());
>>>>>>> task3
$app->run();
