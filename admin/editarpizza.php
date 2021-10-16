<?php
require_once("./src/headers/cabecalhodefault.php");
$id = $_GET['id'];
$conn = new mysqli("localhost", "worl7587_black_foods", "63940624**", "worl7587_black_foods");
$fuso = new DateTimeZone('America/Sao_Paulo');
$data = new DateTime();
$data->setTimezone($fuso);
$dataatual =  $data->format('d-m-Y H:i:s');
$whatsapp = "5511978271382"
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
   Pizza adicionada!
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
                <h3 class="card-title">EDITAR PIZZA</h3>
             
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="editarpizza">
                <div class="card-body">
                  <div class="row">
                  

                    <?php
                  $sql = "SELECT * FROM `cardapio` WHERE `id` = $id ";
                  $result = $conn->query($sql);
                  if ($result->num_rows >= 0) {
                    while ($row = $result->fetch_array()) {
                      echo "
                      <div class='form-group col-sm-12 col-md-3'>
                      <label id='tituloedit'>Editar Status</label>
                      <select class='form-control select2' name='status' style='width: 100%;'>
                        <option selected='selected'value='". $row['status']  ."'>". $row['status'] ."</option>
                        <option value='ATIVO'>Ativo</option>
                        <option value='INDISPONIVEL'>indisponpível</option>
                      </select>
                    </div>
                    <div class='form-group col-sm-12 col-md-3'>
                    <label for='codpizza' id='tituloedit'>Editar Código Pizza</label>
                    <input type='number' class='form-control' id='codpizza' name='codpizza' value='". $row['codigo_pizza'] ."' required>
                    </div>
                      <div class='form-group col-sm-12 col-md-3'>
                      <label id='tituloedit'>Editar Tipo</label>
                    <select class='form-control select2' name='tipo' style='width: 100%;'>
                      <option selected='selected'value='". $row['tipo']  ."'>". $row['tipo'] ."</option>
                      <option value='PIZZA SALGADA'>Pizza Salgada</option>
                      <option value='PIZZA DOCE'>Pizza Doce</option>
                    </select>
                  </div>
                  <div class='form-group col-sm-12 col-md-3'>
                    <label id='tituloedit'>Pizza promocional?</label>
                    <select class='form-control select2' name='promocao' style='width: 100%;'>
                      <option selected='selected' value='".$row['promocao']."' >". $row['promocao'] ."</option>
                      <option>NORMAL</option>
                      <option>PROMOCAO</option>
                    </select>
                  </div>
             
                  
                  
                    <div class='form-group col-sm-12 col-md-6'>
                    <label for='precopizza' id='tituloedit'>Editar  Preço Pizza Grande</label>
                    <input  type='text' class='form-control' id='precopizza' name='precopizza'  value='". $row['precopizza'] ."' required></input>
                    </div>
                    <div class='form-group col-sm-12 col-md-6'>
                    <label for='precopizza' id='tituloedit'>Editar Preço Brotinho</label>
                    <input  type='text' class='form-control' id='precobrotinho' name='precobrotinho'  value='". $row['precobrotinho'] ."' required></input>
                    </div>
                    <div class='form-group col-sm-12 col-md-6'>
                    <label for='nomepizza' id='tituloedit'>Editar o nome da pizza que quer adicionar?</label>
                    <input type='text' class='form-control' id='nomepizza' name='nomepizza' value='". $row['nomepizza'] ."' required>
                  </div>
                     
                    <div class='form-group col-sm-12 col-md-6'>
                     <label for='ingredientespizza' id='tituloedit'>Editar  ingredientes compoem essa nova receita?</label>
                    <input type='text' class='form-control' id='ingredientes' name='ingredientes'  value='". $row['ingredientes'] ."' required>
                    </div>
                   
                    <input  id='codproduto' name='codproduto' value='1' hidden>
                    <input  id='idalterbebida' name='id' value='". $row['id'] ."' hidden>
                    ";
                }
              }
              ?>
                </div>
                <div class=" d-flex justify-content-end" style="width: 100%;">
                <a href="./listarpizzas.php" class="btn btn-danger  active" role="button" aria-pressed="true"style="margin-left:1rem;text-transform: uppercase;">Voltar</a>
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
    <strong>Copyright &copy; 2020 <a href="http://pizzariamichelangelo.com.br">Esfiharia Michelangelo</a>.</strong>
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
<script src="src/js/ajax/editpizza.js"></script>

</body>
</html>
