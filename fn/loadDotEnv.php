<?php

namespace fluxDotEnv;

use FluxEco\DotEnv\Api;

function loadDotEnv(string $directoryPath)
{
    Api::new()->load($directoryPath);
}