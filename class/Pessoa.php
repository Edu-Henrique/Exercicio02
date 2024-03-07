<?php

abstract class Pessoa
{
    protected $nome;
    protected $fone;
    protected $endereco;
    protected $email;

    public function __construct($nome, $fone, $endereco, $email)
    {
        $this->setNome($nome);
        $this->setFone($fone);
        $this->setEndereco($endereco);
        $this->setEmail($email);
    }

    public function getNome() : string
    {
        return $this->nome;
    }

    public function setNome(string $nome) : void
    {
        $this->nome = $nome;
    }

    public function getFone() : string
    {
        return $this->fone;
    }

    public function setFone(string $fone) : void
    {
        $this->fone = $fone;
    }

    public function getEmail() : string
    {
        return $this->email;
    }
    public function setEmail(string $email) : void
    {
        $this->email = $email;
    }

    public function getEndereco() : string
    {
        return $this->endereco;
    }

    public function setEndereco(string $endereco) : void
    {
        $this->endereco = $endereco;
    }
    
}