<?php

require_once('../../config/Conexao.php');
require_once('../../model/ClassModel.php');

$json = file_get_contents('php://input');
$reqbody = json_decode($json);

$nomeSala = $reqbody->nomeSala;
$numSala = $reqbody->numeroSala;
$nomeCurso = $reqbody->nomeCurso;
$andarSala = $reqbody->andarSala;
$oferta = $reqbody->oferta;
$nomeProfessor = $reqbody->nomeProfessor;
$dataInicio = $reqbody->dataInicio;
$dataTermino = $reqbody->dataTermino;
$horarioInicio = $reqbody->horarioInicio;
$horarioTermino = $reqbody->horarioTermino;
$idReserve = $reqbody->idReserve;

$c = new Conexao();

$db = $c->abrirConexao();

$um = new UsuarioModel($db);

$um->nomeSala = $nomeSala;
$um->numeroSala = $numSala;
$um->nomeCurso = $nomeCurso;
$um->andarSala = $andarSala;
$um->oferta = $oferta;
$um->nomeProfessor = $nomeProfessor;
$um->dataInicio = $dataInicio;
$um->dataTermino = $dataTermino;
$um->horarioInicio = $horarioInicio;
$um->horarioTermino = $horarioTermino;
$um->idReserve = $idReserve;

$retorno = $um->atualizarReserva();

echo json_encode($retorno);

?>
