<?php

// 应用代码路径
define('APP_PATH', dirname(__DIR__) . '/app');
// 运行时数据目录
define('DATA_PATH', dirname(__DIR__) . '/data');
// 自定义模板目录
define('VIEW_PATH', dirname(__DIR__) . '/template');

require dirname(__DIR__) . '/vendor/autoload.php';

\Core\Environment::setEnvFile(__DIR__ . '/.env');

App::bootstrap();
App::run();
