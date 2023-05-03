<?php
require_once('../config/conexao.php');
require_once('../model/ClassModel.php');

$json = file_get_contents('php://input');
$reqbody = json_decode($json);

$idprofessor = $reqbody->idProfessor;

$conexao = new Conexao();
$db = $conexao->abrirConexao();

$usuarioModel = new UsuarioModel($db);
$usuarioModel->idprofessor = $idprofessor;
$dados = $usuarioModel->fetchInfos();

echo json_encode($dados);

?>