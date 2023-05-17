<?php

require_once('../config/conexao.php');
require_once('../model/ClassModel.php');

$json = file_get_contents('php://input');

$reqbody = json_decode($json);

$dataInicio = $reqbody->dataInicio;
$dataTermino = $reqbody->dataTermino;
$horarioInicio = $reqbody-> horarioInicio;
$horarioTermino = $reqbody-> horarioTermino;
$idclass = $reqbody->idClass;
$nomeprofessor = $reqbody->nomeProfessor;
$idcourse = $reqbody->idCourse;
$idteam = $reqbody->idTeam;
$idoffer = $reqbody->idOffer;

$conexao = new Conexao();

$db = $conexao->abrirConexao();

$usuarioModel = new UsuarioModel($db);

$usuarioModel->dataInicio = $dataInicio;
$usuarioModel->dataTermino = $dataTermino;
$usuarioModel->horarioInicio = $horarioInicio;
$usuarioModel->horarioTermino = $horarioTermino;
$usuarioModel->idclass = $idclass;
$usuarioModel->nomeprofessor = $nomeprofessor;
$usuarioModel->idcourse = $idcourse;
$usuarioModel->idteam = $idteam;
$usuarioModel->idoffer = $idoffer;

$dados = $usuarioModel->cadastrar();

echo json_encode($dados);

?>