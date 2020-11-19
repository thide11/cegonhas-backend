<?php
header("Access-Control-Allow-Origin: *");

require_once(__DIR__ . "../../../../../vendor/autoload.php");;

use Cegonhas\Domain\Entity\BabaDto;
use Cegonhas\Infrastructure\Dao\BabaDao;
use Cegonhas\EndPoints\EndpointsUtils;

$babaDao = new BabaDao();

if(isset($_POST)) {
    $baba = BabaDto::fromDb(json_decode($_POST, true));
    $babaDao->create($baba);
    EndpointsUtils::print_sucess_response();
}