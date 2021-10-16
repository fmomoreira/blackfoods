<?php
require_once("./src/headers/cabecalholistar.php");
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
           <div class="col-sm-6 col-md-2">
           <!-- Aqui vao o titulo principal fora da caixa -->
           <div class=" card-footer">
            <a class="btn btn-block btn-primary " href="adicionaresfiha.php">Adicionar Esfiha</a>
           </div>        
          </div><!-- /.col -->
        </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
 
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Pesquise por todas as esfihas cadastradas</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Codigo ESFIHA</th>
                    <th>Nome ESFIHA</th>
                    <th>Preço ESFIHA</th>
                    <th>Ingredientes</th>
                    <th>Tipo</th>
                    <th>Status</th>
                    <th>Editar</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                  $sql = "SELECT * FROM `cardapio` WHERE `codproduto` = 2 ";
                  $result = $conn->query($sql);
                  if ($result->num_rows >= 0) {
                    while ($row = $result->fetch_array()) {
                      echo "

                     
                      <tr>
                        <td>".$row['codigo_pizza']."</td>
                        <td>".$row['nomepizza']."</td>
                        <td>" . $row['precopizza'] ."</td>
                        <td>" . $row['ingredientes'] ."</td>
                        <td>". $row['tipo'] ."</td>
                        <td>". $row['status'] ."</td>
                        <td><a href='editaresfiha.php?id=". $row['id'] ."'> <i class='nav-icon fas fa-edit'></i></a></td>
                      </tr>
                    
                   
                      
                      ";
                    }
                  }
                  ?>
               </tbody>
                  <tfoot>
                  <tr>
                    <th>Codigo ESFIHA</th>
                    <th>Nome ESFIHA</th>
                    <th>Preço ESFIHA</th>
                    <th>Ingredientes</th>
                     <th>Tipo</th>
                    <th>Status</th>
                    <th>Editar</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <?php
require_once("./src/footers/footerlistar.php");
  ?>