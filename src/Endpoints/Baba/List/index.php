<?php
header("Access-Control-Allow-Origin: *");

require_once(__DIR__ . "../../../../../vendor/autoload.php");

use Cegonhas\Infrastructure\Dao\BabaDao;
use Cegonhas\Domain\Entity\BabaDto;
use Cegonhas\EndPoints\EndpointsUtils;
    
$babaDao = new BabaDao();

$babaJson = array_map( function ($baba) {
    return BabaDto::toJson($baba);
}, $babaDao->list());
EndpointsUtils::print_sucess_response($babaJson);