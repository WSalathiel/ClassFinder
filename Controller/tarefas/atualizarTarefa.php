<?php

require_once('../../config/Conexao.php');
require_once('../../Model/ClassModel.php');

$json = file_get_contents('php://input');
$reqbody = json_decode($json);

$nomeSala = $reqbody->nomeSala;
$numSala = $reqbody->numeroSala;
$nomeCurso = $reqbody->nomeCurso;
$andarSala = $reqbody->andarSala;
$oferta = $reqbody->oferta;
$dataInicio = $reqbody->dataInicio;
$dataTermino = $reqbody->dataTermino;
$horarioInicio = $reqbody->horarioInicio;
$horarioTermino = $reqbody->horarioTermino;
$idReserve = $reqbody->idReserve;

$c = new Conexao();

$db = $c->abrirConexao();

$um = new ClassModel($db);

$um->nomeSala = $nomeSala;
$um->numSala = $numSala;
$um->nomeCurso = $nomeCurso;
$um->andarSala = $andarSala;
$um->oferta = $oferta;
$um->dataInicio = $dataInicio;
$um->dataTermino = $dataTermino;
$um->horarioInicio = $horarioInicio;
$um->horarioTermino = $horarioTermino;
$um->idReserve = $idReserve;

$retorno = $um->atualizar();

echo json_encode($retorno);

?>
