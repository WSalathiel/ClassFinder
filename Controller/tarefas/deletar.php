<?php 

require_once('../../config/Conexao.php');
require_once('../../model/ClassModel.php');

$json = file_get_contents('php://input');
$reqbody = json_decode($json);

$idreserve = $reqbody->idreserve;

$conexao = new Conexao();

$db = $conexao->abrirConexao();

$usuarioModel = new UsuarioModel($db);

$usuarioModel->idreserve = $idreserve;

$dados = $usuarioModel->deletar();
echo json_encode($dados);

?>