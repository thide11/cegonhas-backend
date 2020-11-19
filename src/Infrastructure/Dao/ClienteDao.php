<?php

namespace Cegonhas\Infrastructure\Dao;

use Cegonhas\Domain\Dao\ClienteDaoInterface;
use Cegonhas\Domain\Entity\Cliente;
use Cegonhas\Domain\Exceptions\DatabaseException;
use Cegonhas\Domain\Entity\ClienteDto;

class ClienteDao extends Dao implements ClienteDaoInterface {

    public function create(Cliente $cliente) {
        $sql = "INSERT INTO cliente(id, nome, sobrenome, rg, cpf, email, telefone) VALUES (:id, :nome, :sobrenome, :rg , :cpf, :email, :telefone)";
        try {
            $executar = parent::prepare($sql);
            $executar->bindValue(":id", $cliente->getId());
            $executar->bindValue(":nome", $cliente->getNome());
            $executar->bindValue(":sobrenome", $cliente->getSobrenome());
            $executar->bindValue(":rg", $cliente->getRG());
            $executar->bindValue(":cpf", $cliente->getCPF());
            $executar->bindValue(":email", $cliente->getEmail());
            $executar->bindValue(":telefone", $cliente->getTelefone());
            $result = $executar->execute();
            if($result === false) {
                //print_r($executar->debugDumpParams());
                throw new DatabaseException("O comando sql não foi executado");
            }
        } catch (\Exception $e){
            throw new DatabaseException($e);
        }
    }
    public function update(Cliente $cliente) {
        $sql = "UPDATE cliente SET nome=:nome,rg=:rg,cpf=:cpf,email=:email,telefone=:telefone,sobrenome=:sobrenome WHERE id = :id";
        try {
            $executar = parent::prepare($sql);
            $executar->bindValue(":id", $cliente->getId());
            $executar->bindValue(":nome", $cliente->getNome());
            $executar->bindValue(":sobrenome", $cliente->getSobrenome());
            $executar->bindValue(":rg", $cliente->getRG());
            $executar->bindValue(":cpf", $cliente->getCPF());
            $executar->bindValue(":email", $cliente->getEmail());
            $executar->bindValue(":telefone", $cliente->getTelefone());
            $result = $executar->execute();
            if($result === false) {
                throw new DatabaseException("O comando sql não foi executado");
            }
        } catch (\Exception $e){
            throw new DatabaseException($e);
        }
    }
    public function findById(string $clienteId) : Cliente {
        $sql = "SELECT * FROM cliente WHERE id = :id";
        $executar = parent::prepare($sql);
        $executar->bindValue(":id", strval($clienteId));
        $executar->execute();
        $rawCliente = $executar->fetch(\PDO::FETCH_ASSOC);
        if($rawCliente != false) {
            return ClienteDto::fromDb($rawCliente);
        } else {
            throw new DatabaseException("Não encontrado");
        }
    }
    public function list() : array {
        $sql = "SELECT * FROM cliente";
        $executar = parent::prepare($sql);
        $executar->execute();
        $listBabas = $executar->fetchAll();
        return array_map( function ($coisa) {
            return ClienteDto::fromDb($coisa);
        }, $listBabas );
    }

    public function delete(string $clienteId) {
        $sql = "DELETE FROM cliente WHERE id = :id";
        $executar = parent::prepare($sql);
        $executar->bindValue(":id", $clienteId);
        $result = $executar->execute();
        if($result === false) {
            throw new DatabaseException("O comando delete pelo id $clienteId não foi executado");
        }
    }

}