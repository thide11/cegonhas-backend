<?php
header("Access-Control-Allow-Origin: *");

require_once(__DIR__ . "../../../../../vendor/autoload.php");

use Cegonhas\Infrastructure\Dao\ClienteDao;
use Cegonhas\Domain\Entity\ClienteDto;
use Cegonhas\Domain\Exceptions\DatabaseException;
use Cegonhas\EndPoints\EndpointsUtils;
    
$clienteDao = new ClienteDao();

try {
    if(isset($_GET["id"])) {
        $cliente = $clienteDao->findById($_GET["id"]);
        //var_dump($cliente);
        if($cliente === false) {
            EndpointsUtils::print_error_response("Não encontrado cliente com este id");    
        } else {
            EndpointsUtils::print_sucess_response(ClienteDto::toJson($cliente));
        }
    } else {
        EndpointsUtils::print_error_response("Você não passou o id");
    }
} catch (DatabaseException $e) {
    EndpointsUtils::print_error_response($e->getMessage());
}