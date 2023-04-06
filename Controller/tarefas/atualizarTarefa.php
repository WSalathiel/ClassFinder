<?php

require_once('../../config/Conexao.php');
require_once('../../model/tarefaModel.php');

$json = file_get_contents('php://input');
$reqbody = json_decode($json);

$titulo = $reqbody-> titulo;
$descricao = $reqbody-> descricao;
$inicio = $reqbody-> inicio;
$termino = $reqbody-> termino;
$idUsuario = $reqbody-> idUsuario;
$id = $reqbody-> idTarefa;

//criando objeto conexao
$c = new Conexao();
//criando variavel que irá receber a função abrirConexao contida no objeto
$db = $c-> abrirConexao();
//criando objeto do tipo usuarioModel e passando parametro a variavel db
$um = new UsuarioModel($db);
//enviando para a classe model os valores informados pelo usuario na view(agr armazenado na variavel PHP)
$um->titulo = $titulo;
$um->descricao = $descricao;
$um->inicio = $inicio;
$um->termino = $termino;
$um->idUsuario = $idUsuario;
$um->id = $id;
//criando uma variavel que faz a chamada da função cadastrar que está na model e recebe seu valor
$retorno = $um-> atualizar();
//saida envia o resultado contido em retorno para a view
echo json_encode ($retorno);

?>