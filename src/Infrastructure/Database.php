<?php

namespace Cegonhas\Infrastructure;

use \PDO;

class Database {

    private $con;

    public function __construct(){


        $url = getenv('JAWSDB_URL');
        $dbparts = parse_url($url);

        $hostname = $dbparts['host'];
        $username = $dbparts['user'];
        $password = $dbparts['pass'];
        $database = ltrim($dbparts['path'],'/');
        $this->con = new PDO(
            "mysql:host=$hostname;dbname=$database", $username, $password);
        // set the PDO error mode to exception
        $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Versão local:
        // $this->con = new PDO(
        //     "mysql:host=localhost; dbname=cegonhas",
        //     "root",
        //     ""
        // );
    }

    public function getCon() : PDO {
        return $this->con;
    }

}
?>