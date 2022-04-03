<?php

namespace FluxEco\DotEnv;

class Api
{
    private Core\Ports\Service $service;

    private function __construct($service)
    {
        $this->service = $service;
    }

    public static function new() : self
    {
        return new self(Core\Ports\Service::new());
    }

    public function load(string $directoryPath)
    {
        $this->service->load($directoryPath);
    }

}