<?php

date_default_timezone_set('Asia/Bangkok');
//ini_set('intl.default_locale', 'th-TH');
require_once "vendor/autoload.php";
require_once "vendor/mustache/mustache/src/Mustache/Autoloader.php";
require_once 'vendor/bpg/cde/lib/core/AutoLoader.php';

use th\co\bpg\cde\core\ChangdaoEngine;

Logger::configure(dirname(__FILE__) . '/log4php.properties');
Mustache_Autoloader::register();
$changdaoEngine = new ChangdaoEngine();
$changdaoEngine->start();
?>