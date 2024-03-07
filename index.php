<?php

require_once __DIR__ . "/class/Pessoa.php";
require_once __DIR__ . "/class/Participante.php";
require_once __DIR__ . "/class/Ministrante.php";
require_once __DIR__ . "/class/Palestra.php";
require_once __DIR__ . "/class/Evento.php";

$localEvento = new stdClass;
$localEvento->nome = "UFMT";
$localEvento->endereco = "Av. martins";
$localEvento->numero = "5674";
$localEvento->bairro = "Centro";
$localEvento->cidade = "Cuiaba";


$participante1 = new Participante("Gustavo", "999999999", "Rua das dores", "gustavo@teste.com");
$participante2 = new Participante("Henrique", "999999999", "Av. da cunha", "henrique@teste.com");
$participante3 = new Participante("Pedro", "999999999", "Rua da alegria", "pedro@teste.com");
$participante4 = new Participante("Maria", "999999999", "Rua dos soldados", "maria@teste.com");
$participante5 = new Participante("Ana", "999999999", "Av. do tatuapé", "ana@teste.com");

$ministrante1 = new Ministrante("Alexandre", "999999999", "Rua josé maria", "alex@teste.com", "Segurança");
$ministrante2 = new Ministrante("Emilly", "999999999", "Rua dos cajus", "emilly@teste.com", "rede");
$ministrante3 = new Ministrante("Otavio", "999999999", "Br 060", "otavio@teste.com", "programação");

$palestra1 = new Palestra("O segredo","2024-06-10", "matutino", "05:00:00", "seguraça", "37", $ministrante1);
$palestra1->setParticipante($participante1);
$palestra1->setParticipante($participante2);
$palestra1->setParticipante($participante3);
$palestra1->setParticipante($participante4);
$palestra1->setParticipante($participante5);

$palestra2 = new Palestra("Rede, a Ligação do mundo","2024-06-10", "vespertino", "05:00:00", "rede", "10", $ministrante2);
$palestra2->setParticipante($participante1);
$palestra2->setParticipante($participante2);
$palestra2->setParticipante($participante3);
$palestra2->setParticipante($participante4);
$palestra2->setParticipante($participante5);

$palestra3 = new Palestra("Criando um ChatBoot","2024-06-10", "noturno", "04:00:00", "programação", "15", $ministrante3);
$palestra3->setParticipante($participante1);
$palestra3->setParticipante($participante2);
$palestra3->setParticipante($participante3);
$palestra3->setParticipante($participante4);
$palestra3->setParticipante($participante5);

$palestra4 = new Palestra("Encontrando Falhas em aplicações desktop","2024-06-11", "matutino", "05:00:00", "seguraça", "37", $ministrante1);
$palestra4->setParticipante($participante1);
$palestra4->setParticipante($participante2);
$palestra4->setParticipante($participante3);
$palestra4->setParticipante($participante4);
$palestra4->setParticipante($participante5);

$palestra5 = new Palestra("Web da partica","2024-06-11", "vespertino", "05:00:00", "programação", "20", $ministrante3);
$palestra5->setParticipante($participante1);
$palestra5->setParticipante($participante2);
$palestra5->setParticipante($participante3);
$palestra5->setParticipante($participante4);
$palestra5->setParticipante($participante5);

$evento = new Evento("Roadsec", $localEvento, "2024-06-10", "2024-06-10 8:00:00", "2024-06-13 18:00:00");
$evento->setParticipante($participante1);
$evento->setParticipante($participante2);
$evento->setParticipante($participante3);
$evento->setParticipante($participante4);
$evento->setParticipante($participante5);
$evento->setPalestra($palestra1);
$evento->setPalestra($palestra2);
$evento->setPalestra($palestra3);
$evento->setPalestra($palestra4);
$evento->setPalestra($palestra5);


echo "<pre>";
foreach ($evento->getPalestras() as $palestra){    
    var_dump($palestra);    
}

var_dump($evento);
echo "/<pre>";