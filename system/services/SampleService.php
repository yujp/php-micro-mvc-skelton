<?php
declare(strict_types=1);
namespace App\Services;

final class SampleService extends \MicroMvc\Service {
    public function fetchDbVersion() {
        return $this->_models->SampleEntity->fetchDbVersion();
    }
}
