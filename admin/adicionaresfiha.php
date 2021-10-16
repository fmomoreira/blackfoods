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
   Esfiha adicionada!
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
                <h3 class="card-title">NOVA ESFIHA</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="adicionaresfiha">
                <div class="card-body">
                  <div class="row">
                  <div class="form-group col-md-12">
                    <label>Adicionar</label>
                    <select class="form-control select2" name="tipo" style="width: 100%;" required>
                      <option selected="selected"  value="" >Selecione o tipo de Esfiha</option>
                      <option >ESFIHA SALGADA</option>
                      <option >Esfiha DOCE</option>
                    </select>
                  </div>
                  <div class="form-group col-md-12">
                    <label>Esfiha promocional?</label>
                    <select class="form-control select2" name="promocao" style="width: 100%;" required>
                      <option selected="selected" value="" >Selecione uma das opções:</option>
                      <option >PRECO NORMAL</option>
                      <option >PROMOCIONAL</option>
                    </select>
                  </div>
                    <div class="form-group col-md-12">
                    <label for="codEsfiha">Código Esfiha</label>
                    <input type="number" class="form-control" id="codesfiha" name="codesfiha" placeholder="Ex:1004"required>
                  </div>
                  <div class="form-group col-md-12">
                    <label for="nomeEsfiha">Digite o nome da Esfiha que quer adicionar?</label>
                    <input type="text" class="form-control" id="nomeesfiha" name="nomeesfiha" placeholder="Ex: Carne Temperada " required>
                  </div>
                    <div class="form-group col-md-12">
                    <label for="precoEsfiha">Preço Esfiha</label>
                    <the-mask :mask="['R$#,##']" type="text" class="form-control" id="precopizza" name="precoesfiha" placeholder="Somente numeros Ex: 05,00" required></the-mask>
                      </div>
               


                    <div class="form-group col-md-12">
                     <label for="ingredientesEsfiha">Quais ingredientes compoem essa nova receita?</label>
                    <input type="text" class="form-control" id="ingredientes" name="ingredientes" placeholder="Ex: Carne Temperda" required>
                    </div>
                    <input  id="codproduto" name="codproduto" value="2" hidden>
                  </div>
                  <div class="form-group col-md-12">
                    <label>Status Cardapio</label>
                    <select class="form-control select2" name="status" style="width: 100%;">
                      <option selected="selected" value="" >Selecione uma das opções:</option>
                      <option value="ATIVO">Ativo</option>
                      <option value="INDISPONIVEL">indisponpível</option>
                    </select>
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
  <?php
require_once("./src/footers/footerdefault.php");
  ?>
<script src="src/js/ajax/newesfiha.js"></script>

<script>
  window.onload = function () {
      new Vue({
          el: '#precopizza'
      })
  
  }
</script>
</body>
</html>
