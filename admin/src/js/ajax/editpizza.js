$('#editarpizza').submit(function (e) {
    e.preventDefault();
    Swal.fire({
        title: 'Aguarde...',
        onBeforeOpen: () => {
            Swal.showLoading()
        }
    })
    let formulario = $(this);
    let retorno = editarpizza(formulario);
});

function editarpizza(dados) {
    $.ajax({
        type: "POST",
        data: dados.serialize(),
        url: "./src/backend/editarpizza.php",
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
                title: 'Pizza alterada com Sucesso!',
                showConfirmButton: false,
                timer: 1500
            }).then(function () {
               
                //let form = document.getElementById("editarpizza").reset(); ** LIMPA O FORMULARIO
               window.location.href = "listarpizzas.php"
           
                
              })
              
              //;
                  
              

        } else {
            
            Swal.fire({
                title: 'Falha ao Alterar Pizza!',
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