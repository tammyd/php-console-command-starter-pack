#!/usr/bin/env php
<?php

require __DIR__.'/vendor/autoload.php';

use Symfony\Component\Console\Application;

//load environment variables in .env
$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();

$application = new Application();

$application->add(new \Command\ExampleCommand());

$application->run();