# ClassFinder
Este projeto consiste na instalação de uma Tela na entrada da escola que exibirá informações importantes para novos alunos, como sua sala de aula, turma, professor e horário. Isso ajudará a facilitar a integração dos alunos à escola, tornando o processo de início de aula mais eficiente e organizado.

public function atualizar(){
    $retorno = [
        'status'=> 0,
        'dados'=> null
    ];
    try{
        $stmt = $this->db->prepare(
            "UPDATE reserve_class SET 
            
            type_class = :nomeSala, 
            floor = :andarSala,
            num_class = :numSala,
            course_name = :nomeCurso,
            num_offer= :oferta
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
