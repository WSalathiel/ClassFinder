<!DOCTYPE html>
<html>
  <head>
    <title>TELA INICIAL</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <meta charset="UTF-8"/>
    <!-- Adicionando CSS do Bootstrap -->
  </head>
  <body>
    <div class="container">
      <h1>AQUI SERÁ A TELA INICIAL, SERÁ PARA TER A OPÇÃO DE EXIBIR (NA TV) E A OPÇÃO DE CADASTRAR/EDITAR</h1>
      
    <!-- Botão para abrir a primeira modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal1">
      Começar cadastro
    </button>
    
  <!-- Cadastro da Sala -->
  <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="modal1Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal1Label">Cadastro da Sala</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="nomeSala">Tipo da Sala:</label>
            <input type="text" class="form-control" id="nomeSala" name="nomeSala" placeholder="Digite o nome da sala">
          </div>
          <div class="form-group">
            <label for="numeroSala">Número da Sala:</label>
            <input type="number" class="form-control" id="numeroSala" name="numeroSala" placeholder="Digite o número da sala">
          </div>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-primary" id="btnModal2">Próximo</button>
        </div>
      </div>
    </div>
  </div>
    
  <!-- Cadastro de Curso -->
  <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="modal2Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal2Label">Cadastro de Curso</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="nomeCurso">Nome do Curso:</label>
              <input type="text" class="form-control" id="nomeCurso">
            </div>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-primary" id="btnModal3">Próximo</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Cadastro de Turma -->
  <div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="modal2Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal2Label">Cadastro de Turma</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="oferta">Oferta:</label>
              <input type="text" class="form-control" id="oferta">
            </div>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-primary" id="btnModal4">Próximo</button>
          </form>
        </div>
      </div>
    </div>
  </div>

    <!-- Cadastro de Professor -->
    <div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="modal2Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal2Label">Cadastro de Professor</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="nomeProfessor">Nome:</label>
              <input type="text" class="form-control" id="nomeProfessor">
            </div>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-primary" id="btnModal5">Próximo</button>
          </form>
        </div>
      </div>
    </div>
  </div>
    <!-- Reserva de Sala -->
    <div class="modal fade" id="modal5" tabindex="-1" role="dialog" aria-labelledby="modal2Label" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modal2Label">Reserva de Sala</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label for="sala">Sala:</label>
                <input type="text" class="form-control" id="sala">
              </div>
              <div class="form-group">
                <label for="curso">Curso:</label>
                <input type="text" class="form-control" id="curso">
              </div>
              <div class="form-group">
                <label for="turma">Turma:</label>
                <input type="text" class="form-control" id="turma">
              </div>
              <div class="form-group">
                <label for="professor">Professor:</label>
                <input type="text" class="form-control" id="professor">
              </div>
              <div class="form-group">
                <label for="data">Data:</label>
                <input type="text" class="form-control" id="data">
              </div>
              <div class="form-group">
                <label for="horario">Horario:</label>
                <input type="text" class="form-control" id="horario">
              </div>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
              <button type="button" class="btn btn-primary" id="btnModal6">Próximo</button>
            </form>
          </div>
        </div>
      </div>
    </div>

</body>
  
  <script src="./view/js/jquery-3.6.0.min.js" type="text/javascript"></script>
  <script src="./view/js/sweetalert2.all.min.js" type="text/javascript"></script>
  <script src="./view/js/bootstrap.min.js" type="text/javascript"></script>
  
  <script>
    $('#btnModal2').click(async function(e){
  
      const nomeSalatxt = $('#nomeSala').val();
      const numeroSalatxt = $('#numeroSala').val();
      
      const config = {
            method: 'post',
            headers: {
              'Accept': 'application/json',
              'Content-Type': 'application/json'
            },
            body: JSON.stringify({
              nomeSala: nomeSalatxt,
              numeroSala: numeroSalatxt,
            })
          };
          
          const request = await fetch(
            'controller/tarefas/cadastrarClass.php',
            config);

          const resultado = await request.json();

          if (resultado.status == 1) {
            Swal.fire('Atenção!', 'dados cadastrados com sucesso', 'success')
          } else {
            Swal.fire('Atenção!', 'Verifique as informações no form', 'error');
          }

          $('#modal1').modal('hide'); // Fecha a primeira modal
          $('#modal2').modal('show'); // Abre a segunda modal
    });

    $('#btnModal3').click(function(){
      $('#modal2').modal('hide'); // Fecha a primeira modal
      $('#modal3').modal('show'); // Abre a segunda modal
    });

    $('#btnModal4').click(function(){
      $('#modal3').modal('hide'); // Fecha a primeira modal
      $('#modal4').modal('show'); // Abre a segunda modal
    });

    $('#btnModal5').click(function(){
      $('#modal4').modal('hide'); // Fecha a primeira modal
      $('#modal5').modal('show'); // Abre a segunda modal
    });

    $('#btnModal6').click(function(){
      $('#modal5').modal('hide'); // Fecha a primeira modal
    });

  </script>
  
