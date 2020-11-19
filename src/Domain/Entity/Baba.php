<?php
namespace Cegonhas\Domain\Entity;

class Baba extends Pessoa {
    protected bool $foiAprovado;
    //protected DateTime $dataCadastro;
    protected int $qtdSessoesAgendadas;
    
    /**
     * Get the value of foiAprovado
     */ 
    public function getFoiAprovado()
    {
        return $this->foiAprovado;
    }

    /**
     * Set the value of foiAprovado
     *
     * @return  self
     */ 
    public function setFoiAprovado($foiAprovado)
    {
        $this->foiAprovado = $foiAprovado;

        return $this;
    }

    /**
     * Get the value of qtdSessoesAgendadas
     */ 
    public function getQtdSessoesAgendadas()
    {
        return $this->qtdSessoesAgendadas;
    }

    /**
     * Set the value of qtdSessoesAgendadas
     *
     * @return  self
     */ 
    public function setQtdSessoesAgendadas($qtdSessoesAgendadas)
    {
        $this->qtdSessoesAgendadas = $qtdSessoesAgendadas;

        return $this;
    }
}