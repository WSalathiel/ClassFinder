<?php 

require_once('../../config/conexao.php');
require_once('../../model/tarefaModel.php');


$conexao = new Conexao();
$db = $conexao->abrirConexao();

$usuarioModel = new UsuarioModel($db);
$dados = $usuarioModel->lerTodos();

echo json_encode($dados);

?>