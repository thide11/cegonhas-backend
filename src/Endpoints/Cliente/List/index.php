<?php
header("Access-Control-Allow-Origin: *");

require_once(__DIR__ . "../../../../../vendor/autoload.php");

use Cegonhas\Infrastructure\Dao\ClienteDao;
use Cegonhas\Domain\Entity\ClienteDto;
use Cegonhas\EndPoints\EndpointsUtils;
    
$babaDao = new ClienteDao();

$clienteJson = array_map( function ($cliente) {
    return ClienteDto::toJson($cliente);
}, $babaDao->list());
EndpointsUtils::print_sucess_response($clienteJson);