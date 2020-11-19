<?php

namespace Cegonhas\Infrastructure;

use \PDO;

class Database {

    private $con;

    public function __construct(){
        $this->con = new PDO(
            "mysql:host=localhost; dbname=cegonhas",
            "root",
            ""
        );
    }

    public function getCon() : PDO {
        return $this->con;
    }

}
?>