<?php
require(__DIR__ . '/../vendor/ybluesky/h2o/h2o.php');
(new H2O\web\Application(include(dirname(__DIR__).'/configs/web.php')))->run();
?>