#!/usr/bin/env php
<?php
require(__DIR__ . '/vendor/autoload.php');
require(__DIR__ . '/vendor/ybluesky/h2o/h2o.php');
(new H2O\console\Application(include(__DIR__.'/configs/command.php')))->run();