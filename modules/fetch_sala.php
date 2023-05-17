<?php
require_once('../config/conexao.php');
require_once('../model/ClassModel.php');

$conexao = new Conexao();
$db = $conexao->abrirConexao();

$usuarioModel = new UsuarioModel($db);
$dados = $usuarioModel->fetchSala();

echo json_encode($dados);

?>