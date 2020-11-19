<?php

namespace Cegonhas\Infrastructure\Dao;

use Cegonhas\Infrastructure\Database;

class Dao {

    protected static function prepare($sql) {
        $database = new Database();
        return $database->getCon()->prepare($sql);
    }
}

?>