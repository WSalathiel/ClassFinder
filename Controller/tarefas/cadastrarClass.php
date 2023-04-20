<?php
require_once('../../Config/Conexao.php');
require_once('../../Model/ClassModel.php');
//entrada
$json = file_get_contents('php://input');
$reqbody = json_decode($json);
$nomeSala = $reqbody-> nomeSala;
$numeroSala = $reqbody-> numeroSala;
//criando objeto conexao
$c = new Conexao();
//criando variavel que irá receber a função abrirConexao contida no objeto
$db = $c-> abrirConexao();
//criando objeto do tipo usuarioModel e passando parametro a variavel db
$um = new UsuarioModel($db);
//enviando para a classe model os valores informados pelo usuario na view(agr armazenado na variavel PHP)
$um->nomeSala = $nomeSala;
$um->numeroSala = $numeroSala;
//criando uma variavel que faz a chamada da função cadastrar que está na model e recebe seu valor
$retorno = $um-> cadastrar();
//saida envia o resultado contido em retorno para a view
echo json_encode ($retorno);

?>