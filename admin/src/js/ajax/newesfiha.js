

$('#adicionaresfiha').submit(function (e) {
    e.preventDefault();
    Swal.fire({
        title: 'Aguarde...',
        onBeforeOpen: () => {
            Swal.showLoading()
        }
    })
    let formulario = $(this);
    let retorno = adicionaresfiha(formulario);
});

function adicionaresfiha(dados) {
    $.ajax({
        type: "POST",
        data: dados.serialize(),
        url: "./src/backend/newesfiha.php",
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
                title: 'Esfiha Adicionada ao Cardápio!',
                showConfirmButton: false,
                timer: 1500
            }).then(function () {
                
            
                $('#adicionaresfiha').each (function(){
                this.reset();
                });
                
              })
           
            
          

        } else {
            
            Swal.fire({
                title: 'Falha ao cadastrar esfiha!',
                text: 'Verifique os campos e tente novamente',
                icon: 'error',
                confirmButtonText: 'Voltar'
            })
        }
    }

    function falha() {
        Swal.fire({
            title: 'Erro ao cadastrar esfiha',
            text: 'Contate nosso suporte.',
            icon: 'error',
            confirmButtonText: 'Voltar'
        })
    }

   
}