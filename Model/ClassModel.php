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
                "INSERT INTO reserve_class(start_reserve, end_reserve, start_date, end_date, class_type, num_class, floor, course_name, num_offer, name_teacher) VALUES(:start_reserve, :end_reserve, :start_date, :end_date, :class_type, :num_class, :floor, :course_name, :num_offer, :name_teacher)"
            );
            $stmt->bindValue(':start_reserve', $this->horarioInicio);
            $stmt->bindValue(':end_reserve', $this->horarioTermino);
            $stmt->bindValue(':start_date', $this->dataInicio);
            $stmt->bindValue(':end_date', $this->dataTermino);
            $stmt->bindValue(':class_type', $this->nomeSala);
            $stmt->bindValue(':num_class', $this->numeroSala);
            $stmt->bindValue(':floor', $this->andarSala);
            $stmt->bindValue(':course_name', $this->nomeCurso);
            $stmt->bindValue(':num_offer', $this->oferta);
            $stmt->bindValue(':name_teacher', $this->nomeProfessor);
            $stmt->execute();

            $retorno['status'] = 1;
        }
        catch(PDOException $e){
            echo 'Erro ao cadastrar Banco: '.$e->getMessage();
        }
        return $retorno;
    }







public function lerTodos(){
    $retorno = ['status' => 0, 'dados' => null];
     try {
         $query = $this->db->query('SELECT * FROM reserve_class');
         $dados = $query->fetchAll();
         $retorno['status'] = 1;
         $retorno['dados'] = $dados;
    }
    catch(PDOException $e) {
        echo 'Erro ao listar : '.$e->getMessage();
    }
    return $retorno;
 }







public function deletar() {
    $retorno = ['status' => 0, 'dados' => null];
    try {
        $stmt = $this->db->prepare("DELETE FROM reserve_class WHERE id_reserve = :id_reserve");
        $stmt->bindValue(':id_reserve', $this->idreserve);
        $stmt->execute();
        $retorno['status'] = 1;
    }
    catch(PDOException $e) {
        echo 'Erro ao deletar: '.$e->getMessage();
    }
    return $retorno;
}

public function fetchTeacher(){
    $retorno = ['status' => 0, 'dados' => null];
    try {
        $query = $this->db->query('SELECT * FROM teacher');
        $dados = $query->fetchAll();
        $retorno['status'] = 1;
        $retorno['dados'] = $dados;
    } catch(PDOException $e) {
    echo 'Erro ao listar : '.$e->getMessage();
    }
    return $retorno;
}

public function fetchInfos(){
    $retorno = ['status' => 0, 'dados' => null];
    try {
        $query = $this->db->query('SELECT id_offer, id_class, id_course FROM reserve_class WHERE id_teacher = :id_teacher');
        $stmt->bindValue(':id_teacher', $this->idprofessor);
        $dados = $query->fetchAll();
        $retorno['status'] = 1;
        $retorno['dados'] = $dados;
    } catch(PDOException $e) {
    echo 'Erro ao listar : '.$e->getMessage();
    }
    return $retorno;
}

}

?>