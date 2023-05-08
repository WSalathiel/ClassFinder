<?php
require_once('../../Config/Conexao.php');
require_once('../../Model/ClassModel.php');

$json = file_get_contents('php://input');
$reqbody = json_decode($json);
$nomeSala = $reqbody-> nomeSala;
$numeroSala = $reqbody-> numeroSala;
$nomeCurso = $reqbody-> nomeCurso;
$andarSala = $reqbody-> andarSala;
$classeTeam = $reqbody-> classeTeam;
$oferta = $reqbody-> oferta;
$nomeProfessor = $reqbody-> nomeProfessor;
$dataInicio = $reqbody-> dataInicio;
$dataTermino = $reqbody-> dataTermino;
$horarioInicio = $reqbody-> horarioInicio;
$horarioTermino = $reqbody-> horarioTermino;

$c = new Conexao();

$db = $c-> abrirConexao();

$um = new UsuarioModel($db);

$um->nomeSala = $nomeSala;
$um->numeroSala = $numeroSala;
$um->nomeCurso = $nomeCurso;
$um->andarSala = $andarSala;
$um->classeTeam = $classeTeam;
$um->oferta = $oferta;
$um->nomeProfessor = $nomeProfessor;
$um->dataInicio = $dataInicio;
$um->dataTermino = $dataTermino;
$um->horarioInicio = $horarioInicio;
$um->horarioTermino = $horarioTermino;

$retorno = $um-> cadastrar();

echo json_encode ($retorno);

?>