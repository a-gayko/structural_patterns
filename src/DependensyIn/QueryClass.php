<?php

declare(strict_types=1);

namespace Patterns\DependensyIn;

use Patterns\DependensyIn\ConnectDB;

use PDO;

class QueryClass
{
    public function __construct(
        private ConnectDB $db
    ) {}

    public function showDatabase() : void
    {
        $query = "SHOW DATABASES";
        $databases = $this->db->query($query);
        $result = $databases->fetchAll(PDO::FETCH_COLUMN);
        $this->pdo->exec($query);
    }

    public function showTables() : void
    {
        $query = "SHOW TABLES FROM test";
        $result = $this->db->query($query);
        $arrayTables = $result->fetchAll(PDO::FETCH_COLUMN);
        $listTables = '';
        foreach ($arrayTables as $row) {
            $listTables .= "<b> $row; </b>" . PHP_EOL;
        }
    }
}