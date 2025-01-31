<?php

namespace Pterodactyl\Exceptions\Service\Database;

use Pterodactyl\Exceptions\DisplayException;

class TooManyDatabasesException extends DisplayException
{
    public function __construct()
    {
        parent::__construct('Operação abortada: a criação de um novo banco de dados colocaria este servidor acima do limite definido.');
    }
}
