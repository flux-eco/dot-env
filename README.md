# flux-eco/dot-env

Loads .env-Files

## Usage

.env-File

```
MYSQL_HOST=localhost
MYSQL_DATABASE=projection
MYSQL_USER=emmett
PASSWORD=fluxcapacitor
```

loadAndPrint.php

```
<?php

require_once __DIR__ . '/../vendor/autoload.php';

FluxEco\DotEnv\Api::new()->load(__DIR__);

echo getenv('MYSQL_USER').PHP_EOL;
echo getenv('PASSWORD').PHP_EOL;
```

output

```
emmett
fluxcapacitor
```

## functional Usage

```
<?php

require_once __DIR__ . '/../vendor/autoload.php';

fluxy\loadDotEnv(__DIR__);
```

## Contributing :purple_heart:

Please ...

1. ... register an account at https://git.fluxlabs.ch
2. ... create pull requests :fire:

## Adjustment suggestions / bug reporting :feet:

Please ...

1. ... register an account at https://git.fluxlabs.ch
2. ... ask us for a Service Level Agreement: support@fluxlabs.ch :kissing_heart:
3. ... read and create issues