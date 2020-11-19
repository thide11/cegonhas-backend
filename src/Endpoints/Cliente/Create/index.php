<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: X-Requested-With, Content-Type, Origin, Cache-Control, Pragma, Authorization, Accept, Accept-Encoding");

require_once(__DIR__ . "../../../../../vendor/autoload.php");

use Cegonhas\Domain\Entity\ClienteDto;
use Cegonhas\Infrastructure\Dao\ClienteDao;
use Cegonhas\EndPoints\EndpointsUtils;

$babaDao = new ClienteDao();
//print_r($_POST);
if(isset($_POST)) {
    $request_body = file_get_contents('php://input');
    $dados = json_decode($request_body, true);
    //print_r($dados);
    $baba = ClienteDto::fromDb($dados);
    $babaDao->create($baba);
    EndpointsUtils::print_sucess_response();
}