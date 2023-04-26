
$('#btnModal2').click(async function(e){
  
    const nomeSalatxt = $('#nomeSala').val();
    const numeroSalatxt = $('#numSala').val();
    const nomeCursotxt = $('#nomeCurso').val();
    const andarSalatxt = $('#andarSala').val();
    const ofertatxt = $('#oferta').val();
    const nomeProfessortxt = $('#nomeProfessor').val();
    const dataIniciotxt = $('#dataInicio').val();
    const dataTerminotxt = $('#dataTermino').val();
    const horarioIniciotxt = $('#horarioInicio').val();
    const horarioTerminotxt = $('#horarioTermino').val();

    if (nomeSalatxt && numeroSalatxt && nomeCursotxt && andarSalatxt &&  ofertatxt && nomeProfessortxt && dataIniciotxt && dataTerminotxt && horarioIniciotxt && horarioTerminotxt) {
    const config = {
          method: 'post',
          headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json'
          },
          body: JSON.stringify({
            nomeSala: nomeSalatxt,
            numeroSala: numeroSalatxt,
            nomeCurso: nomeCursotxt,
            andarSala: andarSalatxt,
            oferta: ofertatxt,
            nomeProfessor: nomeProfessortxt,
            dataInicio: dataIniciotxt,
            dataTermino: dataTerminotxt,
            horarioInicio: horarioIniciotxt,
            horarioTermino: horarioTerminotxt

          })
        };
        
        const request = await fetch(
          'controller/tarefas/cadastrarClass.php',
          config);

        const resultado = await request.json();

        if (resultado.status == 1) {
          Swal.fire('Atenção!', 'dados cadastrados com sucesso', 'success')
          $('#modal1').modal('hide');
        } else {
          Swal.fire('Atenção!', 'Verifique as informações no form', 'error');
        }
      } else {
        Swal.fire('Atenção!', 'Verifique as informações', 'error');
      }

  });
