$('#newuser').submit(function (e) {
    e.preventDefault();
    Swal.fire({
        title: 'Aguarde...',
        onBeforeOpen: () => {
            Swal.showLoading()
        }
    })
    let formulario = $(this);
    let retorno = newuser(formulario);
});

function newuser(dados) {
    $.ajax({
        type: "POST",
        data: dados.serialize(),
        url: "./src/backend/newuser.php",
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
                title: 'Usuario salvo com sucesso!',
                showConfirmButton: false,
                timer: 1500
            }).then(function () {
                
            
                $('#newuser').each (function(){
                this.reset();
                });
                
              })
           
            
          

        } else {
            
            Swal.fire({
                title: 'Falha ao cadastrar usuário!',
                text: 'Verifique os campos e tente novamente',
                icon: 'error',
                confirmButtonText: 'Voltar'
            })
        }
    }

    function falha() {
        Swal.fire({
            title: 'Erro ao cadastrar usuário',
            text: 'Contate nosso suporte.',
            icon: 'error',
            confirmButtonText: 'Voltar'
        })
    }

   
}