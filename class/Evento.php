<?php

class Evento
{
    private $nome;
    private $local;
    private $data;
    private $inicio;
    private $fim;
    private $palestras;
    private $participantes;

    public function __construct($nome, $local, $data, $inicio, $fim)
    {
        $this->setNome($nome);
        $this->setLocal($local);
        $this->setData($data);
        $this->setInicio($inicio);
        $this->setFim($fim);
    }

    public function getNome() : string
    {
        return $this->nome;
    }

    public function setNome(string $nome) : void 
    {
        $this->nome = $nome;
    }

    public function getLocal() : object
    {
        return $this->local;
    }

    public function setLocal(object $local) : void
    {
        $this->local = $local;
    }

    public function getData() : string
    {
        return $this->data;
    }

    public function setData(string $data) : void
    {
        $this->data = $data;
    }

    public function getInicio() : string
    {
        return $this->inicio;
    }

    public function setInicio(string $inicio) : void
    {
        $this->inicio = $inicio;
    }

    public function getFim() : string
    {
        return $this->fim;
    }

    public function setFim(string $fim) : void 
    {
        $this->fim = $fim;
    }

    public function getPalestras() : array|bool
    {
        return $this->palestras;
    }

    public function setPalestra(Palestra $palestra) : void
    {
        $this->palestras[] = (array) $palestra;
    }
}