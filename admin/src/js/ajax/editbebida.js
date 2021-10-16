$('#alterarbebida').submit(function (e) {
    e.preventDefault();
    Swal.fire({
        title: 'Aguarde...',
        onBeforeOpen: () => {
            Swal.showLoading()
        }
    })
    let formulario = $(this);
    let retorno = alterarbebida(formulario);
});

function alterarbebida(dados) {
    $.ajax({
        type: "POST",
        data: dados.serialize(),
        url: "./src/backend/editbebida.php",
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
                title: 'Bebida Alterada com Sucesso!',
                showConfirmButton: false,
                timer: 1500
            }).then(function () {
                
            
                window.location.href = "listarbebidas.php"
                
              })
           
            
          

        } else {
            
            Swal.fire({
                title: 'Falha ao Alterar bebida!',
                text: 'Verifique os campos e tente novamente',
                icon: 'error',
                confirmButtonText: 'Voltar'
            })
        }
    }

    function falha() {
        Swal.fire({
            title: 'Erro ao alterar Bebida',
            text: 'Contate nosso suporte.',
            icon: 'error',
            confirmButtonText: 'Voltar'
        })
    }

   
}