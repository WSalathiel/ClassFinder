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
                    "INSERT INTO reserve_class(start_reserve, end_reserve, start_date, end_date, id_class, id_course, id_team, id_teacher, id_offer) VALUES(:start_reserve, :end_reserve, :start_date, :end_date, :id_class, :id_course, :id_team, :id_teacher, :id_offer)"
                );
            $stmt->bindValue(':start_reserve', $this->horarioInicio);
            $stmt->bindValue(':end_reserve', $this->horarioTermino);
            $stmt->bindValue(':start_date', $this->dataInicio);
            $stmt->bindValue(':end_date', $this->dataTermino);
            $stmt->bindValue(':id_class', $this->idclass);
            $stmt->bindValue(':id_course', $this->idcourse);
            $stmt->bindValue(':id_team', $this->idteam);
            $stmt->bindValue(':id_teacher', $this->nomeprofessor);
            $stmt->bindValue(':id_offer', $this->idoffer);

            

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
         $query = $this->db->query('SELECT * FROM reserve_class INNER JOIN teacher INNER JOIN class INNER JOIN course INNER JOIN team INNER JOIN offer ON reserve_class.id_teacher = teacher.id_teacher
         AND reserve_class.id_class = class.id_class AND reserve_class.id_course = course.id_course AND reserve_class.id_team = team.id_team AND reserve_class.id_offer = offer.id_offer');
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

public function fetchInfos(){
    $retorno = ['status' => 0, 'dados' => null];
    try {
        $stmt = $this->db->prepare('SELECT course.course_name, course.id_course, team.name_team, offer.num_offer FROM reserve_class INNER JOIN course ON reserve_class.id_course = course.id_course INNER JOIN team ON reserve_class.id_team = team.id_team INNER JOIN offer ON reserve_class.id_offer = offer.id_offer WHERE id_teacher = :id_teacher');
        $stmt->bindValue(':id_teacher', $this->idprofessor);
        $stmt->execute();
        $dados = $stmt->fetchAll();
        $retorno['status'] = 1;
        $retorno['dados'] = $dados;
    } catch(PDOException $e) {
        echo 'Erro ao listar : '.$e->getMessage();
    }
    return $retorno;
}

public function fetchClass(){
    $retorno = ['status' => 0, 'dados' => null];
    try {
        $stmt = $this->db->prepare('SELECT team.name_team FROM reserve_class INNER JOIN team ON reserve_class.id_team = team.id_team WHERE reserve_class.id_course = :id_course');
        $stmt->bindValue(':id_course', $this->idcourse);
        $stmt->execute();
        $dados = $stmt->fetchAll();
        $retorno['status'] = 1;
        $retorno['dados'] = $dados;
    } catch(PDOException $e) {
        echo 'Erro ao listar : '.$e->getMessage();
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

public function fetchCourse(){
    $retorno = ['status' => 0, 'dados' => null];
    try {
        $query = $this->db->query('SELECT * FROM course');
        $dados = $query->fetchAll();
        $retorno['status'] = 1;
        $retorno['dados'] = $dados;
    } catch(PDOException $e) {
    echo 'Erro ao listar : '.$e->getMessage();
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
            "UPDATE reserve_class SET 
            start_reserve = :horarioInicio,
            end_reserve = :horarioTermino,
            start_date = :dataInicio,
            end_date = :dataTermino,
            where id_reserve = :idReserve
            "
        );
        $stmt->bindValue(':nomeSala', $this->nomeSala);
        $stmt->bindValue(':numSala', $this->numSala);
        $stmt->bindValue(':nomeCurso', $this->nomeCurso);
        $stmt->bindValue(':andarSala', $this->andarSala);
        $stmt->bindValue(':oferta', $this->oferta);
        $stmt->bindValue(':nomeProfessor', $this->nomeProfessor);
        $stmt->bindValue(':dataInicio', $this->dataInicio);
        $stmt->bindValue(':dataTermino', $this->dataTermino);
        $stmt->bindValue(':horarioInicio', $this->horarioInicio);
        $stmt->bindValue(':horarioTermino', $this->horarioTermino);
        $stmt->bindValue(':idReserve', $this->idReserve);
        $stmt->execute();
        $retorno['status'] = 1;
    }
    catch(PDOException $e){
        echo 'Erro ao cadastrar usuario: '.$e->getMessage();
    }
    return $retorno;
    }

    

        }
?>