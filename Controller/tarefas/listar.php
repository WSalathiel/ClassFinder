<?php 

require_once('../../Config/conexao.php');
require_once('../../model/ClassModel.php');


$conexao = new Conexao();
$db = $conexao->abrirConexao();

$usuarioModel = new UsuarioModel($db);
$dados = $usuarioModel->lerTodos();

echo json_encode($dados);

?>