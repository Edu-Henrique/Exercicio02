<?php

class Ministrante extends Pessoa
{
    private $tema;

    public function __construct($nome, $fone, $endereco, $email, $tema)
    {
        parent::__construct($nome, $fone, $endereco, $email);
        $this->setTema($tema);
    }

    public function getTema() : string
    {
        return $this->tema;
    }

    public function setTema(string $tema) : void
    {
        $this->tema = $tema;
    }
}