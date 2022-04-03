<?php

namespace FluxEco\DotEnv\Core\Ports;

class Service
{

    private function __construct()
    {

    }

    public static function new()
    {
        return new self();
    }

    public function load(string $directoryPath) : void
    {
        $envFilePath = $directoryPath . '/.env';
        if (!file_exists($envFilePath) === true) {
            return;
        }

        $lines = file($envFilePath);
        foreach ($lines as $line) {
            putenv(trim($line));
        }
    }
}