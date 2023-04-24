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



            $stmt = $this->db->prepare(
                "INSERT INTO course(course_name) VALUES(:course_name)"
            );
            $stmt->bindValue(':course_name', $this->nomeCurso);
            $stmt->execute();



            $stmt = $this->db->prepare(
                "INSERT INTO teacher(name_teacher) VALUES(:name_teacher)"
            );
            $stmt->bindValue(':name_teacher', $this->nomeProfessor);
            $stmt->execute();

            $stmt = $this->db->prepare(
                "INSERT INTO offer(num_offer) VALUES(:num_offer)"
            );
            $stmt->bindValue(':num_offer', $this->oferta);
            $stmt->execute();


            $stmt = $this->db->prepare(
                "INSERT INTO reserve_class(start_reserve, start_date) VALUES(:start_reserve, :start_date)"
            );
            $stmt->bindValue(':start_reserve', $this->horario);
            $stmt->bindValue(':start_date', $this->data);
            $stmt->execute();

            $retorno['status'] = 1;
        }
        catch(PDOException $e){
            echo 'Erro ao cadastrar Banco: '.$e->getMessage();
        }
        return $retorno;
    }

}

?>