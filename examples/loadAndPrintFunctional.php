<?php

require_once __DIR__ . '/../vendor/autoload.php';

fluxDotEnv\loadDotEnv(__DIR__);

echo getenv('STORAGE_USER').PHP_EOL;
echo getenv('STORAGE_PASSWORD').PHP_EOL;