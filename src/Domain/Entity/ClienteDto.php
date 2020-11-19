<?php
namespace Cegonhas\Domain\Entity;

class ClienteDto {
    static public function fromDb($rawBaba) : Cliente {
        $baba = new Cliente();
        $baba->setId($rawBaba["id"]);
        $baba->setNome($rawBaba["nome"]);
        $baba->setRg($rawBaba["rg"]);
        $baba->setCpf($rawBaba["cpf"]);
        $baba->setEmail($rawBaba["email"]);
        $baba->setTelefone($rawBaba["telefone"]);
        $baba->setSobrenome($rawBaba["sobrenome"]);
        return $baba;
    }

    static public function toJson(Cliente $cliente) {
        return array(
            "id" => $cliente->getId(),
            "nome" => $cliente->getNome(),
            "sobrenome" => $cliente->getSobrenome(),
            "rg" => $cliente->getRg(),
            "cpf" => $cliente->getCpf(),
            "email" => $cliente->getEmail(),
            "telefone" => $cliente->getTelefone(),
        );
    }
}