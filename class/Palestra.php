<?php

class Palestra
{
    private $nome;
    private $data;
    private $turno;
    private $duracao;
    private $tema;
    private $sala;
    private $ministrante;
    private $participantes;

    public function __construct($nome, $data, $turno, $duracao, $tema, $sala, $ministrante)
    {
        $this->setNome($nome);
        $this->setData($data);
        $this->setTurno($turno);
        $this->setDuracao($duracao);
        $this->setTema($tema);
        $this->setSala($sala);
        $this->setMinistrante($ministrante);
    }

    public function getNome() : string
    {
        return $this->nome;
    }

    public function setNome(string $nome) : void
    {
        $this->nome = $nome;
    }

    public function getData() : string
    {
        return $this->data;
    }

    public function setData(string $data) : void
    {
        $this->data = $data;
    }

    public function getTurno() : string
    {
        return $this->turno;
    }

    public function setTurno(string $turno) : void
    {
        $this->turno = $turno;
    }

    public function getDuracao() : string
    {
        return $this->duracao;
    }

    public function setDuracao(string $duracao) : void
    {
        $this->duracao = $duracao;
    }

    public function getTema() : string
    {
        return $this->tema;
    }

    public function setTema(string $tema) : void
    {
        $this->tema = $tema;
    }

    public function getSala() : string
    {
        return $this->sala;
    }

    public function setSala(string $sala) : void
    {
        $this->sala = $sala;
    }

    public function getMinistrante() : object|bool
    {
        return $this->ministrante;
    }

    public function setMinistrante(Ministrante $ministrante) : void
    {
        $this->ministrante = $ministrante;
    }

    public function getParticipantes() : array|bool
    {
        return $this->participantes;
    }

    public function setParticipante(Participante $participante) : void
    {
        $this->participantes = $participante;
    }
}