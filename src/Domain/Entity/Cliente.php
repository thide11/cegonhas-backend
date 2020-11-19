<?php
namespace Cegonhas\Domain\Entity;

class Cliente extends Pessoa {
    protected int $qtdCuidadoraRequisitada;

    /**
     * Get the value of qtdCuidadoraRequisitada
     */ 
    public function getQtdCuidadoraRequisitada()
    {
        return $this->qtdCuidadoraRequisitada;
    }

    /**
     * Set the value of qtdCuidadoraRequisitada
     *
     * @return  self
     */ 
    public function setQtdCuidadoraRequisitada($qtdCuidadoraRequisitada)
    {
        $this->qtdCuidadoraRequisitada = $qtdCuidadoraRequisitada;

        return $this;
    }
}