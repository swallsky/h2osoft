<?php
require(__DIR__ . '/../vendor/autoload.php');
require(__DIR__ . '/../vendor/ybluesky/h2o/h2o.php');
(new H2O\web\Application(include(__DIR__.'/config/web.php')))->run();
?>