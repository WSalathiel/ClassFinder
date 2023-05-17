<?php
require_once('../config/conexao.php');
require_once('../model/ClassModel.php');

$json = file_get_contents('php://input');
$reqbody = json_decode($json);

$idsala = $reqbody->idsala;

$conexao = new Conexao();
$db = $conexao->abrirConexao();

$usuarioModel = new UsuarioModel($db);
$usuarioModel->idsala = $idsala;
$dados = $usuarioModel->fetchAndarTipo();

echo json_encode($dados);

?>