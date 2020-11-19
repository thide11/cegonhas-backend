<?php
namespace Cegonhas\Domain\Entity;

class BabaDto {
    static public function fromDb($rawBaba) : Baba {
        $baba = new Baba();
        $baba->setId($rawBaba["id"]);
        $baba->setNome($rawBaba["nome"]);
        $baba->setRg($rawBaba["rg"]);
        $baba->setCpf($rawBaba["cpf"]);
        $baba->setEmail($rawBaba["email"]);
        $baba->setTelefone($rawBaba["telefone"]);
        $baba->setSobrenome($rawBaba["sobrenome"]);
        return $baba;
    }
    static public function toJson(Baba $baba) {
        return array(
            "id" => $baba->getId(),
            "nome" => $baba->getNome(),
            "sobrenome" => $baba->getSobrenome(),
            "rg" => $baba->getRg(),
            "cpf" => $baba->getCpf(),
            "email" => $baba->getEmail(),
            "telefone" => $baba->getTelefone(),
        );
    }
}