<?php
require_once("./src/headers/cabecalhodefault.php");
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6 d-flex " style="width: 100%;">
         
           <div class="alert alert-success alert-dismissible fade show" id="menssagem" role="alert" style="
    position: fixed;
    top: 10px;
    z-index: 9;
    right: 7px;
    display:none;
    ">
   Bebida adicionada!
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
          </div><!-- /.col -->
        </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">NOVA BEBIDA</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="adicionarbebida">
                <div class="card-body">
                  <div class="row">
                  <div class="form-group col-sm-12 col-md-3">
                    <label>Adicionar</label>
                    <select class="form-control select2" name="tipo" style="width: 100%;" required>
                      <option selected="selected"  value="">Selecione o tipo de Bebida</option>
                      <option value="REFRIGERANTE"> REFRIGERANTE</option>
                      <option value="SUCO" >SUCO</option>
                      <option value="CERVEJA">CERVEJA</option>
                      <option value="VINHO">VINHO</option>
                      <option value="BEBIDA QUENTE">BEBIDA QUENTE</option>
                      <option value="ÁGUA">ÁGUA </option>
                    </select>
                  </div>
                  <div class="form-group col-sm-12 col-md-3">
                    <label>Bebida promocional?</label>
                    <select class="form-control select2" name="promocao" style="width: 100%;" required>
                      <option selected="selected" value="" >Selecione uma das opções:</option>
                      <option value="PRECO NORMAL">PRECO NORMAL</option>
                      <option value="PROMOCIONAL">PROMOCIONAL</option>
                    </select>
                  </div>
                 
                  <div class="form-group col-md-3">
                    <label for="nomeEsfiha">Nome da Bebida?</label>
                    <input type="text" class="form-control" id="nomeEsfiha" name="nomebebida" placeholder="Ex: Coca Lata 350ml " required>
                  </div>
                    <div class="form-group col-sm-12 col-md-3">
                    <label for="precoEsfiha">Preço Bebida</label>
                    <the-mask :mask="['R$##,##']" type="text" class="form-control" id="precobebida" name="precobebida" placeholder="Digite somente numero 05,50" required></the-mask>
                    </div>
                    <div class="form-group col-md-12">
                    <label>Status Cardapio</label>
                        <select class="form-control select2" name="status" style="width: 100%;" required>
                          <option selected="selected" value="">Selecione uma das opções:</option>
                          <option value="ATIVO">Ativo</option>
                          <option value="INDISPONIVEL">indisponpível</option>
                        </select>
                    </div>
 

                    <input  id="codproduto" name="codproduto" value="3" hidden>

                </div>
                <div class=" d-flex justify-content-end" style="width: 100%;">
                <a href="./" class="btn btn-danger  active" role="button" aria-pressed="true"style="margin-left:1rem;text-transform: uppercase;font-size: 12px;">CANCELAR</a>
                <button type="submit" class="btn btn-primary " style="margin-left:1rem;text-transform: uppercase;">SALVAR</button>
                </div>
              </form>
              <!-- form end -->    
            </div>
          </div>
        
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>

    <!-- /.content -->
  </div>
 <!-- /.content-wrapper -->
 <footer class="main-footer">
    <strong>Copyright &copy; 2020 <a href="http://pizzariamichelangelo.helper19.com.br">Pizzaria Michelangelo</a>.</strong>
    Todos os direitos reservados
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.1
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>



<script>
    

$('#adicionarbebida').submit(function (e) {
    e.preventDefault();
    Swal.fire({
        title: 'Aguarde...',
        onBeforeOpen: () => {
            Swal.showLoading()
        }
    })
    let formulario = $(this);
    let retorno = adicionarbebida(formulario);
});

function adicionarbebida(dados) {
    $.ajax({
        type: "POST",
        data: dados.serialize(),
        url: "./src/backend/newbebida.php",
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
                title: 'Bebida Adicionada ao Cardápio!',
                showConfirmButton: false,
                timer: 1500
            }).then(function () {
                
            
                window.location.href = "listaresfihas.php";
                })

        } else {
            
            Swal.fire({
                title: 'Falha ao cadastrar Bebida!',
                text: 'Verifique os campos e tente novamente',
                icon: 'error',
                confirmButtonText: 'Voltar'
            })
        }
    }

    function falha() {
        Swal.fire({
            title: 'Erro ao cadastrar bebida',
            text: 'Contate nosso suporte.',
            icon: 'error',
            confirmButtonText: 'Voltar'
        })
    }

   
}
</script>
<script>
  window.onload = function () {
      new Vue({
          el: '#precobebida'
      })
   
  }
</script>
</body>
</html>
