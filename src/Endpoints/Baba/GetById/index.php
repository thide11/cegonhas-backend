<?php
header("Access-Control-Allow-Origin: *");

require_once(__DIR__ . "../../../../../vendor/autoload.php");

use Cegonhas\Infrastructure\Dao\BabaDao;
use Cegonhas\Domain\Entity\BabaDto;
use Cegonhas\EndPoints\EndpointsUtils;
use Cegonhas\Domain\Exceptions\DatabaseException;
    
$babaDao = new BabaDao();
try {
    if(isset($_GET["id"])) {
        $cliente = $babaDao->findById($_GET["id"]);
        EndpointsUtils::print_sucess_response(BabaDto::toJson($cliente));
    } else {
        EndpointsUtils::print_error_response("Você não passou o id");
    }

} catch (DatabaseException $e) {
    EndpointsUtils::print_error_response($e);
}