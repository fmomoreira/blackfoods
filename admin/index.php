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
                <h3 class="card-title">NOVA PIZZA</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="adicionarproduto">
                <div class="card-body">
                  <div class="row">
                  <div class="form-group col-md-12">
                    <label>Adicionar</label>
                    <select class="form-control select2" name="tipo" style="width: 100%;">
                      <option selected="selected" >Selecione o tipo de Pizza</option>
                      <option value="PIZZA SALGADA">Pizza Salgada</option>
                      <option value="PIZZA DOCE">Pizza Doce</option>
                    </select>
                  </div>
                  <div class="form-group col-md-12">
                    <label>Pizza promocional?</label>
                    <select class="form-control select2" name="promocao" style="width: 100%;">
                      <option selected="selected" >Selecione uma das opções:</option>
                      <option >NORMAL</option>
                      <option >PROMOCAO</option>
                    </select>
                  </div>
             
                    <div class="form-group col-md-12">
                    <label for="codpizza">Código Pizza</label>
                    <input type="number" class="form-control" id="codpizza" name="codpizza" placeholder="Ex:4"required>
                  </div>
                  <div class="form-group col-md-12">
                    <label for="nomepizza">Digite o nome da pizza que quer adicionar?</label>
                    <input type="text" class="form-control" id="nomepizza" name="nomepizza" placeholder="Ex: Marguerita " required>
                  </div>
                    <div class="form-group col-md-12">
                    <label for="precopizza">Preço Pizza Grande</label>
                    <the-mask :mask="['R$##,##']" type="text" class="form-control" id="precopizza" name="precopizza" placeholder="Ex: 33,50" required></the-mask>
                    <label for="precopizza">Preço Brotinho</label>
                    <the-mask :mask="['R$##,##']" type="text" class="form-control" id="precobrotinho" name="precobrotinho" placeholder="Ex: 33,50" required></the-mask>
                      </div>
                    <div class="form-group col-md-12">
                     <label for="ingredientespizza">Quais ingredientes compoem essa nova receita?</label>
                    <input type="text" class="form-control" id="ingredientes" name="ingredientes" placeholder="Ex: costela no bafo com cheddar" required>
                    </div>
                    <div class="form-group col-md-12">
                    <label>Status Cardapio</label>
                    <select class="form-control select2" name="status" style="width: 100%;">
                      <option selected="selected" >Selecione uma das opções:</option>
                      <option value="ATIVO">Ativo</option>
                      <option value="INDISPONIVEL">indisponpível</option>
                    </select>
                  </div>
                    <input  id="codproduto" name="codproduto" value="1" hidden>
                </div>
                <div class=" d-flex justify-content-end" style="width: 100%;">
                <a href="./" class="btn btn-danger  active" role="button" aria-pressed="true"style="margin-left:1rem;text-transform: uppercase;font-size: 12px;">CANCELAR</a>
                <button type="submit" class="btn btn-primary " style="margin-left:1rem;text-transform: uppercase;font-size: 12px;">SALVAR</button>
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
  <?php
require_once("./src/footers/footerdefault.php");
  ?>
  <script src="src/js/ajax/newpizza.js"></script>

<script>
  window.onload = function () {
      new Vue({
          el: '#precopizza'
      })
      new Vue({
          el: '#precobrotinho'
      })
  }
</script>
</body>
</html>