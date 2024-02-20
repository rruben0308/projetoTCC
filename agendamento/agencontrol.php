<?php

include 'agendar.php';
include 'agendarDao.php';

$tratamento = $_POST['tratamento'];
$doutor = $_POST['doutor'];
$dc = $_POST['dc'];
$hc = $_POST['hc'];
$botao = $_POST['botao'];

$agendar = new Agendar();
$agendardao = new agendarDao();

$agendar->setTratamento($tratamento);
$agendar->setDoutor($doutor);
$agendar->setData($dc);
$agendar->setHora($hc);

if ($botao=="agendar") {
    $agendardao->agendar($agendar);
}elseif($botao=="desmarcar"){
    $agendardao->desmarcar($agendar);
}