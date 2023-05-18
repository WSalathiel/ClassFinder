<?php
require_once('../config/conexao.php');
require_once('../model/ClassModel.php');

$json = file_get_contents('php://input');
$reqbody = json_decode($json);

$idcourse = $reqbody->idCourse;
$idprofessor = $reqbody->idProfessor;

$conexao = new Conexao();
$db = $conexao->abrirConexao();

$usuarioModel = new UsuarioModel($db);
$usuarioModel->idcourse = $idcourse;
$usuarioModel->idprofessor = $idprofessor;
$dados = $usuarioModel->fetchClass();

echo json_encode($dados);

?>