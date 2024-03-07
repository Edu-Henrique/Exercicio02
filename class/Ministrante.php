<?php

class Ministrante extends Pessoa
{
    private $tema;

    public function getTema() : string
    {
        return $this->tema;
    }

    public function setTema(string $tema) : void
    {
        $this->tema = $tema;
    }
}