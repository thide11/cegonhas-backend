<?php

namespace Cegonhas\Domain\Dao;

use Cegonhas\Domain\Entity\Baba;

interface BabaDaoInterface {
    public function create(Baba $baba);
    public function update(Baba $baba);
    public function findById(string $babaId) : Baba;
    public function list() : array;
    public function delete(string $babaId);
}