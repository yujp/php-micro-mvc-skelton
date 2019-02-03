<?php
declare(strict_types=1);
namespace App;

require __DIR__ . '/vendor/autoload.php';

$env = getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV'): 'development';
\MicroMvc\App::run($env, __DIR__);
