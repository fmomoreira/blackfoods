$('#editaresfiha').submit(function (e) {
    e.preventDefault();
    Swal.fire({
        title: 'Aguarde...',
        onBeforeOpen: () => {
            Swal.showLoading()
        }
    })
    let formulario = $(this);
    let retorno = editaresfiha(formulario);
});

function editaresfiha(dados) {
    $.ajax({
        type: "POST",
        data: dados.serialize(),
        url: "./src/backend/editaresfiha.php",
        async: false
    }).then(sucesso, falha);

  
    function sucesso(data) {
        $sucesso = $.parseJSON(data)["sucesso"];
        $menssagem = $.parseJSON(data)["menssagem"];
        $('#menssagem').show("slow");
        
        if ($sucesso) {
            
            
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Esfiha alterada com Sucesso!',
                showConfirmButton: false,
                timer: 1500
            }).then(function () {
               
                //let form = document.getElementById("editaresfiha").reset(); ** LIMPA O FORMULARIO
               window.location.href = "listaresfihas.php"
           
                
              })
              
              //;
                  
              

        } else {
            
            Swal.fire({
                title: 'Falha ao alterar esfiha!',
                text: 'Verifique os campos e tente novamente',
                icon: 'error',
                confirmButtonText: 'Voltar'
            })
        }
    }

    function falha() {
        Swal.fire({
            title: 'Erro ao alterar esfiha',
            text: 'Contate nosso suporte.',
            icon: 'error',
            confirmButtonText: 'Voltar'
        })
    }

   
}