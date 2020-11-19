<?php

namespace Cegonhas\Domain\Dao;

use Cegonhas\Domain\Entity\Cliente;

interface ClienteDaoInterface {
    public function create(Cliente $cliente);
    public function update(Cliente $baba);
    public function findById(string $clienteId) : Cliente;
    public function list() : array;
    public function delete(string $clienteId);
}