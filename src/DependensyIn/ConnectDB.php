<?php

declare(strict_types=1);

namespace Patterns\DependensyIn;

use PDO;

class ConnectDB extends PDO
{
    public function __construct(
        private string $host,
        private string $user,
        private string $password,
        private string $dbname
    ){}

    public function getIfDBExists() : PDO
    {
        $dsn = "mysql:host=$this->host;dbname=$this->dbname;charset=UTF8";
        $db = new PDO($dsn, $this->user, $this->password);
        return $db;
    }
}