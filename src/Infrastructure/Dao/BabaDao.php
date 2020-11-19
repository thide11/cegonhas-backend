<?php

namespace Cegonhas\Infrastructure\Dao;

use Cegonhas\Domain\Dao\BabaDaoInterface;
use Cegonhas\Domain\Entity\Baba;
use Cegonhas\Domain\Entity\BabaDto;
use Cegonhas\Domain\Exceptions\DatabaseException;

class BabaDao extends Dao implements BabaDaoInterface {

    public function create(Baba $baba) : void {
        $sql = "INSERT INTO baba(id, nome, sobrenome, rg, cpf, email, telefone) VALUES (:id, :nome, :sobrenome, :rg , :cpf, :email, :telefone)";
        try {
            $executar = parent::prepare($sql);
            $executar->bindValue(":id", $baba->getId());
            $executar->bindValue(":nome", $baba->getNome());
            $executar->bindValue(":sobrenome", $baba->getSobrenome());
            $executar->bindValue(":rg", $baba->getRG());
            $executar->bindValue(":cpf", $baba->getCPF());
            $executar->bindValue(":email", $baba->getEmail());
            $executar->bindValue(":telefone", $baba->getTelefone());
            $result = $executar->execute();
            if($result === false) {
                throw new DatabaseException("O comando sql não foi executado");
            }
        } catch (\Exception $e){
            throw new DatabaseException($e);
        }
    }

    public function update(Baba $baba) {
        $sql = "UPDATE baba SET nome=:nome,rg=:rg,cpf=:cpf,email=:email,telefone=:telefone,sobrenome=:sobrenome WHERE id = :id";
        try {
            $executar = parent::prepare($sql);
            $executar->bindValue(":id", $baba->getId());
            $executar->bindValue(":nome", $baba->getNome());
            $executar->bindValue(":sobrenome", $baba->getSobrenome());
            $executar->bindValue(":rg", $baba->getRG());
            $executar->bindValue(":cpf", $baba->getCPF());
            $executar->bindValue(":email", $baba->getEmail());
            $executar->bindValue(":telefone", $baba->getTelefone());
            $result = $executar->execute();
            if($result === false) {
                throw new DatabaseException("O comando sql não foi executado");
            }
        } catch (\Exception $e){
            throw new DatabaseException($e);
        }

    }

    public function findById(string $babaId) : Baba {
        $sql = "SELECT * FROM baba WHERE id = :id";
        $executar = parent::prepare($sql);
        $executar->bindValue(":id", strval($babaId));
        $executar->execute();
        $rawBaba = $executar->fetch(\PDO::FETCH_ASSOC);
        if($rawBaba != false) {
            return BabaDto::fromDb($rawBaba);
        } else {
            throw new DatabaseException("Não encontrado");
        }
    }

    public function list() : array {
        $sql = "SELECT * FROM baba";
        $executar = parent::prepare($sql);
        $executar->execute();
        $listBabas = $executar->fetchAll();
        return array_map( function ($coisa) {
            return BabaDto::fromDb($coisa);
        }, $listBabas );
    }

    public function delete(string $babaId) {
        $sql = "DELETE FROM `baba` WHERE id = :id";
        $executar = parent::prepare($sql);
        $executar->bindValue(":id", $babaId);
        $result = $executar->execute();
        if($result === false) {
            throw new DatabaseException("O comando delete pelo id $babaId não foi executado");
        }
    }
}