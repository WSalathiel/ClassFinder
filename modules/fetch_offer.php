<?php
require_once('../config/conexao.php');
require_once('../model/ClassModel.php');

$json = file_get_contents('php://input');
$reqbody = json_decode($json);

$idteam = $reqbody->idTeam;

$conexao = new Conexao();
$db = $conexao->abrirConexao();

$usuarioModel = new UsuarioModel($db);
$usuarioModel->idteam = $idteam;
$dados = $usuarioModel->fetchOffer();

echo json_encode($dados);

?>