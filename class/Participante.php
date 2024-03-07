<?php

class Participante extends Pessoa
{
    public function __construct($nome, $fone, $endereco, $email)
    {
        parent::__construct($nome, $fone, $endereco, $email);
    }
}