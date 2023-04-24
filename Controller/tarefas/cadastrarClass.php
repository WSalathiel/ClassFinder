<?php
require_once('../../Config/Conexao.php');
require_once('../../Model/ClassModel.php');

$json = file_get_contents('php://input');
$reqbody = json_decode($json);
$nomeSala = $reqbody-> nomeSala;
$numeroSala = $reqbody-> numeroSala;
$nomeCurso = $reqbody-> nomeCurso;
$andarSala = $reqbody-> andarSala;
$oferta = $reqbody-> oferta;
$nomeProfessor = $reqbody-> nomeProfessor;
$data = $reqbody-> data;
$horario = $reqbody-> horario;

$c = new Conexao();

$db = $c-> abrirConexao();

$um = new UsuarioModel($db);

$um->nomeSala = $nomeSala;
$um->numeroSala = $numeroSala;
$um->nomeCurso = $nomeCurso;
$um->andarSala = $andarSala;
$um->oferta = $oferta;
$um->nomeProfessor = $nomeProfessor;
$um->data = $data;
$um->horario = $horario;

$retorno = $um-> cadastrar();

echo json_encode ($retorno);

?>