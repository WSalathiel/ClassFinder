<?php
//Criando a classe UsuarioModel
class UsuarioModel{
    public $db = null; //conexao com banco
    public $id = 0;
    public $nomeSala = null; 
    public $numeroSala = null;

    // Criando metodo Construtor
 public function __construct($conexaoBanco) {
        $this -> db = $conexaoBanco;
    }
    public function cadastrar(){
        $retorno = [
            'status'=> 0,
            'dados'=> null
        ];
        try{
            $stmt = $this->db->prepare(
                "INSERT INTO class(class_type, num_class, floor) VALUES(:class_type, :num_class, :floor)"
            );
            $stmt->bindValue(':class_type', $this->nomeSala);
            $stmt->bindValue(':num_class', $this->numeroSala);
            $stmt->bindValue(':floor', $this->andarSala);
            $stmt->execute();
            $retorno['status'] = 1;
        }
        catch(PDOException $e){
            echo 'Erro ao cadastrar Tarefa: '.$e->getMessage();
        }
        return $retorno;
    }

    public function listarUsuarios() {
        $retorno = ['status' => 0, 'dados' => null];
        try{
            $stmt = $this->db->prepare(
                "SELECT * FROM tarefas where id=:id"
            );
            $stmt->bindValue(':id', $this->id);
            $stmt->execute();
            $dados = $stmt->fetchAll();
            $retorno['status'] = 1;
            $retorno['dados'] = $dados;
        }
        catch(PDOException $e){
            echo 'Erro ao listar tarefas: '.$e->getMessage();
        }
        return $retorno;
    }

    
    
    public function lerTodos() {
        $retorno = ['status' => 0, 'dados' => null];
         try {
             $query = $this->db->query('SELECT * FROM tarefas');
             $dados = $query->fetchAll();
             $retorno['status'] = 1;
             $retorno['dados'] = $dados;
        }
        catch(PDOException $e) {
            echo 'Erro ao listar todos as tarefas: '.$e->getMessage();
        }
        return $retorno;
     }

     public function atualizar(){
        $retorno = [
            'status'=> 0,
            'dados'=> null
        ];
        try{
            $stmt = $this->db->prepare(
                "UPDATE tarefas SET
                titulo = :titulo, 
                descricao = :descricao,
                inicio = :inicio,
                termino = :termino,
                id_usuario = :idUsuario
                where id = :id
                "
            );
            $stmt->bindValue(':titulo', $this->titulo);
            $stmt->bindValue(':descricao', $this->descricao);
            $stmt->bindValue(':inicio', $this->inicio);
            $stmt->bindValue(':termino', $this->termino);
            $stmt->bindValue(':idUsuario', $this->idUsuario);
            $stmt->bindValue(':id', $this->id);
            $stmt->execute();
            $retorno['status'] = 1;
        }
        catch(PDOException $e){
            echo 'Erro ao cadastrar usuario: '.$e->getMessage();
        }
        return $retorno;
    }

    public function deletar() {
        $retorno = ['status' => 0, 'dados' => null];
        try{
            $stmt = $this->db->prepare(
                "DELETE FROM tarefas where id=:id"
            );
            $stmt->bindValue(':id', $this->id);
            $stmt->execute();
            $dados = $stmt->fetchAll();
            $retorno['status'] = 1;
        }
        catch(PDOException $e){
            echo 'Erro ao deletar usuario: '.$e->getMessage();
        }
        return $retorno;
    }
}


?>