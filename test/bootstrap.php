<?php

$baseDir = dirname(__DIR__);
$loader  = require __DIR__ . '/../vendor/autoload.php';
$loader->add('MikeyMike\\RfcDigestor', array($baseDir . '/src/', $baseDir . '/tests/'));
$loader->register();
