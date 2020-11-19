<?php
namespace Cegonhas\Domain\Entity;

use Cegonhas\Infrastructure\Point;

Class Pessoa {
    protected String $id;
    protected String $nome;
    protected String $sobrenome;
    protected String $rg;
    protected String $endereco;
    protected String $email;
    protected String $cpf;
    protected String $telefone;
    //protected Point $enderecoCordenadas;
    protected int $cartaoDados;
    protected bool $completouCadastro;

    
    

    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */ 
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    

    /**
     * Get the value of endereco
     */ 
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * Set the value of endereco
     *
     * @return  self
     */ 
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;

        return $this;
    }

    /**
     * Get the value of cpf
     */ 
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * Set the value of cpf
     *
     * @return  self
     */ 
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }

    /**
     * Get the value of telefone
     */ 
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * Set the value of telefone
     *
     * @return  self
     */ 
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;

        return $this;
    }

    /**
     * Get the value of enderecoCordenadas
     */ 
    public function getEnderecoCordenadas()
    {
        return $this->enderecoCordenadas;
    }

    /**
     * Set the value of enderecoCordenadas
     *
     * @return  self
     */ 
    public function setEnderecoCordenadas($enderecoCordenadas)
    {
        $this->enderecoCordenadas = $enderecoCordenadas;

        return $this;
    }

    /**
     * Get the value of cartaoDados
     */ 
    public function getCartaoDados()
    {
        return $this->cartaoDados;
    }

    /**
     * Set the value of cartaoDados
     *
     * @return  self
     */ 
    public function setCartaoDados($cartaoDados)
    {
        $this->cartaoDados = $cartaoDados;

        return $this;
    }
    /**
     * Get the value of sobrenome
     */ 
    public function getSobrenome()
    {
        return $this->sobrenome;
    }

    /**
     * Set the value of sobrenome
     *
     * @return  self
     */ 
    public function setSobrenome($sobrenome)
    {
        $this->sobrenome = $sobrenome;

        return $this;
    }

    /**
     * Get the value of rg
     */ 
    public function getRg()
    {
        return $this->rg;
    }

    /**
     * Set the value of rg
     *
     * @return  self
     */ 
    public function setRg($rg)
    {
        $this->rg = $rg;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}