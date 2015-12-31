<?php
require(__DIR__ . '/../vendor/autoload.php');
require(__DIR__ . '/../vendor/ybluesky/h2o/h2o.php');
(new H2O\web\Application(include(dirname(__DIR__).'/unit/config/web.php')))->run();
?>