<?php

require_once __DIR__ . '/../vendor/autoload.php';

fluxy\loadDotEnv(__DIR__);

echo getenv('MYSQL_USER').PHP_EOL;
echo getenv('PASSWORD').PHP_EOL;