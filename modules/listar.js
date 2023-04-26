
async function carregarDados(){
    const request = await fetch(
                  '../controller/usuarios/listar.php',
                  {method: 'get'});
    const response = await request.json();
    const conteudoUsuario = document.getElementById('conteudo-tabela');
    
    for (const item of response.dados) {
        conteudoUsuario.innerHTML += `
          <tr class="linha-tabela" style="border: 5px solid red">
            <td>${item.id}</td>
            <td>${item.nome_completo}</td>
            <td>${item.data_nasc}</td>
            <td>${item.email}</td>
            <td>${item.telefone}</td>
            <td>
              <div class="row">
                <button class="btn btn-warning"
                        onclick="editarUsuario(${item.id})">
                  <i class="fas fa-pencil"></i>
                </button>
                <button class="btn btn-danger"
                        onclick="deletarUsuario(${item.id})">
                  <i class="fas fa-trash"></i>
                </button>
              </div>
            </td>
          </tr>`;
    }
  }

function editarUsuario(id) {
  window.location.href = `editar.php?id=${id}`;
}

function deletarUsuario(id) {
  Swal.fire({
    title: 'Atenção!',
    text: 'Tem certeza que deseja remover esse usuário?',
    icon: 'question',
    showConfirmButton: true,
    showCancelButton: true,
  }).then(async function(res) {
    if (res.isConfirmed) {
      const config = {
        method: 'post',
        body: JSON.stringify({
          idUsuario: id
        })
      };
      const request = await fetch(
      '../controller/usuarios/deletarUsuario.php', config);
      const response = await request.json();
      if (response.status === 1) {
        Swal.fire('Atenção!', 'Usuário removido com sucesso', 'success');
      } else {
        Swal.fire('Atenção!', 'Erro ao remover usuário.', 'error');
      }
    }
  });
}

$(document).ready(function() {
  carregarDados();
});