<?php 

require_once('../../config/Conexao.php');
require_once('../../model/tarefaModel.php');

$json = file_get_contents('php://input');
$reqbody = json_decode($json);

$id = $reqbody->idUsuario;

$conexao = new Conexao();

$db = $conexao->abrirConexao();

$usuarioModel = new UsuarioModel($db);

$usuarioModel->id = $id;

$dados = $usuarioModel->listarUsuarios();

echo json_encode($dados);